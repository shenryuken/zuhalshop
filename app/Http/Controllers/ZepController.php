<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Zep;

use Auth;
use App\Traits\NodeTrait;


class ZepController extends Controller
{
    use NodeTrait;

    public $model;

    public function __construct()
    {
        $this->model = 'App\Models\Zep';
        $this->middleware(['auth','verified']);
        
    }

    public function index()
    {
    	$user_id   = Auth::id();
    	$data      = Zep::where('user_id', $user_id)->get();

    	return view('programs.zep.index', compact('data'));
    }

    public function createNode()
    {
    	$root = Zep::create(['user_id'=>Auth::id()]);

    	return redirect()->back()->with('success', 'Successful create node');
    }

     public function show($id)
    {
        $root       = Zep::find($id);
        $parent_id  = $root->parent_id;

        $descendantsAndSelf = $root->getDescendantsAndSelf(5,['id','user_id','parent_id'])->toArray();
        $tree               = $this->buildTree($descendantsAndSelf, $parent_id);

        return view('programs.zep.show', compact('tree'));
    }
}
