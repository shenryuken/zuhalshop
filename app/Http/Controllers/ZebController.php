<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Zeb;

use Auth;
use App\User;
use App\Traits\NodeTrait;

class ZebController extends Controller
{
    use NodeTrait;

    public $model;

    public function __construct()
    {
        $this->model = 'App\Models\Zeb';
    }

    public function index()
    {
    	$user_id    = Auth::id();
    	$data 		= Zeb::where('user_id', $user_id)->get();

    	return view('programs.zeb.index', compact('data'));
    }

    // public function createNode()
    // {
    //     $root = Zeb::create(['user_id'=>Auth::id()]);

    //     return redirect()->back()->with('success', 'Successful create node');
    // }

    // public function createChild($id)
    // {
    // 	//$parent = Zeb::find($id);
    // 	$child  = $parent->children()->create(['user_id'=>Auth::id()]);
    	
    // 	return redirect()->back()->with('success', 'Successful create node');
    // }

    public function show($id)
    {
        $root       = Zeb::find($id);
        $parent_id  = $root->parent_id;

        $descendantsAndSelf = $root->getDescendantsAndSelf(5,['id','user_id','parent_id'])->toArray();
        $tree               = $this->buildTree($descendantsAndSelf, $parent_id);

        return view('programs.zeb.show', compact('tree'));
    }

    

}
