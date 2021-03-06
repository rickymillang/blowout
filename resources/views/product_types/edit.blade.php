@extends('template.layouts.master')

@section('title', 'Product Types')

@section('breadcrumbs')
    <li>
        <a href="/product_types">Product Types</a>
    </li>
    <li class="active">
        <strong>Edit Product Type</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
			<h5>Edit Product Type</h5>
	    </div>

	    <div class="ibox-content">
		    <a href="/product_types/" class="btn btn-success">View Product Types</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/product_types/{{ $product_type->id }}">
				{{ csrf_field() }}
				{{ method_field('PATCH')}}
				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Name <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="{{ $product_type->name }}">
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