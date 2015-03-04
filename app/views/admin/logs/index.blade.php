@extends('layouts.default')

@section('content')
    <h2>Audit Trail Management </h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Employee No.</th>
            <th>Details</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($logs as $log)
        <tr>
            <td>{{ ucfirst($log->user->employee_no) }}</td>
            <td>{{ ucfirst($log->action) }}</td>
            <td>{{ date('M d Y', strtotime($log->created_at)) }}</td>
            <td>{{ date('M d Y', strtotime($log->updated_at)) }}</td>
            <td>
                <a href="#" class="deleteItem btn btn-danger" data-item="{{ $log->id }}">Delete</a>
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