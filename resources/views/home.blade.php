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
            <a href="index.html"><img src="{{ URL::to('src/images/logo.jpg')}}" alt=""/></a>
        </div>
        <div class="top-menu">
            <span class="menu"></span>
            <ul class="navig">
                <li class="active"><a href="index.html">Home</a></li>
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
                        <li><h3>Modern University of Science and Technology</h3></li>
                        <li><h3>Modern University of Science and Technology.</h3></li>
                        <li><h3>Modern University of Science and Technology</h3></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-grids">
        <div class="container">

            <div class="col-md-6 banner-grid">
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
                    <div class="news-grid">
                        <h4><a href="#">Notification for the students who are interested to avail of Half Free Tuition Award (HFTA) under "Sibling Quota"</a></h4>
                        <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 banner-grid">
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
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div class="welcome">
    <div class="container">
        <h2>Duis aliquet in ex nec elementum. In commodo molestie libero ornare elementum.</h2>
        <div class="welcm_sec">
            <div class="col-md-9 campus">
                <div class="campus_head">
                    <h3>Welcome</h3>
                    <p>Nunc justo sapien, cursus at urna at, placerat porttitor tellus. Aliquam vehicula tellus nunc,
                        id pretium lacus placerat dignissim. Donec quis dui sed lacus vulputate scelerisque a sit amet neque.</p>
                </div>
                <div class="col-md-3 wel_grid">
                    <img src="images/w1.jpg" class="img-responsive" alt=""/>
                    <h5><a href="#">Aliquam sit amet</a></h5>
                    <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
                </div>
                <div class="col-md-3 wel_grid">
                    <img src="images/w3.jpg" class="img-responsive" alt=""/>
                    <h5><a href="#">Aliquam sit amet</a></h5>
                    <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
                </div>
                <div class="col-md-3 wel_grid">
                    <img src="images/w2.jpg" class="img-responsive" alt=""/>
                    <h5><a href="#">Aliquam sit amet</a></h5>
                    <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
                </div>
                <div class="col-md-3 wel_grid">
                    <img src="images/w4.jpg" class="img-responsive" alt=""/>
                    <h5><a href="#">Aliquam sit amet</a></h5>
                    <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
                </div>
                <div class="clearfix"></div>
                <div class="more_info">
                    <a href="blog.html">More Info....</a>
                </div>
            </div>
            <div class="col-md-3 testimonal">
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
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
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
<!---->
<div class="footer">
    <div class="container">
        <div class="ftr-sec">
            <div class="col-md-4 ftr-grid">
                <h3>Text Module</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut odio ut quam convallis ultricies. Morbi rutrum lectus tortor. Cras vitae semper mi, et feugiat dolor.</p>
            </div>
            <div class="col-md-4 ftr-grid2">
                <h3>Pages</h3>
                <ul>
                    <li><a href="index.html"><span></span>Home</a></li>
                    <li><a href="about.html"><span></span>About</a></li>
                    <li><a href="program.html"><span></span>Programs</a></li>
                    <li><a href="blog.html"><span></span>Blog</a></li>
                    <li><a href="gallery.html"><span></span>Gallery</a></li>
                    <li><a href="contact.html"><span></span>Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 ftr-grid3">
                <h3>Quick links</h3>
                <ul>
                    <li><a href="about.html"><span></span>History</a></li>
                    <li><a href="about.html"><span></span>Departments</a></li>
                    <li><a href="gallery.html"><span></span>Services</a></li>
                    <li><a href="blog.html"><span></span>Guidancs</a></li>
                    <li><a href="about.html"><span></span>Team</a></li>
                    <li><a href="contact.html"><span></span>Contact</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div class="copywrite">
    <div class="container">
        <p>Copyright © 2015 University. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>

@endsection
