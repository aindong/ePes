@extends('layouts.default')

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            <span>{{ Session::get('success') }}</span>
        </div>
    @endif

    <h2>Users Accomplishments</h2>
    <div>
        <form action="" method="get">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="from" class="form-control form_datetime" placeholder="Select From Date"/>
                </div>
                <div class="col-md-4">
                    <input type="text" name="to" class="form-control form_datetime" placeholder="Select To Date"/>
                </div>

                <button type="submit" class="btn btn-primary col-md-4">Filter Date</button>
            </div>
        </form>
        <br/>
    </div>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Employee No</th>
            <th>Name</th>
            <th>Accomplishment</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($accomplishments as $accomplishment)
            <tr>
                <td>{{{ $accomplishment->user->employee_no }}}</td>
                <td>{{{ isset($accomplishment->user->bio->lastname) ? ucfirst($accomplishment->user->bio->lastname) : '' }}}, {{{ isset($accomplishment->user->bio->firstname) ? ucfirst($accomplishment->user->bio->firstname) : '' }}} {{{ isset($accomplishment->user->bio->middlename) ? ucfirst($accomplishment->user->bio->middlename) : '' }}}.</td>
                <td>{{{ ucfirst($accomplishment->accomplishment) }}}</td>
                <td>{{{ ucfirst($accomplishment->dateto) }}}</td>
                <td>{{ ucfirst($accomplishment->status) }}</td>
                @if($accomplishment->status == 'waiting')
                    <td><a href="/supervisors/confirm-accomplishment/{{ $accomplishment->id }}/confirmed">Confirm</a></td>
                @else
                    <td><a href="/supervisors/confirm-accomplishment/{{ $accomplishment->id }}/waiting">Unconfirm</a></td>
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

    <script type="text/javascript">
        $(".form_datetime").datetimepicker({
            format: "yyyy-mm-dd hh:ii:ss",
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });
    </script>
@stop