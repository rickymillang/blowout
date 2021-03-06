@extends('template.layouts.master')

@section('title', 'Report Types')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Report Types</h5>
        </div>

        <div class="ibox-content">
            <a href="/report_types/create" class="btn btn-success"><span class="fa fa-plus"></span> Add Report Type</a>

            <hr>

            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($report_types as $report_type)
                        <tr>
                            <td>{{ $report_type->name }}</td>
                            <td>
                            	<a href="/report_types/{{ $report_type->id }}/edit" class="btn btn-warning btn-xs">Edit</a>
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