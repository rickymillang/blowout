<?php

namespace App\Http\ViewComposers;

use App\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MenuViewComposer {
    function compose(View $view){

        $cart = null;
        $total_amount = null;
        $total_amount = [];

        if(auth()->check()) {

            $cart = Cart::where('user', auth()->user()->id)->where('organize_from',1)->get();

            foreach ($cart as $c) {
                $total_amount[] = $c->getItem->price * $c->quantity;
            }

        }

        $view->with('cart',$cart)
            ->with('total_amount',$total_amount);
    }
}
