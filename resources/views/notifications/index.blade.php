@extends('layouts.app')

@section('heading', 'View Notifications')

@section('content')
    @foreach(Auth::user()->unreadNotifications as $notification)
        <ul>
            @include ('notifications.' . snake_case(class_basename($notification->type)))
        </ul>

        <hr>
    @endforeach

    @if(count(Auth::user()->unreadNotifications))
        <form action="/profile/{{ Auth::id() }}/notifications" method="POST">
            {{ method_field('DELETE')}}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-sm btn-danger">
                Mark all as read
            </button>
        </form>
    @elseif(!count(Auth::user()->unreadNotifications))
        <h5><em>There are no new notifications</em></h5>
    @endif
@endsection