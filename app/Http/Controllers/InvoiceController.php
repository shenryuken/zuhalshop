<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
    	$data = Invoice::all();

    	return view('invoices.index', compact('data'));
    }

    public function show($id)
    {
    	$data = Invoice::find($id);

    	return view('invoices.show', compact('data'));
    }
}
