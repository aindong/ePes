@extends('layouts.default')

@section('content')
    <h2>Skill Search</h2>
    <span style="font-style: italic; color: red">Note: This list is based on the employees who have filled up their BIOS/PDS</span><br/>
    <span style="font-style: italic; color: red">Note: This list is based on the number of employees who have filled up their SKILLS/HOBBIES on their PDS</span><br/>
    <br/>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Employee No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Sex</th>
            <th>Telephone</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Skills</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{{ $user->employee_no }}}</td>
                <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                <td>{{ $user->residentialaddress }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->telno }}</td>
                <td>{{ $user->celno }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <ul>
                    @foreach($user->skills as $skill)
                        <li>{{ $skill->hobby }}</li>
                    @endforeach
                    </ul>
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