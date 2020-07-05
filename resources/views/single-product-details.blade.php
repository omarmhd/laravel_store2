@extends('layouts.app')

@section('content')

    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center" style="height: 200px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Product details
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================Single Product Area =================-->

        <div class="container">

            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
        <div class="product_image_area">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="product_img_slide owl-carousel">

                    <div class="single_product_img">
                        <img  src="/product_images/{{$product->image}}" alt="#" class="img-fluid">
                    </div>

                </div>
                </div>
                <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h4>{{$product->name}}</h4>
                    <p>  {{$product->long_description}}                   </p>

                    <form  action="{{route('cart.store',['id'=>$product->id])}}"method="post">
                        @csrf

                    <div class="card_area">
                        <div class="product_count_area">
                            <p>Quantity</p>

                                <input type="number" name="quantity" value="3">
                            <p>  ${{$product->price}} </p>
                        </div>
                    <div class="add_to_cart">
                        <input type="submit" href="#" class="btn_3" value="add to cart">
                    </div>

                    </div>
                </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--================End Single Product Area =================-->
        <!-- subscribe part here -->
        {{-- <section class="subscribe_part section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="subscribe_part_content">
                            <h2>Get promotions & updates!</h2>
                            <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                            <div class="subscribe_form">
                                <input type="email" placeholder="Enter your mail">
                                <a href="#" class="btn_1">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- subscribe part end -->
    </main>
    @endsection
