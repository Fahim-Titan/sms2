{{--@foreach($notice_list as $info)--}}
    {{--<a href="{{asset('files/'.$info->file_path)}}">{{$info->file_path}}</a><br>--}}
    {{--@endforeach--}}
@extends('layouts.master')

@section('content')
        <!-- banner -->
<script src="js/responsiveslides.min.js"></script>
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
                <li class="active"><a href={{url('notice')}}>Notice</a></li>
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
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Notices/Events</th>
                <th>Description</th>
                <th>Posting Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($notice_list as $notice)
                <tr>
                    <td>{{$notice->file_heading}}</td>
                    <td>{{$notice->file_description}}</td>
                    <td>{{$notice->date}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
<!---->

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

@endsection
