@extends('template.layouts.master')

@section('title', 'Administrators')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Administrators</h5>
        </div>
        <div class="ibox-content">
            <a href="/administrators/create" class="btn btn-success"><span class="fa fa-plus"></span> Add Administrator</a>

            <hr>
            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($administrators as $administrator)
                        <tr>
                            <td>
                                {{ $administrator->name }}
                                @if(auth()->user()->name == $administrator->name)
                                    <span class="label label-success">You </span>
                                @endif
                            </td>
                            <td>{{ $administrator->email }}</td>
                            <td>
                            	<a href="/administrators/{{ $administrator->id }}/edit" class="btn btn-warning btn-xs">Edit</a>
                                @if(auth()->user()->id == 1)
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#admin{{ $administrator->id }}">Delete</button>
                                @endif
                            	<div id="admin{{ $administrator->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-user">
                            		<div class="modal-dialog modal-sm" role="document">
                            			<div class="modal-content">
                            				<div class="modal-header">
                            					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            				</div>
                            				<div class="modal-body">
                            					Are you sure you want to delete <strong>{{ $administrator->name }}</strong> as administrator?
                            				</div>
                            				<div class="modal-footer">
                            					<button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
                            					<a href="/administrators/{{ $administrator->id }}" class="btn btn-danger btn-xs"
                            					    onclick="event.preventDefault();
                            					             document.getElementById('delete-administrator{{ $administrator->id }}').submit();">
                            					    Delete
                            					</a>

                            					<form id="delete-administrator{{ $administrator->id }}" action="/administrators/{{ $administrator->id }}" method="POST" style="display: none;">
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