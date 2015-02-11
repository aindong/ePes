@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif

<div class="form-group">
    {{ Form::label('title', 'Title *', ['class' => 'form-label']) }}
    {{ Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description *', ['class' => 'form-label']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<a href="/admin/jobvacancies" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>
