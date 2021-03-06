@extends('template.layouts.master')

@section('title', 'Products')

@section('breadcrumbs')
    <li>
        <a href="/products">Product</a>
    </li>
    <li class="active">
        <strong>Add Products</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
	    	<h5>Add Product</h5>
	   	</div>

        <div class="ibox-content">
		    <a href="/products/" class="btn btn-success">View Products</a>

		    <hr>
		    <form class="form-horizontal" method="POST" action="/products" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Product Name <span class="text-danger">*</span></label>
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
		            <label for="product_type" class="col-md-2 col-md-offset-2 control-label">Product Type <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<select id="product_type" class="form-control" name="product_type">
		                	@foreach($product_types as $key => $value)
		                		<option value="{{ $key }}">{{ $value }}</option>
		                	@endforeach
		            	</select>
					</div>

		        </div>
				<div class="form-group">
					<label for="price" class="col-md-2 col-md-offset-2 control-label">Price <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="price">
					</div>
				</div>
				<div class="form-group">
					<label for="photo" class="col-md-2 col-md-offset-2 control-label">Image</label>
					<div class="col-md-6">
						<input id="avatar" type="file" name="image">
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