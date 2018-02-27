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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td><img src="{{ asset($customer->avatar) }}"  style="max-width:100px;max-height:100px;"></td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>
                            	<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#customer{{ $customer->id }}">Delete</button>
                            	<div id="customer{{ $customer->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="delete-user">
                            		<div class="modal-dialog modal-sm" role="document">
                            			<div class="modal-content">
                            				<div class="modal-header">
                            					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            				</div>
                            				<div class="modal-body">
                            					Are you sure you want to delete this customer?
                            				</div>
                            				<div class="modal-footer">
                            					<button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>

                            					<a href="/customer/{{ $customer->id }}" class="btn btn-danger btn-xs"
                            					    onclick="event.preventDefault();
                            					             document.getElementById('delete-customer{{ $customer->id }}').submit();">
                            					    Delete
                            					</a>

                            					<form id="delete-customer{{ $customer->id }}" action="/customers/{{ $customer->id }}" method="POST" style="display: none;">
                            					    {{ csrf_field() }}
                            					    {{ method_field('DELETE') }}
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