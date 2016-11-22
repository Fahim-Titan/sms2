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
<div class="banner">
    <div class="header">
        <div class="logo">
            <a href={{url('/')}}><img src="{{ URL::to('src/images/logo.jpg')}}" alt=""/></a>
        </div>
        <div class="top-menu">
            <span class="menu"></span>
            <ul class="navig">
                <li class="active"><a href={{url('/')}}>Home</a></li>
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
    <div class="slider">
        <div class="caption">
            <div class="container">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <!--
                        <li><h3>Modern University of Science and Technology</h3></li>
                        <li><h3>Modern University of Science and Technology.</h3></li>
                        <li><h3>Modern University of Science and Technology</h3></li>
                        -->
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-grids">
        <div class="container">
            <div class="col-md-2 banner-grid">

            </div>

            <div class="col-md-4 banner-grid">
                <h3>News Feed</h3>
                <div class="banner-grid-sec">
                    <div class="news-grid">
                        <h4><a href="#">12th waiting list, Fall 2016 semester</a></h4>
                        <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
                    </div>
                    <div class="news-grid">
                        <h4><a href="#">Notification for the students who have been awarded Govt. Scholarship</a></h4>
                        <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
                    </div>
                    <div class="news-grid">
                        <h4><a href="#">নিয়োগ বিজ্ঞপ্তি</a></h4>
                        <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
                    </div>
                    <!--
                    <div class="news-grid">
                        <h4><a href="#">Notification for Half Free Tuition Award</a></h4>
                        <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
                    </div>
                    -->
                    <div class="more_info">
                        <a href="blog.html">View All</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 banner-grid">
                <h3>News Letter</h3>
                <div class="banner-grid-sec news_sec">
                    <div class="news-ltr">
                        <h4><a href="#">Pellentesque sed arcu lacinia</a></h4>
                        <p>Aliquam sem velit, rhoncus sed arcu eu viverra. Suspendisse lacus posuere ultricies turpis.</p>
                    </div>
                    <form>
                        <input type="text" placeholder="Email Address*" required="">
                        <input type="submit" value="SEND">
                    </form>
                </div>
            </div>
            <div class="col-md-2 banner-grid">

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div class="welcome">
    <div class="container">
        <h2>Modern University of Science and Technology</h2>
        <div class="welcm_sec">
            <div class="col-md-9 campus">
                <div class="campus_head">
                    <h3>Welcome</h3>
                    <p>Approved by the Government of the  People's  Republic of Bangladesh, Modern University of Science and Technology has been successfully carrying out its  noble mission since 1995.<br>

                        It maintains close collaboration with the University Grants Commission (UGC), Bangladesh and many other national and  international educational institutions and professional bodies.</p>
                </div>
                <div class="col-md-3 wel_grid">
                    <img src="{{ URL::to('src/images/m1.jpg')}}" class="img-responsive" alt=""/>
                    <h5><a href="#">Chancellor</a></h5>
                    <p>Mr. Md. Abdul Hamid
                        President of the People's Republic of Bangladesh</p>
                </div>
                <div class="col-md-3 wel_grid">
                    <img src="{{ URL::to('src/images/m2.jpg')}}" class="img-responsive" alt=""/>
                    <h5><a href="#">Chairman</a></h5>
                    <p>Mr. Kazi Rafiqul Alam
                        President,
                        Dhaka Ahsania Mission</p>
                </div>
                <div class="col-md-3 wel_grid">
                    <img src="{{ URL::to('src/images/m1.jpg')}}" class="img-responsive" alt=""/>
                    <h5><a href="#">Vice Chancellor</a></h5>
                    <p>Prof. Dr. A.M.M. Safiullah</p>
                </div>
                <div class="col-md-3 wel_grid">
                    <img src="{{ URL::to('src/images/m2.jpg')}}" class="img-responsive" alt=""/>
                    <!--<img src="images/w4.jpg" class="img-responsive" alt=""/>-->
                    <h5><a href="#">Treasurer</a></h5>
                    <p>Prof. Dr. Kazi Shariful Alam</p>
                </div>
                <div class="clearfix"></div>
                <!--
                <div class="more_info">
                    <a href="blog.html">More Info....</a>
                </div>
                -->
            </div>
            <div class="col-md-3 testimonal">
                <h3>MUST Navigation</h3>
                <ul>
                    <li><a href="#"><span></span>Mark Sheet</a></li>
                    <li><a href="#"><span></span>Departments</a></li>
                    <li><a href="#"><span></span>Class Routine</a></li>
                    <li><a href="#"><span></span>Academic Calendar</a></li>
                    <li><a href="#"><span></span>Alumni</a></li>
                    <li><a href="#"><span></span>Seminar</a></li>
                </ul>
                <!--
                <h3>Testimonials</h3>
                <div class="testimnl-grid">
                    <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
                    <h5>John.Mr</h5>
                </div>
                <div class="testimnl-grid">
                    <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
                    <h5>John.Mr</h5>
                </div>
                <div class="testimnl-grid">
                    <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
                    <h5>John.Mr</h5>
                </div>
                -->
            </div>
            <div class="clearfix"></div>
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
