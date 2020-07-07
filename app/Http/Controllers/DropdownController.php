<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DropdownController extends Controller
{
	public function index()
	{
		$countries = DB::table('countries')->pluck("name","id");
		return view('dropdown.index', compact('countries'));
	}
    public function getCountries()
    {
    	$countries = DB::table('countries')->pluck("name","id");
    	return json_encode($countries);
    }

    public function getStates($country_id)
    {
    	$states = DB::table("states")->where("country_id",$country_id)->pluck("name","id");

        return json_encode($states);
    }

    public function getCities($state_id)
    {
    	$cities = DB::table("cities")->where("state_id",$state_id)->pluck("name","id");

        return json_encode($cities);
    }
}
