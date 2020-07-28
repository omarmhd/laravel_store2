@extends('layouts.app')

@section('content')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('newDesign/css/jquery-ui.css') }}">
<style>

     .single-post {
        position: relative;
        margin-top: 30px;
        padding-bottom: 30px;
        border-bottom: 1px solid #ddd;
    }
     .single-post.first{
        padding-top:0px;
    }
     .single-post:last-child{
        padding-bottom: 60px;
        border:none;
    }
     .single-post .image img{
        height: 80px;
        width: 80px;
        position:absolute;
        right: 0;
        top: -23px;
        border-radius:100%;
    }
     .single-post .content{
        padding-left:100px;
        float: left;
    }
     .single-post .content h5 {
        line-height: 18px;
    }
     .single-post .content h5 a {
        color: #222;
        font-weight: 500;
        font-size: 14px;
        font-weight: 500;
        display: block;
    }
     .single-post .content h5 a:hover{
        color:#F7941D;
    }
     .single-post .content .price {
        display: block;
        color: #333;
        font-weight: 500;
        margin: 5px 0 0px 0;
        text-transform: uppercase;
        font-size: 14px;
    }
     .single-post .reviews li{
        display:inline-block;
    }
     .single-post .reviews li i{
        color:#999;
    }
     .single-post .reviews li.yellow i{
        color:#F7941D;
    }

    .sorting {
    float: left;
    /* width: 46%; */
    }

    .sorting h6 {
    float: right;
    }
    .sorting select {
        float: right;
    }
    .products-left{
        float: right;
    }
    .swit {
    border-bottom: 1px solid #ddd;
}
</style>
@endpush
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>الحرف اليدوية </span></h3>
        <!--/w3_short-->
             <div class="services-breadcrumb">
                    <div class="agile_inner_breadcrumb">

                       <ul class="w3_short">
                            <li><a href="{{ route('home.index') }}">الرئيسية</a><i>|</i></li>
                            <li>قسم الحرف اليدوية</li>
                        </ul>
                     </div>
            </div>
   <!--//w3_short-->
</div>
</div>

<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-4 products-left">
			{{-- <div class="filter-price">
				<h3>Filter By <span>Price</span></h3>
					<ul class="dropdown-menu6">
						<li>                
							<div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 0%; width: 15.7111%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 15.7111%;"></a></div>							
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;">
						</li>			
					</ul>
			</div> --}}
			
			
			<div class="css-treeview">
				<h4>الأقسام</h4>
				<ul class="tree-list-pad">
                    @foreach ($categories as $category)
                    <li>
                        {{-- <input type="checkbox" checked="checked" id="item-0"> --}}
                        <a href="#"><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> {{ $category->name }}</label></a>
                    </li>
                    @endforeach
                
                    </ul>
			</div><div class="clearfix"></div>
		<div class="community-poll">
                <h4>الحرف الاكثر طلبا</h4>
                @foreach ($productsCommon as $productCommon)
                <div class="swit form">
                    <div class="single-post first">
                                            <div class="image">
                                                <img src="{{ asset('product_images/'.$productCommon->image) }}" alt="#">
                                            </div>
                                            <div class="content">
                                                <h5><a href="{{ route('home.show',['id'=>$productCommon->id]) }}">{{ $productCommon->name }}</a></h5>
                                                <p class="price">₪{{ $productCommon->price }}</p>
                                             
                                            </div>
                                        </div>
                    </div>
                @endforeach
           
            </div>
        </div>
		<div class="col-md-8 products-right">
			{{-- <h5>Product <span>Compare(0)</span></h5> --}}
			<div class="sort-grid">
				<div class="sorting">
					<h6>ترتيب حسب</h6>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">Default</option>
						<option value="null">Name(A - Z)</option> 
						<option value="null">Name(Z - A)</option>
						<option value="null">Price(High - Low)</option>
						<option value="null">Price(Low - High)</option>	
						<option value="null">Model(A - Z)</option>
						<option value="null">Model(Z - A)</option>					
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="sorting">
					<h6>عرض</h6>
					<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">7</option>
						<option value="null">14</option> 
						<option value="null">28</option>					
						<option value="null">35</option>								
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			
			@foreach ($productsRecently as $product)
            <div class="col-md-4 product-men">

                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ asset('product_images/'.$product->image) }}" alt="" class="pro-image-front" style="height: 250px">
                        <img src="{{ asset('product_images/'.$product->image) }}" alt="" class="pro-image-back" style="height: 250px">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{url('show_product/'.$product->id)}}" class="link-product-add-cart">التفاصيل</a>
                                </div>
                            </div>
                            <span class="product-new-top">الاحدث</span>
                            
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="{{url('show_product/'.$product->id)}}">{{ $product->name }}</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">₪{{ $product->price }}</span>
                            {{-- <del>$189.71</del> --}}
                        </div>
                    
                                                            
                    </div>
                </div>
            </div>
            @endforeach

        <div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		<div class="single-pro">
            @foreach ($products as $product)
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ asset('product_images/'.$product->image) }}" alt="" class="pro-image-front" style="    height: 250px;">
                        <img src="{{ asset('product_images/'.$product->image) }}" alt="" class="pro-image-back" style="    height: 250px;">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{url('show_product/'.$product->id)}}" class="link-product-add-cart">التفاصيل</a>
                                </div>
                            </div>
                            {{-- <span class="product-new-top">New</span> --}}
                            
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="{{url('show_product/'.$product->id)}}">{{ $product->name }}</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">₪{{ $product->price }}</span>
                            {{-- <del>$189.71</del> --}}
                        </div>								
                    </div>
                </div>
            </div>
            @endforeach
			
				
            {{ $products->links() }}

			<div class="clearfix"></div>
		</div>
	</div>
</div>
@push('js')
<script src="{{ asset('newDesign/js/responsiveslides.min.js') }}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
     // Slideshow 4
    $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
    $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
        $('.events').append("<li>after event fired.</li>");
        }
        });
    });
</script>
<script src="{{ asset('newDesign/js/modernizr.custom.js') }}"></script>
<script type='text/javascript'>//<![CDATA[ 
    $(window).load(function(){
     $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 9000,
                values: [ 1000, 7000 ],
                slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
     });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    });//]]>  
</script>
<script type="text/javascript" src="{{ asset('newDesign/js/jquery-ui.js') }}"></script>
@endpush
@endsection