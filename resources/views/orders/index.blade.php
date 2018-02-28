@extends('template.layouts.master')

@section('title', 'Orders')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Orders</h5>
        </div>

        <div class="ibox-content">
            @role('establishment.admin')
                <h4>Establishment Orders</h4>
                <table class="table table-striped table-hover" id="table1">
                    <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Customer</th>
                            <th>Products</th>
                            <th>Delivery Address</th>
                            <th>Delivery Date</th>
                            <th>Payment Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($establishment_orders != null)
                            @foreach($establishment_orders as $order)
                                <tr>
                                    <td>{{ '#' . str_pad($order->id, 5, 0, STR_PAD_LEFT) }}</td>
                                    <td>{{ $order->users->name }}</td>
                                    <td>
                                        <ul>
                                            @foreach($order->product_orders as $products)
                                                <li>{{ $products->getItem->name }}</li>
                                            @endforeach
                                        </ul>

                                    </td>
                                    <td>{{ $order->delivery_address }}</td>
                                    <td>{{ $order->delivery_date }}</td>
                                    <td>{{ $order->payment_types->name }}</td>
                                    <td>{{ $order->statuses->name }}</td>
                                    <td>
                                        @if($order->status == 7 || $order->status == 1 || $order->satus == 3)
                                            <a href="/orders/{{ $order->id }}/edit" class="btn btn-xs btn-warning">Edit Status</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <hr>
            @endrole
            @role('customer')
                <h4>Customer Orders</h4>
                <table class="table table-striped table-hover" id="table1">
                    <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Establishment Name</th>
                            <th>Products</th>
                            <th>Delivery Address</th>
                            <th>Delivery Date</th>
                            <th>Payment Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($customer_orders != null)
                            @foreach($customer_orders as $order)
                                <tr>
                                    <td>{{ '#' . str_pad($order->id, 5, 0, STR_PAD_LEFT) }}</td>
                                    <td>{{ $order->establishment->name }}</td>
                                    <td>
                                        <ul>
                                            @foreach($order->product_orders as $products)
                                                <li>{{ $products->getItem->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{ $order->delivery_address }}</td>
                                    <td>{{ $order->delivery_date }}</td>
                                    <td>{{ $order->payment_types->name }}</td>
                                    <td>{{ $order->statuses->name }}</td>
                                    <td>
                                        @if($order->status == 7)
                                            <a href="/orders/{{ $order->id }}/edit" class="btn btn-xs btn-warning">Edit Status</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            @endrole
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