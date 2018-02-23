@extends('template.layouts.auth.master')

@section('title', 'Home')

@section('content')
    <p>Login in. To see it in action.</p>

    <form class="m-t" role="form" action="/login" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" required value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

        <a class="btn btn-block btn-social btn-facebook" href="{{ url('/login/facebook') }}">
            <span class="fa fa-facebook"></span> Sign in with Facebook
        </a>

        <a class="btn btn-block btn-social btn-google" href="{{ url('/login/google') }}">
            <span class="fa fa-google"></span> Sign in with Google
        </a>

        <br />

        <a href="#"><small>Forgot password?</small></a>

        <p class="text-muted text-center"><small>Do not have an account?</small></p>

        <a class="btn btn-sm btn-white btn-block" href="/register">Create an account</a>
    </form>
@endsection

@section('custom_css')
    <link href="{{ asset('template/css/plugins/bootstrapSocial/bootstrap-social.css') }}" rel="stylesheet">
@endsection