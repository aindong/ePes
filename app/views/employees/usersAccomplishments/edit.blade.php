@extends('layouts.default')

@section('content')
    {{ Form::model($usersaccomplishment, ['route' => ['employees.accomplishments.update', $usersaccomplishment->id], 'method' => 'put']) }}
        @include('employees.usersAccomplishments.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop