<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wallet;

use Auth;

class WalletController extends Controller
{
    public function myWallet()
    {
    	$mywallet = Auth::user()->wallet();

    	return view('wallets/mywallet', compact('mywallet'));
    }
}
