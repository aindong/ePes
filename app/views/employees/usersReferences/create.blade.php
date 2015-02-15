@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.references.store', 'method' => 'post']) }}
        @include('employees.usersreferences.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop