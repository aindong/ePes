@extends('layouts.default')

@section('content')
    {{ Form::model($usersaccomplishment, ['route' => ['employees.accomplishments.update', $usersaccomplishment->id], 'method' => 'put']) }}
        @include('employees.usersaccomplishments.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop