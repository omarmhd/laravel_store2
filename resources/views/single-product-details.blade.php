@extends('layouts.app')

@section('content')
@push('css')
<link rel="stylesheet" href="{{ asset('newDesign/css/flexslider.css') }}" type="text/css" media="screen" />
<style>
	.rating1 {
		direction: ltr!important;
}
.imagezoom-view{
    right: 561px;
    left: 0;
}
</style>
@endpush
<div class="banner-bootom-w3-agileits">
	<div class="container">

        <div class="col-md-4 single-right-left " style="float: right">
			<div class="grid images_3_of_2">
				<div class="flexslider">

					<ul class="slides">
						<li data-thumb="{{ asset('profile/'.$product->image) }}">
							<div class="thumb-image"> <img src="{{ asset('product_images/'.$product->image) }}" data-imagezoom="true" class="img-responsive"> </div>
						</li>

					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

        <div class="col-md-8 single-right-left simpleCart_shelfItem" style="text-align:right">
            <h3>{{$product->name}}</h3>
            <p>السعر:<span class="item_price">{{$product->price}}</span> </p>
            <p>{{$product->long_description}}</p>
            <div class="rating1">
                <span class="starRating">
                    <input id="rating5" type="radio" name="rating" value="5">
                    <label for="rating5">5</label>
                    <input id="rating4" type="radio" name="rating" value="4">
                    <label for="rating4">4</label>
                    <input id="rating3" type="radio" name="rating" value="3" checked="">
                    <label for="rating3">3</label>
                    <input id="rating2" type="radio" name="rating" value="2">
                    <label for="rating2">2</label>
                    <input id="rating1" type="radio" name="rating" value="1">
                    <label for="rating1">1</label>
                </span>
            </div>

            <div class="color-quality">
                <div class="color-quality-right">
                    {{-- <h5>Quality :</h5>
                    <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                        <option value="null">5 Qty</option>
                        <option value="null">6 Qty</option>
                        <option value="null">7 Qty</option>
                        <option value="null">10 Qty</option>
                    </select> --}}
                </div>
            </div>

            <div class="occasion-cart">
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                        <form action="{{ route('cart.store') }}" method="post">
                                            @csrf
                                                <fieldset>
                                                    <input type="submit" name="submit" value="إضافة الى السلة" class="button">
                                                <input type="hidden" name="product_id" value="{{$product->id}}" class="button">

                                                </fieldset>
                                            </form>
                                        </div>

            </div>


    </div>


	 			<div class="clearfix"> </div>
				<!-- /new_arrivals -->
                <div class="responsive_tabs_agileits" >
                    <div id="horizontalTab" style="margin-left:22px" >
                            <ul class="resp-tabs-list" style="margin-left:200px" style=" font-size: 12px ">
                                <li>تفاصيل حول المنتج </li>
                                <li>تعليق</li>
                                <li>تفاصيل حول البائع </li>
                            </ul>
                        <div class="resp-tabs-container">
                        <!--/tab_one-->
                           <div class="tab1">

                                <div class="single_page_agile_its_w3ls">
                                <h6></h6>
                                   <p>{{$product->long_description}}</p>

                                </div>
                            </div>
                            <!--//tab_one-->
                            <div class="tab2">

                                <div class="single_page_agile_its_w3ls">
                                    <div class="bootstrap-tab-text-grids">
                                        <div class="bootstrap-tab-text-grid">



                                            <div class="add-review">
                                                <h4>أضف تعليق</h4>
                                             <form action="{{route('store.comment')}}" method="post">
                                                @csrf
                                                <input type="text" name="comment" required="comment">
                                             <input type ="hidden" name="product_id" value="{{$product->id}}">
                                                         <input type="submit" value="أضف ">
                                                </form>
                                            </div>
                                                             <br>

                                            <div class="bootstrap-tab-text-grid-right">
                                           @foreach ($comment as $comm)


                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="comments-logout">
                                                        <ul class="media-list">
                                                          <li class="media">
                                                            <a class="pull-right" href="#">
                                                              <img class="media-object img-circle" src={{asset('profile/'.$comm->user->image)}} alt="profile" style="width: 80px;height: 80px;border-radius: 50px;border: 1px solid gray;">
                                                            </a>
                                                            <div class="media-body">
                                                              <div class="well well-lg">
                                                                  <h4 STYLE="COLOR:BLUE"class="media-heading text-uppercase reviews">{{$comm->user->name}} </h4>
                                                                  {{-- <ul class="media-date text-uppercase reviews list-inline">
                                                                    <li class="dd">22</li>
                                                                    <li class="mm">09</li>
                                                                    <li class="aaaa">2014</li>
                                                                  </ul> --}}
                                                                  <p style="font-size: 13px"  class="media-comment">
                                                                    {{$comm->comment}}
                                                                  </p>                                                              </p>
                                                                  {{-- <a class="btn btn-info btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                                  <a class="btn btn-warning btn-circle text-uppercase" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 2 comments</a> --}}
                                                              </div>
                                                            </div>

                                                          </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                                    @endforeach

                                            </div>
                                            <div class="clearfix"> </div>
                                         </div>

                                     </div>

                                 </div>
                             </div>
                               <div class="tab3">

                                <div class="single_page_agile_its_w3ls">

                                   <a  href=""> <span style="color: blue"><img   class="img-circle" src="{{asset('profile/'.$product->getuser->image)}}"  style="width: 80px;height: 80px;border-radius: 50px;border: 1px solid gray;">{{$product->getuser->name}}</span>
                                   </a>
                                    {{-- <a>></h6></a> --}}
                                   <p>{{$product->getuser->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	<!-- //new_arrivals -->
	  	<!--/slider_owl-->

	</div>
 </div>
 @push('js')
 <script src="{{ asset('newDesign/js/imagezoom.js') }}"></script>

     <!-- FlexSlider -->

<script src="{{ asset('newDesign/js/jquery.flexslider.js') }}"></script>
<script>
// Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->
 @endpush
@endsection