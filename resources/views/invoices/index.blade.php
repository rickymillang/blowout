@extends('template.layouts.master')

@section('title', 'Invoices')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Invoices</h5>
        </div>

        <div class="ibox-content">
            <table class="table table-striped table-hover" id="table1">
                <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Customer</th>
                        <th>Payment Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->order->id }}</td>
                            <td>{{ $invoice->user->name }}</td>
                            <td>{{ $invoice->payment_date }}</td>
                            <td>View</td>
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