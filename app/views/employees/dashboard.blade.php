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

    <br/><br/>
    <h3>Event Calendar</h3>
    <div id='calendar'></div>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable();

            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                }
//                events: '/admin/seminars'
            })
        });
    </script>
@stop