@extends('layouts.admin')

@section('content')
    <h2>Updating a department</h2>
    {{ Form::model($departments, ['route' => ['admin.departments.update', $departments->id], 'method' => 'put']) }}
    @include('admin.departments.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
