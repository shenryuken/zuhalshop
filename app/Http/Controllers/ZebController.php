<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Zeb;

use Auth;

class ZebController extends Controller
{
    public function index()
    {
    	$user_id    = Auth::id();
    	$data 		= Zeb::where('user_id', $user_id)->get();

    	return view('programs.zeb.index', compact('data'));
    }

    public function createNode()
    {
    	$root = Zeb::create(['user_id'=>Auth::id()]);

    	return redirect()->back()->with('success', 'Successful create node');
    }

    public function createChild($id)
    {
    	$parent = Zeb::find($id);
    	$child  = $parent->children()->create(['user_id'=>Auth::id()]);
    	
    	return redirect()->back()->with('success', 'Successful create node');
    }

    public function show($id)
    {
        $root = Zeb::find($id);

        $descendants = $root->getDescendantsAndSelf(5)->toHierarchy();

        return view('programs.zeb.show', compact('descendants'));
    }

}
