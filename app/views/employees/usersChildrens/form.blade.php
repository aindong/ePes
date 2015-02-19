@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
<legend>Recognitions</legend>

<div class="form-group col-md-12">
    {{ Form::label('name', 'Name', ['class' => 'form-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
</div>

<div class="form-group col-md-12">
    {{ Form::label('birthdate', 'Birthdate *', ['class' => 'form-label']) }}
    {{ Form::text('birthdate', null, ['class' => 'form-control input-append date form_datetime', 'required' => 'required']) }}
</div>

<a href="/employees/pds/childrens" class="btn btn-danger">Back</a>
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