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
                <li  class="active"><a href={{url('/galary')}}>Gallery</a></li>
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
        <h2>Gallery</h2>
        <div class="event-pics">
            <a class="fancybox" href="{{url('src/images/1.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/1.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <a class="fancybox" href="{{url('src/images/2.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/2.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <a class="fancybox" href="{{url('src/images/3.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/3.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <a class="fancybox" href="{{url('src/images/4.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/4.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <div class="clearfix"></div>
            <a class="fancybox" href="{{url('src/images/5.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/5.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <a class="fancybox" href="{{url('src/images/6.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/6.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <a class="fancybox" href="{{url('src/images/7.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/7.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <a class="fancybox" href="{{url('src/images/8.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/8.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <div class="clearfix"></div>
            <a class="fancybox" href="{{url('src/images/9.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/9.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <a class="fancybox" href="{{url('src/images/10.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/10.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <a class="fancybox" href="{{url('src/images/11.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/11.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <a class="fancybox" href="{{url('src/images/1.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="{{ URL::to('src/images/1.jpg')}}"class="img-style row6" alt=""/><span> </span></a>
            <div class="clearfix"></div>
        </div>
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
