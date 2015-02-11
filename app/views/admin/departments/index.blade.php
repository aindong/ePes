@extends('layouts.default')

@section('content')
    <h2>Department Management <a href="/admin/departments/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Name</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($departments as $department)
        <tr>
            <td>{{ ucfirst($department->name) }}</td>
            <td>{{ date('M d Y', strtotime($department->created_at)) }}</td>
            <td>{{ date('M d Y', strtotime($department->updated_at)) }}</td>
            <td>
                <a href="/admin/departments/1/edit" class="btn btn-warning">Update</a>
                <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                {{ Form::open(array('url' => 'admin/departments/' . 1, 'class' => 'deleteItem')) }}
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