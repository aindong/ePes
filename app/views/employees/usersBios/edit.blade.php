@extends('layouts.default')

@section('content')
    {{ Form::model($usersbio, ['route' => ['employees.pds.bios.update', $usersbio->id], 'method' => 'put']) }}
        @include('employees.usersBios.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop