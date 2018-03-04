@extends('template.layouts.master')

@section('title', 'Questions')

@section('content')
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>View Questions</h5>
        </div>
        <div class="ibox-content">
            <a href="/questions/create" class="btn btn-success">Add Question</a>

            <hr>

            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Items</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($questions as $question)
                        <tr>
                            <td>{{ $question->question }}</td>
                            <td><ul>
                                @foreach($question->question_items as $item)
                                    <li>{{ $item->item . ': ' . $item->price }}</li>
                                @endforeach
                            </ul></td>
                            <td><a class="btn btn-xs btn-primary" href="/questions/{{ $question->id }}/edit">Add Items</a></td>
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