@extends('layouts.default')

@section('content')
    <h2>Accomplishments<a href="/employees/accomplishments/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Accomplishments</th>
            <th>Date</th>
            {{--<th>Date From</th>--}}
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usersaccomplishments as $usersaccomplishment)
            <tr>
                <td>{{ $usersaccomplishment->accomplishment }}</td>
                <td>{{ date('M d Y', strtotime($usersaccomplishment->dateto)) }}</td>
                {{--<td>{{ date('M d Y', strtotime($usersaccomplishment->datefrom)) }}</td>--}}
                <td>
                    <a href="/admin/accomplishments/{{ $usersaccomplishment->id }}/edit" class="btn btn-warning">Update</a>
                    <a href="#" class="deleteItem btn btn-danger" data-item="{{ $usersaccomplishment->id }}">Delete</a>
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
