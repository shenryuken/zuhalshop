<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;

use Gloudemans\Shoppingcart\Facades\Cart;

use App\Models\Order;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Payment;
use App\Models\Wallet;

use Auth;

class PayPalController extends Controller
{
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */

    public function payment()
    {
        $items =[];
        foreach (Cart::content() as $item) {
            $product = Product::find($item->id);
            $items[] = [
                'name' => $item->name,
                'price'=> $item->price,
                'desc' => $item->description,
                'qty'  => $item->qty,
            ];
        }

        $data = [];
        $data['items'] = $items;
        //dd($items);
        // $data['items'] 	= [
        //     [
        //         'name' 	=> $product->name,
        //         'price' => $product->price,
        //         'desc'  => 'Description for ItSolutionStuff.com',
        //         'qty' 	=> 1
        //     ]
        // ];

        // dd($data['items']);

        $data['invoice_id'] = mt_rand(100000000, 999999999);
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] 		= Cart::subtotal();

        $order = new Order;
        $order->user_id     = Auth::id();
        $order->payment_id  = '1';
        $order->payment_status = 'Pending';
        $order->delivery_status= 'Pending';
        $order->address_id     = '1';
        $order->total_amount   = $data['total'];
        $order->save();

        $invoice = new Invoice;
        $invoice->order_id = $order->id;
        $invoice->inv_no   = $data['invoice_id'];
        $invoice->status   = 'Pendind';
        $invoice->save();

        $payment = new Payment;
        $payment->invoice_id = $invoice->id;
        $payment->status     = 'Pending';
        $payment->save();

        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data, true);

        return redirect($response['paypal_link']);
    }

     /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */

    public function buyNow($id)
    {
        $product = Product::find($id);

        $data = [];
        $data['items']  = [
            [
                'name'  => $product->name,
                'price' => $product->price,
                'desc'  => 'Description for ItSolutionStuff.com',
                'qty'   => 1
            ]
        ];

        $data['invoice_id'] = mt_rand(100000000, 999999999);
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total']      = $product->price;

        $order = new Order;
        $order->user_id     = Auth::id();
        $order->payment_id  = '1';
        $order->payment_status = 'Pending';
        $order->delivery_status= 'Pending';
        $order->address_id     = '1';
        $order->total_amount   = $data['total'];
        $order->save();

        $invoice = new Invoice;
        $invoice->order_id = $order->id;
        $invoice->inv_no   = $data['invoice_id'];
        $invoice->status   = 'pending';
        $invoice->save();

        $payment = new Payment;
        $payment->invoice_id = $invoice->id;
        $payment->status     = 'Pending';
        $payment->save();

        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data, true);

        return redirect($response['paypal_link']);
    }


    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }

  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
    	$provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
        $inv_id = $response['INVNUM'];

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            //$inv_id = $response['INVNUM'];

            $invoice = Invoice::where('inv_no', $inv_id)->first();
            $invoice->status = 'Paid';
            $invoice->save();

            //dd($invoice);
            $payment = Payment::where('invoice_id', $invoice->id)->first();
            $payment->status = 'Success';
            $payment->save();
            //dd($payment);

            $order = Order::find($payment->id);
            $order->payment_status = 'Success';
            $order->save();

            $referrer = auth()->user()->referrer;

            // Bonus sale to 
            if($referrer)
            {
                 $bonus    = $invoice->total_amount * 0.1;

                    $wallet = Wallet::where('user_id', $referrer->id )->first();
                    $wallet->sale_bonus = $wallet->sale_bonus + $bonus;
                    $wallet->save();
            }
           

            //dd('Your payment was successfully - inv-'.$inv_id.' You can create success page here.');
            // dd($response);
            //(in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING']));
            return view('payments.success', compact('response'));
        }
        else
        {
            //$inv_id = $response['INVNUM'];

            $invoice = Invoice::where('inv_no', $inv_id)->first();
            $invoice->status = 'Pending';
            $invoice->save();

            $payment = Payment::where('invoice_id', $invoice->id)->first();
            $payment->status     = 'Failed';
            $payment->save();

            $order = Order::find($payment->id);
            $order->payment_status = 'Failed';
            $order->save();
            
            //dd('Something is wrong.');
            return view('payments.failed', compact('response'));
        }
        
    }
}
