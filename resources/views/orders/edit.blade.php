@extends('template.layouts.master')

@section('title', 'Orders')

@section('breadcrumbs')
    <li>
        <a href="/orders">Order</a>
    </li>
    <li class="active">
        <strong>Edit Order Status</strong>
    </li>
@endsection

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
	    	<h5>Edit Order Status</h5>
	    </div>
	    <div class="ibox-content">
		    <a href="/orders" class="btn btn-success">View Orders</a>

		    <hr>

		    <form class="form-horizontal" method="POST" action="/orders/{{ $order->id }}">
				{{ csrf_field() }}
				{{ method_field('PATCH')}}
				<div class="form-group">
					<label for="name" class="col-md-2 col-md-offset-2 control-label">Customer Name</label>
					<div class="col-md-6">
						<input type="text" class="form-control" value="{{ $order->users->name }}" readonly>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 col-md-offset-2 control-label">Delivery Date</label>
					<div class="col-md-6">
						<input type="datetime" class="form-control" value="{{ $order->delivery_date }}" readonly>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 col-md-offset-2 control-label">Delivery Address</label>
					<div class="col-md-6">
						<input type="text" class="form-control" value="{{ $order->delivery_address }}" readonly>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 col-md-offset-2 control-label">Payment Type</label>
					<div class="col-md-6">
						<input type="text" class="form-control" value="{{ $order->payment_types->name }}" readonly>
					</div>
				</div>

				<div class="form-group">
		            <label for="product_type" class="col-md-2 col-md-offset-2 control-label">Status <span class="text-danger">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="status">
		                	<option>Select Order Status</option>
		                	@if(auth()->user()->hasRole('establishment.admin'))
			                	@if($order->status == 7)
				                	<option value="7" {{ $order->status == 7 ? 'selected' : '' }}>Pending</option>
				                	<option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Approved</option>
				                	<option value="4" {{ $order->status == 4 ? 'selected' : '' }}>Declined</option>
			                	@elseif($order->status == 1)
			                		<option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Approved</option>
			                		<option value="5" {{ $order->status == 5 ? 'selected' : '' }}>On-Delivery</option>
								@elseif($order->status == 5)
									<option value="5" {{ $order->status == 5 ? 'selected' : '' }}>On-Delivery</option>
									<option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Completed</option>
			                	@endif
			                @elseif(auth()->user()->hasRole('customer'))
			                	<option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Canceled</option>
		                	@endif

		            	</select>
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