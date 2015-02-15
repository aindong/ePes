@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
<legend>Accomplishment</legend>

<div class="form-group col-md-12">
    {{ Form::label('accomplishment', 'Accomplishment', ['class' => 'form-label']) }}
    {{ Form::text('accomplishment', null, ['class' => 'form-control', 'placeholder' => 'Accomplishment']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('dateto', 'Date To *', ['class' => 'form-label']) }}
    {{ Form::text('dateto', null, ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('datefrom', 'Date From *', ['class' => 'form-label']) }}
    {{ Form::text('datefrom', null, ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}
</div>

<a href="/employees/pds/accomplishments" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>

@section('page-script')
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy-mm-dd - hh:ii:ss",
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
    });
</script>
@stop