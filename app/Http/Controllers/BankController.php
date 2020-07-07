<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bank;
use App\Models\Country;

class BankController extends Controller
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
    	$data = Bank::paginate(15);
    	return view('banks.index', compact('data'));
    }

    public function create()
    {
    	$countries = Country::all();
    	return view('banks.create', compact('countries'));
    }

    public function store(Request $request)
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
    	$bank->name 		= $request->name;
    	$bank->short_code 	= $request->short_code;
    	$bank->status 		= $status;
    	$bank->country_id 	= $request->country_id;
    	$bank->save();

    	return redirect()->to('banks');
    }
}
