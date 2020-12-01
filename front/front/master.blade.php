<!DOCTYPE html>
<html lang="en">
<!-- Designed by weabers -->

{{-- header-injection  --}}
@include('front.partials.header')
{{-- body-injection  --}}

@if(!Request::is('/'))
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('img/bg/04.jpg')}});margin-top:0px;">
        <div class="container">
            <div class="breadcrumb-text">
                <span>The ultimate luxury</span>
                <h2 class="page-title">@yield('page-title')</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">@yield('page-title')</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
@endif

@yield('body')

<!--====== Back to Top ======-->
<a href="#" class="back-to-top" id="backToTop">
    <i class="fal fa-angle-double-up"></i>
</a>
{{-- footer-injection --}}
@include('front.partials.footer')

<!--====== jquery js ======-->
<script src="{{ asset('js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
<!--====== Bootstrap js ======-->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<!--====== Slick js ======-->
<script src="{{ asset('js/slick.min.js')}}"></script>
<!--====== Isotope js ======-->
<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
<!--====== Magnific Popup js ======-->
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<!--====== inview js ======-->
<script src="{{ asset('js/jquery.inview.min.js')}}"></script>
<!--====== counterup js ======-->
<script src="{{ asset('js/jquery.countTo.js')}}"></script>
<!--====== Nice Select ======-->
<script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
<!--====== Bootstrap datepicker ======-->
<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
<!--====== Wow JS ======-->
<script src="{{ asset('js/wow.min.js')}}"></script>
<!--====== Google Map ======-->
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script> --}}
{{-- <script src="{{ asset('js/map.js')}}"></script> --}}
<!--====== Main js ======-->
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
