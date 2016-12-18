@extends('layouts.t_master')

@section('main_body')

    @foreach($result as $res)
        {!! Form::open(array('action' => ['quizController@update',$res->Result_id], 'method' => 'PUT', 'files' => true)) !!}
        {!! Form::label('quiz1') !!}
        {!! Form::text('quiz1') !!}

        {!! Form::label('quiz2') !!}
        {!! Form::text('quiz2') !!}

        {!! Form::label('quiz3') !!}
        {!! Form::text('quiz3') !!}

        {!! Form::label('quiz4') !!}
        {!! Form::text('quiz4') !!}


        {!! Form::submit() !!}
        {!! Form::close() !!}
        {{--{{$res->Result_id}}--}}
    @endforeach
@endsection