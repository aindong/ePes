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
                <a href="#" class="btn btn-primary viewJob" data-id="{{ $jobvacancy->id }}" data-toggle="modal" data-target="#myModal" >View</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <br/><br/>
    <h3>Event Calendar</h3>
    <div id='calendar'></div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    Loading...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div>

    {{--Events--}}
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    Loading...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div>
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
                },
                events: '/events',
                eventClick: function(calEvent, jsEvent, view) {
                    var id = calEvent.id;
                    $.ajax({
                        url: '/events/' + id,
                        type: 'get',
                        success: function(data) {
                            $('#eventModal').modal('show');

                            var body = $('.modal-body');
                            body.html(data.description);

                            var title = $('.modal-title');
                            title.html(data.title);
                        }
                    });
                }
            });

            $('.viewJob').on('click', function(e) {
                e.preventDefault();

                var id = $(this).attr('data-id');
                $.ajax({
                    url: '/jobs/' + id,
                    type: 'get',
                    success: function(data) {
                        var body = $('.modal-body');
                        body.html(data.description);

                        var title = $('.modal-title');
                        title.html(data.title);
                    }
                });
            });
        });
    </script>
@stop