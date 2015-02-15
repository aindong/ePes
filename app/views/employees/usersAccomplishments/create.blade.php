@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.accomplishments.store', 'method' => 'post']) }}
        @include('employees.usersAccomplishments.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop