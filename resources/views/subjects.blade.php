@extends('layouts.a_master')

@section('main_body')
    {!! Form::open(array('route' => 'subject.store', 'method' => 'POST')) !!}

    <div class="form-group">
        {!! Form::label('sub_name', 'Subject Name:') !!}
        {!! Form::text('sub_name',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('textbook_name', 'Textbook Name:') !!}
        {!! Form::text('textbook_name',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('credit', 'Credit :') !!}
        {!! Form::text('credit',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit(null, ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@endsection





