@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
<legend>Work Experiences</legend>

<div class="form-group col-md-12">
    {{ Form::label('position', 'Position *', ['class' => 'form-label']) }}
    {{ Form::text('position', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Position']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('department', 'Department *', ['class' => 'form-label']) }}
    {{ Form::text('department', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Department']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('salary', 'Salary *', ['class' => 'form-label']) }}
    {{ Form::text('salary', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Salary']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('salarygrade', 'Salary Grade', ['class' => 'form-label']) }}
    {{ Form::text('salarygrade', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Salary grade']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('statusappointment', 'Status Appointment *', ['class' => 'form-label']) }}
    {{ Form::text('statusappointment', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Status Appointment']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('governmentservice', 'Government Service *', ['class' => 'form-label']) }}
    {{ Form::text('governmentservice', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Government Service']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('datefrom', 'Date From *', ['class' => 'form-label']) }}
    {{ Form::text('datefrom', null, ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('dateto', 'Date To *', ['class' => 'form-label']) }}
    {{ Form::text('dateto', null, ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}
</div>

<a href="/employees/pds/work-experiences" class="btn btn-danger">Back</a>
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