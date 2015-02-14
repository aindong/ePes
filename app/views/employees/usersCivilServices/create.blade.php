@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.civil-services.store', 'method' => 'put']) }}
    @include('employees.usersCivilServices.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop