@extends('layouts.default')

@section('content')
    <legend>Create a new position</legend>
    {{ Form::open(['route' => 'admin.positions.store', 'method' => 'post']) }}
    @include('admin.positions.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
