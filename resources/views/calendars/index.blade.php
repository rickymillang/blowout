@extends('template.layouts.master')

@section('title', 'Calendar')

@section('content')
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
	    	<h5>View Calendar</h5>
	    </div>
	    <div class="ibox-content">
			<div id="calendar"></div>
		</div>
	</div>
@endsection

@section('custom_css')
	<link href="{{ asset('template/css/plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
	<link href="{{ asset('template/css/plugins/fullcalendar/fullcalendar.print.css') }}" rel='stylesheet' media='print'>
@endsection

@section('custom_js')
	<script src="{{ asset('template/js/plugins/fullcalendar/moment.min.js') }}"></script>
	<script src="{{ asset('template/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
	<script>
		$(document).ready(function() {
		    $('#calendar').fullCalendar({
		        header: {
		            left: 'prev,next today',
		            center: 'title',
		            right: 'month,agendaWeek,agendaDay'
		        },
		        editable: false,
		        droppable: false,
		        events: [
		        	@foreach($orders as $order)
		            {
		                title: '{{ $order->users->name }}: {{ $order->delivery_address }}',
		                start: '{{ $order->delivery_date }}',
		                url: '{{ url('orders') }}'
		            },
		            @endforeach

		        ]
		    });
		});
	</script>
@endsection