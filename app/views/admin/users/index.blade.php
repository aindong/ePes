@extends('layouts.default')

@section('content')
    <h2>Users Management <a href="/admin/users/create" class="btn btn-primary">Add New</a></h2>
    <span>No. of Active Male Employees : {{ $male }}</span><br/>
    <span>No. of Active Female Employees : {{ $female }}</span><br/>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
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
            <td>{{{ $user->employee_no }}}</td>
            <td>{{{ ucfirst($user->department->name) }}}</td>
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
                <a href="/admin/users/{{ $user->id }}/show" class="btn btn-info">View PDS</a>
                <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-warning">Update</a>
                <a href="#" class="deleteItem btn btn-danger" data-item="{{ $user->id }}">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable();

            $('.deleteItem').on('click', function(e) {
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