<?php

namespace App\Http\Controllers;

use App\Order;
use App\ProductOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
    	$orders = Order::where('establishment_id', auth()->user()->establishment->id)->get();

    	return view('orders.index', compact('orders'));
    }
}
