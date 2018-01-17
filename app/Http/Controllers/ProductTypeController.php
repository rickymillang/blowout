<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_types = ProductType::all();
        return view('product_types.index', compact('product_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required'
        ]);

        ProductType::create([
            'name' => $request->name
        ]);

        session()->flash('message', 'Product type successfully added');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductType $productType)
    {
        return view('product_types.edit')->with('product_type', $productType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductType $productType)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $productType->name = $request->name;

        $productType->save();

        session()->flash('message', 'Product type successfully saved.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductType $productType)
    {
        //
    }
}
