@extends('layouts.app')

@section('content')


@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center"style="height: 200px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2> my store  </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <section class="popular-items latest-padding">


            <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">


                                <a href="{{route('home.index')}}" class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab"  aria-controls="nav-profile" aria-selected="true">All products</a>
                             {{-- {{  dd($categories)}} --}}
                                @foreach ($categories as $category )

                                <a class="nav-item nav-link " id="nav-home-tab"   href="{{route('home.category_products',['id'=>$category->id])}}">
                                    {{$category->name}}
                                </a>
                                    @endforeach


                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                    <!-- Grid and List view -->
                    <div class="grid-list-view">
                    </div>
                    <!-- Select items -->
                    <div class="select-this">
                        <form action="#">
                            <div class="select-itms">
                                <p style="font-size:20px"><span  style="color:red">{{$count}}</span> products found</p>

                            </div>
                        </form>
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">

                            @foreach ($products as $product )

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <a href="{{route('home.show',['id'=>$product->id])}}">
                                        <img src="/product_images/{{$product->image}}" alt="">
                                    </a>
                                        @csrf
                                        <div class="img-cap">
                                          <a>
                                           <span> <input type="submit" style="width:223px"   class="btn btn-danger" value="Add to Cart">
                                           </span>
                                        </a>
                                        </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>

                                    <div class="popular-caption">
                                    <h2>{{$product->name}}</h2>
                                        <h6 > <a style="color: black" href="{{route('home.show',['id'=>$product->id])}}">
                                           {{$product->details}}
                                        </a></h6>
                                        <span>  {{$product->price}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- Card two -->

                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
        <!--? Shop Method Start-->

        <!-- Shop Method End-->
   @endsection
