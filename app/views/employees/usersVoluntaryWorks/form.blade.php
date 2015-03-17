@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
<legend>Voluntary Works</legend>

<div class="form-group col-md-12">
    {{ Form::label('organization', 'Organization', ['class' => 'form-label']) }}
    {{ Form::text('organization', null, ['class' => 'form-control', 'placeholder' => 'Organization']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('dateto', 'Date To *', ['class' => 'form-label']) }}
    {{ Form::text('dateto', null, ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('datefrom', 'Date From *', ['class' => 'form-label']) }}
    {{ Form::text('datefrom', null, ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('numberofhours', 'Number of hours', ['class' => 'form-label']) }}
    {{ Form::text('numberofhours', null, ['class' => 'form-control', 'placeholder' => 'Number of hours']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('position', 'Position', ['class' => 'form-label']) }}
    {{ Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Position']) }}
</div>

<a href="/employees/pds/voluntary-works" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>

@section('page-script')
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy-mm-dd hh:ii:ss",
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left",
        minView: 'month'
    });
</script>
@stop