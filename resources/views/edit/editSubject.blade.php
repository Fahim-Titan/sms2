@extends('layouts.a_master')

@section('main_body')
    @foreach($sub as $s)
    {!! Form::model($s,array('method' => 'PATCH', 'files' => true, 'action' =>['SubjectController@update', $s->sub_id])) !!}

    <div class="form-group">
        {!! Form::label('sub_id', 'Subject Name:') !!}
        {!! Form::text('sub_id',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('sub_name', 'Subject Name:') !!}
        {!! Form::text('sub_name',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('textbook_name', 'TextBook Name:') !!}
        {!! Form::text('textbook_name',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('credit', 'TextBook Name:') !!}
        {!! Form::text('credit',null,['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('update',null, ['class' => 'btn btn-default']) !!}
    {!! Form::close() !!}
@endforeach



    {{--@foreach($sub as $s)--}}
    {{--{{$s->sub_id}}--}}
        {{--{{$s->sub_name}}--}}
    {{--@endforeach--}}
@endsection