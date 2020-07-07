<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;

class WebstoreController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('store.index', compact('products'));
    }

    # Our function for adding a certain product to the cart
    public function addToCart(Product $product)
    {
        Cart::add($product->id, $product->name, 1, $product->price);
        return redirect('/store');
    }

    # Our function for removing a certain product from the cart
    public function removeProductFromCart($productId)
    {
        Cart::remove($productId);
        return redirect()->back();
    }

    # Our function for clearing all items from our cart
    public function destroyCart()
    {
        Cart::destroy();
        return redirect('/home');
    }

    public function checkout()
    {
        return view('store.checkout');
    }

    public function mycart()
    {
        return view('store.mycart');
    }
}
