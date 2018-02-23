@extends('template.layouts.master')

@section('title', 'Packages')

@section('content')
	<div class="ibox float-e-margins">
        <div class="ibox-title">
        	<h5>Edit Package</h5>
        </div>
        <div class="ibox-content">
		    <a href="/packages" class="btn btn-success">View Packages</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/establishment_types">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Name <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="{{ $package->name }}" disabled>
					</div>
				</div>

				<div class="form-group">
		            <label for="product" class="col-md-2 col-md-offset-2 control-label">Product</label>
					<div class="col-md-6">
						<select id="product" class="form-control" name="product">
							<option value="">Select Product</option>
		                	@foreach($products as $key => $value)
		                		<option value="{{ $key }}">{{ $value }}</option>
		                	@endforeach
		            	</select>
					</div>
		        </div>
		        <div class="form-group">
		            <label for="service" class="col-md-2 col-md-offset-2 control-label">Service</label>
					<div class="col-md-6">
						<select id="service" class="form-control" name="service">
							<option value="">Select Service</option>
		                	@foreach($services as $key => $value)
		                		<option value="{{ $key }}">{{ $value }}</option>
		                	@endforeach
		            	</select>
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