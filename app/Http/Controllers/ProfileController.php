<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
	public function index()
	{
		$user = auth()->user();
		return view('profile.index', compact('user'));
	}

	public function edit()
	{
		$profile = auth()->user();

		return view('profile.edit', compact('profile'));
	}

	public function update(Request $request)
	{
		if (!auth()->user()->id) {
			session()->flash('error', 'You are not logged in.');

			return redirect('/login');
		}
		$request->validate([
			'name' => 'required|string|min:4',
			'email' => 'required|email|unique:users,id',
			'avatar' => 'image'
		]);


		$profile = User::find(auth()->user()->id);

		if ($profile) {
			if (request()->hasFile('avatar')) {
				$avatar = Storage::putFile('images/user', $request->file('avatar'));
				$profile->avatar = $avatar;
			}

			$profile->name = $request->name;
			$profile->email = $request->email;

			$profile->save();

			session()->flash('message', 'Your profile has been updated');

			return redirect()->back();
		} else {
			session()->flash('error', 'User could not be found');
		}
	}
}
