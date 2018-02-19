@extends('template.layouts.master')

@section('title', 'Messages')

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
		    <h4><a href="/messages">&lt; Back to Messages</a></h4>
		    <hr>
			<h4>{{ $user->name }}</h4>
			<div class="container-fluid">
				@foreach($messages as $message)
					<div class="row">
						<div
						@if($message->to_user_id == auth()->user()->id)
							class="pull-left" style="background-color: #fff;padding:5px 10px;margin-top:5px;color:#3097D1;border-radius:7px;max-width:500px;border: solid 1px #3097D1;" data-toggle="tooltip" data-placement="bottom" title="{{ $message->created_at }}"
						@elseif($message->from_user_id == auth()->user()->id)
							class="pull-right" style="background-color: #3097D1;padding:5px 10px;margin-top:5px;color:#fff;border-radius:7px;max-width:500px;" data-toggle="tooltip" data-placement="bottom" title="{{ $message->created_at }}"
						@endif
						>
						<p>{{ $message->message }}</p>

					</div>

					</div>
				@endforeach
			</div>

			<form method="POST" action="/messages/{{ $user->id }}"role="form" style="margin-top:10px;">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-xs-12">
						<div class="input-group input-group-md">
							<input type="text" class="form-control" name="message"/>
							<div class="input-group-btn">
								<button type="submit" class="btn btn-success">Send</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection
