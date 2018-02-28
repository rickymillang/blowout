<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
	public function index()
	{
		$payments = Payment::where('establishment_id', auth()->user->establishment->id)
						->get();

		return view('payments.index', compact('payments'));
	}
}
