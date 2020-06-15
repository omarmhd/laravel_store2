@extends('layouts.app')

@section('content')
    <main>


        @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>

        @endif
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center" style="height: 200px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- About Details Start -->
        <div class="about-details section-padding30">
            <div class="container">

                <div class="row">
                    <div class="offset-xl-1 col-lg-8">
                        <div class="about-details-cap mb-50">
                            <h4>Our Mission</h4>
                        <h5> {{$about->Our_Mission}}</h5>
                        </div>

                        <div class="about-details-cap mb-50">
                            <h4>Our Vision</h4>
                            <h5>{{$about->Our_Vision}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Details End -->
        <!--? Video Area Start -->

        <!-- Video Area End -->
        <!--? Shop Method Start-->

        <!-- Shop Method End-->
    </main>
@endsection
