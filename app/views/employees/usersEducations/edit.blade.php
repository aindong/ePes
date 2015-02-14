@extends('layouts.default')

@section('content')
    {{ Form::model($userseducation, ['route' => ['employees.pds.educations.update', $userseducation->id], 'method' => 'put']) }}
        @include('employees.usersEducations.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop