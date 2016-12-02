{!! Form::model($user,array('method' => 'PATCH', 'files' => true, 'action' =>['editcontroller@update', $user->id])) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dob', 'Dob:') !!}<br>
        {!! Form::date('dob',\Carbon\Carbon::now(),null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('address', 'Address:') !!}
        {!! Form::text('address',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('contact_number', 'Contact Number:') !!}
        {!! Form::text('contact_number',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('guardian_name', 'Guardian Name:') !!}
        {!! Form::text('guardian_name',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('gurdian_phone_number', 'Gurdian Phone Number:') !!}
        {!! Form::text('gurdian_phone_number',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('guardian_email', 'Guardian Email:') !!}
        {!! Form::text('guardian_email',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::text('password',null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Image:') !!}
        {!! Form::file('image',null,['class' => 'form-control']) !!}
    <div class="form-group">
        {!! Form::label('qualification', 'Qualification:') !!}
        {!! Form::text('qualification',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('blood_type', 'Blood Type:') !!}
        {!! Form::text('blood_type',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('gender', 'Gender:') !!}
        {{--		{!! Form::text('gender') !!}--}}
        {!! Form::select('gender',array('male'=>'Male','female'=>'Female'),null,['placeholder' => 'Select your gender', 'class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('roles', 'Roles:') !!}
        {{--{!! Form::text('roles') !!}--}}
        {!! Form::select('roles', array('admin' => 'Admin', 'teacher' => 'Teacher','student' => 'Student'), null, ['placeholder' => 'Select your roles', 'class' => 'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('update',null, ['class' => 'btn btn-default']) !!}
    </div>

{!! Form::close() !!}