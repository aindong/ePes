@extends('layouts.default')

@section('content')
    <h2>Create a new department</h2>
    {{ Form::open(['route' => 'admin.departments.store', 'method' => 'post']) }}
        @include('admin.departments.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
