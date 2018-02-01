@extends('layouts.app')

@section('heading', 'Add Establishment Type')

@section('content')
    <a href="/establishment_types" class="btn btn-success">View Establishment Types</a>

    <hr>

    <form class="form-horizontal" method="POST" action="/establishment_types">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name" class="col-md-2 col-md-offset-2 control-label">Name</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="name">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button class="btn btn-primary">Submit</button>
			</div>
		</div>
    </form>
@endsection