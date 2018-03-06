@extends('template.layouts.invoice.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				{{ $invoice->user->name }}
				<a href="javascript:window.print()" class="btn btn-small btn-success pull-right no-print">Print 🖨</a>
			</div>
		</div>
	</div>
@endsection

@section('custom_css')
	<style>
		@media print {
			.no-print {
				display: none;
			}
			.no-border-print {
				border: 0;
			}
			.print, .print > .header > h5, .print > .header > h4 {
				font-size:120%;
			}
			hr {
				display: none;
			}
			.header {
				margin-bottom:50px;
			}
		}
	</style>
@endsection