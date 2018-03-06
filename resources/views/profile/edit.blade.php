@extends('template.layouts.master')

@section('title', 'Profile')

@section('breadcrumbs')
    <li>
        <a href="/profile">Profile</a>
    </li>
    <li class="active">
        <strong>Edit Profile</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
			<h5>Edit Profile</h5>
	    </div>

	    <div class="ibox-content">
		    <a href="/profile/" class="btn btn-success">View Profile</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/profile" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PATCH')}}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Name <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="{{ $profile->name }}">
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-md-2 col-md-offset-2 control-label">Email <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="email" class="form-control" name="email" value="{{ $profile->email }}">
					</div>
				</div>

				<div class="form-group">
					<label for="avatar" class="col-md-2 col-md-offset-2 control-label">Avatar</label>
					<div class="col-md-6">
						<input id="avatar" type="file" name="avatar" value="{{ $profile->avatar }}">
						<img src="{{ asset($profile->avatar) }}" alt="" style="max-width:100px;max-weight:100px;margin-top:20px;">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button class="btn btn-primary btn-fullwidth">Submit</button>
					</div>
				</div>

				@include('template.partials.required')
		    </form>
		</div>
	</div>
@endsection