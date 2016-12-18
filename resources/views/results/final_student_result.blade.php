@extends('layouts.t_master')

@section('main_body')
    {{--@foreach($result as $res)--}}
    {{--    {!! Form::model($res,['method' => 'PATCH', 'files' => true, 'action' =>['FinalController@update', $res->Result_id]])!!}--}}
    {{--{!! Form::open(array('action' => ['FinalController@update', $res->id], 'method' => 'PATCH', 'files' => true)) !!}--}}
    {{--<div class="form-group">--}}
    {{--{!! Form::label('final', 'Final:') !!}--}}
    {{--{!! Form::text('final',['class' => 'form-control']) !!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--{!! Form::submit('update',null, ['class' => 'btn btn-default']) !!}--}}
    {{--</div>--}}

    {{--{!! Form::close() !!}--}}
    {{--@endforeach--}}
    @foreach($result as $res)
        {!! Form::open(array('action' => ['FinalController@update',$res->Result_id], 'method' => 'PUT', 'files' => true)) !!}
        {!! Form::label('final') !!}
        {!! Form::text('final') !!}

        {!! Form::submit() !!}
        {!! Form::close() !!}
        {{--{{$res->Result_id}}--}}
    @endforeach
@endsection