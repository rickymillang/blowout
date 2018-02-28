<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
    	$messages = Message::whereIn('id', function($query) {
                $query->selectRaw('max(`id`)')
                    ->from('messages')
                    ->where('to_user_id', '=', auth()->user()->id)
                    ->orWhere('from_user_id', '=', auth()->user()->id)
                    ->groupBy('to_user_id', 'from_user_id');
            })->select('to_user_id', 'from_user_id', 'message', 'created_at')
            ->orderBy('created_at')
            ->get();
    	return view('messages.index', compact('messages'));
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            session()->flash('error', 'User does not exist');

            return redirect()->back();
        }
    	$messages=  Message::where(function ($query) use($id) {
                $query->where('to_user_id', auth()->user()->id)
                    ->where('from_user_id', $id);
            })->orWhere(function ($query) use($id) {
                $query->where('from_user_id', auth()->user()->id)
                    ->where('to_user_id', $id);
            })->get();
    	return view('messages.show', compact('messages', 'user'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'message' => 'required'
        ]);

        $message = Message::create([
            'message' => $request->message,
            'from_user_id' => auth()->user()->id,
            'to_user_id' => $id
        ]);

        session()->flash('message', 'Your message has been sent');

        return redirect()->back();
    }

    public function SendMessage(Request $request)
    {
        $result = false;



        $message = Message::create([
            'message' => $request->message,
            'from_user_id' => auth()->user()->id,
            'to_user_id' => (int) $request->owner_id
        ]);

        if($message){
            $result = true;
        }


      return json_encode($result);
    }
}
