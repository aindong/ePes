@extends('layouts.default')

@section('content')
    {{ Form::model($usersworkexperience, ['route' => ['employees.pds.work-experiences.update', $usersworkexperience->id], 'method' => 'put']) }}
        @include('employees.usersWorkExperiences.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop