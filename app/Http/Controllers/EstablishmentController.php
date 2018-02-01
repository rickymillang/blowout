<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstablishmentType;
use App\Establishment;
use Illuminate\Support\Facades\Storage;
use App\RoleUser;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->establishment_types = EstablishmentType::pluck('name','id');
        $this->establishments = Establishment::all();
    }

    public function index()
    {
        return view('establishments.index')
                    ->with('establishments', $this->establishments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establishments.create')
                ->with('establishment_types', $this->establishment_types);
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
            'address' => 'required|string',
            'establishment_type' => 'required',
            'image' => 'image'
        ]);

        if (request()->hasFile('image')) {
            $image = Storage::putFile('images/establishment', $request->file('image'));
        } else {
            $image = "images/establishment/avatar_building.jpg";
        }

        $establishment = Establishment::create([
                        'name' => $request->name,
                        'address' => $request->address,
                        'e_type' => $request->establishment_type,
                        'user_id' => auth()->user()->id,
                        'image' => $image
                        ]);



        if($establishment) {

            RoleUser::create([
                'user_id' => auth()->user()->id,
                'role_id' => 2,
                ]);

            session()->flash('message', 'You have successfully registered your establishment!');
        }else{
            session()->flash('message', 'Fail to registered establishment!');
        }

        return redirect('/home');
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
        $establishment = Establishment::find($id);
        return view('establishments.edit', compact('establishment'))
                ->with('establishment_types', $this->establishment_types);
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
        //
    }

    public function approve($id)
    {
        $establishment = Establishment::find($id);
        if (!$establishment) {
            session()->flash('error', 'Establishment does not exist');

            return redirect('/home');
        }
        if ($establishment->status == 0) {
            RoleUser::create([
                'user_id' => $establishment->user,
                'role_id' => 2,
            ]);
            $establishment->status = 1;

            $establishment->save();
            session()->flash('message', 'Establishment has been successfully approved.');

            return redirect()->back();
        } else {
            session()->flash('error', 'Establishment has already been approved.');

            return redirect()->back();
        }
    }

    public function deactivate($id)
    {
        $establishment = Establishment::find($id);

        if (!$establishment) {
            session()->flash('error', 'Establishment does not exist');

            return redirect('/home');
        }

        if ($establishment->status == 1) {
            RoleUser::where('role_id', 2)
                    ->where('user_id', $establishment->user->id)
                    ->delete();

            $establishment->status = 0;

            $establishment->save();

            session()->flash('message', 'Establishment has been successfully deactivated.');

            return redirect()->back();
        } else {
            session()->flash('error', 'Establishment has already been deactivated.');

            return redirect()->back();
        }
    }
}
