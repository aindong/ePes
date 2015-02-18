@extends('layouts.default')

@section('content')
    <h2>Civil Services <a href="/employees/pds/civil-services/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Career Service</th>
            <th>Rating</th>
            <th>Examination Date</th>
            <th>Place</th>
            <th>License #</th>
            <th>License Release date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($civilservices as $civilservice)
            <tr>
                <td>{{ $civilservice->careerservice }}</td>
                <td>{{ $civilservice->rating }}</td>
                <td>{{ date('M d Y', strtotime($civilservice->examinationdate)) }}</td>
                <td>{{ $civilservice->examinationplace }}</td>
                <td>{{ $civilservice->licensenumber }}</td>
                <td>{{ date('M d Y', strtotime($civilservice->licensereleasedate)) }}</td>
                <td>
                    <a href="civil-services/{{ $civilservice->id }}/edit" class="btn btn-warning">Update</a>
                    <a href="#" class="deleteItem btn btn-danger" data-item="{{ $civilservice->id }}">Delete</a>
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
