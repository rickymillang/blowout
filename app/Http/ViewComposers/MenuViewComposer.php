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
        $cart_template = null;
        $cart_scratch = null;
        $cart_wizard = null;
        $cart_wizard_total_quantity = 0;
        $cart_template_total_quantity = 0;
        $cart_scratch_total_quantity = 0;
        $total_amount_template = [];
        $total_amount_scratch = [];
        $total_amount_wizard = [];


        if(auth()->check()) {

            $cart_template = Cart::where('user', auth()->user()->id)->where('organize_from',1)->get();

            if($cart_template != null){

                foreach ($cart_template as $ct) {
                    $total_amount_template[] = $ct->getItem->price * $ct->quantity;
                    $cart_template_total_quantity += $ct->quantity;
                }
            }

            $cart_scratch = Cart::where('user', auth()->user()->id)->where('organize_from',2)->get();

            if($cart_scratch != null){

                foreach ($cart_scratch as $cs) {
                    $total_amount_scratch[] = $cs->getItem->price * $cs->quantity;
                    $cart_scratch_total_quantity += $cs->quantity;
                }
            }

            $cart_wizard = Cart::where('user', auth()->user()->id)->where('organize_from',3)->get();

            if($cart_wizard != null){

                foreach ($cart_wizard as $cw) {
                    $total_amount_wizard[] = $cw->getItem->price * $cw->quantity;
                    $cart_wizard_total_quantity += $cw->quantity;
                }
            }

        }

        $view->with('cart_template',$cart_template)
            ->with('cart_scratch',$cart_scratch)
            ->with('cart_wizard',$cart_wizard)
            ->with('total_amount_template',$total_amount_template)
            ->with('total_amount_scratch',$total_amount_scratch)
            ->with('total_amount_wizard',$total_amount_wizard)
            ->with('cart_template_total_quantity',$cart_template_total_quantity)
            ->with('cart_scratch_total_quantity',$cart_scratch_total_quantity)
            ->with('cart_wizard_total_quantity',$cart_wizard_total_quantity);
    }
}
