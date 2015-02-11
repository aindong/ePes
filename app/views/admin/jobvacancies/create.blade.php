@extends('layouts.default')

@section('content')
    <legend>Create a new job vacancy</legend>
    {{ Form::open(['route' => 'admin.jobvacancies.store', 'method' => 'post']) }}
        @include('admin.jobvacancies.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
