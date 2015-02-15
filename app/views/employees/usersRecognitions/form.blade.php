@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
<legend>Recognitions</legend>

<div class="form-group col-md-12">
    {{ Form::label('recognition', 'Recognition', ['class' => 'form-label']) }}
    {{ Form::text('recognition', null, ['class' => 'form-control', 'placeholder' => 'Recognition']) }}
</div>

<a href="/employees/pds/recognitions" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>