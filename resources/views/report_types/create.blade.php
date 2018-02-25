@extends('template.layouts.master')

@section('title', 'Report Types')

@section('breadcrumbs')
    <li>
        <a href="/report_types">Report Types</a>
    </li>
    <li class="active">
        <strong>Add Report Type</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
	    	<h5>Add Report Type</h5>
	    </div>
	    <div class="ibox-content">
		    <a href="/report_types" class="btn btn-success">View Report Types</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/report_types">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Name <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name">
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