@extends('template.layouts.master')

@section('title', 'Reports')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Reports</h5>
        </div>
        <div class="ibox-content">
            @if(auth()->user()->hasRole('establishment.admin') || auth()->user()->hasRole('customer'))
                <a href="/reports/create" class="btn btn-success">Submit Report</a>

                <hr>
            @endif
            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Reporter</th>
                        <th>Reported At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                        <tr>
                            <td>{{ $report->title }}</td>
                            <td>{{ $report->message }}</td>
                            <td>{{ $report->user->name }}</td>
                            <td>{{ $report->updated_at->toFormattedDateString() }}</td>
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