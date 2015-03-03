@extends('layouts.default')

@section('content')
    @if(Auth::getUser()->lockpds == 'locked')
        <div class="lock">
            <h1>YOUR PDS IS LOCKED.</h1>
            <p>If you need to change something, ask the HR Department to unlock it.</p>
        </div>
    @endif
    {{ Form::model($userstraining, ['route' => ['employees.pds.trainings.update', $userstraining->id], 'method' => 'put']) }}
    @include('employees.usersTrainings.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop