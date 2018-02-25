<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
    	$orders = Order::all();
    	return view('calendars.index', compact('orders'));
    }
}
