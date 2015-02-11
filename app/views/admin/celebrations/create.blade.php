@extends('layouts.default')

@section('content')
    <legend>Create a new events</legend>
    {{ Form::open(['route' => 'admin.celebrations.store', 'method' => 'post']) }}
        @include('admin.celebrations.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
