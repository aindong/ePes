@extends('layouts.default')

@section('content')
    @if(Auth::getUser()->lockpds == 'locked')
        <div class="lock">
            <h1>YOUR PDS IS LOCKED.</h1>
            <p>If you need to change something, ask the HR Department to unlock it.</p>
        </div>
    @endif
    {{ Form::model($usershobby, ['route' => ['employees.pds.hobbies.update', $usershobby->id], 'method' => 'put']) }}
        @include('employees.usersHobbies.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop