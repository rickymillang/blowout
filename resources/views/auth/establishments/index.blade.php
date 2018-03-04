@extends('template.layouts.auth.master')

@section('title', 'Register')

@section('content')
    <h2>Register an Establishment</h2>

    <form class="m-t" role="form" action="/establishment/register" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>User Details</h3>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
        </div

        <hr>
        <h3>Establishment Details</h3>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Establishment Name" name="establishment_name" value="{{ old('name') }}"required>
        </div>

        <div class="form-group">
            <select class="form-control" name="establishment_type">
                <option value="">Establishment Type</option>
                @foreach($establishment_types as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Description" name="description" value="{{ old('description') }}"required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Owner Name" name="owner_name" value="{{ old('owner_name') }}"required>
        </div>

        <div class="form-group">
            <input type="number" class="form-control" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Address" name="address" value="{{ old('address') }}" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" required>
        </div>

        <div class="form-group">
            <label for="business_permit">Business Permit</label>
            <input type="file" class="form-control" name="business_permit" required>
        </div>

        <div class="form-group">
            <input type="checkbox" name="terms" required> I agree to the <a href="/agreement">Terms and Conditions</a>
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

        <p class="text-muted text-center"><small>Already have an account?</small></p>
        <a class="btn btn-sm btn-white btn-block m-b-lg" href="/login">Login</a>
    </form>
@endsection

