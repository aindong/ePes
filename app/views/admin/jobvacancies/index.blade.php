@extends('layouts.default')

@section('content')
    <h2>Article Management <a href="/admin/articles/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {{--@foreach($articles as $article)--}}
        <tr>
            <td>My name</td>
            <td>testing</td>
            <td>testing</td>
            <td>testing</td>
            <td>
                <a href="/admin/articles/1/edit" class="btn btn-warning">Update</a>
                <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                {{ Form::open(array('url' => 'admin/articles/' . 1, 'class' => 'deleteItem')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </td>
        </tr>
        {{--@endforeach--}}
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