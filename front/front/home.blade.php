@extends('front.master')

@section('body')
    <!--====== BANNER PART START ======-->
    <section class="banner-area banner-style-three" id="bannerSlider">
        <div class="single-banner d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="banner-content">
                            <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">
                                The ultimate luxury experience
                            </span>
                            <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">
                                The Perfect <br> Base For You
                            </h1>
                            <ul>
                                <li data-animation="fadeInUp" data-delay="1.1s">
                                    <a class="main-btn btn-filled" href="#tour">take a tour</a>
                                </li>
                                <li data-animation="fadeInUp" data-delay="1.3s">
                                    <a class="main-btn btn-border" href="#">Learn More</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner bg -->
            <div class="banner-bg" style="background-image: url({{asset('img/banner/05.jpg')}});"></div>
            <div class="banner-overly"></div>
        </div>
        <div class="single-banner d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="banner-content">
                            <span class="promo-tag" data-animation="fadeInDown" data-delay=".6s">
                                The ultimate luxury experience
                            </span>
                            <h1 class="title" data-animation="fadeInLeft" data-delay=".9s">
                                The Perfect <br> Base For You
                            </h1>
                            <ul>
                                <li data-animation="fadeInUp" data-delay="1.1s">
                                    <a class="main-btn btn-filled" href="#">take a tour</a>
                                </li>
                                <li data-animation="fadeInUp" data-delay="1.3s">
                                    <a class="main-btn btn-border" href="#">Learn More</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner bg -->
            <div class="banner-bg" style="background-image: url({{asset('/img/banner/06.jpg')}});"></div>
            <div class="banner-overly"></div>
        </div>
    </section>
    <!--====== BANNER PART ENDS ======-->
    <!--====== BOOKING FORM START ======-->
    <section class="booking-form booking-form-dark">
        <div class="container">
            <div class="booking-form-inner">
                <form action="#">
                    <div class="row align-items-end">
                        <div class="col-lg-3 col-sm-6">
                            <div class="inputs-filed mt-30">
                                <label for="arrival-date">Arrival Date</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="24th march 2020" name="arrival-date" id="arrival-date">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="inputs-filed mt-30">
                                <label for="departure-date">Departure Date</label>
                                <div class="icon"><i class="fal fa-calendar-alt"></i></div>
                                <input type="text" placeholder="30th march 2020" name="departure-date"
                                       id="departure-date">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="inputs-filed mt-30">
                                <label for="guests">Guests</label>
                                <select name="guests" id="guests">
                                    <option value="" disabled selected>Select From Here</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="8">8</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="inputs-filed mt-30">
                                <button type="submit">check availability</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--====== BOOKING FORM END ======-->
    <!--====== ABOUT SECTION START ======-->
    <section class="about-section pt-115 pb-115">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="row about-features-boxes fetaure-masonary">
                        <div class="col-sm-6">
                            <div class="single-feature-box">
                                <div class="icon">
                                    <i class="flaticon-team"></i>
                                </div>
                                <h4><a href="#">Top Hospitality</a></h4>
                                <p>
                                    We are open always in the tendancy of serving you the best hospitality.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-feature-box only-bg mt-30"
                                 style="background-image: url({{asset('img/feature/04.jpg')}});">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-feature-box only-bg mt-30"
                                 style="background-image: url({{asset('img/feature/05.jpg')}});">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-feature-box dark mt-30">
                                <div class="icon">
                                    <i class="flaticon-hotel"></i>
                                </div>
                                <h4><a href="#">Luxury Room</a></h4>
                                <p>
                                    Best in town; eye catchy furnished Luxurious room with relaxed environment .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".3s">
                    <div class="abour-text pl-50 pr-50">
                        <div class="section-title mb-30">
                            <span class="title-tag">about us</span>
                            <h2>Discover Our Measures.</h2>
                        </div>
                        <p>
                            As always, caring for you is our top priority. To learn more about the extensive 
                            measures we are taking, visit Khulna. All guests will be required to wear 
                            face masks in all public areas of the hotel. If you do not have a face mask, the 
                            hotel’s ALLSafe Ambassador will provide you with one upon arrival.  

                        </p>
                        <a href="#" class="main-btn btn-filled mt-40"> Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-right-bottom">
            <div class="about-bottom-img">
                <img src="{{ asset('img/bg/03.jpg')}}" alt="">
            </div>
        </div>
    </section>
    <!--====== ABOUT SECTION END ======-->
    <!--====== ROOM SLIDER START ======-->
    <section class="room-slider bg-white pb-100 pt-115">
        <div class="container-fluid p-0">
            <div class="section-title mb-80 text-center">
                <span class="title-tag">Room</span>
                <h2>Hand Picked Rooms</h2>
            </div>

            <div class="row rooms-slider-two justify-content-center">
                <div class="col-lg-6">
                    <div class="single-rooms-box">
                        <div class="room-img">
                            <div class="img" style="background-image: url({{ asset('img/room-slider/06.jpg')}});">
                            </div>
                        </div>
                        <ul class="icons">
                            <li><i class="fal fa-bed"></i></li>
                            <li><i class="fal fa-wifi"></i></li>
                            <li><i class="fal fa-car"></i></li>
                            <li><i class="fal fa-coffee"></i></li>
                            <li><i class="fal fa-concierge-bell"></i></li>
                            <li><i class="fal fa-swimmer"></i></li>
                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                        </ul>
                        <div class="room-desc">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <h3><a href="#">Presidential Suite</a></h3>
                                    <p>
                                        Luxurious interior and comforts everywhere for prividing top luxury sense is 
                                        here in our presidential suite with all modern facilities.
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="price">
                                        $345<span>/Night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rooms-box">
                        <div class="room-img">
                            <div class="img" style="background-image: url({{ asset('img/room-slider/08.jpg')}});">
                            </div>
                        </div>
                        <ul class="icons">
                            <li><i class="fal fa-bed"></i></li>
                            <li><i class="fal fa-wifi"></i></li>
                            <li><i class="fal fa-car"></i></li>
                            <li><i class="fal fa-coffee"></i></li>
                            <li><i class="fal fa-concierge-bell"></i></li>
                            <li><i class="fal fa-swimmer"></i></li>
                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                        </ul>
                        <div class="room-desc">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <h3><a href="#">Prime Suite</a></h3>
                                    <p>
                                        With all modern facilities pass a relaxing time using Prime Suite in The
                                        Grand Placid with the best hospitality.
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="price">
                                        $345<span>/Night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rooms-box">
                        <div class="room-img">
                            <div class="img" style="background-image: url({{ asset('img/room-slider/07.jpg')}});">
                            </div>
                        </div>
                        <ul class="icons">
                            <li><i class="fal fa-bed"></i></li>
                            <li><i class="fal fa-wifi"></i></li>
                            <li><i class="fal fa-car"></i></li>
                            <li><i class="fal fa-coffee"></i></li>
                            <li><i class="fal fa-concierge-bell"></i></li>
                            <li><i class="fal fa-swimmer"></i></li>
                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                        </ul>
                        <div class="room-desc">
                            <div class="row align-items-center">
                                <div class="col-sm-8">
                                    <h3><a href="#">Twin Double</a></h3>
                                    <p>
                                        Perfectly fits for family upto 4 adults. Decorated with spacious architecture amd quality
                                        time spending in The Grand Placid
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="price">
                                        $345<span>/Night</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== ROOM SLIDER END ======-->
    <!--====== TEXT BLOCK START ======-->
    <section class="text-block bg-black with-pattern pt-115 pb-115" id="tour">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 order-2 order-lg-1">
                    <div class="block-text">
                        <div class="section-title mb-20">
                            <span class="title-tag">intro video</span>
                            <h2>Meet With Our
                                Luxury Place.</h2>
                        </div>
                        <p class="pr-50">
                            In the every steps in our faciliated building you will find the touch of
                            luxurious things and mind blowing architectures that will give you the sense
                            of speciality and our warming gratitudes. 
                        </p>
                        <a href="#" class="main-btn btn-filled mt-40">Book now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 order-1 order-lg-2 wow fadeInRight" data-wow-delay=".3s">
                    <div class="video-wrap video-wrap-two mb-small"
                         style="background-image: url({{ asset('img/text-block/03.jpg')}});">
                        <a href="#" class="popup-video"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pattern-wrap">
            <div class="pattern"></div>
        </div>
    </section>
    <!--====== TEXT BLOCK END ======-->
    <!--====== CORE FEATURES START ======-->
    <section class="core-feature-section bg-white pt-115 pb-115">
        <div class="container">
            <div class="section-title text-center mb-50">
                <span class="title-tag"> facilities </span>
                <h2>Core Features</h2>
            </div>
            <!-- Featre Loop -->
            <div class="row features-loop">
                <div class="col-lg-4 col-sm-6 order-1">
                    <div class="feature-box wow fadeInLeft" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="flaticon-rating"></i>
                        </div>
                        <h3><a href="#">Have High Rating</a></h3>
                        <p>
                            We have earned guests loyalty for serving upto the satisfaction level.
                            Which reflects our high ratings on medias.
                        </p>
                        <span class="count">01</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-2">
                    <div class="feature-box wow fadeInDown" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="flaticon-clock"></i>
                        </div>
                        <h3><a href="#">Quiet Hours</a></h3>
                        <p>
                            For increasing sleep experience we have initiated quiet hours in which
                            we will minimize the mechanical sounds.
                        </p>
                        <span class="count">02</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-3 order-sm-4 order-lg-3">
                    <div class="feature-box wow fadeInRight" data-wow-delay=".5s">
                        <div class="icon">
                            <i class="flaticon-location-pin"></i>
                        </div>
                        <h3><a href="#">Best Location</a></h3>
                        <p>
                            We are located in the most important point in the town which is easy to 
                            locate and transports are available.
                        </p>
                        <span class="count">03</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-4 order-sm-3 order-lg-4">
                    <div class="feature-box wow fadeInLeft" data-wow-delay=".6s">
                        <div class="icon">
                            <i class="flaticon-clock-1"></i>
                        </div>
                        <h3><a href="#">Easy Cancellation</a></h3>
                        <p>
                            If you have to change your mind after reservation, our easy cancellation
                            policy will help you there.
                        </p>
                        <span class="count">04</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-5">
                    <div class="feature-box wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon">
                            <i class="flaticon-credit-card"></i>
                        </div>
                        <h3><a href="#">Payment Options</a></h3>
                        <p>
                            We are accepting widely accepted epayments and offline payments for
                            hasstle-free transactions.
                        </p>
                        <span class="count">05</span>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-6">
                    <div class="feature-box wow fadeInRight" data-wow-delay=".8s">
                        <div class="icon">
                            <i class="flaticon-discount"></i>
                        </div>
                        <h3><a href="#">Special Offers</a></h3>
                        <p>
                            According to seasons for guests we offer special offers so that they
                            get the best time in their vacation.
                        </p>
                        <span class="count">06</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== CORE FEATURES END ======-->
    <!--====== MENU PART START ======-->
    <section class="menu-area bg-white menu-with-shape menu-nagative-gallery">
        <div class="container">
            <!-- section title -->
            <div class="row align-items-center">
                <div class="col-md-8 col-sm-8">
                    <div class="section-title">
                        <span class="title-tag">Menu</span>
                        <h2>Our Foods Menu</h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 d-none d-sm-block">
                    <div class="menu-slider-arrow arrow-style text-right">
                    </div>
                </div>
            </div>
            <!-- Menu Slider -->
            <div class="menu-slider mt-80 menu-loop">
                <div class="single-slider">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/01.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Steam Rice</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/02.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Vegetable Fried Rice</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/03.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Plain Polaue</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/06.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Vegetable Polaue</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/07.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Peas Polaue</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/08.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Alur Dom</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/04.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Alu Matar Curry</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/05.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Alu Poneer Curry</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/01.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Steam Rice</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/10.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Palak Poneer</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/10.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Poneer Bhoona/Masala</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/10.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Palak Bhajee</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/04.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Matar Masala/Curry</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/05.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Vegetable Pakura/Tikkia - 4 pcs</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/01.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Steam Rice</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/09.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Mixed Vegetable/Curry/Bhajee</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/10.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Vegetable Roll - 1 pcs</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="single-menu-box hover-drak">
                                <div class="menu-img" style="background-image: url({{ asset('img/menu/10.jpg')}});">
                                </div>
                                <div class="menu-desc">
                                    <h4><a href="#">Sichuan- Vegetable Bhajee</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                                    </p>
                                    <a href="#" class="menu-link"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery -->
        <div class="gallery-wrap">
            <div class="container">
                <div class="row gallery-slider text-center">
                    <div class="col-lg-4">
                        <a href="{{ asset('/img/menu/menu-gallery-1.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/menu/menu-gallery-1.jpg')}}" alt="Gallery Image">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ asset('img/menu/menu-gallery-2.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/menu/menu-gallery-2.jpg')}}" alt="Gallery Image">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ asset('img/menu/menu-gallery-3.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/menu/menu-gallery-3.jpg')}}" alt="Gallery Image">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ asset('img/menu/menu-gallery-4.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/menu/menu-gallery-4.jpg')}}" alt="Gallery Image">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ asset('img/menu/menu-gallery-5.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/menu/menu-gallery-5.jpg')}}" alt="Gallery Image">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ asset('img/menu/menu-gallery-6.jpg')}}" class="gallery-popup">
                            <img src="{{ asset('img/menu/menu-gallery-6.jpg')}}" alt="Gallery Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape-one">
            <img src="{{ asset('img/icon/05.png')}}" alt="Icon">
        </div>
        <div class="shape-two">
            <img src="{{ asset('img/icon/06.png')}}" alt="Icon">
        </div>
    </section>
    <!--====== MENU PART END ======-->
    <!--====== COUNTER UP START ======-->
    <section class="counter-section">
        <div class="container">
            <div class="counter-inner bg-black pt-100 pb-60">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-11">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div
                                    class="counter-box box-layout d-flex justify-content-center justify-content-lg-start">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('img/icon/01.png')}}" alt="Icon">
                                        </div>
                                        <h4><span class="counter">3</span>star<span class="plus-icon"></span></h4>
                                        <span class="title">Level Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="counter-box box-layout d-flex justify-content-center">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('img/icon/02.png')}}" alt="Icon">
                                        </div>
                                        <h4><span class="counter">10</span>k<span class="plus-icon">+</span></h4>
                                        <span class="title">Active Wishers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="counter-box box-layout d-flex justify-content-center">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('img/icon/03.png')}}" alt="Icon">
                                        </div>
                                        <h4><span class="counter">03</span><span class="plus-icon">+</span></h4>
                                        <span class="title">Different Food Cultures</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div
                                    class="counter-box box-layout d-flex justify-content-center justify-content-lg-end">
                                    <div>
                                        <div class="icon">
                                            <img src="{{ asset('img/icon/04.png')}}" alt="Icon">
                                        </div>
                                        <h4><span class="counter">95</span><span class="plus-icon">%</span></h4>
                                        <span class="title">Guest Recommends Again</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== COUNTER UP END ======-->

@endsection
