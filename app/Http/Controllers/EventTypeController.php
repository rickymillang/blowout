<?php

namespace App\Http\Controllers;

use App\EventType;
use Illuminate\Http\Request;

class EventTypeController extends Controller
{
    public function index()
    {
    	$event_types = EventType::where('establishment_id', auth()->user()->establishment->id)->get();

    	return view('event_types.index', compact('event_types'));
    }

    public function create()
    {
    	return view('event_types.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required'
    	]);

        $venue = EventType::create([
    		'name' => $request->name,
    		'establishment_id' => auth()->user()->establishment->id
		]);

		session()->flash('message', 'EventType has been successfully saved');

		return redirect()->back();
    }

    public function edit($id)
    {
    	$event_type = EventType::find($id);

    	return view('event_types.edit', compact('event_type'));
    }

    public function update(Request $request, $id)
    {
    	$event_type = EventType::find($id);

    	$request->validate([
    		'name' => 'required'
    	]);

    	$event_type->name = $request->name;
    	$event_type->save();

    	session()->flash('message', 'Event Type successfully saved');

    	return redirect()->back();
    }

}
