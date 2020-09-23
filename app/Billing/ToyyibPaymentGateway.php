<?php

namespace App\Billing;

use Illuminate\Support\Str;

use Auth;

class ToyyibPaymentGateway implements PaymentGatewayContract
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
		//charge the bank
		$user = Auth::user();

		return [
		    'userSecretKey'				=> config('toyyibpay.key'),
		    'categoryCode'				=> config('toyyibpay.category'),
		    'billName'					=> 'ZuhalShop',
		    'billDescription'			=> 'Zuhal Tonic',
		    'billPriceSetting'			=> 1,
		    'billPayorInfo'				=> 1,
		    'billAmount'				=> $amount * 100,
		    'billReturnUrl'				=> route('payment-status'),
		    'billCallbackUrl'			=> route('payment-callback'),
		    'billExternalReferenceNo' 	=> Str::random(12),
		    'billTo'					=> $user->name,
		    'billEmail'					=> $user->email,
		    'billPhone'					=> '011234567',
		    'billSplitPayment'			=> 0,
		    'billSplitPaymentArgs'		=> '',
		    'billPaymentChannel'		=> '2',
		    'billDisplayMerchant'		=> 1,
		    'billContentEmail'			=> 'Thank you for purchasing our product!',
		    'billChargeToCustomer'		=> 2
		  ];  
	}
}