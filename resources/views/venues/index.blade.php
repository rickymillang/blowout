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
                        <th>Price</th>
                        <th>Event Types</th>
                        <th>Packages</th>
                        <th>Services</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($venues as $venue)
                        <tr>
                            <td><img src="{{ asset('storage/' . $venue->image) }}" style="max-width:50px" alt=""></td>
                            <td>{{ $venue->name }}</td>
                            <td>{{ $venue->address }}</td>
                            <td>{{ $venue->minimum_capacity }}</td>
                            <td>{{ $venue->maximum_capacity }}</td>
                            <td>{{ $venue->price }}</td>
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
                                <a href="/venues/{{ $venue->id }}/edit" class="btn btn-warning btn-xs">Edit Venue</a>
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#venue{{ $venue->id }}">Delete</button>
                                <div id="venue{{ $venue->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-user">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this venue?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
                                                <a href="/venues/{{ $venue->id }}/" class="btn btn-danger btn-xs"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('delete-venues{{ $venue->id }}').submit();">
                                                    Deactivate
                                                </a>

                                                <form id="delete-venues{{ $venue->id }}" action="/venues/{{ $venue->id }}/" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE')}}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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