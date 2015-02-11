@extends('layouts.default')

@section('content')
    <legend>Updating a job vacancy</legend>
    {{ Form::model($jobvacancy, ['route' => ['admin.jobvacancies.update', $jobvacancy->id], 'method' => 'put']) }}
    @include('admin.jobvacancies.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
