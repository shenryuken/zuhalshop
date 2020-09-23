<?php

namespace App\Billing;

use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;

use App\Models\Product;

class PaypalPaymentGateway implements PaymentGatewayContract
{
	private $currency;
	private $discount;

	public function __construct($currency)
	{
		$this->currency = $currency;
		$this->discount = 0;
	}

	public function setDiscount($amount)
	{
		$this->discount = $amount;
	}
	public function charge($amount)
	{
		$fees = $amount * 0.03;
		//charge the bank
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

		$data['invoice_id'] = mt_rand(100000000, 999999999);
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment-callback'); //paypal success
        $data['cancel_url'] = route('payment-status'); //paypal cancel
        $data['total'] 		= Cart::subtotal();

		return $data;
	}
}