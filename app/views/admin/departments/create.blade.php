@extends('layouts.default')

@section('content')
    <legend>Create a new department</legend>
    {{ Form::open(['route' => 'admin.departments.store', 'method' => 'post']) }}
        @include('admin.departments.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
