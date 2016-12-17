@extends('layouts.a_master')

@section('main_body')
    {!! Form::open(array('route' => 'enrollment.store', 'method' => 'POST')) !!}

    <div class="form-group">
        {!! Form::label('id', 'ID:') !!}
        {!! Form::text('id',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sub_id', 'Subject Name:') !!}
        {!! Form::select('sub_id',$info,null,['placeholder' => 'Pick your subject', 'class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit(null, ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@endsection





