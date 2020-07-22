<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wallet;
use App\Models\Withdrawal;
use App\Models\Account;
use App\Models\Transaction;

use Auth;

class WalletController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function myWallet()
    {
    	$mywallet = Auth::user()->wallet;
    	$id = $mywallet->id;
    	//dd($id);

    	$transactions = Transaction::where('wallet_id', $id)->get();

    	$withdrawals  = Withdrawal::where('user_id', Auth::id())->has('account')->get();

    	return view('wallets/mywallet', compact('mywallet', 'transactions', 'withdrawals'));
    }

    public function withdraws()
    {
    	if(Auth::user()->isAdmin)
    	{
    		$data = Wallet::where('request_withdraw','>', 0)->get();
    	}
    	else
    	{
    		$data = Wallet::where('user_id', Auth::id())->where('request_withdrawal','>', 0)->get();
    	}

    	return view('wallets.withdraws', compact('data'));
    }

    public function requestWithdrawal()
    {
    	return view('wallets.request_withdrawal');
    }

    public function postRequestWithdrawal(Request $request)
    {
    	$current_balance = Auth::user()->wallet->current_balance;
    	$account         = Account::where('acc_no', $request->acc_no)->first();

    	$request->validate([
    			'amount' => 'required|max:'.($current_balance - 20),
    	]);
    	//dd($account->id);
    	try {
    		$withdrawal = new Withdrawal;
	    	$withdrawal->user_id = Auth::id();
	    	$withdrawal->amount  = $request->amount;
	    	$withdrawal->account_id = $account->id;
	    	$withdrawal->status 	= 0;
	    	$withdrawal->save();
    	} catch (Exception $e) {
    		return redirect()->back()->with('failed', 'Your request is failed to submit. Please try again later.');
    	}
    	
    	return redirect()->back()->with('success', 'Your request successfully submitted');
    }

    public function approvedWithdrawal()
    {
    	//
    }

    public function transfer()
    {
    	//
    }
}
