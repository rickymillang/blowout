@extends('layouts.app')

@section('heading', 'Add Products')

@section('content')
    <a href="/products/" class="btn btn-success">View Products</a>

    <hr>
    <form class="form-horizontal" method="POST" action="/products" enctype="multipart/form-data">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name" class="col-md-2 col-md-offset-2 control-label">Product Name</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="name">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-md-2 col-md-offset-2 control-label">Description</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="description">
			</div>
		</div>
		<div class="form-group">
            <label for="product_type" class="col-md-2 col-md-offset-2 control-label">Product Type</label>
			<div class="col-md-6">
				<select id="product_type" class="form-control" name="product_type">
                	@foreach($product_types as $key => $value)
                		<option value="{{ $key }}">{{ $value }}</option>
                	@endforeach
            	</select>
			</div>

        </div>
		<div class="form-group">
			<label for="price" class="col-md-2 col-md-offset-2 control-label">Price</label>
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
    </form>
@endsection