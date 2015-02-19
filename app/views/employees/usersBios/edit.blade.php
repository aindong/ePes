@extends('layouts.default')

@section('content')
    @if(Auth::getUser()->lockpds == 'locked')
        <div class="lock col-md-12">
            <h1>YOUR PDS IS LOCKED.</h1>
            <p>If you need to change something, ask the HR Department to unlock it.</p>
        </div>
    @endif
    {{ Form::model($usersbio, ['route' => ['employees.pds.bios.update', $usersbio->id], 'method' => 'put']) }}
        @include('employees.usersBios.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop