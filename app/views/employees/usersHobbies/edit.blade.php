@extends('layouts.default')

@section('content')
    {{ Form::model($usershobby, ['route' => ['employees.pds.hobbies.update', $usershobby->id], 'method' => 'put']) }}
        @include('employees.usershobbies.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop