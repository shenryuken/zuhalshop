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
        $this->middleware(['auth','verified']);
        
    }

    public function index()
    {
    	$user_id   = Auth::id();
    	$data      = Zes::where('user_id', $user_id)->get();

    	return view('programs.zes.index', compact('data'));
    }

    public function createNode()
    {
    	$root = Zes::create(['user_id'=>Auth::id()]);

    	return redirect()->back()->with('success', 'Successful create node');
    }

     public function show($id)
    {
        $root       = Zes::find($id);
        $parent_id  = $root->parent_id;

        $descendantsAndSelf = $root->getDescendantsAndSelf(5,['id','user_id','parent_id'])->toArray();
        $tree               = $this->buildTree($descendantsAndSelf, $parent_id);

        return view('programs.zes.show', compact('tree'));
    }
}
