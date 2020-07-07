<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->type == 1){
            $data = User::where('type','!=',1)->paginate(15);
        }
        else
        {
            $data = Auth::user()->referrals();
        }
    	

    	return view('members.index', compact('data'));
    }


}
