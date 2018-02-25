@extends('template.layouts.master')

@section('title', 'Administrators')

@section('breadcrumbs')
    <li>
        <a href="/administrators">Administrators</a>
    </li>
    <li class="active">
        <strong>Add Administrator</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
        <div class="ibox-title">
        	<h5>Add Administrator</h5>
        </div>
        <div class="ibox-content">
		    <a href="/administrators" class="btn btn-success">View Administrators</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/administrators">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Name <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-md-2 col-md-offset-2 control-label">Email <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="email" class="form-control" name="email">
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-md-2 col-md-offset-2 control-label">Password <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password">
					</div>
				</div>
				<div class="form-group">
					<label for="password_confirmation" class="col-md-2 col-md-offset-2 control-label">Re-Type Password <span class="text-danger">*</span></label>
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

				@include('template.partials.required')
		    </form>
		</div>
	</div>
@endsection