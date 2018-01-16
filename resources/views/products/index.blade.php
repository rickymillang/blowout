@extends('layouts.app')

@section('heading', 'View Products')

@section('content')
    <div class="container" style="margin-bottom:10px;">
        <div class="row">
            <div class="col-sm-12">
                <a href="/products/create" class="btn btn-success">Add Product</a>
            </div>
        </div>
    </div>
    <hr>
    <table class="table table-striped table-hover" id="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Product Type</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->product_type_id }}</td>
                    <td>{{ $product->price }}</td>
                    <td><img src="{{ asset('storage/' . $product->image) }}"style="max-width:100px;"></td>
                    <td>
                        <a href="/products/{{ $product->id }}/edit">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('custom_css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.css"/>
@endsection

@section('custom_js')
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#table').DataTable();
} );
</script>
@endsection