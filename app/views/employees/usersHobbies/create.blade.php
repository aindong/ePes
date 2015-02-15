@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.hobbies.store', 'method' => 'post']) }}
        @include('employees.userhobbies.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop