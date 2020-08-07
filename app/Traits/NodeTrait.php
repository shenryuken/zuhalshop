<?php

namespace App\Traits;

use App\Models\Zeb;
use App\Models\Zes;
use Auth;

trait NodeTrait
{
    public function createNode()
    {
    	$root = $this->model::create(['user_id'=>Auth::id()]);

    	return redirect()->back()->with('success', 'Successful create node');
    }

    public function createChild($id)
    {
    	$parent = $model::find($id);
    	$child  = $parent->children()->create(['user_id'=>Auth::id()]);
    	
    	return redirect()->back()->with('success', 'Successful create node');
    }

    public function buildTree($elements, $parentId)
    {
        $branch = array();
       
        foreach ($elements as $element) {
            
            //dd($element['id']);
            //$user = User::find($element['user_id']);
            $element['name']     = User::find($element['user_id'])->name;
            $element['title']    = 'default';//$this->getRankName($element['id']);
            // $element['className']= strtolower($element['rank']);

            if ($element['parent_id'] == $parentId) {

                $children = $this->buildTree($elements, $element['id']);

                if ($children) {
                    $element['children'] = $children;       
                }
                $branch[] = $element;
                
                unset($element);
            }     
        }
        return $branch;
    }

    public function getAncestors($id, $depth = null)
    {
    	if($depth)
    	{
    		$node = $this->model::find($id);
    		$ancestors = $node->getAncestors();
    	}
    	else
    	{
    		$node = $this->model::find($id);
    		$ancestors = $node->getAncestorsAndSelf()->toArray();
    	}

    	dd(json_encode($ancestors));
    	return $ancestors;
    }
}