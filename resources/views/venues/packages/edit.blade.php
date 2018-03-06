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

		    <form class="form-horizontal" method="POST" action="/venues/{{ $venue->id }}/add-packages">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Name <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="{{ $venue->name }}" disabled1>
					</div>
				</div>

				<div class="form-group">
				    <label for="package" class="col-md-2 col-md-offset-2 control-label">Package Type <span class="text-danger">*<x/span></label>
				    <div class="col-md-6">
				        <select name="package" id="package" class="form-control">
				            <option value="">Select package</option>

				            @foreach($packages as $key => $value)
				                <option value="{{ $key }}">{{ $value }}</option>
				            @endforeach
				        </select>
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