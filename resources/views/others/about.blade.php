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
                <li  class="active"><a href={{url('/about')}}>About</a></li>
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
<div class="about-sec">
    <div class="container">
        <div class="about-head">
            <h2>About</h2>
            <p>The Modern University of Science and Technology (AUST) was founded by the Dhaka Ahsania Mission in 1995.<br>
                The Modern University of Science and Technology will be the premier centre of excellence in science, engineering and technology by creating and transferring knowledge with human touch to the young generations to come to enhance the quality of life in Bangladesh and beyond.<br>
                The mission of the Modern University of Science and Technology is to develop human resources in the fields of science, engineering and technology to meet the ever changing needs of the society in the perspective of the highly complex and globalized world and to do so it aims at producing quality graduates imbued with the spirit of ethical values and equipped with knowledge and skills appropriate to the fast changing world so that they can face the challenges successfully wherever they are and contribute to social and economic development of the country in their own humble way.</p>
        </div>
    </div>
</div>

<!---->

<!--
<div class="news">
    <div class="container">
        <h3>Top News</h3>
        <div class="event-grids">
            <div class="col-md-4 event-grid">
                <div class="date">
                    <h4>26</h4>
                    <span>08/2012</span>
                </div>
                <div class="event-info">
                    <h5><a href="#">Etiam malesuada feugiat rutrum purus quis vulputate.</a></h5>
                    <p>Praesent sagittis in enim vel cursus. Aenean velit ante, maximus ac placerat at,
                        volutpat et orci. Aliquam eu tellus orci.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 event-grid">
                <div class="date">
                    <h4>24</h4>
                    <span>06/2012</span>
                </div>
                <div class="event-info">
                    <h5><a href="#">Etiam malesuada feugiat rutrum purus quis vulputate.</a></h5>
                    <p>Praesent sagittis in enim vel cursus. Aenean velit ante, maximus ac placerat at,
                        volutpat et orci. Aliquam eu tellus orci.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 event-grid">
                <div class="date">
                    <h4>20</h4>
                    <span>04/2012</span>
                </div>
                <div class="event-info">
                    <h5><a href="#">Etiam malesuada feugiat rutrum purus quis vulputate.</a></h5>
                    <p>Praesent sagittis in enim vel cursus. Aenean velit ante, maximus ac placerat at,
                        volutpat et orci. Aliquam eu tellus orci.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
-->
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
