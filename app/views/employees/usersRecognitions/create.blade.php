@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.recognitions.store', 'method' => 'post']) }}
        @include('employees.usersrecognitions.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop