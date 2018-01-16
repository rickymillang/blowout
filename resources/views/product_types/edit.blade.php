@extends('layouts.app')

@section('heading', 'Edit Product Type')

@section('content')
	<div class="container" style="margin-bottom:10px;">
        <div class="row">
            <div class="col-sm-12">
                <a href="/product_types/" class="btn btn-success">View Product Types</a>
            </div>
        </div>
    </div>
    <hr>
    <form class="form-horizontal" method="POST" action="/products">
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

		<div class="form-group">
			<label for="name" class="col-md-2 col-md-offset-2 control-label">Product Type</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="name" value="{{ $product_type->name">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button class="btn btn-primary btn-fullwidth">Submit</button>
			</div>
		</div>
    </form>
@endsection