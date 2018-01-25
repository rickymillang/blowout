@extends('layouts.app')

@section('heading', 'View Establishments')

@section('content')
    <table class="table table-striped table-hover" id="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($establishments as $establishment)
                <tr>
                    <td>{{ $establishment->name }}</td>
					<td>{{ $establishment->address }}</td>
					<td>{{ $establishment->establishment_type->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
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