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
    		'user_id'     => 'required|unique:accounts,user_id,'. $request->user_id,
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

    public function edit($id)
    {
    	$account = Account::find($id);

    	return view('accounts.edit', compact('account'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'short_code' => 'required',
            'country_id' => 'required',
        ]);

        if($request->country_id == 132)
        {
            $status = 'Local';
        } else {
            $status = 'International';
        }


        $bank = new Bank;
        $bank->name         = $request->name;
        $bank->short_code   = $request->short_code;
        $bank->status       = $status;
        $bank->country_id   = $request->country_id;
        $bank->save();

        return redirect()->to('banks');
    }
}

