@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.organizations.store', 'method' => 'post']) }}
        @include('employees.usersorganizations.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop