@extends('template.layouts.master')

@section('title', 'Home')

@section('content')
	@if(auth()->user()->hasRole('establishment.admin'))
		<div class="row">
			<div class="col-lg-7">
				<div class="widget blue-bg p-xl text-center text-uppercase">
		            <h1>
		                {{ $establishment->name }}
		            </h1>
				    <ul class="list-unstyled m-t-md">
				    	<li>
				            <span class="fa fa-user fa-2x m-r-xs"></span>
				            <h3>Owner:</h3>
				            <h4>{{ $establishment->owner_name }}</h4>
				        </li>
				        <li>
				            <span class="fa fa-envelope fa-2x m-r-xs"></span>
				            <h3>Email:</h3>
				            <h4>{{ $establishment->email }}</h4>
				        </li>
				        <li>
				            <span class="fa fa-home fa-2x m-r-xs"></span>
				            <h3>Address:</h3>
				            <h4>{{ $establishment->address }}</h4>
				        </li>
				        <li>
				            <span class="fa fa-phone fa-2x m-r-xs"></span>
				            <h3>Contact:</h3>
				            <h4>{{ $establishment->phone }}</h4>
				        </li>
				    </ul>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="col-lg-12">
				    <div class="widget style1 lazur-bg">
				        <div class="row vertical-align">
				            <div class="col-xs-3">
				                <i class="fa fa-star fa-3x"></i>
				            </div>
				            <div class="col-xs-9 text-right">
				                <h2 class="font-bold">{{ $rating }}</h2>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="col-lg-12">
				    <div class="widget style1 lazur-bg">
				        <div class="row vertical-align">
				            <div class="col-xs-3">
				                <i class="fa fa-users fa-3x"></i>
				            </div>
				            <div class="col-xs-9 text-right">
				                <h2 class="font-bold">{{ $rating }}</h2>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
			    <div class="widget style1 lazur-bg">
			        <div class="row">
			            <div class="col-xs-4">
			                <i class="fa fa-tag fa-5x"></i>
			            </div>
			            <div class="col-xs-8 text-right">
			                <h3>Product Types</h3>
			                <h2 class="font-bold">{{ $product_types_count }}</h2>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="col-lg-3">
			    <div class="widget style1 yellow-bg">
			        <div class="row">
			            <div class="col-xs-4">
			                <i class="fa fa-cutlery fa-5x"></i>
			            </div>
			            <div class="col-xs-8 text-right">
			                <h3>Products</h3>
			                <h2 class="font-bold">{{ $products_count }}</h2>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="col-lg-3">
			    <div class="widget style1 navy-bg">
			        <div class="row">
			            <div class="col-xs-4">
			                <i class="fa fa-suitcase fa-5x"></i>
			            </div>
			            <div class="col-xs-8 text-right">
			                <h3>Services</h3>
			                <h2 class="font-bold">{{ $services_count }}</h2>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="col-lg-3">
			    <div class="widget style1 red-bg">
			        <div class="row">
			            <div class="col-xs-4">
			                <i class="fa fa-dropbox fa-5x"></i>
			            </div>
			            <div class="col-xs-8 text-right">
			                <h3>Packages</h3>
			                <h2 class="font-bold">{{ $packages_count }}</h2>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	@elseif(auth()->user()->hasRole('superadmin'))
		<div class="row">
			<div class="col-lg-3">
			    <div class="widget style1 lazur-bg">
			        <div class="row">
			            <div class="col-xs-4">
			                <i class="fa fa-tag fa-5x"></i>
			            </div>
			            <div class="col-xs-8 text-right">
			                <h3>Establishment Types</h3>
			                <h2 class="font-bold">{{ $establishment_types_count }}</h2>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="col-lg-3">
			    <div class="widget style1 yellow-bg">
			        <div class="row">
			            <div class="col-xs-4">
			                <i class="fa fa-building fa-5x"></i>
			            </div>
			            <div class="col-xs-8 text-right">
			                <h3>Establishments</h3>
			                <h2 class="font-bold">{{ $establishments_count }}</h2>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="col-lg-3">
			    <div class="widget style1 navy-bg">
			        <div class="row">
			            <div class="col-xs-4">
			                <i class="fa fa-users fa-5x"></i>
			            </div>
			            <div class="col-xs-8 text-right">
			                <h3>Customers</h3>
			                <h2 class="font-bold">{{ $customers_count }}</h2>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="col-lg-3">
			    <div class="widget style1 red-bg">
			        <div class="row">
			            <div class="col-xs-4">
			                <i class="fa fa-user fa-5x"></i>
			            </div>
			            <div class="col-xs-8 text-right">
			                <h3>Administrators</h3>
			                <h2 class="font-bold">{{ $administrators_count }}</h2>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	@endif
@endsection
