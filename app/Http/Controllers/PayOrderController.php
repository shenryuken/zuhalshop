<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;

use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;

use App\Events\AssignLotProgram;
use App\Listeners\AssignLotProgramListen;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Invoice;
use App\Models\Payment;

use App\Traits\NodeTrait;

use Auth;

class PayOrderController extends Controller
{   
    use NodeTrait;

    public function pay(OrderDetails $orderDetails, PaymentGatewayContract $paymentGateway)
    {
    	//$paymentGateway = new paymentGateway('usd');
        $user   = Auth::user();
    	$order  = $orderDetails->all();
        //$data = [];
        $amount = Cart::subtotal('2', '.', '');
        //dd($amount);
    	$data   = $paymentGateway->charge($amount);
        
        if(request()->payment_method === 'toyyibpay' || request()->payment_method === '')
        {
            //$url                = 'https://dev.toyyibpay.com/index.php/api/createBill';
            $url                = config('toyyibpay.base_url').'/index.php/api/createBill';
            // dd($url);
            $response           = Http::asForm()->post($url, $data);
            $billCode           = $response[0]['BillCode'];
            $data['fromUrl']    = 'toyyibpay';

            $store = $this->store($data);

            return redirect(config('toyyibpay.base_url').'/'.$billCode);
        } 
        else 
        {
            $provider = new ExpressCheckout;
            $response = $provider->setExpressCheckout($data);
            $response = $provider->setExpressCheckout($data, true);

            $data['fromUrl'] = 'paypal';
            
            $store = $this->store($data);

            return redirect($response['paypal_link']);
        }
    	
        //dd($response);
        //dd($payment);
    	// $billCode = $response[0]['BillCode'];

    	// return redirect('https://dev.toyyibpay.com/'.$billCode);

    	//dd($paymentGateway->charge(2500));
    }

    public function paymentStatus()
    {   //return only token (paypal) - cancel
    	$response = request()->all();

        if(count($response) == 1)
        {   
            //for paypal cancel payment
            //dd('Your payment is canceled. You can create cancel page here.');
            return view('invoices.payment-status-paypal');
        }else {
            //for toyyibpay payment
            if($response['status_id'] === '1')
            {
                $response['fromUrl'] = 'toyyibpay';
                $this->update($response);
                $this->assignNodeProgram();
            }
            //return $response;
        
            $invoice = Invoice::where('inv_no', $response['order_id'])->first();
            $order   = $invoice->order;

            return view('invoices.payment-status', compact('response', 'invoice', 'order'));
        }
    	// return $response;
    }

    public function callback()
    {
    	$response = request()->all();
    	Log::info($response);
    }

    public function store($data)
    {
        if($data['fromUrl'] == 'toyyibpay')
        {
            $order = new Order;
            $order->user_id        = Auth::id();
            $order->payment_status = 'Pending';
            $order->delivery_status= 'Pending';
            //$order->address_id     = '1';
            $order->total_amount   = ($data['billAmount'] + 100)/100;
            $order->save();

            foreach(Cart::content() as $item)
            {
                $orderItem = new OrderItem;
                $orderItem->product_id  = $item->id;
                $orderItem->price       = $item->price;
                $orderItem->quantity    = $item->qty;
                $orderItem->total       = $item->subtotal;

                $order->orderItem()->save($orderItem);
            }

            $invoice = new Invoice;
            $invoice->order_id = $order->id;
            $invoice->inv_no   = $data['billExternalReferenceNo'];
            $invoice->status   = 'Pending';
            $invoice->amount   = ($data['billAmount'] + 100)/100;
            $invoice->save();

            $payment = new Payment;
            $payment->invoice_id = $invoice->id;
            $payment->status     = 'Pending';
            $payment->save();
        }
        else
        {
            $order = new Order;
            $order->user_id        = Auth::id();
            $order->payment_status = 'Pending';
            $order->delivery_status= 'Pending';
            //$order->address_id   = '1';
            $order->total_amount   = $data['total'];
            $order->save();

            $invoice = new Invoice;
            $invoice->order_id = $order->id;
            $invoice->inv_no   = $data['invoice_id'];
            $invoice->status   = 'Pending';
            $invoice->save();

            $payment = new Payment;
            $payment->invoice_id = $invoice->id;
            $payment->status     = 'Pending';
            $payment->save();
        }
    }

    public function update($data)
    {
        if($data['fromUrl'] === 'toyyibpay' && $data['status_id'] === '1')
        {
            $invoice = Invoice::where('inv_no', $data['order_id'])->first();
            $invoice->status   = 'Paid';
            $invoice->save();

            $payment = Payment::find($invoice->id);
            $payment->status     = 'Success';
            $payment->save();

            $order = Order::find($invoice->order_id);
            $order->payment_id      = $payment->id; 
            $order->payment_status  = 'Paid';
            $order->save();
        }
    }
}
