@extends('layouts.default')

@section('content')
    <h2>Users Management <a href="/admin/users/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Employee No</th>
            <th>Name</th>
            <th>Department</th>
            <th>Position</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            @if($user->role->name == 'employee')
                <tr>
                    <td>{{{ $user->employee_no }}}</td>
                    <td>{{{ ucfirst($user->department->name) }}}</td>
                    <td>{{{ ucfirst($user->position) }}}</td>
                    <td>{{{ ucfirst($user->role->name) }}}</td>
                    <td>
                        <a href="/supervisors/accomplishments/{{ $user->employee_no }}" class="btn btn-info">View Accomplishments</a>
                    </td>
                </tr>
            @endif
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