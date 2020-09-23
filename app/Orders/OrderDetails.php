<?php

namespace App\Orders;

use App\Billing\PaymentGatewayContract;

use Auth;

class OrderDetails 
{
	private $paymentGateway;

	public function __construct(PaymentGatewayContract $paymentGateway)
	{
		$this->paymentGateway = $paymentGateway;
	}

	public function all()
	{
		//$this->paymentGateway->setDiscount(500);

		return [
			'name' 		=> Auth::user()->name,
			'address' 	=> '123 Codes\s Tape Street'
		];
	}
}