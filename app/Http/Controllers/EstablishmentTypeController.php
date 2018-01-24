<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstablishmentType;

class EstablishmentTypeController extends Controller
{
    public function __construct()
    {
        $this->establishment_types = EstablishmentType::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('establishment_types.index')
                    ->with('establishment_types', $this->establishment_types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establishment_types.create');
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
            'name' => 'required|string|unique:establishment_types'
        ]);

        EstablishmentType::create([
            'name' => $request->name
        ]);

        session()->flash('message', 'Establishment type successfully saved');

        return redirect()->back();
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
        $establishment_type = EstablishmentType::find($id);

        return view('establishment_types.edit', compact('establishment_type'));
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
        $establishment_type = EstablishmentType::find($id);

        $request->validate([
            'name' => 'required|string|unique:establishment_types,id'
        ]);

        $establishment_type->name = $request->name;

        $establishment_type->save();

        session()->flash('message', 'Establishment type successfully saved');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
