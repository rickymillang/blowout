@extends('template.layouts.auth.master')

@section('title', 'Register')

@section('content')
    <p>Register. To see it in action.</p>

    <form class="m-t" role="form" action="/register" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="name" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}"required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

        <a href="#"><small>Forgot password?</small></a>

        <p class="text-muted text-center"><small>Already have an account?</small></p>
        <a class="btn btn-sm btn-white btn-block" href="/login">Login</a>
    </form>
@endsection

