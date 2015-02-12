@extends('layouts.default')

@section('content')
    <h3>Event Calendar</h3>
    <div id='calendar'></div>
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
                }
//                events: '/admin/seminars'
            })

        });
    </script>
@stop