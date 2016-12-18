@extends('layouts.t_master')

@section('main_body')

    @foreach($result as $res)
        {!! Form::open(array('action' => ['ClassPerformanceController@update',$res->Result_id], 'method' => 'PUT', 'files' => true)) !!}
        {!! Form::label('classperformance', 'Class Performance :') !!}
        {!! Form::text('classperformance') !!}

        {!! Form::submit() !!}
        {!! Form::close() !!}
        {{--{{$res->Result_id}}--}}
    @endforeach
@endsection