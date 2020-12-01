@extends('front.master')

@section('page-title', 'Rooms')
@section('body')
    <!--====== ROOM-LIST START ======-->
    <section class="room-section room-list-style pt-120 pb-120">
        <div class="container">
            <div class="room-list-loop">
                <div class="room-box mb-30">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-5 col-md-10">
                            <div class="room-img-wrap">
                                <div class="room-img"
                                     style="background-image: url({{ asset('img/room/list-1.jpg')}});"></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-10">
                            <div class="room-desc">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <ul class="icons">
                                            <li><i class="fal fa-bed"></i></li>
                                            <li><i class="fal fa-wifi"></i></li>
                                            <li><i class="fal fa-car"></i></li>
                                            <li><i class="fal fa-coffee"></i></li>
                                            <li><i class="fal fa-concierge-bell"></i></li>
                                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                                            <li><i class="fal fa-swimmer"></i></li>
                                        </ul>
                                        <h4 class="title"><a href="#">Presidential Suite</a></h4>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-sm-center">
                                            <span class="price">$345<span>/Night</span> </span>
                                            <a href="#" class="book-btn">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-box mb-30">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-5 col-md-10">
                            <div class="room-img-wrap">
                                <div class="room-img"
                                     style="background-image: url({{ asset('img/room/list-2.jpg')}});"></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-10">
                            <div class="room-desc">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <ul class="icons">
                                            <li><i class="fal fa-bed"></i></li>
                                            <li><i class="fal fa-wifi"></i></li>
                                            <li><i class="fal fa-car"></i></li>
                                            <li><i class="fal fa-coffee"></i></li>
                                            <li><i class="fal fa-concierge-bell"></i></li>
                                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                                            <li><i class="fal fa-swimmer"></i></li>
                                        </ul>
                                        <h4 class="title"><a href="#">Placid Suite</a></h4>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-sm-center">
                                            <span class="price">$345<span>/Night</span> </span>
                                            <a href="#" class="book-btn">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-box mb-30">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-5 col-md-10">
                            <div class="room-img-wrap">
                                <div class="room-img"
                                     style="background-image: url({{ asset('img/room/list-3.jpg')}});"></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-10">
                            <div class="room-desc">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <ul class="icons">
                                            <li><i class="fal fa-bed"></i></li>
                                            <li><i class="fal fa-wifi"></i></li>
                                            <li><i class="fal fa-car"></i></li>
                                            <li><i class="fal fa-coffee"></i></li>
                                            <li><i class="fal fa-concierge-bell"></i></li>
                                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                                            <li><i class="fal fa-swimmer"></i></li>
                                        </ul>
                                        <h4 class="title"><a href="#">Prime Twin</a></h4>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-sm-center">
                                            <span class="price">$345<span>/Night</span> </span>
                                            <a href="#" class="book-btn">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-box mb-30">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-5 col-md-10">
                            <div class="room-img-wrap">
                                <div class="room-img"
                                     style="background-image: url({{ asset('img/room/list-4.jpg')}});"></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-10">
                            <div class="room-desc">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <ul class="icons">
                                            <li><i class="fal fa-bed"></i></li>
                                            <li><i class="fal fa-wifi"></i></li>
                                            <li><i class="fal fa-car"></i></li>
                                            <li><i class="fal fa-coffee"></i></li>
                                            <li><i class="fal fa-concierge-bell"></i></li>
                                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                                            <li><i class="fal fa-swimmer"></i></li>
                                        </ul>
                                        <h4 class="title"><a href="#">Minimal Duplex Room</a></h4>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-sm-center">
                                            <span class="price">$345<span>/Night</span> </span>
                                            <a href="#" class="book-btn">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-box mb-30">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-5 col-md-10">
                            <div class="room-img-wrap">
                                <div class="room-img"
                                     style="background-image: url({{ asset('img/room/list-5.jpg')}});"></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-10">
                            <div class="room-desc">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <ul class="icons">
                                            <li><i class="fal fa-bed"></i></li>
                                            <li><i class="fal fa-wifi"></i></li>
                                            <li><i class="fal fa-car"></i></li>
                                            <li><i class="fal fa-coffee"></i></li>
                                            <li><i class="fal fa-concierge-bell"></i></li>
                                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                                            <li><i class="fal fa-swimmer"></i></li>
                                        </ul>
                                        <h4 class="title"><a href="#">Prime Couple</a></h4>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-sm-center">
                                            <span class="price">$345<span>/Night</span> </span>
                                            <a href="#" class="book-btn">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-box mb-30">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-lg-5 col-md-10">
                            <div class="room-img-wrap">
                                <div class="room-img"
                                     style="background-image: url({{ asset('img/room/list-6.jpg')}});"></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-10">
                            <div class="room-desc">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <ul class="icons">
                                            <li><i class="fal fa-bed"></i></li>
                                            <li><i class="fal fa-wifi"></i></li>
                                            <li><i class="fal fa-car"></i></li>
                                            <li><i class="fal fa-coffee"></i></li>
                                            <li><i class="fal fa-concierge-bell"></i></li>
                                            <li><i class="fal fa-compress-arrows-alt"></i></li>
                                            <li><i class="fal fa-swimmer"></i></li>
                                        </ul>
                                        <h4 class="title"><a href="#">Single Standard</a></h4>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-sm-center">
                                            <span class="price">$345<span>/Night</span> </span>
                                            <a href="#" class="book-btn">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="pagination-wrap">
                <ul>
                    <li><a href="#"><i class="far fa-angle-double-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#"><i class="far fa-angle-double-right"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </section>
    <!--====== ROOM-LIST END ======-->
@endsection
