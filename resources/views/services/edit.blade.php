@extends('template.layouts.master')

@section('title', 'Services')

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
	    	<h5>Edit Service</h5>
	    </div>
	    <div class="ibox-content">
		    <a href="/services/" class="btn btn-success">View Services</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/services/{{ $service->id }}">
				{{ csrf_field() }}
				{{ method_field('PATCH')}}
				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Service Name</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="{{ $service->name }}">
					</div>
				</div>
				<div class="form-group">
					<label for="description" class="col-md-2 col-md-offset-2 control-label">Description</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="description" value="{{ $service->description }}">
					</div>
				</div>
				<div class="form-group">
					<label for="price" class="col-md-2 col-md-offset-2 control-label">Price</label>
					<div class="col-md-6">
						<input type="number" class="form-control" name="price" value="{{ $service->price }}">
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