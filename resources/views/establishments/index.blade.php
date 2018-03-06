@extends('template.layouts.master')

@section('title', 'Establishments')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Establishments</h5>
        </div>
        <div class="ibox-content">
            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Owner Name</th>
                        <th>Description</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>User</th>
                        <th>Address</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($establishments as $establishment)
                        <tr>
                            <td><img src="{{ asset('storage/' . $establishment->image) }}" style="max-width:100px;max-height:100px;"></td>
                            <td>{{ $establishment->name }}</td>
                            <td>{{ $establishment->owner_name }}</td>
                            <td>{{ $establishment->description }}</td>
                            <td>{{ $establishment->phone }}</td>
                            <td>{{ $establishment->email }}</td>
                            <td>{{ $establishment->user->name }}</td>
        					<td>{{ $establishment->address }}</td>
        					<td>{{ $establishment->establishment_type->name }}</td>
                            <td>
                                <a href="{{ asset('storage/' . $establishment->business_permit) }}" class="btn btn-warning btn-xs" target="_blank"> Download Permit</a>
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#establishment{{ $establishment->id }}">Deactivate</button>
                                <div id="establishment{{ $establishment->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-user">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to deactivate this establishment?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
                                                <a href="/establishments/{{ $establishment->id }}/deactivate" class="btn btn-danger btn-xs"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('deactivate-establishment{{ $establishment->id }}').submit();">
                                                    Deactivate
                                                </a>

                                                <form id="deactivate-establishment{{ $establishment->id }}" action="/establishments/{{ $establishment->id }}/deactivate" method="POST" style="display: none;">
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

            <hr>

            <h4>Inactive Establishments</h4>
            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>User</th>
                        <th>Address</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($unapproved_establishments as $unapproved_establishment)
                        <tr>
                            <td><img src="{{ asset('storage/' . $unapproved_establishment->image) }}" style="max-width:100px;max-height:100px;"></td>
                            <td>{{ $unapproved_establishment->name }}</td>
                            <td>{{ $unapproved_establishment->description }}</td>
                            <td>{{ $unapproved_establishment->phone }}</td>
                            <td>{{ $unapproved_establishment->email }}</td>
                            <td>{{ $unapproved_establishment->user->name }}</td>
                            <td>{{ $unapproved_establishment->address }}</td>
                            <td>{{ $unapproved_establishment->establishment_type->name }}</td>
                            <td>
                                <a href="{{ asset('storage/' . $unapproved_establishment->business_permit) }}" class="btn btn-warning btn-xs" target="_blank"> Download Permit</a>
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#unapproved-establishment{{ $unapproved_establishment->id }}">Approve</button>
                                <div id="unapproved-establishment{{ $unapproved_establishment->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-user">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to approve this establishment?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
                                                <a href="/establishments/{{ $unapproved_establishment->id }}/approve" class="btn btn-success btn-xs"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('approve-establishment{{ $unapproved_establishment->id }}').submit();">
                                                    Approve
                                                </a>

                                                <form id="approve-establishment{{ $unapproved_establishment->id }}" action="/establishments/{{ $unapproved_establishment->id }}/approve" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                    {{ method_field('PATCH')}}
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