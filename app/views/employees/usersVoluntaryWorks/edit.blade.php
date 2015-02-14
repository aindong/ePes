@extends('layouts.default')

@section('content')
    {{ Form::model($userscivilservice, ['route' => ['employees.pds.voluntary-works.update', $userscivilservice->id], 'method' => 'put']) }}
    @include('employees.usersVoluntaryWorks.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop