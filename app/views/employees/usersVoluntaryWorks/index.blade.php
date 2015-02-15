@extends('layouts.default')

@section('content')
    <h2>Voluntary Works <a href="/employees/pds/voluntary-works/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Organization</th>
            <th>From</th>
            <th>To</th>
            <th>Number of Hours</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($voluntaryworks as $voluntarywork)
            <tr>
                <td>{{ $voluntarywork->organization }}</td>
                <td>{{ date('M d Y', strtotime($voluntarywork->datefrom)) }}</td>
                <td>{{ date('M d Y', strtotime($voluntarywork->dateto)) }}</td>
                <td>{{ $voluntarywork->numberofhours }}</td>
                <td>{{ $voluntarywork->position }}</td>
                <td>
                    <a href="/admin/departments/{{ $voluntarywork->id }}/edit" class="btn btn-warning">Update</a>
                    <a href="#" class="deleteItem btn btn-danger" data-item="{{ $voluntarywork->id }}">Delete</a>
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
