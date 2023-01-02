<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Blogged') }}</title>
        {{-- Icon --}}
        <link rel="icon" href="../storage/Images/BloggedLogo.png" type="image/gif" sizes="30x30">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="/css/style.css">


        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="resources\css\app.css">
        
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>

    {{-- Footer  --}}
  <footer id="dk-footer" class="dk-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="dk-footer-box-info">
                    <a href="{{ route('dashboard') }}" class="footer-logo">
                        <img src="{{ asset('storage\Images\BloggedLogo.png') }}" class="img-fluid" style="width:100px "  alt="logo">
                    </a>
                    <div class="footer-social-link">
                        <h3>Follow us</h3>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/raazkhnl/">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/raazkhnl/">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/raazkhnl/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/raazkhnl/">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="mailto: raazkhnl@gmail.com">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social link -->
                </div>
                <!-- End Footer info -->
                <div class="footer-awarad ">
                    <p>Best Website Design Company 2021</p>
                </div>
            </div>
            <!-- End Col -->
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-us">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                            </div>
                            <!-- End contact Icon -->
                            <div class="contact-info">
                                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14133.51549452064!2d84.19625535!3d27.674682649999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1627381681594!5m2!1sen!2snp" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                                <a href="https://goo.gl/maps/PSGAs3p74QTwcvyz7"><h3>Daldale Nepal</h3></a>
                                    <p>Pragatinagar-Rampur Hwy</p>
                            </div>
                            <!-- End Contact Info -->
                        </div>
                        <!-- End Contact Us -->
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6 ">
                        <div class="contact-us contact-us-last">
                            <div class="contact-icon">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <!-- End contact Icon -->
                            <div class="contact-info">
                                <h3><a href="tel:+977-9863244500">+977-9863244500</a></h3>
                                <p>Give us a call</p>
                            </div>
                            <!-- End Contact Info -->
                        </div>
                        <!-- End Contact Us -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Contact Row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget footer-left-widget">
                            <div class="section-heading">
                                <h3>Useful Links</h3>
                                <span class="animate-border border-black"></span>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog.service') }}">Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('blog.service') }}">Projects</a>
                                </li>
                                <li>
                                    <a href="#">Our Team</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="mailto: raazkhnl@gmail.com">Contact us</a>
                                </li>
                                <li>
                                    <a href="{{ route('dashboard') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Widget -->
                    </div>
                    <!-- End col -->
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget">
                            <div class="section-heading">
                               
                            <form action="">
                                <div class="form-row">
                                    <div class="col dk-footer-form">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                        <button type="submit">
                                            <i class="fa fa-send"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- End form -->
                        </div>
                        <!-- End footer widget -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Widget Row -->
    </div>
    <!-- End Contact Container -->


    <div class="copyright">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <span>Copyright © 2021, All Right Reserved</span>
                </div>
                <!-- End Col -->
                <div class="col-md-6">
                    <div class="copyright-menu">
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Copyright Container -->
    </div>
    <!-- End Copyright -->
    <!-- Back to top -->
    <div id="back-to-top" class="back-to-top">
        <button onclick="topFunction()" id="myBtn" class="btn btn-dark" title="Back to Top" style="display: block;">
            <a href="#"> <i class="fa fa-angle-up"></i></a>
        </button>
    </div>
    <!-- End Back to top -->
</footer>


</html>
