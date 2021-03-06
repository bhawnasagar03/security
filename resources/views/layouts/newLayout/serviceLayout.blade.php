<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('SecurityExpert', 'SecurityExpert') }}</title>
        
       
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
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-6 top-head-right" >
                        @if (Route::has('login'))
                        <ul>
                            @if(Auth::check())
                            <li>
                                <a class="nav-link" href="@yield('homeRoute')">Go to Dashboard</a>
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
                            <li><a href="tel:+880 012 3654 896"><span>+880 012 3654 896</span> <span class="lnr lnr-phone-handset"></span></a></li>
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
                            @if(Auth::check())
                            <li><a href="{{ route('service') }}">Service</a></li>
                            <li><a href="{{ route('team') }}">Team</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            @else
                            <li><a href="{{ route('aboutus') }}">About Us</a></li>
                            <li><a href="{{ route('service') }}">Service</a></li>
                            <li><a href="{{ route('team') }}">Team</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            @endif
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
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            @yield('bannerTitle')    
                        </h1>
                        <p class="text-white link-nav"><a href="{{ route('welcome') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="@yield('bannerRoute')">  @yield('bannerContent') </a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->  
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
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
        
        <!--Main Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/updateDetails.js') }}"></script>
        <script src="{{ asset('js/hideAndShowBookButton.js') }}" defer></script>
        <script src="{{ asset('js/main2.js') }}"></script>
        
         
    </body>
</html>