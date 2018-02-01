@extends('layouts.app')

@section('heading', 'Edit Service')

@section('content')
    <a href="/product_types/" class="btn btn-success">View Product Types</a>

    <hr>

    <form class="form-horizontal" method="POST" action="/product_types/{{ $product_type->id }}">
		{{ csrf_field() }}
		{{ method_field('PATCH')}}
		<div class="form-group">
			<label for="name" class="col-md-2 col-md-offset-2 control-label">Name</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="name" value="{{ $product_type->name }}">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button class="btn btn-primary btn-fullwidth">Submit</button>
			</div>
		</div>
    </form>
@endsection