@extends('layouts.app')

@section('heading', 'Edit Establishment Type')

@section('content')
	<div class="container" style="margin-bottom:10px;">
        <div class="row">
            <div class="col-sm-12">
                <a href="/establishment_types" class="btn btn-success">View Establishment Types</a>
            </div>
        </div>
    </div>
    <hr>
    <form class="form-horizontal" method="POST" action="/establishment_types/{{ $establishment_type->id }}">
		{{ csrf_field() }}
		{{ method_field('PATCH')}}
		<div class="form-group">
			<label for="name" class="col-md-2 col-md-offset-2 control-label">Name</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="name" value="{{ $establishment_type->name }}">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button class="btn btn-primary btn-fullwidth">Submit</button>
			</div>
		</div>
    </form>
@endsection