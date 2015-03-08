@extends('layouts.default')

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            <span>{{ Session::get('success') }}</span>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <span>{{ Session::get('error') }}</span>
        </div>
    @endif
    {{ Form::model($user, ['url' => '/supervisors/update/user/' . $user->id, 'method' => 'post']) }}
        <div class="rows">
            <div class="form-group">
                {{ Form::label('firstname', 'First Name *', ['class' => 'form-label']) }}
                {{ Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'First name']) }}
            </div>

            <div class="form-group">
                {{ Form::label('lastname', 'Last Name *', ['class' => 'form-label']) }}
                {{ Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Last name']) }}
            </div>

            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    {{ Form::close() }}

    <br/><br/>
    <h3>Event Calendar</h3>
    <div id='calendar'></div>

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
                            title.html(data.name);
                        }
                    });
                }
            })

        });
    </script>
@stop