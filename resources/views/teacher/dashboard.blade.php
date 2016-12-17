@extends('layouts.t_master')

@section('main_body')
    <h2>Assigned Subjects</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Subject ID</th>
            <th>Subject Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($assigned_subjects as $assgn)
            <tr>
                <td>{{$assgn->sub_id}}</td>
                <td><a href="{{route('result.show',$assgn->sub_id)}}">{{$assgn->sub_name}}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection