<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Models\Product;

class ProductController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$data = Product::paginate(15);

    	return view('products.index', compact('data'));
    }

    public function cards()
    {
        $data = Product::paginate(15);

        return view('products.cards', compact('data'));
    }

    public function create()
    {
    	return view('products.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name'		=> 'required',
    		'code'		=> 'required',
    		'sku'		=> 'required',
    		'price'		=> 'required',
    		'cost_price'=> 'required',
    		'instock'	=> '',
    		'type'		=> 'required',
    		'image' 	=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);

    	//upload image
    	if ($request->file('image')) {
            $path = $request->file('image')->store('products', 'public');
        }

    	$product = new Product;
    	$product->name 	= $request->name;
    	$product->code 	= $request->code;
    	$product->sku 	= $request->sku;
    	$product->price = $request->price;
    	$product->cost_price = $request->cost_price;
    	$product->instock 	 = $request->instock;
    	$product->type 	= $request->type;
    	$product->image = $path;
    	$product->save();

        return redirect()->to('products');
    }

    public function edit($id)
    {
    	$product = Product::find($id);

    	return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
    	$request->validate([
            'name'      => 'required',
            'code'      => 'required',
            'sku'       => 'required',
            'price'     => 'required',
            'cost_price'=> 'required',
            'instock'   => '',
            'type'      => 'required',
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::find($id);

        if ($request->file('image')) {
            $path = $request->file('image')->store('products', 'public');
        }else {
            $path = $product->image;
        }

        $product->name  = $request->name;
        $product->code  = $request->code;
        $product->sku   = $request->sku;
        $product->price = $request->price;
        $product->cost_price = $request->cost_price;
        $product->instock    = $request->instock;
        $product->type  = $request->type;
        $product->image = $path;
        $product->save();

        return redirect()->to('products');
    }

    public function buyNow($id)
    {
        $product = Product::find($id);
        //dd($product);

        return view('products/buynow', compact('product'));
    }

    public function promolink($id, $ref = null)
    {
        $product = Product::find($id);
        
        // if($ref)
        // {
        //     $referrer = User::where('username', $ref)->first();

        //     $bonus_sale = $product->price * 0.1;

        //     $wallet = Wallet::where('user_id', $referrer->id)->first()
        // }

        return view('products.promolink', compact('product', 'ref'));
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()->with('success', 'Successfully delete the item');
    }
}
