@extends('template.layouts.master')

@section('title', 'Messages')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Messages</h5>
        </div>

        <div class="ibox-content">
            @foreach($messages as $message)
                <div style="border:#3097D1 solid 1px;padding:5px 8px;border-radius:2px;margin-bottom:5px;">
                    <h4>
        				@if($message->from_user_id == auth()->user()->id)
        					<a href="/messages/{{ $message->to_user_id }}/show">{{ $message->receiver->name }}</a>
                		@elseif($message->to_user_id == auth()->user()->id)
        					<a href="/messages/{{ $message->from_user_id }}/show">{{ $message->sender->name }}</a>
                		@endif
                		</a>
                    	<em>{{ $message->message }}</em>
                    	<span class="pull-right">{{ $message->created_at->diffForHumans() }}</span>
                    </h4>
                </div>
            @endforeach
        </div>
    </div>
@endsection
