<?php

namespace App\Http\Controllers;

use App\Notifications\OrderApproved;
use App\Notifications\OrderCanceled;
use App\Notifications\OrderCompleted;
use App\Notifications\OrderDeclined;
use App\Notifications\OrderDelivering;
use App\Order;
use App\OrderStatus;
use App\ProductOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $establishment_orders = null;
        $customer_orders = null;

        if (auth()->user()->hasRole('establishment.admin')) {
            $establishment_orders = Order::where('establishment_id', auth()->user()->establishment->id)->get();
        } else if (auth()->user()->hasRole('customer')) {
            $customer_orders = Order::where('user', auth()->user()->id)->get();
        }

    	return view('orders.index', compact('establishment_orders', 'customer_orders'));
    }

    public function edit($id)
    {
    	$order = Order::find($id);

    	return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
    	$request->validate([
    		'status' => 'required|numeric'
    	]);
        if (auth()->user()->hasRole('establishment.admin')) {
            $order = Order::where('id', $id)->where('establishment_id', auth()->user()->establishment->id)->first();
        } else if (auth()->user()->hasRole('customer')) {
            $order = Order::where('id', $id)->where('user', auth()->user()->id)->first();
        }


    	$status = $request->status;

    	$order_status = OrderStatus::find($status);

    	if ($order_status) {
    		if ($order) {
    			$order->status = $status;

    			$order->save();

    			if ($status == 1) {
    				$message = 'Congratulations, ' . $order->users->name . '! Your order has been approved';

    				$order->users->notify(new OrderApproved([
    				    'order' => '#' . str_pad($order->id, 5, 0, STR_PAD_LEFT),
    				    'message' => 'Your order has been approved'
    				]));
                } else if ($status == 2) {
                    $order->establishment->user->notify(new OrderCanceled([
                        'order' => '#' . str_pad($order->id, 5, 0, STR_PAD_LEFT),
                        'message' => 'Order has been canceled'
                    ]));
    			} else if ($status == 3) {
    				$message = 'Hi, ' . $order->users->name . '. Your order has been completed';

    				$order->users->notify(new OrderCompleted([
    				    'order' => '#' . str_pad($order->id, 5, 0, STR_PAD_LEFT),
    				    'message' => 'Your order has been completed'
    				]));
    			} else if ($status == 4) {
    				$message = 'Sorry, ' . $order->users->name . '. Your order has been declined';

    				$order->users->notify(new OrderDeclined([
    				    'order' => '#' . str_pad($order->id, 5, 0, STR_PAD_LEFT),
    				    'message' => 'Your order has been declined'
    				]));
    			} else if ($status == 5) {
    				$message = 'Hi, ' . $order->users->name . '. Your order is now being delivered';

    				$order->users->notify(new OrderDelivering([
    				    'order' => '#' . str_pad($order->id, 5, 0, STR_PAD_LEFT),
    				    'message' => 'Your order is now being delivered'
    				]));
    			}

    			// Semaphore::send($order->confirmation_number, $message);

    			session()->flash('message', 'You have successfully changed the order status');

    			return redirect()->back();
    		} else {
    			session()->flash('error', 'Order could not be found');

    			return redirect()->back();
    		}
    	} else {
    		session()->flash('error', 'Order status does not exist');

    		return redirect()->back();
    	}
    }
}
