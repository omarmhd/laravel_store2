@extends('layouts.app')

@section('content')
    <main>
        <!-- Hero Area Start-->
        <div class="container">
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center"style="height: 200px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Checkout</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================Checkout Area =================-->
        <section class="checkout_area section_padding">

            <div class="billing_details">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Billing Details</h3>
                  <form class="row contact_form" action="{{route('order.store')}}" method="post" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name">Name <span>*</span></label>
                            <input type="text" class="form-control" id="first_name" value="" required  name="name">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="street_address">Address <span>*</span></label>
                            <input type="text" class="form-control mb-3" id="street_address"  name="address"value="">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="postcode">Postcode <span>*</span></label>
                            <input type="text" class="form-control" id="postcode" name="postalcode" value="">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="state">city  <span>*</span></label>
                            <input type="text" class="form-control" id="state" name="city" value="">
                        </div>

                        <div class="col-12 mb-3">
                            <label for="phone_number">PROVINCE <span>*</span></label>
                            <input type="number" class="form-control" name="province" id="phone_number" min="0" value="">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="phone_number">Phone No <span>*</span></label>
                            <input type="number" class="form-control" name="phone" id="phone_number" min="0" value="">
                        </div>
                        <div class="col-12 mb-4">
                            <label for="email_address">Email Address <span>*</span></label>
                            <input type="email" class="form-control"  name="email" id="email_address" value="">
                        </div>
                    </div>


                <input type="submit" style="width:223px"   class="btn_3" value="Order">

                  </form>
                </div>

              </div>
            </div>
          </div>
        </section>
        <!--================End Checkout Area =================-->
    </main>
@endsection
