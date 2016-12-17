@extends('layouts.t_master')

@section('main_body')
	{!! Form::open(array('route' => 'file.store', 'method' => 'POST', 'files' => true)) !!}
	<div class="form-group">
		{!! Form::label('file_path', 'File path:') !!}
		{!! Form::file('file_path',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('date', 'Date:') !!}
		{!! Form::date('date',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('type', 'Type:') !!}
		{!! Form::select('type', ['Notice' => 'notice', 'Events' => 'events'], null, ['placeholder' => 'choose'],['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('file_heading', 'File Heading:') !!}
		{!! Form::text('file_heading',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('file_description', 'Description:') !!}
		{!! Form::textarea('file_description',null,['class' => 'form-control']) !!}
	</div>

	{{--<div class="form-group">--}}
	{{--{!! Form::label('type', 'Type:') !!} <br>--}}
	{{--{!! Form::select('type', array('notice'=> 'Notices', 'files' => 'Files'), null, ['placeholder' => 'Select your roles', 'class' => 'form-control'])!!}--}}
	{{--</div>--}}

	<div class="form-group">
		{!! Form::submit(null, ['class' => 'btn btn-default']) !!}
	</div>
	{!! Form::close() !!}
@endsection