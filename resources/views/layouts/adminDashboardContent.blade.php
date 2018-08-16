<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
        <!-- Title Page-->
        <title>{{ config('SecurityExpert', 'SecurityExpert') }}</title>
        <!-- Fontfaces CSS-->
        <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
        <!-- Bootstrap CSS-->
        <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
        <!-- Vendor CSS--><!-- 
            <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all"> -->
        <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
        -->
        <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('vendor/vector-map/jqvmap.min.css') }}" rel="stylesheet" media="all">
        <!-- Main CSS-->
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <div class="logo">
                                <a href="#">
                                <img src="https://comps.canstockphoto.com/eye-security-logo-template-drawings_csp48880493.jpg" alt="security Expert"  height="50px" width="70px" />
                                </a>
                            </div>
                            <!--  <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                                </button> -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER MOBILE-->
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                    <img src="https://comps.canstockphoto.com/eye-security-logo-template-drawings_csp48880493.jpg" alt="security Expert"  height="50px" width="70px" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="http://img.zergnet.com/1458387_300.jpg" alt="John Doe" />
                        </div>
                        <h4 class="name"> {{ Auth::user()->name}}</h4>
                        <a class="name" href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('admin-logout-form').submit();">
                        {{ __('SignOut') }}
                        </a>
                        <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="{{route('admin.dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.showGuard')}}">
                                <i class="fas fa-user"></i>Guards</a>
                            </li>
                            <li>
                                <a href="{{route('admin.showUser')}}">
                                <i class="fas fa-user"></i>Users</a>
                            </li>
                            <!-- <li>
                                <a href="{{route('admin.dashboard')}}">
                                    <i class="fas fa-trash"></i>Delete Guards
                                </a>
                                </li>
                                <li>
                                <a href="#">
                                    <i class="fas fa-trash"></i>Delete Users
                                </a>
                                </li> -->
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->
            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <!-- <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                    </form> -->
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
        <!-- Jquery JS-->
        <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
        <!-- Bootstrap JS-->
        <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
        <!-- Vendor JS  -->
        <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
        <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
        <script src="{{ asset('vendor/vector-map/jquery.vmap.js') }}"></script>
        <script src="{{ asset('vendor/vector-map/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('vendor/vector-map/jquery.vmap.sampledata.js') }}"></script>
        <script src="{{ asset('vendor/vector-map/jquery.vmap.world.js') }}"></script>
        <!-- Main JS-->
       <!--  <script src="{{ asset('css/main.js') }}"></script>  -->
        <script src="{{ asset('js/curd.js') }}"></script>
         
    </body>
</html>
<!-- end document-->