@extends('layouts.app')

@section('content')
@push('css')
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('newDesign/css/magnific-popup.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('newDesign/css/font-awesome.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('newDesign/css/jquery.fancybox.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('newDesign/css/themify-icons.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('newDesign/css/niceselect.css') }}">
    <!-- Animate CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('newDesign/css/animate.css') }}"> --}}
    <!-- Flex Slider CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('newDesign/css/flex-slider.min.css') }}"> --}}
    <!-- Owl Carousel -->
    {{-- <link rel="stylesheet" href="{{ asset('newDesign/css/owl-carousel.css') }}"> --}}
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('newDesign/css/slicknav.min.css') }}">

    <!-- Eshop StyleSheet -->
    {{-- <link rel="stylesheet" href="{{ asset('newDesign/css/') }}reset.css"> --}}
    <link rel="stylesheet" href="{{ asset('newDesign/css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('newDesign/css/responsive.css') }}">
    <style>
        .shop.checkout .single-widget h2:before {
                right: 30px;

        }
        .shop.checkout .single-widget .content ul li span {
            float: left;
        }
        .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
            position: inherit !important;
        }
    </style>
@endpush

   
   

    <section class="shop checkout section">
        <div class="container">
            @if (session('error'))
            {{dd(session('error'))}}
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="row"> 
                <div class="col-lg-8 col-12" style="
                float: right;
            ">
                    <div class="checkout-form">
                        <h2>ادخل البيانات</h2>
                        <p></p>
                        <!-- Form -->
                        <form class="form" method="post" action="{{route('order.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>الإسم<span>*</span></label>
                                        <input type="text" name="name" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>البريد الإلكتروني<span>*</span></label>
                                        <input type="text" name="email" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>العنوان<span>*</span></label>
                                        <input type="text" name="address" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>الرمز البريدي<span>*</span></label>
                                        <input type="text" name="postalcode" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>المدينة<span>*</span></label>
                                        <input type="text" name="city" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>الحي<span>*</span></label>
                                        <input type="text" name="province" placeholder="" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12" style="float: right;">
                                    <div class="form-group">
                                        <label>رقم الموبايل<span>*</span></label>
                                        <input type="number" name="phone_number" placeholder="" required="required">
                                    </div>
                                </div>
                      
                            </div>
                      
                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>تفاصيل المشتريات</h2>
                            <div class="content">
                                <ul>
                                    <li>الإجمالي الأولي <span>{{ $subtotal}}</span></li>
                                    <li>(+) مصاريف الشحن<span>$0</span></li>
                                    <li class="last">الإجمالي<span>{{ $subtotal}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ End Order Widget -->

                        <!--/ End Payment Method Widget -->
                        <!-- Button Widget -->
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                    <button type="submit" class="btn">ارسال طلب الشراء</button>
                                </div>
                            </div>
                        </div>
                    </form>
                        <!--/ End Button Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('js')
    {{-- <script src="{{ asset('newDesign/js/jquery-migrate-3.0.0.js') }}"></script> --}}
	<script src="{{ asset('newDesign/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	{{-- <script src="{{ asset('newDesign/js/popper.min.js') }}"></script> --}}
	<!-- Bootstrap JS -->
	{{-- <script src="{{ asset('newDesign/js/bootstrap.min.js') }}"></script> --}}
	<!-- Color JS -->
	{{-- <script src="{{ asset('newDesign/js/colors.js') }}"></script> --}}
	<!-- Slicknav JS -->
	<script src="{{ asset('newDesign/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	{{-- <script src="{{ asset('newDesign/js/owl-carousel.js') }}"></script> --}}
	<!-- Magnific Popup JS -->
	{{-- <script src="{{ asset('newDesign/js/magnific-popup.js') }}"></script> --}}
	<!-- Fancybox JS -->
	{{-- <script src="{{ asset('newDesign/js/facnybox.min.js') }}"></script> --}}
	<!-- Waypoints JS -->
	{{-- <script src="{{ asset('newDesign/js/waypoints.min.js') }}"></script> --}}
	<!-- Countdown JS -->
	{{-- <script src="{{ asset('newDesign/js/finalcountdown.min.js') }}"></script> --}}
	<!-- Nice Select JS -->
	<script src="{{ asset('newDesign/js/nicesellect.js') }}"></script>
	<!-- Ytplayer JS -->
	{{-- <script src="{{ asset('newDesign/js/ytplayer.min.js') }}"></script> --}}
	<!-- Flex Slider JS -->
	{{-- <script src="{{ asset('newDesign/js/flex-slider.js') }}"></script> --}}
	<!-- ScrollUp JS -->
	{{-- <script src="{{ asset('newDesign/js/scrollup.js') }}"></script> --}}
	<!-- Onepage Nav JS -->
	{{-- <script src="{{ asset('newDesign/js/onepage-nav.min.js') }}"></script> --}}
	<!-- Easing JS -->
	{{-- <script src="{{ asset('newDesign/js/easing.js') }}"></script> --}}
	<!-- Active JS -->
	<script src="{{ asset('newDesign/js/active.js') }}"></script>
    @endpush
@endsection
