@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif

<div class="form-group">
    {{ Form::label('name', 'Evaluation Start Date *', ['class' => 'form-label']) }}
    {{ Form::text('start_at', null, ['class' => 'form-control form_datetime', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('name', 'Evaluation End Date *', ['class' => 'form-label']) }}
    {{ Form::text('end_at', null, ['class' => 'form-control form_datetime', 'required' => 'required']) }}
</div>

<a href="/admin/departments" class="btn btn-danger">Back</a>
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