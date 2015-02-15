@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.work-experiences.store', 'method' => 'post']) }}
        @include('employees.usersworkexperiences.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop