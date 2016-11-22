<!--<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
    <div class="row">
        <label for="name">Your name:</label><br />
        <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
    </div>
    <div class="row">
        <label for="email">Your email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
    </div>
    <div class="row">
        <label for="message">Your message:</label><br />
        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
    </div>
    <input id="submit_button" type="submit" value="Send email" />
</form>
-->
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
                <li class="active"><a href={{url('/contact')}}>Contact</a></li>
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
<div class="contact">
    <div class="container">
        <div class="main-head-section">
            <h2>Contact</h2>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.28756908962!2d90.27937054685856!3d23.780628607505957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1479780959870" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="contact_top">
            <div class="col-md-8 contact_left">
                <h4>Below Type Here</h4>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>-->
                <form>
                    <div class="form_details">
                        <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                        <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
                        <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                        <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                        <div class="clearfix"> </div>
                        <div class="sub-button">
                            <input type="submit" value="Send message">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 company-right">
                <div class="company_ad">
                    <h3>Address</h3>
                    <span>Modern University of Science & Technology</span>
                    <address>
                    <p>141 & 142, Love Road, Tejgaon Industrial Area, Dhaka-1208.</p>
                    <p>Tel. (8802) 8870422, Ext. 107, 114, Fax : (8802) 8870417-18,</p>
                    <p>Email : <a href="mailto:example@mail.com">info@display.com</a></P>
                    </address>
                </div>
            </div>
            <div class="clearfix"> </div>
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
