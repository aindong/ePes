@extends('layouts.default')

@section('content')
    <h3>Performance Evaluation Results</h3>
    {{ Form::open(['method' => 'get']) }}
        <div class="row">
            <div class="col-md-12">
                <label for="schedule" class="form-label col-md-12">Choose an evaluation schedule</label>
                <div class="col-md-10">
                    {{ Form::select('schedule', $schedules, null, ['class' => 'form-control', 'id' => 'schedule']) }}
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    {{ Form::close() }}
    <br/><br/><br/>

    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Employee No</th>
            <th>Name</th>
            <th>Performance</th>
            <th>Critical Factors</th>
            <th>Overall Score</th>
            <th>Adjective Rating</th>
        </tr>
        </thead>
        <tbody>
        @foreach($finals as $final)
            <tr>
                <td>{{{ $final['employee_no'] }}}</td>
                <td>{{ $final['name'] }}</td>
                <td>{{ $final['performance'] }}</td>
                <td>{{ $final['critical'] }}</td>
                <td>{{ $final['overall'] }}</td>
                <td>{{ $final['adjective'] }}</td>
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