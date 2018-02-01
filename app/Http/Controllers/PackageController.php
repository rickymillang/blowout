<?php

namespace App\Http\Controllers;

use App\Package;
use App\Packageable;
use App\Product;
use App\Service;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->establishment_id = auth()->user()->establishment->id;

            $this->packages = Package::where('establishment_id',   $this->establishment_id)->get();

            $this->services = Service::where('establishment_id', $this->establishment_id)->pluck('name', 'id');
            $this->products = Product::where('establishment_id', $this->establishment_id)->pluck('name', 'id');

            return $next($request);
        });

    }

    public function index()
    {
        return view('packages.index')
            ->with('packages', $this->packages);
    }


    public function create()
    {
        return view('packages.create')
            ->with('services', $this->services)
            ->with('products', $this->products);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:packages',
            'price' => 'required|numeric'
        ]);

        $package = Package::create([
            'name' => $request->name,
            'price' => $request->price,
            'establishment_id' => $this->establishment_id
        ]);

        if (filled($request->service)) {
            Packageable::insert([
                'package_id' => $package->id,
                'packageable_id' => $request->service,
                'packageable_type' => 'App\Service'
            ]);
        }

        if (filled($request->product)) {
            Packageable::insert([
                'package_id' => $package->id,
                'packageable_id' => $request->product,
                'packageable_type' => 'App\Product'
            ]);
        }

        session()->flash('success', 'Package has been created');

        return redirect('/packages/' . $package->id . '/edit');
    }

    public function show($id)
    {
        //
    }

    public function edit($package_id)
    {
        $package = Package::where('id', $package_id)
            ->where('establishment_id', $this->establishment_id)->first();
        return view('packages.edit')
            ->with('services', $this->services)
            ->with('products', $this->products)
            ->with('package', $package);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
