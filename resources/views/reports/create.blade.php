@extends('template.layouts.master')

@section('title', 'Report')

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
	    	<h5>Submit Report</h5>
	    </div>
	    <div class="ibox-content">
		    <form class="form-horizontal" method="POST" action="/reports">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="title" class="col-md-2 col-md-offset-2 control-label">Title</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="title">
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-md-2 col-md-offset-2 control-label">Message</label>
					<div class="col-md-6">
						<textarea type="text" class="form-control" name="message"></textarea>
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