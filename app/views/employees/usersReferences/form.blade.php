@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
<legend>References</legend>

<div class="form-group col-md-12">
    {{ Form::label('name', 'Name', ['class' => 'form-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('address', 'Address', ['class' => 'form-label']) }}
    {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('telno', 'Telephone Number', ['class' => 'form-label']) }}
    {{ Form::text('telno', null, ['class' => 'form-control', 'placeholder' => 'Telephone Number']) }}
</div>

<a href="/employees/pds/references" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>