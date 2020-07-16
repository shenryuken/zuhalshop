<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use DB;
use Auth;
class AddressController extends Controller
{
    public function create()
    {
    	$getCountries = DB::table('countries')->pluck("name","id");
    	return view('address.create', compact('getCountries'));
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'type' 			=> 'required',
    		'receiver_name' => 'required',
    		'street' 		=> 'required',
    		'city'			=> 'required',
    		'state' 		=> 'required',
    		'country'	=> 'required',
    	]);

    	$address = new Address;
    	$address->user_id 		= Auth::id();
    	$address->type 			= $request->type;
    	$address->receiver_name = $request->receiver_name;
    	$address->street 		= $request->street;
    	$address->city_id 		= $request->city;
    	$address->postcode 		= $request->postcode;
    	$address->state_id 		= $request->state;
    	$address->country_id 	= $request->country;
    	$address->save();

    	return redirect()->back()->with('success', 'Your address has been added successfully!');;
    }

    public function edit($id)
    {
    	$address = Address::find($id);
    	$getCountries = DB::table('countries')->pluck("name","id");
    	return view('address.edit', compact('address', 'getCountries'));
    }
    
    public function update(Request $request, $id)
    {
    	$request->validate([
    		'type' 			=> 'required',
    		'receiver_name' => 'required',
    		'street' 		=> 'required',
    		'city'			=> 'required',
    		'state' 		=> 'required',
    		'country'	    => 'required',
    	]);

    	$address = Address::find($id);
    	$address->type 			= $request->type;
    	$address->receiver_name = $request->receiver_name;
    	$address->street 		= $request->street;
    	$address->city_id 		= $request->city ? $request->city:$address->city_id;
    	$address->postcode 		= $request->postcode;
    	$address->state_id 		= $request->state ? $request->state:$address->state_id; ;
    	$address->country_id 	= $request->country ? $request->country:$address->country_id; 
    	$address->save();

        return redirect()->back()->with('success', 'Successfully update the address');
    }
}
