@extends('layouts.default')

@section('content')
    <h2>Work Experience Background <a href="/employees/pds/work-experiences/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Position</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Salary Grade</th>
            <th>Status Appointment</th>
            <th>Government Service</th>
            <th>Date From</th>
            <th>Date To</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usersworkexperiences as $usersworkexperience)
            <tr>
                <td>{{ $usersworkexperience->position }}</td>
                <td>{{ $usersworkexperience->usersworkexperience }}</td>
                <td>{{ $usersworkexperience->salary }}</td>
                <td>{{ $usersworkexperience->salarygrade }}</td>
                <td>{{ $usersworkexperience->statusappointment }}</td>
                <td>{{ $usersworkexperience->govermentservice }}</td>
                <td>{{ $usersworkexperience->datefrom }}</td>
                <td>{{ $usersworkexperience->dateto }}</td>
                <td>
                    <a href="/admin/work-experiences/{{ $usersworkexperience->id }}/edit" class="btn btn-warning">Update</a>
                    <a href="#" class="deleteItem btn btn-danger" data-item="{{ $usersworkexperience->id }}">Delete</a>
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
