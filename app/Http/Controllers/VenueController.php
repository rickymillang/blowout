<?php

namespace App\Http\Controllers;

use App\EventType;
use App\EventTypeVenue;
use App\Package;
use App\PackageVenue;
use App\Service;
use App\ServiceVenue;

use App\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VenueController extends Controller
{
    public function index()
    {
    	$venues = Venue::where('establishment_id', auth()->user()->establishment->id)->get();

    	/*dd($venues);*/

    	return view('venues.index', compact('venues'));
    }

    public function create()
    {
    	return view('venues.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'address' => 'required',
    		'minimum_capacity' => 'required|numeric',
    		'maximum_capacity' => 'required|numeric',
    		'price' => 'required',
    		'image' => 'required'
    	]);

        if ($request->minimum_capacity >= $request->maximum_capacity) {
            session()->flash('error_message', 'Minimum capacity must be lesser than maximum capacity');

            return redirect()->back();
        }

    	if (request()->hasFile('image')) {
            $image = Storage::putFile('storage/images/venues', $request->file('image'));

            $venue = Venue::create([
	    		'name' => $request->name,
	    		'address' => $request->address,
	    		'minimum_capacity' => $request->minimum_capacity,
	    		'maximum_capacity' => $request->maximum_capacity,
	    		'price' => $request->price,
	    		'image' => $image,
	    		'establishment_id' => auth()->user()->establishment->id
			]);

			session()->flash('message', 'Venue has been successfully saved');

			return redirect()->back();
        }
    }

    public function edit($id)
    {
        $venue = Venue::find($id);

        return view('venues.edit', compact('venue'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'minimum_capacity' => 'required|numeric',
            'maximum_capacity' => 'required|numeric',
            'price' => 'required',
            'image' => 'required'
        ]);

        $venue = Venue::find($id);
        if (request()->hasFile('image')) {
            $image = Storage::putFile('storage/images/venues', $request->file('image'));
        }

        if ($request->minimum_capacity >= $request->maximum_capacity) {
            session()->flash('error_message', 'Minimum capacity must be lesser than maximum capacity');

            return redirect()->back();
        }

        $venue->name = $request->name;
        $venue->address = $request->address;
        $venue->minimum_capacity = $request->minimum_capacity;
        $venue->maximum_capacity = $request->maximum_capacity;
        $venue->price = $request->price;
        $venue->image = $image;
        $venue->save();

        session()->flash('message', 'Venue has been successfully updated');

        return redirect()->back();
    }

    public function addEventType(Request $request, $id)
    {
    	$event_types = EventType::where('establishment_id', auth()->user()->establishment->id)->pluck('name', 'id');

    	$venue = Venue::find($id);

    	return view('venues.event_types.edit', compact('event_types', 'venue'));
    }

    public function storeEventType(Request $request, $id)
    {
    	$request->validate([
    		'event_type' => 'required'
    	]);

    	$event_type_venue = EventTypeVenue::create([
    		'event_type_id' => $request->event_type,
    		'venue_id' => $id
    	]);

    	session()->flash('message', 'Event Type has been added to the venue');

    	return redirect()->back();
    }

    public function addService(Request $request, $id)
    {
    	$services = Service::where('establishment_id', auth()->user()->establishment->id)->pluck('name', 'id');

    	$venue = Venue::find($id);

    	return view('venues.services.edit', compact('services', 'venue'));
    }

    public function storeService(Request $request, $id)
    {
    	$request->validate([
    		'service' => 'required'
    	]);

    	$service_venue = ServiceVenue::create([
    		'service_id' => $request->service,
    		'venue_id' => $id
    	]);

    	session()->flash('message', 'Event Type has been added to the venue');

    	return redirect()->back();
    }

    public function addPackage(Request $request, $id)
    {
    	$packages = Package::where('establishment_id', auth()->user()->establishment->id)->pluck('name', 'id');

    	$venue = Venue::find($id);

    	return view('venues.packages.edit', compact('packages', 'venue'));
    }

    public function storePackage(Request $request, $id)
    {
    	$request->validate([
    		'package' => 'required'
    	]);

    	$package_venue = PackageVenue::create([
    		'package_id' => $request->package,
    		'venue_id' => $id
    	]);

    	session()->flash('message', 'Package has been added to the venue');

    	return redirect()->back();
    }

    public function destroy($id)
    {
        $venue = Venue::find($id);

        $venue->delete();

        $event_type_venue = EventTypeVenue::where('venue_id', $id)->first();
        if ($event_type_venue) {
            $event_type_venue->delete();
        }

        $package_venue = PackageVenue::where('venue_id', $id)->first();
        if ($package_venue) {
            $package_venue->delete();
        }

        $service_venue = ServiceVenue::where('venue_id', $id)->first();
        if ($service_venue) {
            $service_venue->delete();
        }
        session()->flash('message', 'Venue has been successfully deleted');
        return redirect('venues');
    }
}
