<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wallet;
use App\Models\Withdrawal;
use App\Models\Account;
use App\Models\Transaction;
Use App\User;

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

        $total_purchases = Auth::user()->orders()->sum('total_amount');

    	$transactions = Transaction::where('wallet_id', $id)->get();

    	$withdrawals  = Withdrawal::where('user_id', Auth::id())->has('account')->get();

    	return view('wallets/mywallet', compact('mywallet', 'transactions', 'withdrawals', 'total_purchases'));
    }

    public function withdraws()
    {
    	if(Auth::user()->isAdmin())
    	{
    		$data = Withdrawal::all();
    	}
    	else
    	{
    		$data = Withdrawal::where('user_id', Auth::id())->get();
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

    public function transfer()
    {
    	return view('wallets.transfer');
    }

    public function postTransfer(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'username' => 'required|exists:users,name'
        ]);

        $receiver = User::where('name', $request->username)->first();

        try {
            $wallet_sender = Wallet::find(Auth::id());
            $wallet_sender->current_balance = $wallet_sender->current_balance - $request->amount ;
            $wallet_sender->save();

            $wallet_receiver = Wallet::find($receiver->id);
            $wallet_receiver->current_balance = $wallet_receiver->current_balance + $request->amount;
            $wallet_receiver->save();
            
        } catch (Exception $e) {
            return redirect()->back()->with('failed', 'Your request is failed to submit. Please try again later.');
        }

        return redirect()->back()->with('success', 'Your request successfully submitted');
    }


}
