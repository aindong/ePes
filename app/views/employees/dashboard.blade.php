@extends('layouts.default')

@section('content')
    <h2>Job Vacancies </h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jobvacancies as $jobvacancy)
        <tr>
            <td>{{ $jobvacancy->title }}</td>
            <td>{{ date('M d Y', strtotime($jobvacancy->created_at)) }}</td>
            <td>{{ date('M d Y', strtotime($jobvacancy->created_at)) }}</td>
            <td>
                <a href="#" class="btn btn-primary">View</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable();
        });
    </script>
@stop