@extends('template.layouts.master')

@section('title', 'Administrators')

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
	    	<h5>Edit Administrator</h5>
	    </div>
	    <div class="ibox-content">
			<a href="/administrators" class="btn btn-success">View Administrators</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/administrators/{{ $administrator->id }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PATCH')}}
				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Name <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="{{ $administrator->name }}">
					</div>
				</div>
				<div class="form-group">
					<label for="description" class="col-md-2 col-md-offset-2 control-label">Email <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="email" class="form-control" name="email" value="{{ $administrator->email }}">
					</div>
				</div>
				<div class="form-group">
					<label for="photo" class="col-md-2 col-md-offset-2 control-label">Image</label>
					<div class="col-md-6">
						<input id="avatar" type="file" name="avatar" value="{{ $administrator->avatar }}">
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