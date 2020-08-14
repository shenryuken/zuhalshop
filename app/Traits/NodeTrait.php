<?php

namespace App\Traits;

use App\Models\Zeb;
use App\Models\Zes;
use App\User;
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

    	// if($depth)
    	// {
    	// 	$node = $this->model::find($id);
    	// 	$ancestors = $node->getAncestors();
    	// }
    	// else
    	// {
    	// 	$node = $this->model::find($id);
    	// 	$ancestors = $node->getAncestorsAndSelf()->toArray();
    	// }

    	// dd(json_encode($ancestors));
    	// return $ancestors;

    	//$node = 
    }

    public function checkAncestors($id)
    {
    	$depth	= 3;
    	$found 	= 0;
    	$pid 	= null;//parent id

    	//check if user_id have same  within 3 level up
    	for($x = 0; $x < $depth; $x++)
    	{
    		$node 	= $this->model::find($id);
    		$uid  	= $node->user_id;
    		$pid  	= $node->parent_id;
    		$pnode 	= $this->model::find($pid);

    		if($node->parent_id && $node->user_id == $pnode->user_id)
    		{
    			$found = 1;
    			break;
    		}
    		elseif(!$node->parent_id)
    		{
    			$found = 'root';
    			break;
    		}
    		else
    		{
    			$id = $pid;
    		}
    	}

    	//dd($found);

    	return $found;
    }

    public function checkChildren($id)
    {
    	$left_child 	= 0;
    	$right_child 	= 0;
    	$descendants    = 0;
    	//$data 			= new array();

    	$node = $this->model::find($id);

    	if($node->total_descendants > 0 )
    	{
    		if($node->left_child != null && $node->left_child > 0 )
    		{
    			$left_child = $node->left_child;
    		} 

    		if($node->right_child != null && $node->right_child > 0)
    		{
    			$right_child = $node->right_child;
    		}

    		$data = [
    			'left_child' => $left_child,
    			'right_child'=> $right_child,
    			'descendants'=> $total_descendants
    		];
    	}

    	return $data;
    }
}