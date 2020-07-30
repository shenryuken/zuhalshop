<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
    	$data = Order::paginate(15);

    	return view('orders.index', compact('data'));
    }

    public function checkout()
    {
        return view('orders.checkout');
    }

    public function delivered()
    {
        $data = Order::where('delivery_status', 'delivered')->get();

        return view('orders.delivered', compact('data'));
    }

    // public function buyNow(Request $request)
    // {
    //     $ref         = $request->query('ref');
    //     $product->id = $request->product->id;

    //     return redirect()->to('invoices/checkout', compact('link','ref'));
    // }
}
