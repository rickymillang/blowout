<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function edit()
    {
        return view('change_password.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed'
        ]);
        $user_password = auth()->user()->password;
        $old_password = $request->old_password;

        $new_password = $request->password;

        if (Hash::check($old_password, $user_password)) {
            // The passwords match...
        }

        $user = auth()->user();

        $user->password = bcrypt($new_password);

        $user->save();

        session()->flash('success', 'You have successfully changed your password');

        return redirect()->back();
    }
}