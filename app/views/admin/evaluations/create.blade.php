@extends('layouts.default')

@section('content')
    <legend>Create a new department</legend>
    {{ Form::open(['route' => 'admin.evaluations.store', 'method' => 'post']) }}
    @include('admin.evaluations.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
