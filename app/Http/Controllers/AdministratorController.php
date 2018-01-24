<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function __construct()
    {
        $this->administrators = User::withRole('superadmin')->get();
    }
    public function index()
    {
        return view('administrators.index')
            ->with('administrators', $this->administrators);
    }

    public function create()
    {
        return view('administrators.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'avatar' => 'image'
        ]);

        if (request()->hasFile('avatar')) {
            $avatar = Storage::putFile('images', $request->file('avatar'));
        } else {
            $avatar = "images/avatar.jpg";
        }

        $administrator = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avatar' => $avatar
        ]);

        $administrator_role = Role::findOrFail(1);
        $administrator = User::findOrFail($administrator->id);
        $administrator->attachRole($administrator_role);

        session()->flash('message', 'Administrator successfully saved');

        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $administrator = User::find($id);

        return view('administrators.edit', compact('administrator'));
    }
        
    public function update(Request $request, $id)
    {
        $administrator = User::find($id);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,id',
            'avatar' => 'image'
        ]);

        if (request()->hasFile('avatar')) {
            $image = Storage::putFile('images', $request->file('avatar'));
            $administrator->avatar = $avatar;
        }

        $administrator->name = $request->name;
        $administrator->email = $request->email;

        $administrator->save();

        session()->flash('message', 'Admnistrator successfully saved');

        return redirect()->back();
    }

    public function destroy($id)
    {
        if ($id == 1) {
            return redirect('/administrators');
        }
        $administrator = User::find($id);

        if ($admin)
        $administrator->delete();

        session()->flash('message', 'Administrator has been successfully deleted');
        
        return redirect('/administrators');
    }
}
