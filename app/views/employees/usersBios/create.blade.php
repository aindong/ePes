@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.bios.store', 'method' => 'put']) }}
        @include('employees.usersBios.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop