@extends('layouts.app')

@section('heading', 'Add Administrators')

@section('content')
	<div class="container" style="margin-bottom:10px;">
        <div class="row">
            <div class="col-sm-12">
                <a href="/administrators" class="btn btn-success">View Administrators</a>
            </div>
        </div>
    </div>
    <hr>
    <form class="form-horizontal" method="POST" action="/administrators">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name" class="col-md-2 col-md-offset-2 control-label">Name</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="name">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-md-2 col-md-offset-2 control-label">Email</label>
			<div class="col-md-6">
				<input type="email" class="form-control" name="email">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-md-2 col-md-offset-2 control-label">Password</label>
			<div class="col-md-6">
				<input type="password" class="form-control" name="password">
			</div>
		</div>
		<div class="form-group">
			<label for="password_confirmation" class="col-md-2 col-md-offset-2 control-label">Re-Type Password</label>
			<div class="col-md-6">
				<input type="password" class="form-control" name="password_confirmation">
			</div>
		</div>

		<div class="form-group">
			<label for="avatar" class="col-md-2 col-md-offset-2 control-label">Avatar</label>
			<div class="col-md-6">
				<input type="file" name="image">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button class="btn btn-primary">Submit</button>
			</div>
		</div>
    </form>
@endsection