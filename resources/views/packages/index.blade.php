@extends('template.layouts.master')

@section('title', 'Packages')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Packages</h5>
        </div>
        <div class="ibox-content">
            <a href="/packages/create" class="btn btn-success">Add Package</a>

            <hr>

            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Products</th>
                        <th>Services</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($packages as $package)
                        <tr>
                            <td>{{ $package->name }}</td>
                            <td>
                                <ul>
                                    @foreach($package->products as $product)
                                        <li>{{ $product->name }}: {{ $product->pivot->quantity }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach($package->services as $service)
                                        <li>{{ $service->name }}: {{ $product->pivot->quantity }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $package->quantity}}</td>
                            <td>{{ $package->price }}</td>
                            <td>
                                <a href="/packages/{{ $package->id}}/edit" class="btn btn-success btn-xs">Add Items</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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