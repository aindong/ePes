@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
<legend>Organization</legend>

<div class="form-group col-md-12">
    {{ Form::label('organization', 'Organization', ['class' => 'form-label']) }}
    {{ Form::text('organization', null, ['class' => 'form-control', 'placeholder' => 'Organization']) }}
</div>

<a href="/employees/pds/educations" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>