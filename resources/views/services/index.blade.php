@extends('template.layouts.master')

@section('title', 'Services')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Services</h5>
        </div>
        <div class="ibox-content">
            <a href="/services/create" class="btn btn-success">Add Service</a>

            <hr>

            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->description }}</td>
                            <td>{{ $service->price }}</td>
                            <td>
                                <a href="/services/{{ $service->id }}/edit">Edit</a>
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