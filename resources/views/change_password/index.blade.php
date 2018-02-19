@extends('template.layouts.master')

@section('title', 'Change Password')

@section('content')
	<div class="ibox float-e-margins">
        <div class="ibox-title">
        	<h5>Change Password</h5>
        </div>
        <div class="ibox-content">
		    <form class="form-horizontal" method="POST" action="/change_password">
				{{ csrf_field() }}
				{{ method_field('PATCH')}}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Old Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="name">
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="col-md-2 col-md-offset-2 control-label">New Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password">
					</div>
				</div>

				<div class="form-group">
					<label for="password_confirmation" class="col-md-2 col-md-offset-2 control-label">Re-enter Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control" name="password_confirmation">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button class="btn btn-primary btn-fullwidth">Submit</button>
					</div>
				</div>
		    </form>
		</div>
	</div>
@endsection