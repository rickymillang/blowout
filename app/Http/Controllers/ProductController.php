<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->establishment_id = auth()->user()->establishment->id;

            $this->product_types = ProductType::where('establishment_id', auth()->user()->establishment->id)->pluck('name','id');

            $this->products = Product::where('establishment_id', $this->establishment_id)->get();

            return $next($request);
        });
    }

    public function index()
    {
        return view('products.index')
                    ->with('products',$this->products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create')
                ->with('product_types',$this->product_types);
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
            'name' => 'required|string',
            'description' => 'required|string',
            'product_type' => 'required|integer',
            'price' => 'required|integer',
            'image' => 'image'
        ]);

        if (request()->hasFile('image')) {
            $image = Storage::putFile('images', $request->file('image'));
        } else {
            $image = "images/avatar.jpg";
        }
        Product::create([
            'establishment_id' => $this->establishment_id,
            'name' => $request->name,
            'description' => $request->description,
            'product_type_id' => $request->product_type,
            'price' => $request->price,
            'image' => $image
        ]);

        session()->flash('message', 'Product successfully saved');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product_types = ProductType::pluck('name', 'id');
        return view('products.edit', compact('product', 'product_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'product_type' => 'required|integer',
            'price' => 'required',
            'image' => 'image'
        ]);

        if (request()->hasFile('image')) {
            $image = Storage::putFile('images', $request->file('image'));
            $product->image = $image;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->product_type_id = $request->product_type;
        $product->price = $request->price;

        $product->save();

        session()->flash('message', 'Product successfully saved');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
