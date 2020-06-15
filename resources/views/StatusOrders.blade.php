@extends('layouts.app')

@section('content')

  <main>
  {{-- put message  --}}
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
                              <h2>order status</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
      <section class="cart_area section_padding">
        <div class="container">




          <div class="cart_inner">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>


                        @foreach ($orders as $order )
                        <td>

                      <div class="media">
                        <div class="d-flex">
                        <a href="{{route('home.index')}}">
                            <img src="/product_images/{{$order->image}}">       </a>                 </div>
                        <div class="media-body">
                          <p>{{$order->name}}</p>
                        </div>
                      </div>
                    </td>

                        <td>
                            <h5> ${{$order->price}}</h5>
                          </td>
                  <td>
                  <p> {{$order->quantity}} </p>

                    </td>


                    {{-- <td>
                       <div class="product_count">
                        <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                        <input class="input-number" type="text" value="1" min="0" max="10">
                        <span class="input-number-increment"> <i class="ti-plus"></i></span>
                      </div>
                    </td> --}}
                    <td>
                        @if($order->status=='0')
                        <a class="btn btn-warning disabled" style="color: #fff" data-target="#modal-danger">  wait...  </a>
                           @else
                         <a class="btn btn-success disabled" style="color: #fff"  data-target="#modal-danger">  <i class="fas fa-check"></i>  Acceptedس </a>
                         @endif

                    </td>



                  </tr>

                    @endforeach

                </tbody>
              </table>

            </div>
          </div>
      </section>
      <!--================End Cart Area =================-->
  </main>>
 @endsection
