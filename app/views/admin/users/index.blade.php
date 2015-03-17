@extends('layouts.default')

@section('content')
    <h2>Employee Management <a href="/admin/users/create" class="btn btn-primary">Add New</a></h2>
    <span style="font-style: italic; color: red">Note: This statistics is based on the number of employees who have filled up their BIOS/PDS</span><br/>
    <span>Total number of Job Orber Employees : {{ (int)$male + (int)$female }}</span><br/>
    <span>No. of Male Employees : {{ $male }}</span><br/>
    <span>No. of Female Employees : {{ $female }}</span><br/>
    <br/>

    <label for="action" class="form-label">Action for selected items</label>
    <div class="input-group" style="width: 50%">
        <select id="action" class="form-control">
            <option value="lock">Lock</option>
            <option value="unlock">Unlock</option>
        </select>
        <span class="input-group-btn">
            <button class="btn btn-primary btnAction" type="submit">Go</button>
        </span>
    </div>

    <br/>

    <form id="tableForm" action="" method="post">

    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th style="text-align: center; vertical-align:middle;" class="no-sort">
                <input type="checkbox" id="checkAll"/>
            </th>
            <th>Employee No</th>
            <th>Department</th>
            <th>Position</th>
            <th>Role</th>
            <th>PDS Lock</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td style="text-align: center; vertical-align:middle;">
                <input type="checkbox" name="selected[]" value="{{ $user->id }}" class="selected"/>
            </td>
            <td>{{{ $user->employee_no }}}</td>
            <td>{{{ isset($user->department->name) ? ucfirst($user->department->name) : '' }}}</td>
            <td>{{{ ucfirst($user->position) }}}</td>
            <td>{{{ ucfirst($user->role->name) }}}</td>
            <td>{{{ strtoupper($user->lockpds) }}}</td>
            <td>{{{ date('M d Y', strtotime($user->created_at)) }}}</td>
            <td>{{{ date('M d Y', strtotime($user->updated_at)) }}}</td>
            <td>
                @if($user->lockpds == 'locked')
                    <a href="/admin/users/{{ $user->id }}/unlock" class="btn btn-primary">Unlock</a>
                @else
                    <a href="/admin/users/{{ $user->id }}/lock" class="btn btn-primary">Lock</a>
                @endif
                @if(isset($user->bio->firstname))
                    <a href="/admin/employees/{{ $user->employee_no }}/pds" class="btn btn-info">View PDS</a>
                @endif
                <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-warning">Update</a>
                <a href="#" class="deleteItem btn btn-danger" data-item="{{ $user->id }}">Delete</a>
            </td>
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

            $('.btnAction').on('click', function() {
                var action     = $('#action').val();
                var requestUrl = '/admin/users/';

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
                alert('Successfully changed the status of selected pds.');
                location.reload();
            });

            $(document).on('click', '.deleteItem', function(e) {
                e.preventDefault();

                if(!confirm('Are you sure to delete this item?')) {
                    return false;
                }
                var id = $(this).attr('data-item');
                var $that = $(this);

                var url = location.href;

                if(url.substr(-1) == '/') {
                    url = url.substr(0, url.length - 1);
                }

                $.ajax({
                    url:  url + '/' + id,
                    type:"post",
                    data: { _method:"DELETE" },
                    success: function(data) {
                        alert('Item successfully deleted');
                        //location.reload();
                        var rowSelected = $that.parent().parent();
                        table.row(rowSelected).remove().draw();
                    }
                });
            });
        });
    </script>
@stop