@extends('template.layouts.master')

@section('title', 'Services')

@section('breadcrumbs')
    <li>
        <a href="/services">Services</a>
    </li>
    <li class="active">
        <strong>Add Service</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
	    	<h5>Add Service</h5>
	    </div>
	    <div class="ibox-content">
		    <a href="/services/" class="btn btn-success">View Services</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/services">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Service Name <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name">
					</div>
				</div>
				<div class="form-group">
					<label for="description" class="col-md-2 col-md-offset-2 control-label">Description <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<textarea type="text" class="form-control" name="description"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="price" class="col-md-2 col-md-offset-2 control-label">Price <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="number" class="form-control" name="price">
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