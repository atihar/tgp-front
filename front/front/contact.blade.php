@extends('front.master')

@section('page-title', 'Contact')
@section('body')
    <!--====== CONTACT PART START ======-->
    <section class="contact-part pt-115 pb-115">
        <div class="container">
            <!-- Contact Info -->
            <div class="contact-info">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="desc">
                                <h4>Office Address</h4>
                                <p>4/5 Sher E Bangla Road, Khulna, Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="desc">
                                <h4>Phone Number</h4>
                                <p>+880 131 234 7373</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-message"></i>
                            </div>
                            <div class="desc">
                                <h4>Email Address</h4>
                                <p>info@thegrandplacid.com<br>contact@thegrandplacid.com </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-user"></i></span>
                                <input type="text" placeholder="Your full name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-envelope"></i></span>
                                <input type="email" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-phone"></i></span>
                                <input type="text" placeholder="Add phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <span class="icon"><i class="far fa-book"></i></span>
                                <input type="text" placeholder="Select Subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group textarea mb-30">
                                <span class="icon"><i class="far fa-pen"></i></span>
                                <textarea type="text" placeholder="Enter messages"></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="main-btn btn-filled">Get Free Quote</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--====== CONTACT PART END ======-->
@endsection
