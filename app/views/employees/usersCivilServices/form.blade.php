@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
<legend>Users Educations</legend>

<div class="form-group col-md-12">
    {{ Form::label('careerservice', 'Career Service', ['class' => 'form-label']) }}
    {{ Form::text('careerservice', null, ['class' => 'form-control', 'placeholder' => 'Career Service']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('rating', 'Rating', ['class' => 'form-label']) }}
    {{ Form::text('rating', null, ['class' => 'form-control', 'placeholder' => 'Ratings']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('examinationdate', 'Examination Date *', ['class' => 'form-label']) }}
    {{ Form::text('examinationdate', null, ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('examinationplace', 'Examination Place', ['class' => 'form-label']) }}
    {{ Form::text('examinationplace', null, ['class' => 'form-control', 'placeholder' => 'Examination Place']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('licensenumber', 'License Number', ['class' => 'form-label']) }}
    {{ Form::text('licensenumber', null, ['class' => 'form-control', 'placeholder' => 'License Number']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('licensereleasedate', 'Career Service *', ['class' => 'form-label']) }}
    {{ Form::text('licensereleasedate', null, ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}
</div>

<a href="/employees/pds/civil-services" class="btn btn-danger">Back</a>
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