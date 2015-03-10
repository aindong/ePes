@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif
@if(Session::has('success'))
    <div class="alert alert-success">
        <span>{{ Session::get('success') }}</span>
    </div>
@endif
<legend>Personal Information</legend>
<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('firstname', 'First Name *', ['class' => 'form-label']) }}
        {{ Form::text('firstname', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'First name']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('lastname', 'Last Name *', ['class' => 'form-label']) }}
        {{ Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Last name']) }}
    </div>

    <div class="form-group col-md-2">
        {{ Form::label('middlename', 'Middle Name *', ['class' => 'form-label']) }}
        {{ Form::text('middlename', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Middle name']) }}
    </div>

    <div class="form-group col-md-2">
        {{ Form::label('nameextension', 'Extension', ['class' => 'form-label']) }}
        {{ Form::select('nameextension', ['' => 'N/A', 'jr' => 'Jr', 'sr' => 'Sr', 'iii' => 'III', 'iv' => 'IV', 'v' => 'V'], null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('birthdate', 'Birthday *', ['class' => 'form-label']) }}
        {{ Form::text('birthdate', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Birthdate']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('birthplace', 'Birth Place *', ['class' => 'form-label']) }}
        {{ Form::text('birthplace', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Birth place']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('gender', 'Gender *', ['class' => 'form-label']) }}
        {{ Form::select('gender', ['male' => 'Male', 'female' => 'Female'], null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Gender']) }}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('residentialaddress', 'Current address *', ['class' => 'form-label']) }}
        {{ Form::textarea('residentialaddress', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Current address']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('permanentaddress', 'Permanent Address *', ['class' => 'form-label']) }}
        {{ Form::textarea('permanentaddress', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Permanent address']) }}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        {{ Form::label('civilstatus', 'Civil status *', ['class' => 'form-label']) }}
        {{ Form::select('civilstatus', ['single' => 'Single', 'married' => 'Married', 'widowed' => 'Widowed', 'separated' => 'Separated', 'annulled' => 'Annulled'], null, ['class' => 'form-control', 'required' => 'required']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('citizenship', 'Citizenship *', ['class' => 'form-label']) }}
        {{ Form::text('citizenship', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Citizenship']) }}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('height', 'Height (m) *', ['class' => 'form-label']) }}
        {{ Form::text('height', null, ['data-parsley-type' => 'number', 'data-parsley-maxlength' => '3', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Height']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('weight', 'Weight (kg) *', ['class' => 'form-label']) }}
        {{ Form::text('weight', null, ['data-parsley-type' => 'number', 'data-parsley-maxlength' => '3', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Weight']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('bloodtype', 'Blood Type *', ['class' => 'form-label']) }}
        {{ Form::text('bloodtype', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Bloodtype']) }}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('gsis', 'GSIS ID No. *', ['class' => 'form-label']) }}
        {{ Form::text('gsis', null, ['data-parsley-type' => 'number', 'data-parsley-maxlength' => '11', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'GSIS Number']) }}
    </div>

    <div class="form-group col-md-4">
        {{

         Form::label('pagibig', 'Pagibig ID No. *', ['class' => 'form-label']) }}
        {{ Form::text('pagibig', null, ['data-parsley-type' => 'number', 'data-parsley-maxlength' => '12', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Pagibig Number']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('philhealth', 'Philhealth *', ['class' => 'form-label']) }}
        {{ Form::text('philhealth', null, ['data-parsley-type' => 'number', 'data-parsley-maxlength' => '12', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Philhealth Number']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('sss', 'SSS No.*', ['class' => 'form-label']) }}
        {{ Form::text('sss', null, ['data-parsley-type' => 'number', 'data-parsley-maxlength' => '12', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'SSS Number']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('tin', 'TIN # *', ['class' => 'form-label']) }}
        {{ Form::text('tin', null, ['data-parsley-type' => 'number', 'data-parsley-maxlength' => '12', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'TIN Number']) }}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('telno', 'Telephone # *', ['class' => 'form-label']) }}
        {{ Form::text('telno', null, ['data-parsley-maxlength' => '12', 'data-parsley-type' => 'number', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Telephone Number']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('celno', 'Cellphone # *', ['class' => 'form-label']) }}
        {{ Form::text('celno', null, ['data-parsley-maxlength' => '11', 'data-parsley-type' => 'number', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Cellphone Number']) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('email', 'Email Address *', ['class' => 'form-label']) }}
        {{ Form::text('email', null, ['data-parsley-type' => 'email', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email Address']) }}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-12">
        {{ Form::label('agencyemployeeno', 'Agency Employee # *', ['class' => 'form-label']) }}
        {{ Form::text('agencyemployeeno', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Agency Employee Number']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('fathername', 'Father Name *', ['class' => 'form-label']) }}
        {{ Form::text('fathername', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Father name']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('mothername', 'Mother Name *', ['class' => 'form-label']) }}
        {{ Form::text('mothername', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Mother name']) }}
    </div>

    <div class="form-group col-md-5">
        {{ Form::label('spousefirstname', 'Spouse First Name', ['class' => 'form-label']) }}
        {{ Form::text('spousefirstname', null, ['class' => 'form-control', 'placeholder' => 'Spouse First name']) }}
    </div>

    <div class="form-group col-md-5">
        {{ Form::label('spouselastname', 'Spouse Last Name', ['class' => 'form-label']) }}
        {{ Form::text('spouselastname', null, ['class' => 'form-control', 'placeholder' => 'Spouse Last name']) }}
    </div>

    <div class="form-group col-md-2">
        {{ Form::label('spousemiddlename', 'Spouse Middle Name', ['class' => 'form-label']) }}
        {{ Form::text('spousemiddlename', null, ['class' => 'form-control', 'placeholder' => 'Spouse Middle name']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('spouseoccupation', 'Spouse Occupation', ['class' => 'form-label']) }}
        {{ Form::text('spouseoccupation', null, ['class' => 'form-control', 'placeholder' => 'Spouse Occupation']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('spouseemployername', 'Spouse Employer Name', ['class' => 'form-label']) }}
        {{ Form::text('spouseemployername', null, ['class' => 'form-control', 'placeholder' => 'Spouse Employer Name']) }}
    </div>

    <div class="form-group col-md-12">
        {{ Form::label('spousetelno', 'Spouse Telephone Number', ['class' => 'form-label']) }}
        {{ Form::text('spousetelno', null, ['data-parsley-maxlength' => '12', 'data-parseley-type' => 'digits', 'class' => 'form-control', 'placeholder' => 'Spouse Telephone Number']) }}
    </div>
</div>

<div class="col-md-12">
    <a href="/employees/pds/bios" class="btn btn-danger">Back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
