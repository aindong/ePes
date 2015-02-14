@extends('layouts.default')

@section('content')
    {{ Form::model($userscivilservice, ['route' => ['employees.pds.civil-services.update', $userscivilservice->id], 'method' => 'put']) }}
    @include('employees.usersCivilServices.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop