@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.pds.voluntary-works.store', 'method' => 'put']) }}
    @include('employees.usersVoluntaryWorks.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop