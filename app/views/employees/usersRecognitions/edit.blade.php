@extends('layouts.default')

@section('content')
    {{ Form::model($usersrecognition, ['route' => ['employees.pds.recognitions.update', $usersrecognition->id], 'method' => 'put']) }}
        @include('employees.usersrecognitions.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop