@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.hobbies.store', 'method' => 'post']) }}
        @include('employees.userHobbies.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop