@extends('layouts.app')

@section('heading', 'View Messages')

@section('content')
    @foreach($messages as $message)
        <div style="border:#3097D1 solid 1px;padding:5px 8px;border-radius:2px;">
            <h4>
				@if($message->from_user_id == auth()->user()->id)
					<a href="/messages/{{ $message->to_user_id }}">{{ $message->receiver->name }}</a>
        		@elseif($message->to_user_id == auth()->user()->id)
					<a href="/messages/{{ $message->from_user_id }}">{{ $message->sender->name }}</a>
        		@endif
        		</a>
            	{{ $message->message }}
            	<span class="pull-right">{{ $message->created_at->diffForHumans() }}</span>
            </h4>
        </div>
    @endforeach
@endsection
