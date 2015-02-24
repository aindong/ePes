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
    {{ Form::label('dateto', 'Date *', ['class' => 'form-label']) }}
    {{ Form::text('dateto', date('Y-m-d H:i:s', time()), ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}
</div>

{{--<div class="form-group col-md-12">--}}
    {{--{{ Form::label('datefrom', 'Date From *', ['class' => 'form-label']) }}--}}
    {{--{{ Form::text('datefrom', null, ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}--}}
{{--</div>--}}

<p style="font-size: 20px;">
    <label for="honest">
        <input type="checkbox" id="honest"/>
        I hereby certify that the above rating is an objective, honest, and an impartial evaluation of the employee’s performance and that I am responsible and liable for its correctness and truthfulness. I also confirm that I am cognizant that I may be held accountable in case the PHRMO and/or the PERC finds the above rating as unsound or erroneous.
    </label>
</p>

<a href="/employees/pds/accomplishments" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary btnSubmit" disabled>Submit</button>

@section('page-script')
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy-mm-dd hh:ii:ss",
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
    });

    $('#honest').on('change', function(e) {
        if($(this).is(':checked')) {
            $('.btnSubmit').attr('disabled', false);
        } else {
            $('.btnSubmit').attr('disabled', true);
        }
    });
</script>
@stop