@extends('layouts.a_master')

@section('main_body')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Subject ID</th>
            <th>Subject Name</th>
            <th>TextBook Name</th>
            <th>Credit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subject as $sub)
            <tr>
                <td>{{$sub->sub_id}}</td>
                {{--<td><a href="{{url('/subject',$sub->sub_id)}}">{{$sub->sub_name}}</a></td>--}}
                <td>{{$sub->sub_name}}</td>
                <td>{{$sub->textbook_name}}</td>
                <td>{{$sub->credit}}</td>
        @endforeach
        </tbody>
    </table>
@endsection