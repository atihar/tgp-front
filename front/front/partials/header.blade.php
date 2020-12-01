   <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!--====== Title ======-->
        <title>The Grand Placid </title>
        <!--====== Favicon Icon ======-->
        <link rel="icon" href="{{ asset('img/favicon.png')}}" type="img/png" />
        <!--====== Animate Css ======-->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" />
        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" />
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}" />
        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css')}}" />
        <!--====== Owl Carousel css ======-->
        <link rel="stylesheet" href="{{ asset('css/slick.css')}}" />
        <!--====== Nice Select ======-->
        <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}" />
        <!--====== Bootstrap Datepicker ======-->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}" />
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('css/default.css')}}" />
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    </head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <!--====== PRELOader ======-->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>
    <!--====== HEADER START ======-->
    <header class="header-three">
        <div class="header-top">
            <div class="container container-custom-three">
                <div class="d-md-flex align-items-center justify-content-between">
                    <p class="welcome-text">Sense of Luxury</p>
                    <ul class="header-top-info">
                        <li>
                            <i class="fal fa-Clock"> </i>
                            Mon - Sat 9.00 - 18.00
                        </li>
                        <li>
                            <i class="fal fa-Clock"> </i>
                            Mon - Sat 9.00 - 18.00
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-menu-area sticky-header">
            <div class="container container-custom-three">
                <div class="nav-container d-flex align-items-center justify-content-between">
                    <!-- Site Logo -->
                    <div class="site-logo">
                        <a href="/"><img src="{{ asset('img/logo.png')}}" alt="Logo"></a>
                    </div>
                    <!-- Main Menu -->
                    <div class="nav-menu d-lg-flex align-items-center justify-content-between">

                        <!-- Navbar Close Icon -->
                        <div class="navbar-close">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Mneu Items -->
                        <div class="menu-items">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/rooms">Rooms</a></li>
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- navbar right content -->
                    <div class="menu-right-buttons">
                        <!-- Log in icon -->
                        <div class="login-btn">
                            <a href="#" id="loginBtn"><i class="fal fa-user"></i></a>
                        </div>
                        <!-- search btton -->
                        <!--<div class="search">-->
                        <!--    <a href="#" class="search-icon" id="searchBtn">-->
                        <!--        <i class="fal fa-search open-icon"></i>-->
                        <!--        <i class="fal fa-times close-icon"></i>-->
                        <!--    </a>-->
                        <!--    <div class="search-form">-->
                        <!--        <form action="#">-->
                        <!--            <input type="text" placeholder="Search your keyword...">-->
                        <!--            <button type="submit"><i class="far fa-search"></i></button>-->
                        <!--        </form>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!-- Off canvas Toggle -->
                        <div class="toggle">
                            <a href="#" id="offCanvasBtn"><i class="fal fa-bars"></i></a>
                        </div>
                        <!-- Navbar Toggler -->
                        <div class="navbar-toggler">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--====== HEADER END ======-->
    <div class="offcanvas-wrapper">
        <div class="offcanvas-overly"></div>
        <div class="offcanvas-widget">
            <a href="#" class="offcanvas-close"><i class="fal fa-times"></i></a>
    
            <!-- About Widget -->
            <div class="widget about-widget">
                <h5 class="widget-title">About us</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia reiciendis illo ipsa asperiores,
                    perspiciatis corrupti veritatis assumenda architecto commodi provident quas necessitatibus
                    consequatur praesentium magnam optio deserunt fugiat repellat culpa.
                </p>
            </div>
            <!-- Nav Widget -->
            <div class="widget nav-widget">
                <h5 class="widget-title">Our pages</h5>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="menu.html">Food Menu</a></li>
                    <li><a href="restaurant.html">Restaurant</a></li>
                    <li>
                        <a href="places.html">Places</a>
                        <ul class="submenu">
                            <li><a href="places-details.html">Places Details</a></li>
                        </ul>
                    </li>
                    <li><a href="offers.html">Offers</a></li>
                    <li><a href="gallery.html">Our Gallery</a></li>
                    <li><a href="search-result.html">Search Result</a></li>
                    <li><a href="booking.html">Booking</a></li>
                </ul>
            </div>
            <!-- Social Link -->
            <div class="widget social-link">
                <h5 class="widget-title">Contact with us</h5>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    