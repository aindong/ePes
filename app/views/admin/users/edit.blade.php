@extends('layouts.default')

@section('content')
    {{ Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'put']) }}
        <legend>Updating an Employee</legend>
        @include('admin.users.form')
    {{ Form::close() }}
@stop