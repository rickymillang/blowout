@extends('template.layouts.master')

@section('title', 'Profile')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="widget lazur-bg p-xl text-center text-uppercase">
                <img alt="image" class="img-circle" style="max-width:64px;" src="{{ asset(auth()->user()->avatar) }}" />
                <h1>
                    {{ $user->name }}
                </h1>
                <ul class="list-unstyled m-t-md">
                    <li>
                        <span class="fa fa-envelope fa-2x m-r-xs"></span>
                        <h3>Email:</h3>
                        <h4>{{ $user->email }}</h4>
                    </li>

                </ul>
                <a href="/profile/edit" class="btn btn-sm btn-success">Edit Profile</a>
            </div>
        </div>
    </div>
@endsection