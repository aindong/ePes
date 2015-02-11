@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'admin.users.store', 'method' => 'post']) }}
        <legend>Creating a new User</legend>
        @include('admin.users.form')
    {{ Form::close() }}
@stop