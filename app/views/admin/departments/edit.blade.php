@extends('layouts.default')

@section('content')
    <legend>Updating a department</legend>
    {{ Form::model($department, ['route' => ['admin.departments.update', $department->id], 'method' => 'put']) }}
    @include('admin.departments.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
