<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;

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
        if($request->item_type == 1) {
            $quantity = $request->quantity;
        }else{
            $quantity = 1;
        }

        $cart = Cart::where('item_id',$request->id)->first();

        if(count($cart) > 0){
            $cart->update([
                'quantity' => $cart->quantity + $quantity
            ]);

            $cart->save();

            $exist = 1;
        }else {

            $cart = Cart::create([
                'item_id' => $request->id,
                'item_type' => $request->item_type,
                'quantity' => $quantity,
                'user' => auth()->user()->id,
                'organize_from' => 1
            ]);

            $exist = 0;
        }

        return json_encode([
                            'cart' => $cart,
                            'image' => $cart->getItem->image,
                            'name' => $cart->getItem->name,
                            'price' => $cart->getItem->price,
                            'exist' => $exist,
                            'add_amount' => number_format((int) ($cart->getItem->price * $quantity),2)
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

        $quantity = $cart->quantity;
        $cart_amount = $cart->getItem->price * $cart->quantity;

        $cart->delete();
        return json_encode([
            'cart' => $cart,
            'amount' => $cart_amount,
            'quantity' => $quantity
        ]);
    }

    public function delete_all(Request $request){

        $cart = Cart::where('user',$request->user_id)->delete();

        return redirect()->back();
    }

    public function getProductDetails(Request $request,$id){

        $item_type = 1;

        if($item_type == 1) {
            $quantity = $request->quantity;
        }else{
            $quantity = 1;
        }

        $product = Product::find($id);

        $cart = Cart::where('item_id',$request->id)->first();

        if(count($cart) > 0){
            $cart->update([
                'quantity' => $cart->quantity + $quantity
            ]);

            $cart->save();

            $exist = 1;
        }else {

            $cart = Cart::create([
                'item_id' => $request->id,
                'item_type' => $item_type,
                'quantity' => $request->quantity,
                'user' => auth()->user()->id,
                'organize_from' => 1
            ]);

            $exist = 0;
        }

        return json_encode(['product'=>$product,
                            'cart'=> $cart,
                            'exist' => $exist
                    ]);
    }

    public function getProductList(Request $request,$id){

        $cart = Cart::where('user',$id)->get();

        $cart_list = [];

        /*foreach($cart as $c){
            $cart['id'] = $cart->id;
            $cart
        }*/

        return json_encode(['cart'=>$cart]);
    }
}
