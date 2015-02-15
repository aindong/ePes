@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.childrens.store', 'method' => 'post']) }}
        @include('employees.userschildrens.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop