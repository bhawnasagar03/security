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

        <!-- bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    </head>
    <body>
        <section class="boder-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  nopadding">
                        <div class="black-boder">j</div>
                             <div class="triangle-bottomleft"></div>
                        </div>
        
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  nopadding">
                        <div class="blue-boder"></div>
                            <div class="triangle-bottomright"></div>
                        </div>
                </div>
            </div>
            </section>
        <header>            
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <img src="https://comps.canstockphoto.com/eye-security-logo-template-drawings_csp48880493.jpg" class="img-responsive" id="logo">
                    </div>
        <div class="col-md-5">
                        <nav>
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
                            @else
                                <li><a href="{{ route('signupSelection') }}" id="signInBtn">Sign Up</a></li>
                                <li><a href="{{ route('customerLogin') }}" id="logInBtn">Log In</a></li>
                                <li><a href="{{ route('home') }}">Find Guard</a></li>

                            @endif
                            </ul>
                            @endif
                        </nav>
                    </div>
                </div>
            </div>
        </header>
            <section class="banner">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Security Expert</h1>
                </div>
            </div>
            </div>
        </section>
        <section class="Whyus">
            <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="h2">
                    <h2>Why Us</h2>
                    </div>
                    <p>GSG Protective Services is Devoted to provide our clients premium security<br>services through our six divisions:GSG Protective Services is Devoted to provide our clients premium security<br>services through our six divisions:GSG Protective Services is Devoted to provide our clients premium security<br>services through our six divisions:</p>
                </div>
                <div class="col-md-4">
                    <img src="images/gaurd.png" class="img-responsive">
                </div>
            </div>
            </div>
        </section>
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
                        <a href="yourhestaexpert@gmail.com" class="mail"><i class="fa fa-envelope"></i></a>
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
        <src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>

