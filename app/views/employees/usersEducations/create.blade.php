@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.educations.store', 'method' => 'post']) }}
        @include('employees.usersEducations.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop