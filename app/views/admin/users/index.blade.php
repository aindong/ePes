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
            <td>{{{ ucfirst($user->department->name) or 'N/A'}}}</td>
            <td>{{{ ucfirst($user->role->name) }}}</td>
            <td>
                <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-warning">Update</a>
                {{ Form::open(array('url' => 'admin/articles/' . $user->id, 'class' => 'deleteItem form-inline')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
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

            $('.deleteItem').on('submit', function(e) {
                if(!confirm('Are you sure to delete this item?')) {
                    return false;
                }
            });
        });
    </script>
@stop