@extends('layouts.default')

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            <span>{{ Session::get('success') }}</span>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <span>{{ Session::get('error') }}</span>
        </div>
    @endif
    {{ Form::model($user, ['url' => '/supervisors/update/user/' . $user->id, 'method' => 'post']) }}
    <div class="rows">
        <div class="form-group">
            {{ Form::label('firstname', 'First Name *', ['class' => 'form-label']) }}
            {{ Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'First name']) }}
        </div>

        <div class="form-group">
            {{ Form::label('lastname', 'Last Name *', ['class' => 'form-label']) }}
            {{ Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Last name']) }}
        </div>

        <button class="btn btn-primary" type="submit">Update</button>
    </div>
    {{ Form::close() }}
@stop