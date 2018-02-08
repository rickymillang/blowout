<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cart = Cart::where('item_id',$request->id)->first();

        if(count($cart) > 0){
            $cart->update([
                'quantity' => $cart->quantity + $request->quantity
            ]);

            $cart->save();

            $exist = 1;
        }else {

            $cart = Cart::create([
                'item_id' => $request->id,
                'item_type' => $request->item_type,
                'quantity' => $request->quantity,
                'user' => auth()->user()->id
            ]);

            $exist = 0;
        }

        return json_encode([
                            'cart' => $cart,
                            'image' => $cart->getItem->image,
                            'name' => $cart->getItem->name,
                            'price' => $cart->getItem->price,
                            'exist' => $exist,
                            'add_amount' => number_format((int) ($cart->getItem->price * $request->quantity),2)
                        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);

        $cart_amount = $cart->getItem->price * $cart->quantity;

        $cart->delete();
        return json_encode([
            'cart' => $cart,
            'amount' => $cart_amount
        ]);
    }

    public function delete_all(Request $request){

        $cart = Cart::where('user',$request->user_id)->delete();

        return redirect()->back();
    }
}
