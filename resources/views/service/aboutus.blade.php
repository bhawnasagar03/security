@extends('layouts.newLayout.serviceLayout')
@section('content')
@section('bannerTitle')
About Us
@endsection
@section('bannerContent')
About Us
@endsection
@section('bannerRoute')
{{route('aboutus')}}
@endsection
@section('homeRoute')
{{route('home')}}
@endsection
<!-- Start about-top Area -->
<section class="about-top-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 about-top-left">
                <h1>
                    Everything <br>
                    You can imagine <br>
                    is right here
                </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.
                </p>
            </div>
            <div class="col-lg-6 about-top-right">
                <img class="img-fluid" src="img/pages/at.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End about-top Area -->
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
<!-- Start team Area -->
<section class="team-area section-gap" id="team">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Experienced Mentor Team</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-md-3 single-team">
                <div class="thumb">
                    <img class="img-fluid" src="img/pages/t1.jpg" alt="">
                    <div class="align-items-center justify-content-center d-flex">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="meta-text mt-30 text-center">
                    <h4>Ethel Davis</h4>
                    <p>Managing Director (Sales)</p>
                </div>
            </div>
            <div class="col-md-3 single-team">
                <div class="thumb">
                    <img class="img-fluid" src="img/pages/t2.jpg" alt="">
                    <div class="align-items-center justify-content-center d-flex">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="meta-text mt-30 text-center">
                    <h4>Rodney Cooper</h4>
                    <p>Creative Art Director (Project)</p>
                </div>
            </div>
            <div class="col-md-3 single-team">
                <div class="thumb">
                    <img class="img-fluid" src="img/pages/t3.jpg" alt="">
                    <div class="align-items-center justify-content-center d-flex">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="meta-text mt-30 text-center">
                    <h4>Dora Walker</h4>
                    <p>Senior Core Developer</p>
                </div>
            </div>
            <div class="col-md-3 single-team">
                <div class="thumb">
                    <img class="img-fluid" src="img/pages/t4.jpg" alt="">
                    <div class="align-items-center justify-content-center d-flex">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="meta-text mt-30 text-center">
                    <h4>Lena Keller</h4>
                    <p>Creative Content Developer</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End team Area -->									
@endsection