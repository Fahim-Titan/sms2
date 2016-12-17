@extends('layouts.a_master')

@section('main_body')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href="{{url('/edit',$user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->contact_number}}</td>
                <td>{{$user->roles}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection





