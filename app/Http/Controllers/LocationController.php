<?php

namespace App\Http\Controllers;

use App\Establishment;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function edit()
    {
    	$location = Establishment::select('latitude', 'longitude')->where('user_id', auth()->user()->id)->first();
    	return view('locations.edit', compact('location'));
    }

    public function update(Request $request)
    {
    	$establishment = Establishment::where('user_id', auth()->user()->id)->first();

    	$latitude = $request->latitude;
    	$longitude = $request->longitude;

    	$request->validate([
    		'longitude' => 'required|numeric',
    		'latitude' => 'required|numeric'
    	]);

    	if ($establishment) {
    		$establishment->longitude = $longitude;
    		$establishment->latitude = $latitude;
    		$establishment->save();
    	}

    	session()->flash('message', 'Location updated successfully');

    	return redirect()->back();
    }
}
