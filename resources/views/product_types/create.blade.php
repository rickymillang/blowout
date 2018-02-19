@extends('template.layouts.master')

@section('title', 'Product Types')

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
			<h5>Add Product Type</h5>
	    </div>
	    <div class="ibox-content">
		    <a href="/product_types/" class="btn btn-success">View Product Types</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/product_types">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Product Type</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button class="btn btn-primary btn-fullwidth">Submit</button>
					</div>
				</div>
		    </form>
		</div>
	</div>
@endsection