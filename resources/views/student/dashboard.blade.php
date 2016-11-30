@extends('layouts.master')

@section('content')
        <!-- banner -->
<script src="js/responsiveslides.min.js"></script>
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
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<!-- banner -->
<div class="banner2">
    <div class="header">
        <div class="logo">
            <a href={{url('/')}}><img src="{{ URL::to('src/images/logo.jpg')}}" alt=""/></a>
        </div>
        <div class="top-menu">
            <span class="menu"></span>
            <ul class="navig">
                <li><a href={{url('/')}}>Home</a></li>
                <li><a href={{url('/about')}}>About</a></li>
                <li><a href={{url('/course_list')}}>Programs</a></li>
                <li><a href={{url('/galary')}}>Gallery</a></li>
                <li><a href={{url('/contact')}}>Contact</a></li>
                <li><a href={{url('/notice_list')}}>Notice</a></li>
                <li><a href={{url('/home')}}>Login</a></li>
            </ul>
        </div>
        <!-- script-for-menu -->
        <script>
            $("span.menu").click(function(){
                $("ul.navig").slideToggle("slow" , function(){
                });
            });
        </script>
        <!-- script-for-menu -->
        <div class="clearfix"></div>
    </div>
</div>
<!---->
<div class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">


                        </div>
                    </div>
                </div>
                <table class="table table-striped top_gap">
                    <tbody>
                    <tr>
                        <th>Name:</th>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <th>ID:</th>
                        <td>{{ Auth::user()->id }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ Auth::user()->contact_number }}</td>
                    </tr>
                    <tr>
                        <th>Guardian Name:</th>
                        <td>{{ Auth::user()->guardian_name }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ Auth::user()->gurdian_phone_number}}</td>
                    </tr>
                    <tr>
                        <th>CGPA</th>
                        <td>{{$cgpa}}</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-8">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Student Results</a></li>
                    <li><a data-toggle="tab" href="#menu1">Course Taken</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Subject Title</th>
                                <th>Quiz</th>
                                <th>Class Performance</th>
                                <th>Final</th>
                                <th>Total</th>
                                <th>Letter Grade</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course_details as $result)
                                <tr>
                                    <td>{{$result->sub_name}}</td>
                                    <td>{{$result->quiz}}</td>
                                    <td>{{$result->classPerformance}}</td>
                                    <td>{{$result->final}}</td>
                                    <td>{{$result->quiz+$result->final+$result->classPerformance}}</td>
                                    <td>@if(($result->quiz+$result->final+$result->classPerformance)<40) F
                                    @elseif(($result->quiz+$result->final+$result->classPerformance)<50) D
                                        @elseif(($result->quiz+$result->final+$result->classPerformance)<60) C
                                        @elseif(($result->quiz+$result->final+$result->classPerformance)<70) B
                                        @elseif(($result->quiz+$result->final+$result->classPerformance)<80) A
                                        @else(($result->quiz+$result->final+$result->classPerformance)<81) A+
                                            @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Subject Title</th>
                                <th>Teacher Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>C 101</td>
                                <td>Mr. Jone Doe</td>
                            </tr>
                            <tr>
                                <td>C 101</td>
                                <td>Mr. Jone Doe</td>
                            </tr>
                            <tr>
                                <td>C 101</td>
                                <td>Mr. Jone Doe</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
            <!-- initialize jQuery Library -->
    <script src="{{ URL::to('src/js/jequery.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ URL::to('src/js/bootstrap.min.js')}}"></script>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <!---->


    <div class="footer">
        <div class="container">
            <div class="ftr-sec">
                <div class="col-md-4 ftr-grid">
                    <h3>Address</h3>
                    <b>Modern University of Science & Technology</b><br>
                    141 & 142, Love Road, Tejgaon Industrial Area, Dhaka-1208.<br>
                    Tel. (8802) 8870422, Ext. 107, 114, Fax : (8802) 8870417-18,<br>
                    Email : info@aust.edu, regr@aust.edu
                </div>
                <div class="col-md-4 ftr-grid2">
                    <h3>Pages</h3>
                    <ul>
                        <li><a href={{url('/')}}>Home</a></li>
                        <li><a href={{url('/about')}}>About</a></li>
                        <li><a href={{url('/course_list')}}>Programs</a></li>
                        <li><a href={{url('/galary')}}>Gallery</a></li>
                        <li><a href={{url('/contact')}}>Contact</a></li>
                        <li><a href={{url('/notice_list')}}>Notice</a></li>
                        <li><a href={{url('/home')}}>Login</a></li>
                    </ul>
                </div>
                <div class="col-md-4 ftr-grid3">
                    <h3>MUST Navigation</h3>
                    <ul>
                        <li><a href="#"><span></span>Mark Sheet</a></li>
                        <li><a href="#"><span></span>Departments</a></li>
                        <li><a href="#"><span></span>Class Routine</a></li>
                        <li><a href="#"><span></span>Academic Calendar</a></li>
                        <li><a href="#"><span></span>Alumni</a></li>
                        <li><a href="#"><span></span>Seminar</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---->
    <div class="copywrite">
        <div class="container">
            <p>Copyright © 2015 University. All rights reserved</p>
        </div>
    </div>
    {{--{{$student_results = DB::table('results')->where('id', Auth::user()->id)->get()}}--}}


    @endsection








