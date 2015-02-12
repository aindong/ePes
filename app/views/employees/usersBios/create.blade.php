@extends('layouts.default')

@section('content')
    {{ Form::open(['route' => 'employees.bios.store', 'method' => 'put']) }}
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <span>{{ Session::get('error') }}</span>
        </div>
    @endif

    <div class="form-group">
        {{ Form::label('firstname', 'First Name *', ['class' => 'form-label']) }}
        {{ Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required']) }}
    </div>

    <div class="form-group">
        {{ Form::label('lastname', 'Last Name *', ['class' => 'form-label']) }}
        {{ Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required']) }}
    </div>

    <div class="form-group">
        {{ Form::label('middlename', 'Middle Name *', ['class' => 'form-label']) }}
        {{ Form::text('middlename', null, ['class' => 'form-control', 'required' => 'required']) }}
    </div>

    <a href="/admin/departments" class="btn btn-danger">Back</a>
    <button type="submit" class="btn btn-primary">Submit</button>

    {{ Form::close() }}
@stop

@section('page-script')

@stop