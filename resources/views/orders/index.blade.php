@extends('template.layouts.master')

@section('title', 'Orders')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Orders</h5>
        </div>

        <div class="ibox-content">
            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Delivery Address</th>
                        <th>Delivery Date</th>
                        <th>Payment Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->users->name }}</td>
                            <td>{{ $order->delivery_address }}</td>
                            <td>{{ $order->delivery_date }}</td>
                            <td>{{ $order->payment_types->name }}</td>
                            <td>{{ $order->statuses->name }}</td>

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