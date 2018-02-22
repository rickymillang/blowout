@extends('template.layouts.master')

@section('title', 'Establishment')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Edit My Establishment</h5>
        </div>
        <div class="ibox-content">
            <form class="form-horizontal" method="POST" action="/establishments/{{ $establishment->id }}" enctype="multipart/form-data">
           		{{ csrf_field() }}
                {{ method_field('PATCH') }}

           		<div class="form-group">
           			<label for="name" class="col-md-2 col-md-offset-2 control-label">Name <span class="text-danger">*</span></label>
           			<div class="col-md-6">
           				<input type="text" name="name" id="name" class="form-control" value="{{ $establishment->name }}" />
           			</div>
           		</div>

                <div class="form-group">
                    <label for="description" class="col-md-2 col-md-offset-2 control-label">Description <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="description" id="description" class="form-control" value="{{ $establishment->description }}" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="col-md-2 col-md-offset-2 control-label">Phone <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ $establishment->phone }}" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-2 col-md-offset-2 control-label">Email <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="email" name="email" id="email" class="form-control" value="{{ $establishment->email }}" />
                    </div>
                </div>

           		<div class="form-group">
                       <label for="address" class="col-md-2 col-md-offset-2 control-label">Address <span class="text-danger">*</span></label>
           			<div class="col-md-6">
           				<input type="text" name="address" id="address" class="form-control" value="{{ $establishment->address }}" />
           			</div>
                 </div>

                 <div class="form-group">
                    <label for="owner_name" class="col-md-2 col-md-offset-2 control-label">Owner Name <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="owner_name" id="owner_name" class="form-control" value="{{ $establishment->owner_name }}" />
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
           				<button class="btn btn-primary btn-fullwidth">Update</button>
           			</div>
           		</div>

              @include('template.partials.required')
            </form>
        </div>
    </div>
@endsection