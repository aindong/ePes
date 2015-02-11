@extends('layouts.default')

@section('content')
    <legend>Updating a event</legend>
    {{ Form::model($celebration, ['route' => ['admin.events.update', $celebration->id], 'method' => 'put']) }}
    @include('admin.celebrations.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
