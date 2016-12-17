@extends('layouts.a_master')

@section('main_body')
    {!! Form::open(array('route' => 'teacher.store', 'method' => 'POST')) !!}
    <div class="form-group">
        {!! Form::label('sub_id', 'Subject Name:') !!}
        {!! Form::select('sub_id',$sub_info)!!}
        {{--            {{Form::select('sub_id')}}--}}
    </div>
    <div class="form-group">
        {!! Form::label('id', 'ID:') !!}
        {!! Form::select('id',$teacher) !!}
    </div>
    <div class="form-group">
        {!! Form::submit(null, ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@endsection





