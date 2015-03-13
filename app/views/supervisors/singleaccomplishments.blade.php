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
    <a href="#" class="btn btn-info pull-right print">Print</a>
    <iframe id="print" src="/print/accomplishment?employee_no={{ $employee_no }}&from={{ Input::get('from') }}&to={{ Input::get('to') }}" frameborder="0" style="display: none"></iframe>
    
    <br/><br/>
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
                @if($accomplishment->status == '')
                    <td>Waiting</td>
                @else
                    <td>{{ ucfirst($accomplishment->status) }}</td>
                @endif
                @if(Auth::getUser()->role->name == 'supervisor')
                    @if($accomplishment->status == 'waiting' || $accomplishment->status == '')
                        <td><a class="btn btn-primary" href="/supervisors/confirm-accomplishment/{{ $accomplishment->id }}/confirmed">Confirm</a></td>
                    @else
                        <td><a class="btn btn-danger" href="/supervisors/confirm-accomplishment/{{ $accomplishment->id }}/waiting">Unconfirm</a></td>
                    @endif
                @else
                    <td></td>
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

        $('.print').click(function() {
            printIframe('print');
        });

        function printIframe(id)
        {
            var iframe = document.frames ? document.frames[id] : document.getElementById(id);
            var ifWin = iframe.contentWindow || iframe;
            iframe.focus();
            ifWin.printMe();
            return false;
        }
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