<?php

namespace App\Http\Controllers;

use App\Establishment;
use App\EstablishmentType;
use App\Order;
use App\Package;
use App\Product;
use App\ProductType;
use App\Rating;
use App\Service;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->hasRole('establishment.admin')) {
            $establishment = Establishment::where('user_id', auth()->user()->id)->first();

            $product_types_count = ProductType::where('establishment_id', auth()->user()->establishment->id)->count();
            $products_count = Product::where('establishment_id', auth()->user()->establishment->id)->count();
            $services_count = Service::where('establishment_id', auth()->user()->establishment->id)->count();
            $packages_count = Package::where('establishment_id', auth()->user()->establishment->id)->count();

            $total_ratings_count = Rating::where('establishment_id', auth()->user()->establishment->id)->count();
            $sum_ratings = Rating::where('establishment_id', auth()->user()->establishment->id)->sum('rating');
            if ($total_ratings_count) {
                $rating = $sum_ratings / $total_ratings_count;
            } else {
                $rating = 0;
            }
            $orders_count = Order::where('establishment_id', auth()->user()->establishment->id)->count();

            return view('home', compact('establishment', 'product_types_count', 'products_count', 'services_count', 'packages_count', 'rating', 'orders_count'));
        } else if (auth()->user()->hasRole('superadmin')) {
            $establishment_types_count = EstablishmentType::count();

            $establishments_count = Establishment::where('status', 1)->count();

            $customers_count = User::withRole('customer')->count();

            $administrators_count = User::withRole('superadmin')->count();

            return view('home', compact('establishment_types_count', 'establishments_count', 'customers_count', 'administrators_count'));
        } else {
            return view('home');
        }


    }
}
