@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
<legend>Hobbies</legend>

<div class="form-group col-md-12">
    {{ Form::label('hobby', 'Hobby', ['class' => 'form-label']) }}
    {{ Form::text('hobby', null, ['class' => 'form-control', 'placeholder' => 'Hobby']) }}
</div>

<a href="/employees/pds/hobbies" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>