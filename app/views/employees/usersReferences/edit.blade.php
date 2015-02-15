@extends('layouts.default')

@section('content')
    {{ Form::model($usersreferences, ['route' => ['employees.pds.references.update', $usersreferences->id], 'method' => 'put']) }}
        @include('employees.usersReferences.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop