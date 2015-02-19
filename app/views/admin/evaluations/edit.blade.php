@extends('layouts.default')

@section('content')
    <legend>Updating an evaluation schedule</legend>
    {{ Form::model($evaluation, ['route' => ['admin.evaluations.update', $evaluation->id], 'method' => 'put']) }}
    @include('admin.evaluations.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
