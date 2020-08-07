<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Zes;

use Auth;
use App\Traits\NodeTrait;


class ZesController extends Controller
{
    use NodeTrait;

    public $model;

    public function __construct()
    {
        $this->model = 'App\Models\Zes';
    }

    public function index()
    {
    	$user_id    = Auth::id();
    	$data 		= Zes::where('user_id', $user_id)->get();

    	return view('programs.zes.index', compact('data'));
    }

    public function createNode()
    {
    	$root = Zes::create(['user_id'=>Auth::id()]);

    	return redirect()->back()->with('success', 'Successful create node');
    }
}