<?php

namespace App\Http\Controllers\Auth;

use App\Establishment;
use App\EstablishmentType;
use App\Http\Controllers\Controller;
use App\Notifications\EstablishmentRegistered;
use App\RoleUser;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EstablishmentRegisterController extends Controller
{
    public function __construct() {
        $this->middleware(function ($request, $next) {
            $this->admnistrators = User::withRole('superadmin')->get();

            return $next($request);
        });
    }

    public function index()
    {
        $establishment_types = EstablishmentType::pluck('name', 'id');
        return view('auth.establishments.index', compact('establishment_types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',

            'establishment_name' => 'required|min:4',
            'establishment_type' => 'required|numeric',
            'description' => 'required',
            'owner_name' => 'required|string',
            'phone' => ['required', 'regex:/(09|\+639|639)[0-9]{9}/', 'unique:establishments'],
            'address' => 'required|string',
            'image' => 'image|max:5000',
            'terms' => 'required',
            'business_permit' => 'required|file|mimes:doc,pdf,docx,zip|max:10000'
        ]);

        if (request()->hasFile('image')) {
            $image = Storage::putFile('images/establishment', $request->file('image'));
        } else {
            $image = "images/establishment/avatar_building.jpg";
        }

        if (request()->hasFile('business_permit')) {
            $business_permit = Storage::putFile('files/establishment', $request->file('business_permit'));
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avatar' => 'images/user/avatar.png'
        ]);

        $establishment = Establishment::create([
            'name' => $request->establishment_name,
            'description' => $request->description,
            'address' => $request->address,
            'owner_name' => $request->owner_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'establishment_type_id' => $request->establishment_type,
            'user_id' => $user->id,
            'image' => $image,
            'status' => 0,
            'business_permit' => $business_permit
        ]);

        if ($user) {
            RoleUser::create([
                'user_id' => $user->id,
                'role_id' => 2,
            ]);
        }

        foreach ($this->admnistrators as $admin) {
            $admin->notify(new EstablishmentRegistered([
                'name' => $request->establishment_name,
                'user_id' => $user->id,
                'message' => 'New establishment has registered'
            ]));
        }

        session()->flash('message', 'You have successfully registered your establishment! Kindly wait for the admin\'s approval');

        return redirect('/login');
    }
}
