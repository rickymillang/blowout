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

    public function edit($id)
    {
    	$order = Order::find($id);

    	return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
    	$order = Order::where('id', $id)->where('establishment_id', auth()->user()->establishment->id)->first();

    	$status = $request->status;

    	if ($order) {
    		$order->status = $status;

    		$order->save();

    		if ($status == 1) {
    			$message = 'Congratulations, ' . $order->users->name . '! Your order has been approved';
    		} else if ($status == 3) {
    			$message = 'Hi, ' . $order->users->name . '. Your order has been completed';
    		} else if ($status == 4) {
    			$message = 'Sorry, ' . $order->users->name . '. Your order has been declined';
    		} else if ($status == 5) {
    			$message = 'Hi, ' . $order->users->name . '. Your order is now being delivered';
    		}

    		// Semaphore::send($order->users->contact, $message);

    		session()->flash('message', 'You have successfully changed the order status');

    		return redirect()->back();
    	} else {
    		session()->flash('error', 'Order could not be found');

    		return redirect()->back();
    	}
    }
}
