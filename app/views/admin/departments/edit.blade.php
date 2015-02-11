@extends('layouts.default')

@section('content')
    <h2>Updating a department</h2>
    {{ Form::model($department, ['route' => ['admin.departments.update', $department->id], 'method' => 'put']) }}
    @include('admin.departments.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
