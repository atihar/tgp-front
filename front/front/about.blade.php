@extends('front.master')

@section('page-title', 'About')

@section('body')
    <!--====== ABOUT PART START ======-->
    <section class="about-section pt-115 pb-115">
        <div class="container">
            <div class="video-wrap video-wrap-two video-about mb-60"
                 style="background-image: url({{ asset('img/text-block/04.jpg')}});">
                <a href="https://www.youtube.com/watch?v=EEJFMdfraVY" class="popup-video"><i
                        class="fas fa-play"></i></a>
            </div>
            <div class="section-title about-title text-center">
                <span class="title-tag">since <span>1994</span></span>
                <h2>Hello. Our hotel has been present for over 20 years. We make the best or all our customers.</h2>
            </div>
            <ul class="about-features">
                <li class="wow fadeInUp" data-wow-delay=".3s">
                    <a href="#">
                        <i class="flaticon-coffee"></i>
                        <i class="hover-icon flaticon-coffee"></i>
                        <span class="title">breakfast</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".4s">
                    <a href="#">
                        <i class="flaticon-air-freight"></i>
                        <i class="hover-icon flaticon-air-freight"></i>
                        <span class="title">Airport Pickup</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".5s">
                    <a href="#">
                        <i class="flaticon-marker"></i>
                        <i class="hover-icon flaticon-marker"></i>
                        <span class="title">city guide</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".6s">
                    <a href="#">
                        <i class="flaticon-barbecue"></i>
                        <i class="hover-icon flaticon-barbecue"></i>
                        <span class="title">bbq party</span>
                    </a>
                </li>
                <li class="wow fadeInUp" data-wow-delay=".7s">
                    <a href="#">
                        <i class="flaticon-hotel"></i>
                        <i class="hover-icon flaticon-hotel"></i>
                        <span class="title">luxury room</span>
                    </a>
                </li>
            </ul>

            <div class="about-text-box">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{ asset('img/text-block/05.jpg')}}" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <span>Restaurant</span>
                            <h3>Get Restaurant Facilities & Many Other More</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip.
                            </p>
                            <a href="#" class="main-btn btn-filled">take a tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== ABOUT PART END ======-->
    <!--====== CORE FEATURES START ======-->
    <section class="core-feature-section bg-black pt-115 pb-115">
        <div class="container">
            <div class="section-title white-color text-center mb-50">
                <span class="title-tag"> facilities </span>
                <h2>Core Features</h2>
            </div>
            <!-- Featre Loop -->
            <div class="row features-loop">
                <div class="col-lg-4 col-sm-6 order-1">
                    <div class="feature-box dark-box wow fadeInLeft" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <h3><a href="#">Have High Rating</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">01</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-2">
                    <div class="feature-box dark-box wow fadeInDown" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="flaticon-clock"></i>
                        </div>
                        <h3><a href="#">Quiet Hours</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">02</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-3 order-sm-4 order-lg-3">
                    <div class="feature-box dark-box wow fadeInRight" data-wow-delay=".5s">
                        <div class="icon">
                            <i class="flaticon-location-pin"></i>
                        </div>
                        <h3><a href="#">Best Locations</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">03</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-4 order-sm-3 order-lg-4">
                    <div class="feature-box dark-box wow fadeInLeft" data-wow-delay=".6s">
                        <div class="icon">
                            <i class="flaticon-clock-1"></i>
                        </div>
                        <h3><a href="#">Free Cancellation</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">04</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-5">
                    <div class="feature-box dark-box wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon">
                            <i class="flaticon-credit-card"></i>
                        </div>
                        <h3><a href="#">Payment Options</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">05</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-6">
                    <div class="feature-box dark-box wow fadeInRight" data-wow-delay=".8s">
                        <div class="icon">
                            <i class="flaticon-discount"></i>
                        </div>
                        <h3><a href="#">Special Offers</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna..
                        </p>
                        <span class="count">06</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== CORE FEATURES END ======-->
    <!--====== COUNTER UP START ======-->
    <section class="counter-section pt-115">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title mb-80">
                <span class="title-tag">COUNTER</span>
                <h2>Some Fun Facts</h2>
            </div>
            <!-- Counter -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-6">
                    <div class="counter-box counter-box-two">
                        <div class="icon">
                            <i class="flaticon-user-1"></i>
                        </div>
                        <h4><span class="counter">8000</span></h4>
                        <span class="title">Happy Users</span>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="counter-box counter-box-two">
                        <div class="icon">
                            <i class="flaticon-like"></i>
                        </div>
                        <h4><span class="counter">10</span>M</h4>
                        <span class="title">Reviews & Appriciate</span>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="counter-box counter-box-two">
                        <div class="icon">
                            <i class="flaticon-suitcase"></i>
                        </div>
                        <h4><span class="counter">100</span></h4>
                        <span class="title">Country Coverage</span>
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <div class="row">
                <div class="col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="image mt-30">
                        <img src="{{ asset('img/gallery/09.jpg')}}" alt="image">
                    </div>
                </div>
                <div class="col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="image mt-30">
                        <img src="{{ asset('img/gallery/10.jpg')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== COUNTER UP END ======-->

@endsection
