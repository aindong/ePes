@extends('layouts.default')

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            <span>{{ Session::get('success') }}</span>
        </div>
    @endif
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
            <th>Status</th>
            <th>Actions</th>
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
                <td>{{ $final['status'] }}</td>
                @if(Auth::getUser()->role->name == 'admin')
                    <td><a href="/admin/pes-single/{{ $final['id'] }}/{{ $final['employee_no'] }}" class="btn btn-primary">View Evaluation</a></td>
                @elseif(Auth::getUser()->role->name == 'employee')
                    <td><a href="/employees/pes-single/{{ $final['id'] }}" class="btn btn-primary">View Evaluation</a></td>
                @else
                    <td><a href="/supervisors/pes-single/{{ $final['id'] }}/{{ $final['employee_no'] }}" class="btn btn-primary">View Evaluation</a></td>
                @endif

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