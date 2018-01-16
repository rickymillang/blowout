@extends('layouts.app')

@section('heading', 'Register Establishment')

@section('content')
   <form action="">
        <div class="form-group">
            <select name="establishment_type" id="establishment_type" class="form-control">
                <option >select establishment type</option>
            </select>
        </div>
        <div class="form">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control"/>
        </div>

   </form>
@endsection