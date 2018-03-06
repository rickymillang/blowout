<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
	public function index()
	{
		$invoices = Invoice::where('user_id', auth()->user()->id)->get();

		return view('invoices.index', compact('invoices'));
	}

	public function show(Request $request, $id)
	{
		$invoice = Invoice::find($id);

		if (!$invoice) {
			session('error', 'Invoice could not be found');

			return redirect()->back();
		}

		return view('invoices.show', compact('invoice'));
	}
}
