<?php

namespace App\Http\Controllers;

use App\Establishment;
use App\EstablishmentType;
use App\Notifications\EstablishmentApproved;
use App\Notifications\EstablishmentRegistered;
use App\Package;
use App\Product;
use App\RoleUser;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Semaphore;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware(function ($request, $next) {
            $this->establishment_types = EstablishmentType::pluck('name','id');
            $this->establishments = Establishment::where('status', 1)->get();
            $this->unapproved_establishments = Establishment::where('status', 0)->get();
            $this->admnistrators = User::withRole('superadmin')->get();

            return $next($request);
        });

    }

    public function index()
    {
        return view('establishments.index')
                    ->with('establishments', $this->establishments)
                    ->with('unapproved_establishments', $this->unapproved_establishments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()->hasRole('admin')) {
            if ($establishment = !Establishment::where('user_id', auth()->user()->id)->first()) {
                return view('establishments.create')
                    ->with('establishment_types', $this->establishment_types);
            } else {
                session()->flash('error_message', 'You can only add one establishment');

                return redirect('/home');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($establishment)
    {
       $establishment = Establishment::find($establishment);
       $products =  Product::where('establishment_id',$establishment->id)->get();
       $services = Service::where('establishment_id',$establishment->id)->get();
       $packages = Package::where('establishment_id',$establishment->id)->get();

        return view('pages.establishments.show')
                    ->with('establishment',$establishment)
                    ->with('products',$products)
                    ->with('services',$services)
                    ->with('packages',$packages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $establishment_id = auth()->user()->establishment->id;
        $establishment = Establishment::find($establishment_id);
        return view('establishments.edit', compact('establishment'))
                ->with('establishment_types', $this->establishment_types)
                ->with('establishment', $establishment);
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
        $request->validate([
            'name' => 'min:4|required|string|unique:establishments,id',
            'description' => 'required|string',
            'phone' => ['required', 'regex:/(09|\+639|639)[0-9]{9}/', 'unique:establishments,id'],
            'email' => 'email|required|unique:establishments,id',
            'address' => 'required',
            'owner_name' => 'required'
        ]);

        if (request()->hasFile('image')) {
            $image = Storage::putFile('images/establishment', $request->file('image'));
        } else {
            $image = "images/establishment/avatar_building.jpg";
        }

        $establishment = Establishment::find($id);

        $establishment->name = $request->name;
        $establishment->description = $request->description;
        $establishment->phone = $request->phone;
        $establishment->email = $request->email;
        $establishment->address = $request->address;
        $establishment->owner_name = $request->owner_name;
        $establishment->image = $image;
        $establishment->save();



        session()->flash('message', 'Establishment successfully saved');

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

    public function approve($id)
    {
        $establishment = Establishment::with('user')->find($id);

        if (!$establishment) {
            session()->flash('error', 'Establishment does not exist');

            return redirect('/home');
        }
        if ($establishment->status == 0) {
            $establishment->status = 1;

            $establishment->save();

            $establishment->user->notify(new EstablishmentApproved([
                'name' => $establishment->name,
                'message' => 'Your establishment has been approved'
            ]));

            // Semaphore::send($establishment->phone, 'Congratulations! Your establishment, ' . $establishment->name . ' has been approved. You may now start selling!');

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
