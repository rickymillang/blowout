@extends('template.layouts.master')

@section('title', 'Packages')

@section('breadcrumbs')
    <li>
        <a href="/packages">Packages</a>
    </li>
    <li class="active">
        <strong>Add Package</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
	    	<h5>Add Package</h5>
	    </div>
	    <div class="ibox-content">
		    <a href="/packages" class="btn btn-success">View Packages</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/packages">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Name <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name">
					</div>
				</div>

				<div class="form-group">
					<label for="description" class="col-md-2 col-md-offset-2 control-label">Description <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="description">
					</div>
				</div>

				<div class="form-group">
		            <label for="items" class="col-md-2 col-md-offset-2 control-label">Items</label>
					<div class="col-md-6">
						<select id="items" class="form-control" name="items">
							<option value="1">Product</option>
							<option value="2">Service</option>

		            	</select>
					</div>
		        </div>

				<div class="form-group" id="product-view">
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

		        <div class="form-group" id="service-view">
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
					<label for="price" class="col-md-2 col-md-offset-2 control-label">Price <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="number" class="form-control" name="price">
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

@section('custom_js')
	<script>
		$(document).ready(function () {
			$('#service-view').hide();
			$('#product').prop('required',true);
			$('#items').on('change', function(e) {
				e.preventDefault();

				var item = $('#items option:selected').val();

				if (item == 1) {
					$('#product-view').show();
					$('#service-view').hide();
					$('#product').prop('required',true);
					$('#service').prop('required',false);
				} else if (item == 2) {
					$('#service-view').show();
					$('#product-view').hide();
					$('#service').prop('required',true);
					$('#product').prop('required',false);
				}
			});
		});
	</script>


@endsection