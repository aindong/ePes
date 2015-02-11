@extends('layouts.default')

@section('content')
    <h2>Users Management <a href="/admin/users/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Employee No</th>
            <th>Department</th>
            <th>Position</th>
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
            <td>{{{ ucfirst($user->role->name) }}}</td>
            <td>{{{ date('M d Y', strtotime($user->created_at)) }}}</td>
            <td>{{{ date('M d Y', strtotime($user->updated_at)) }}}</td>
            <td>
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
            $('#example').dataTable();

            $('.deleteItem').on('click', function(e) {
                e.preventDefault();

                if(!confirm('Are you sure to delete this item?')) {
                    return false;
                }
                var id = $(this).attr('data-item');

                $.ajax({
                    url: location.href + '/' + id,
                    type:"post",
                    data: { _method:"DELETE" },
                    success: function(data) {
                        alert('Item successfully deleted');
                        //location.reload();
                        $(this).parent().parent().remove();
                    }
                });
            });
        });
    </script>
@stop