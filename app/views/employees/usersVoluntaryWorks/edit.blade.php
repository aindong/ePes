@extends('layouts.default')

@section('content')
    {{ Form::model($usersvoluntarywork, ['route' => ['employees.pds.voluntary-works.update', $usersvoluntarywork->id], 'method' => 'put']) }}
    @include('employees.usersVoluntaryWorks.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop