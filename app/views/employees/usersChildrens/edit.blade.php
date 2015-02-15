@extends('layouts.default')

@section('content')
    {{ Form::model($userschildren, ['route' => ['employees.pds.childrens.update', $userschildren->id], 'method' => 'put']) }}
        @include('employees.userschildrens.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop