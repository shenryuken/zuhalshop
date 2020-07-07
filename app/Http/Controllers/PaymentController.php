<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Billing\M2UPay;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
    	$product = Product::find(16);
    	$m2u_json= array(
		  'amount'=> 100.00,
		  'accountNumber'=>"A123456", //This “accountNumber” field is for you to pass the purchase ref number / invoice number/ bill number. Maybank will pass the same purchase ref number / invoice number/ bill number back to you (under parameters 'AcctId') to match the transaction status when Maybank send you the  Realtime Payment Notification (RPN).  
		  'payeeCode'=>"***",
		  'refNumber'=> '123456',
		  'callbackUrl' => "http://localhost/zuhalshop/payment-status",
		);
    	//dd($m2u_json);
		$envType 		= 0; 
		$M2UPay 		= new M2UPay();

		$encrypt_json 	= $M2UPay->getEncryptionString($m2u_json, $envType);
    	
    	return view('product.payments', compact('product', 'envType', 'M2UPay', 'encrypt_json'));
    }

   public function paymentInfo(Request $request)
   {        
	   // if($request->tx)
	   // {
	   //      if($payment=Payment::where('transaction_id',$request->tx)->first())
	   //      {
	   //         $payment_id=$payment->id;
	   //      }
	   //      else
	   //      {
	   //         $payment=new Payment;
	   //         $payment->item_number=$request->item_number;
	   //         $payment->transaction_id=$request->tx;
	   //         $payment->currency_code=$request->cc;
	   //         $payment->payment_status=$request->st;
	   //         $payment->save();
	   //         $payment_id=$payment->id;
	   //      }
	   // 		return 'Payment has been done and your payment id is : '.$payment_id;
	   // }
	   // else
	   // {
	   //     return 'Payment has failed';
	   // }
   	return 'Payment has been done';
   }
}
