<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\Bank;

use Auth;

class AccountController extends Controller
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

    public function create()
    {
    	$banks = Bank::all();
    	return view('accounts.create', compact('banks'));
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'holder_name' => 'required',
    		'acc_no'	  => 'required',
    		'bank_id'	  => 'required',
    	]);

    	$account = new Account;
    	$account->user_id	  = Auth::user()->id;
    	$account->holder_name = $request->holder_name;
    	$account->acc_no 	  = $request->acc_no;
    	$account->bank_id	  = $request->bank_id;
    	$account->save();

    	return redirect()->back();
    }
}
