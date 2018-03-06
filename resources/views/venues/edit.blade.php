@extends('template.layouts.master')

@section('title', 'Venues')

@section('breadcrumbs')
    <li>
        <a href="/venues">Venues</a>
    </li>
    <li class="active">
        <strong>Edit Venue</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
			<h5>Edit Venue</h5>
	    </div>

	    <div class="ibox-content">
		    <a href="/venues/" class="btn btn-success">View Venues</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/venues/{{ $venue->id }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PATCH')}}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Name <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="{{ $venue->name }}">
					</div>
				</div>

				<div class="form-group">
					<label for="address" class="col-md-2 col-md-offset-2 control-label">Address <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="address" value="{{ $venue->address }}">
					</div>
				</div>

				<div class="form-group">
					<label for="minimum_capacity" class="col-md-2 col-md-offset-2 control-label">Minimum Capacity <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="minimum_capacity" value="{{ $venue->minimum_capacity }}">
					</div>
				</div>

				<div class="form-group">
					<label for="maximum_capacity" class="col-md-2 col-md-offset-2 control-label">Maximum Capacity <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="maximum_capacity" value="{{ $venue->maximum_capacity }}">
					</div>
				</div>

				<div class="form-group">
					<label for="price" class="col-md-2 col-md-offset-2 control-label">Price <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="number" class="form-control" name="price" value="{{ $venue->price }}">
					</div>
				</div>

				<div class="form-group">
					<label for="image" class="col-md-2 col-md-offset-2 control-label">image</label>
					<div class="col-md-6">
						<input id="image" type="file" name="image" value="{{ $venue->image }}">
						<img src="{{ asset('storage/' . $venue->image) }}" alt="" style="max-width:100px;max-weight:100px;margin-top:20px;">
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