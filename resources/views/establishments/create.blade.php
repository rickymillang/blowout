@extends('template.layouts.master')

@section('title', 'Establishment')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Create Establishment</h5>
        </div>
        <div class="ibox-content">
            <form class="form-horizontal" method="POST" action="/establishments" enctype="multipart/form-data"
                  xmlns="http://www.w3.org/1999/html">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-md-2 col-md-offset-2 control-label">Establishment Name <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="name" id="name" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-2 col-md-offset-2 control-label">Description <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <textarea type="text" name="description" id="description" class="form-control"/> </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="owner_name" class="col-md-2 col-md-offset-2 control-label">Owner Name <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="owner_name" id="owner_name" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-2 col-md-offset-2 control-label">Email Address <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="email" name="email" id="email" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-md-2 col-md-offset-2 control-label">Phone <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="number" name="phone" id="phone" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-md-2 col-md-offset-2 control-label">Address <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input type="text" name="address" id="address" class="form-control"/>
                    </div>

                </div>
                <div class="form-group">
                    <label for="establishment_type" class="col-md-2 col-md-offset-2 control-label">Type <span class="text-danger">*</span></label>
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
                    <label for="image" class="col-md-2 col-md-offset-2 control-label">Image</label>
                    <div class="col-md-6">
                        <input id="avatar" type="file" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dti_permit" class="col-md-2 col-md-offset-2 control-label">DTI Permit <span class="text-danger">*</span></label>
                    <div class="col-md-6">
                        <input id="dti_permit" type="file" name="dti_permit">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                    <input type="checkbox" name="terms" required> I agree to the <a href="/agreement">Terms and Conditions</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button class="btn btn-primary btn-fullwidth">Register</button>
                    </div>
                </div>

                @include('template.partials.required')
            </form>
        </div>
    </div>
@endsection