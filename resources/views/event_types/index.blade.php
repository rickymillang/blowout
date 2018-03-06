@extends('template.layouts.master')

@section('title', 'Event Types')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Event Types</h5>
        </div>

        <div class="ibox-content">
            <a href="/event_types/create" class="btn btn-success">Add Event Type</a>

            <hr>

            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($event_types as $event_type)
                        <tr>
                            <td>{{ $event_type->name }}</td>
                            <td>
                                <a href="/event_types/{{ $event_type->id }}/edit">Edit</a>
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