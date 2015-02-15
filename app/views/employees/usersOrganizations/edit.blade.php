@extends('layouts.default')

@section('content')
    {{ Form::model($usersorganization, ['route' => ['employees.pds.organizations.update', $usersorganization->id], 'method' => 'put']) }}
        @include('employees.usersorganizations.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop