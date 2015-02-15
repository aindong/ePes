@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.civil-services.store', 'method' => 'post']) }}
    @include('employees.usersCivilServices.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop