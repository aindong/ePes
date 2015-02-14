@extends('layouts.default')

@section('content')
    <h2>Educational Background <a href="/employees/pds/educations/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Level</th>
            <th>Name of School</th>
            <th>Degree Course</th>
            <th>Year Graduated</th>
            <th>Highest Grade/Level</th>
            <th>Attendance From</th>
            <th>Attendance To</th>
            <th>Scholarships/Awards</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($educations as $education)
            <tr>
                <td>{{ $education->level }}</td>
                <td>{{ $education->schoolname }}</td>
                <td>{{ $education->degreecourse }}</td>
                <td>{{ $education->yeargraduated }}</td>
                <td>{{ $education->units }}</td>
                <td>{{ $education->attendancefrom }}</td>
                <td>{{ $education->attendanceto }}</td>
                <td>{{ $education->awards }}</td>
                <td>
                    <a href="/admin/departments/{{ $department->id }}/edit" class="btn btn-warning">Update</a>
                    <a href="#" class="deleteItem btn btn-danger" data-item="{{ $department->id }}">Delete</a>
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
