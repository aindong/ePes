@extends('layouts.default')

@section('content')
    @if(Auth::getUser()->lockpds == 'locked')
        <div class="lock">
            <h1>YOUR PDS IS LOCKED.</h1>
            <p>If you need to change something, ask the HR Department to unlock it.</p>
        </div>
    @endif
    <h2>References <a href="/employees/pds/references/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Telephone Number</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usersreferences as $usersreference)
            <tr>
                <td>{{ $usersreference->name }}</td>
                <td>{{ $usersreference->address }}</td>
                <td>{{ $usersreference->telno }}</td>
                <td>
                    <a href="references/{{ $usersreference->id }}/edit" class="btn btn-warning">Update</a>
                    <a href="#" class="deleteItem btn btn-danger" data-item="{{ $usersreference->id }}">Delete</a>
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
