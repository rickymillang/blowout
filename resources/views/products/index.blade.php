@extends('layouts.app')

@section('heading', 'View Products')

@section('content')
    <a href="/products/create" class="btn btn-success">Add Product</a>

    <hr>

    <table class="table table-striped table-hover" id="table">
        <thead>
            <tr>

                <th></th>
                <th>Name</th>
                <th>Description</th>
                <th>Product Type</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td><img src="{{ asset("storage/".$product->image) }}"style="max-width:100px;" height="35px" width="35px"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->product_type_id }}</td>
                    <td>{{ $product->price }}</td>

                    <td>
                        <a href="/products/{{ $product->id }}/edit" class="btn btn-warning btn-xs">Edit</a>

                        <a href="#" class="btn btn-danger btn-xs">Delete</a>
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