@extends('layouts.default')

@section('content')
    <legend>Updating a department</legend>
    {{ Form::model($position, ['route' => ['admin.positions.update', $position->id], 'method' => 'put']) }}
    @include('admin.positions.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
