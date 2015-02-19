@extends('layouts.default')

@section('content')
    @if(Auth::getUser()->lockpds == 'locked')
        <div class="lock">
            <h1>YOUR PDS IS LOCKED.</h1>
            <p>If you need to change something, ask the HR Department to unlock it.</p>
        </div>
    @endif
    {{ Form::model($usersvoluntarywork, ['route' => ['employees.pds.voluntary-works.update', $usersvoluntarywork->id], 'method' => 'put']) }}
    @include('employees.usersVoluntaryWorks.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop