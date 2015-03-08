@extends('layouts.default')

@section('content')
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <span>{{ Session::get('error') }}</span>
        </div>
    @endif
    @if(Session::has('success'))
        <div class="alert alert-success">
            <span>{{ Session::get('success') }}</span>
        </div>
    @endif

    @if(Auth::getUser()->role->name == 'admin')
        {{ Form::open(['method' => 'get']) }}
            <div class="row">
                <div class="col-md-8">
                    {{ Form::select('department', $departments, null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary col-md-4">Filter</button>
                </div>

            </div>

        {{ Form::close() }}
    @endif

    <span style="font-style: italic; color: red">Note: SELECT A DATE TO PRINT FIRST, TO GET THE BEST RESULT.</span><br/>

    <h2>Accomplishments</h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Employee No</th>
            <th>Name</th>
            <th>Department</th>
            <th>Position</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            @if($user->role->name == 'employee')
                <tr>
                    <td>{{{ $user->employee_no }}}</td>
                    <td>{{{ isset($user->bio->lastname) ? ucfirst($user->bio->lastname) : '' }}}, {{{ isset($user->bio->firstname) ? ucfirst($user->bio->firstname) : '' }}} {{{ isset($user->bio->middlename) ? ucfirst($user->bio->middlename) : '' }}}.</td>
                    <td>{{{ isset($user->department->name) ? ucfirst($user->department->name) : '' }}}</td>
                    <td>{{{ ucfirst($user->position) }}}</td>
                    <td>{{{ ucfirst($user->role->name) }}}</td>
                    <td>

                        @if(Auth::getUser()->role->name != 'admin')
                            <a href="/supervisors/accomplishments/{{ $user->employee_no }}" class="btn btn-info">View Accomplishments</a>
                            @if($evaluation)
                                <a href="/supervisors/pes/{{ $user->employee_no }}" class="btn btn-primary">Evaluate</a>
                            @endif
                            <a href="/supervisors/employees/{{ $user->employee_no }}/pds" class="btn btn-info">View PDS</a>
                        @else
                            <a href="/admin/accomplishments/{{ $user->employee_no }}" class="btn btn-info">View Accomplishments</a>
                        @endif
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#example').DataTable();
        });
    </script>
@stop