<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('SecurityExpert', 'SecurityExpert') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/bookGuard.js') }}" defer></script>
        <script src="{{ asset('js/hideAndShowBookButton.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        <link href="{{ asset('css/signupSelection.css') }}" rel="stylesheet">
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <link href="{{ asset('css/linearicons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        <header id="header" id="home" style="background-color: black;  opacity: 0.5;">
            <div class="container header-top">
                <div class="row">
                    <div class="col-6 top-head-left">
                        <ul>
                            <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="www.gmail.com"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="www.linkdin.com"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-6 top-head-right">
                        @if (Route::has('login'))
                        <ul>
                            @if(Auth::check())
                            <li>
                                <a class="nav-link" href="{{route('home')}}">Go to Dashboard</a>
                            </li>
                            <li>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa fa-user"></i>
                                {{ Auth::user()->fname }} <span class="caret"></span>
                                </a> 
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i>
                                    {{ __('Logout') }}
                                    </a>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        @else
                        <ul>
                            <!-- <li><a href="tel:+880 012 3654 896"><span>+880 012 3654 896</span> <span class="lnr lnr-phone-handset"></span></a></li> -->
                            <li><a href="{{ route('customerLogin') }}">Login</a></li>
                            <li><a href="{{ route('guardSignup') }}">Guard Regstration</a></li>
                            <li><a href="{{ route('customerRegister') }}">Customer Regstration</a></li>
                            <li><a href="{{ route('home') }}">Find Guard</a></li>
                        </ul>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <div class="login-logo" style="border-radius: 50%;">
                            <a href="{{route('welcome')}}"><img src="img/seclogo.png" alt="logo" title="" height="50px" width="50px" style="border-radius: 50%;" /></a>
                        </div>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="{{ route('welcome') }}">Home</a></li>
                            <li><a href="{{ route('aboutus') }}">About Us</a></li>
                            <li><a href="{{ route('service') }}">Service</a></li>
                            <li><a href="{{ route('team') }}">Team</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <!--  <li class="menu-has-children"><a href="">Pages</a>
                                <ul>
                                  <li><a href="blog-single.html">blog Single</a></li>
                                  <li><a href="elements.html">Elements</a></li>
                                </ul>
                                </li>    -->                
                        </ul>
                    </nav>
                    <!-- #nav-menu-container -->                    
                </div>
            </div>
        </header>
        <!-- #header -->
        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-start">
                    <div class="banner-content col-lg-9">
                        <h6 class="text-white">Openning on 21st February, 2018</h6>
                        <h1 class="text-white">
                            Exhibition on Modern Era                
                        </h1>
                        <p class="pt-20 pb-20 text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
                        </p>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <!--     <a href="#" class="primary-btn text-uppercase">Get Started</a> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->
        <!-- Start service Area -->
        <section class="service-area section-gap" id="service">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Our Offered Services</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-service">
                            <div class="thumb">
                                <img class="img-fluid" src="img/s1.jpg" alt="">
                            </div>
                            <div class="detail">
                                <a href="#">
                                    <h4>Basic & Common Repairs</h4>
                                </a>
                                <p>
                                    Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.                                 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-service">
                            <div class="thumb">
                                <img class="img-fluid" src="img/s2.jpg" alt="">
                            </div>
                            <div class="detail">
                                <a href="#">
                                    <h4>Brake Repairs & Services</h4>
                                </a>
                                <p>
                                    Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.                                 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-service">
                            <div class="thumb">
                                <img class="img-fluid" src="img/s3.jpg" alt="">
                            </div>
                            <div class="detail">
                                <a href="#">
                                    <h4>Preventive Maintenance</h4>
                                </a>
                                <p>
                                    Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.                                 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End service Area -->
        <!-- Start feature Area -->
        <section class="feature-area section-gap" id="feature">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-40 header-text">
                        <h1>Some Features that Made us Unique</h1>
                        <p>
                            Who are in extremely love with eco friendly system.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <h4><span class="lnr lnr-license"></span>Professional Service</h4>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <h4><span class="lnr lnr-phone"></span>Great Support</h4>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feature">
                            <h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End feature Area -->               
        <!-- Start fact Area -->
        <section class="facts-area section-gap" id="facts-area">
            <div class="container">
                <div class="row">
                    <div class="col single-fact">
                        <h1 class="counter">2536</h1>
                        <p>Projects Completed</p>
                    </div>
                    <div class="col single-fact">
                        <h1 class="counter">6784</h1>
                        <p>Really Happy Clients</p>
                    </div>
                    <div class="col single-fact">
                        <h1 class="counter">1059</h1>
                        <p>Total Tasks Completed</p>
                    </div>
                    <div class="col single-fact">
                        <h1 class="counter">2239</h1>
                        <p>Cups of Coffee Taken</p>
                    </div>
                    <div class="col single-fact">
                        <h1 class="counter">435</h1>
                        <p>In House Professionals</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end fact Area -->                          
        <!-- Start galery Area -->
        <section class="galery-area section-gap" id="gallery">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Latest From Our Gallery</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <a href="img/g1.jpg" class="single-gallery">
                        <img class="img-fluid" src="img/g1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <a href="img/g2.jpg" class="single-gallery">
                        <img class="img-fluid" src="img/g2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="img/g3.jpg" class="single-gallery">
                        <img class="img-fluid" src="img/g3.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="img/g4.jpg" class="single-gallery">
                        <img class="img-fluid" src="img/g4.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="img/g5.jpg" class="single-gallery">
                        <img class="img-fluid" src="img/g5.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <a href="img/g6.jpg" class="single-gallery">
                        <img class="img-fluid" src="img/g6.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <a href="img/g7.jpg" class="single-gallery">
                        <img class="img-fluid" src="img/g7.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End galery Area -->
        <!-- Start blog Area -->
        <section class="blog-area section-gap" id="blog">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Latest From Our Blog</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/b1.jpg" alt="">                             
                        </div>
                        <p class="date">10 Jan 2018</p>
                        <a href="blog-single.html">
                            <h4>Addiction When Gambling
                                Becomes A Problem
                            </h4>
                        </a>
                        <p>
                            inappropriate behavior ipsum dolor sit amet, consectetur.
                        </p>
                        <div class="meta-bottom d-flex justify-content-between">
                            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/b2.jpg" alt="">                             
                        </div>
                        <p class="date">10 Jan 2018</p>
                        <a href="blog-single.html">
                            <h4>Addiction When Gambling
                                Becomes A Problem
                            </h4>
                        </a>
                        <p>
                            inappropriate behavior ipsum dolor sit amet, consectetur.
                        </p>
                        <div class="meta-bottom d-flex justify-content-between">
                            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/b3.jpg" alt="">                             
                        </div>
                        <p class="date">10 Jan 2018</p>
                        <a href="blog-single.html">
                            <h4>Addiction When Gambling
                                Becomes A Problem
                            </h4>
                        </a>
                        <p>
                            inappropriate behavior ipsum dolor sit amet, consectetur.
                        </p>
                        <div class="meta-bottom d-flex justify-content-between">
                            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="img/b4.jpg" alt="">                             
                        </div>
                        <p class="date">10 Jan 2018</p>
                        <a href="blog-single.html">
                            <h4>Addiction When Gambling
                                Becomes A Problem
                            </h4>
                        </a>
                        <p>
                            inappropriate behavior ipsum dolor sit amet, consectetur.
                        </p>
                        <div class="meta-bottom d-flex justify-content-between">
                            <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                            <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End blog Area -->
        <!--  start footer Area --> 
        <footer>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Any Suggestions?</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="visitus">
                            <div class="icons">
                                <a href="maps.google.co.in" class="mail"><i class="fa fa-map-marker"></i></a>
                                <h4>Visit Us</h4>
                            </div>
                            <p>GSG protective Service is a full service</p>
                            <p>provide of premium security service. In order</p>
                            <p>to provide our customer with excellent service</p>
                            <p>GSG Protective Service id divided into six</p>
                            <p>divisions which include</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mailus">
                            <div class="icons">
                                <a href="gmail.com" class="mail"><i class="fa fa-envelope"></i></a>
                                <h4>Mail Us</h4>
                            </div>
                            <p>yourhestaexpert@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contactus">
                            <div class="icons">
                                <a href="#" class="mail"><i class="fa fa-phone"></i></a>
                                <h4>Contact Us</h4>
                            </div>
                            <p>120-3456789</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->        
        <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA') }}"></script>
        <script src="{{ asset('js/easing.min.js') }}"></script>
        <script src="{{ asset('js/hoverIntent.js') }}"></script>
        <script src="{{ asset('js/superfish.min.js') }}"></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('s/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('jjs/parallax.min.js') }}"></script>
        <script src="{{ asset('js/mail-script.js') }}"></script>
        <script src="{{ asset('js/main2.js') }}"></script>
        <src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>