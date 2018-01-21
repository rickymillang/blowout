@extends('layouts.app')

@section('heading', 'Edit Product')

@section('content')
	<div class="container" style="margin-bottom:10px;">
        <div class="row">
            <div class="col-sm-12">
                <a href="/products/" class="btn btn-success">View Products</a>
            </div>
        </div>
    </div>
    <hr>
    <form class="form-horizontal" method="POST" action="/products/{{ $product->id }}" enctype="multipart/form-data">
    	<div class="col-sm-12">
    		@if ($message = session('message'))
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
					</button>
					<strong>Success!</strong> {{ $message }}
				</div>
            @endif
    	</div>
		{{ csrf_field() }}
		{{ method_field('PATCH')}}
		<div class="form-group">
			<label for="name" class="col-md-2 col-md-offset-2 control-label">Product Name</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="name" value="{{ $product->name }}">
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-md-2 col-md-offset-2 control-label">Description</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="description" value="{{ $product->description }}">
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
				<input type="number" class="form-control" name="price" value="{{ $product->price }}">
			</div>
		</div>
		<div class="form-group">
			<label for="photo" class="col-md-2 col-md-offset-2 control-label">Image</label>
			<div class="col-md-6">
				<input id="avatar" type="file" name="image" value="{{ $product->image }}">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button class="btn btn-primary btn-fullwidth">Submit</button>
			</div>
		</div>
    </form>
@endsection