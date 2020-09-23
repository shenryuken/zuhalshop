<?php

namespace App\Traits;

use Gloudemans\Shoppingcart\Facades\Cart;

use App\Models\Zeb;
use App\Models\Zes;
use App\User;
use Baum\Node;

use Auth;

trait NodeTrait
{
    public function assignNodeProgram()
    {
        $cart = Cart::content();

        foreach($cart as $item)
        {
            if($item->id == 2)
            {
                $zesNodes = Zes::where([['lft' => null] , ['rgt' => null] ])->get();
                //$zesNodes = Zes::leaves()->get();
                if(count($zesNodes) == 0)
                    Zes::create(['user_id'=>Auth::id()]);
                else
                {
                    $nodes      = Zes::allLeaves();
                    $firstNode  = $nodes->min('id');
                    $child      = Zes::create(['user_id'=>Auth::id()]);

                    $child->makeChildOf($firstNode);
                }
                    
            }
            elseif($item->id == 3)
            {
                $zebNode = Zeb::where([['lft' => null] , ['rgt' => null] ])->get();
                if(count($zebNode) == 0)
                    $zebNode->children->create(['user_id'=>Auth::id()]);
                else
                    $zebNode->create(['user_id'=>Auth::id()]);
            }
            elseif($item->id == 4)
            {
                $zepNode = Zep::where([['lft' => null] , ['rgt' => null] ])->get();
                if(count($zepNode) == 0)
                    $zepNode->children->create(['user_id'=>Auth::id()]);
                else
                    $zepNode->create(['user_id'=>Auth::id()]);
            }
        }

        return redirect()->back();
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
}