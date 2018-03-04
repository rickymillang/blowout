@extends('template.layouts.master')

@section('title', 'Customers')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Customers</h5>
        </div>
        <div class="ibox-content">
            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td><img src="{{ asset($customer->avatar) }}"  style="max-width:100px;max-height:100px;"></td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
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