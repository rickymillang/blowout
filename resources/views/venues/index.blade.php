@extends('template.layouts.master')

@section('title', 'Venues')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Venues</h5>
        </div>

        <div class="ibox-content">
            <a href="/venues/create" class="btn btn-success">Add Venue</a>

            <hr>

            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Minimum Capacity</th>
                        <th>Maximum Capacity</th>
                        <th>Event Types</th>
                        <th>Packages</th>
                        <th>Services</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($venues as $venue)
                        <tr>
                            <td><img src="{{ asset('storage/' . $venue->image) }}" alt=""></td>
                            <td>{{ $venue->name }}</td>
                            <td>{{ $venue->address }}</td>
                            <td>{{ $venue->minimum_capacity }}</td>
                            <td>{{ $venue->maximum_capacity }}</td>
                            <td>
                                <ul>
                                    @foreach($venue->event_types as $event_type)
                                        <li>{{ $event_type->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach($venue->packages as $package)
                                        <li>{{ $package->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach($venue->services as $service)
                                        <li>{{ $service->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <a href="/venues/{{ $venue->id }}/add-event-types" class="btn btn-success btn-xs">Add Event Types</a>
                                <a href="/venues/{{ $venue->id }}/add-packages" class="btn btn-success btn-xs">Add Package</a>
                                <a href="/venues/{{ $venue->id }}/add-services" class="btn btn-success btn-xs">Add Services</a>
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