@extends('template.layouts.master')

@section('title', 'Questions')

@section('breadcrumbs')
    <li>
        <a href="/questions">Questions</a>
    </li>
    <li class="active">
        <strong>Edit Question</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
			<h5>Edit Question</h5>
	    </div>

	    <div class="ibox-content">
		    <a href="/questions" class="btn btn-success">View Questions</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/questions/{{ $question->id }}">
				{{ csrf_field() }}
				{{ method_field('PATCH')}}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Question</label>
					<div class="col-md-6">
						<input type="text" class="form-control" value="{{ $question->question }}" readonly>
					</div>
				</div>

				<div class="form-group">
					<label for="item" class="col-md-2 col-md-offset-2 control-label">Item <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="item">
					</div>
				</div>

				<div class="form-group">
					<label for="item" class="col-md-2 col-md-offset-2 control-label">Price</label>
					<div class="col-md-6">
						<input type="number" class="form-control" name="price">
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