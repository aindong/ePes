@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
<legend>Training</legend>

<div class="form-group col-md-12">
    {{ Form::label('seminar', 'Seminar *', ['class' => 'form-label']) }}
    {{ Form::text('seminar', null, ['class' => 'form-control', 'placeholder' => 'Seminar', 'required']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('datefrom', 'From', ['class' => 'form-label']) }}
    {{ Form::text('datefrom', null, ['class' => 'form-control form_datetime', 'placeholder' => 'Date From']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('dateto', 'To', ['class' => 'form-label']) }}
    {{ Form::text('dateto', null, ['class' => 'form-control form_datetime', 'placeholder' => 'Date To']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('numberofhours', 'Hours', ['class' => 'form-label']) }}
    {{ Form::text('numberofhours', null, ['class' => 'form-control', 'placeholder' => 'Number of hours']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('sponsor', 'Sponsor', ['class' => 'form-label']) }}
    {{ Form::text('sponsor', null, ['class' => 'form-control', 'placeholder' => 'Sponsor']) }}
</div>

<a href="/employees/pds/trainings" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>

@section('page-script')
    <script type="text/javascript">
        $(".form_datetime").datetimepicker({
            format: "yyyy-mm-dd hh:ii:ss",
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });
    </script>
@stop