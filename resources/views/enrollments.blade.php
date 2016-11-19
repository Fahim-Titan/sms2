<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap css file-->
	<link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.min.css')}}">
	<style>
        div.card {
            width: 250px;
            height: 300px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            /*text-align: center;*/
            padding: 10px;
        }

        .top_gap{
            margin-top:20px;
        }
        .table-borderless tbody tr td,
        .table-borderless tbody tr th,
        .table-borderless thead tr th,
        .table-borderless thead tr td,
        .table-borderless tfoot tr th,
        .table-borderless tfoot tr td {
            border: none;
        }
        .navbar {

            background-color: #f4511e;
            z-index: 9999;

            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #fff !important;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #f4511e !important;
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }
    </style>
</head>
<body>
@include('includes.dashboard_header')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <table class="table table-borderless">
                <tbody>
                <tr>
                    <td><button type="button" class="btn btn-default" style="width: 70%;"><a href="{{url('add-teacher')}}">Teacher Add</a></button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-default" style="width: 70%;"><a href="{{url('add-teacher')}}">Student Add</a></button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-default" style="width: 70%;"><a href="{{url('add-subject')}}">Subject Add</a></button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-default" style="width: 70%;"><a href="{{url('enrollment')}}">Enrollment</a></button></td>
                </tr>
                <tr>
                    <td><button type="button" class="btn btn-default" style="width: 70%;"><a href="{{url('enrollment')}}">Teacher Assign</a></button></td>
                </tr>
                </tbody>
            </table>

        </div>
        <div class="col-sm-8">

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
        </div>
    </div>


    {{--ai gula k option er moddhe dhukate hobe.--}}
    {{--@foreach($info as $key)--}}
    {{--{{$key -> sub_id}} -> {{$key->sub_name}} ===>--}}
    {{--{{$key-> cb_id}} -> {{$key->name}}--}}
    {{--<br>--}}
    {{--@endforeach--}}


    @if (!empty($success))
        {{ $success }}
    @endif

    @if($errors->any())

        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

</div>
<!-- initialize jQuery Library -->
<script src="{{ URL::to('src/js/jequery.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{ URL::to('src/js/bootstrap.min.js')}}"></script>
</body>
</html>