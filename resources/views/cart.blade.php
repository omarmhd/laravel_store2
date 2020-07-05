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
          <div class="single-slider slider-height2 d-flex align-items-center"style="height: 200px">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="hero-cap text-center">
                              <h2>Cart List</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
      <section class="cart_area section_padding">
        <div class="container">
        {{-- put message  --}}

            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
          <div class="cart_inner">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">details</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>



                        @foreach ($products as $product )
                        <td>
                      <div class="media">
                        <div class="d-flex">
                        <a href="{{route('home.index')}}">
                            <img src="/product_images/{{$product->image}}">       </a>                 </div>
                        <div class="media-body">
                          <p>{{$product->name}}</p>
                        </div>
                      </div>
                    </td>
                    <td>

                  <p> {{$product->details}} </p>

                    </td>
                    <td>
                      <h5> ${{$product->price}}</h5>
                    </td>
                    {{-- <td>
                       <div class="product_count">
                        <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                        <input class="input-number" type="text" value="1" min="0" max="10">
                        <span class="input-number-increment"> <i class="ti-plus"></i></span>
                      </div>
                    </td> --}}
                    <td>
                        {{-- not return  problem in pivot --}}
                        {{ $product->pivot->quantity}}

                    </td>


                    <td>
                      <h5>${{$product->pivot->quantity * $product->price}}</h5>
                    </td>
                  </tr>

                    @endforeach
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <h5>Subtotal</h5>
                    </td>
                    <td>
                      <h5 style="color: red">{{$subtotal}}</h5>
                    </td>
                  </tr>
                  <tr class="shipping_area">
                    <td></td>
                    <td></td>
                    <td>
                      <h5> count </h5>
                    </td>
                    <td>
                     <h5 style="color: red">{{$count}}</h5>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="checkout_btn_inner float-right">
                <a class="btn_1" href="{{route('home.index')}}">Continue Shopping</a>
                <a class="btn_1 checkout_btn_1" href="{{route('checkout.index')}}">Proceed to checkout</a>
              </div>
            </div>
          </div>
      </section>
      <!--================End Cart Area =================-->
  </main>>
 @endsection
