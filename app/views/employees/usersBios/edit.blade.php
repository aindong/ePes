@extends('layouts.default')

@section('content')
    {{ Form::model($usersbio, ['route' => ['employees.bios.update', $usersbio->id], 'method' => 'put']) }}
    @if(Session::has('error'))
        <div class="alert alert-danger">
            <span>{{ Session::get('error') }}</span>
        </div>
    @endif

    <div class="form-group">
        {{ Form::label('name', 'Department Name *', ['class' => 'form-label']) }}
        {{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) }}
    </div>

    <a href="/admin/departments" class="btn btn-danger">Back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
    {{ Form::close() }}
@stop

@section('page-script')

@stop