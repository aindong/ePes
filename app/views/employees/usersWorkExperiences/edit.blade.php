@extends('layouts.default')

@section('content')
    {{ Form::model($usersworkexperience, ['route' => ['employees.pds.work-experiences.update', $usersworkexperience->id], 'method' => 'put']) }}
        @include('employees.usersworkexperiences.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop