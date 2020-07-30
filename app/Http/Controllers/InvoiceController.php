<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGatewayContract;

class InvoiceController extends Controller
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
    	$data = Invoice::paginate(15);

    	return view('invoices.index', compact('data'));
    }

    public function checkout()
    {
        return view('invoices.checkout');
    }
}
