@extends('template.layouts.master')

@section('title', 'Questions')

@section('breadcrumbs')
    <li>
        <a href="/questions">Questions</a>
    </li>
    <li class="active">
        <strong>Add Question</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
			<h5>Add Question</h5>
	    </div>
	    <div class="ibox-content">
		    <a href="/questions" class="btn btn-success">View Questions</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/questions">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Question <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="question">
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