@extends('layouts.default')

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            <span>{{ Session::get('success') }}</span>
        </div>
    @endif
    <div class="alert extraAlert" style="display: none;"></div>

    <h2>Employee Accomplishments</h2>
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

    @if(Auth::getUser()->role->name == 'supervisor')
        <label for="action" class="form-label">Action for selected items</label>
        <div class="input-group" style="width: 50%">
            <select id="action" class="form-control">
                <option value="confirmed">Confirm</option>
                <option value="waiting">Unconfirm</option>
            </select>
            <span class="input-group-btn">
                <button class="btn btn-primary btnAction" type="submit">Go</button>
            </span>
        </div>
    @endif
    <br/>

    <form id="tableForm" action="" method="post">

    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            @if(Auth::getUser()->role->name == 'supervisor')
                <th style="text-align: center; vertical-align:middle;">
                    <input type="checkbox" id="checkAll"/>
                </th>
            @endif
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
                @if(Auth::getUser()->role->name == 'supervisor')
                <td style="text-align: center; vertical-align:middle;">
                    <input type="checkbox" name="selected[]" value="{{ $accomplishment->id }}" class="selected"/>
                </td>
                @endif
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

    </form>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable();

            $('.btnAction').on('click', function() {
                var action     = $('#action').val();
                var requestUrl = '/supervisors/confirm-accomplishment/';

                $('.selected').each(function() {
                    if($(this).is(':checked')) {

                        $.ajax({
                           url: requestUrl + $(this).val() + '/' + action,
                           type: 'GET',
                           success: function (data) {

                           }
                        });
                    }
                });

                //location.reload();
            });

            $(document).ajaxStop(function() {
                // place code to be executed on completion of last outstanding ajax call here
                alert('Successfully changed the status of selected Accomplishments.');
                location.reload();
            });

            $('#checkAll').on('change', function() {
                var cells = table
                        .cells( ":checkbox" )
                        .nodes();

                if ($(this).is(':checked')) {
                    //$('.selected', table.fnGetNodes()).prop('checked', true);
                    $(':checkbox', table.rows().nodes()).prop('checked', true);
                } else {
                    //$('.selected', table.fnGetNodes()).prop('checked', false);
                    $(':checkbox', table.rows().nodes()).prop('checked', false);
                }
            });
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
            format: "yyyy-mm-dd",
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left",
            minView: 'month'
        });
    </script>
@stop