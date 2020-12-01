@extends('front.master')
@section('page-title', 'Gallery')
@section('body')
    <!--====== GALLERY START ======-->
    <section class="gallery-wrappper pt-120 pb-120">
        <div class="container">
            <div class="gallery-loop">
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".3s">
                    <a href="{{ asset('img/gallery/01.jpg')}}" class="popup-image">
                        <img src="{{ asset('img/gallery/01.jpg')}}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".4s">
                    <a href="{{ asset('img/gallery/02.jpg')}}" class="popup-image">
                        <img src="{{ asset('img/gallery/02.jpg')}}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".5s">
                    <a href="{{ asset('img/gallery/03.jpg')}}" class="popup-image">
                        <img src="{{ asset('img/gallery/03.jpg')}}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".6s">
                    <a href="{{ asset('img/gallery/04.jpg')}}" class="popup-image">
                        <img src="{{ asset('img/gallery/04.jpg')}}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ asset('img/gallery/05.jpg')}}" class="popup-image">
                        <img src="{{ asset('img/gallery/05.jpg')}}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".8s">
                    <a href="{{ asset('img/gallery/06.jpg')}}" class="popup-image">
                        <img src="{{ asset('img/gallery/06.jpg')}}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay=".9s">
                    <a href="{{ asset('img/gallery/07.jpg')}}" class="popup-image">
                        <img src="{{ asset('img/gallery/07.jpg')}}" alt="Images">
                    </a>
                </div>
                <div class="single-gallery-image wow fadeInUp" data-wow-delay="1.1s">
                    <a href="{{ asset('img/gallery/08.jpg')}}" class="popup-image">
                        <img src="{{ asset('img/gallery/08.jpg')}}" alt="Images">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--====== GALLERY END ======-->
@endsection
