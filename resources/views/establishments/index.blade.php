@extends('layouts.app')

@section('heading', 'Register Establishment')

@section('content')


   <form class="form-horizontal" method="POST" action="/establishments" enctype="multipart/form-data">
      <div class="col-sm-12">
                       		@if ($message = session('message'))
                   				<div class="alert alert-success alert-dismissible" role="alert">
                   					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                   					</button>
                   					<strong>Success!</strong> {{ $message }}
                   				</div>
                               @endif
                       	</div>
   		{{ csrf_field() }}


   		<div class="form-group">
   			<label for="name" class="col-md-2 col-md-offset-2 control-label">Name</label>
   			<div class="col-md-6">
   				<input type="text" name="name" id="name" class="form-control"/>
   			</div>
   		</div>
   		<div class="form-group">
               <label for="address" class="col-md-2 col-md-offset-2 control-label">Address</label>
   			<div class="col-md-6">
   				<input type="text" name="address" id="address" class="form-control"/>
   			</div>

         </div>
   		<div class="form-group">
            <label for="establishment_type" class="col-md-2 col-md-offset-2 control-label">Type</label>
            <div class="col-md-6">
                <select name="establishment_type" id="establishment_type" class="form-control">
                    <option >select establishment type</option>
                    @foreach($establishment_types as $key => $value)
                        <option value="{{$key}}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
   		<div class="form-group">
   			<label for="photo" class="col-md-2 col-md-offset-2 control-label">Image</label>
   			<div class="col-md-6">
   				<input id="avatar" type="file" name="image">
   			</div>
   		</div>
   		<div class="form-group">
   			<div class="col-md-6 col-md-offset-4">
   				<button class="btn btn-primary btn-fullwidth">Register</button>
   			</div>
   		</div>
       </form>
@endsection