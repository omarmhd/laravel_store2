@extends('layouts.app')

@section('content')
    <main>


        @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>

        @endif
        <!-- Hero Area Start-->
        {{-- <div class="slider-area ">
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
        </div> --}}
        <!-- About Details End -->
        <!--? Video Area Start -->

        <!-- Video Area End -->
        <!--? Shop Method Start-->

        <!-- Shop Method End-->
    </main>

<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3> <span>من نحن </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
                           <li><a href="{{route('home.index')}}">الرئسية</a><i>|</i></li>
								<li>من نحن</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<div class="banner_bottom_agile_info">
    <div class="container">
        <div class="agile_ab_w3ls_info">
            {{-- <div class="col-md-6 ab_pic_w3ls">
                   {{-- <img src="images/ab_pic.jpg" alt=" " class="img-responsive"> --}}
            {{-- </div> --}} 
             <div class="col-md-12 ab_pic_w3ls_text_info">
                <h5>هدفنا </h5>
                <h2> {{$about->Our_Mission}}</h2>
               <br>
                <h5>رؤيتنا </h5>
                <h2>{{$about->Our_Vision}}</h2>
            </div>
           
             
        </div>    
         
     </div> 
</div>

<div class="banner_bottom_agile_info team">
	<div class="container">
	            <h3 class="wthree_text_info">أعضاء فريقنا</h3>
			<div class="inner_w3l_agile_grids">
					<div class="col-md-3 team-grids">
						<div class="thumbnail team-w3agile">
							<img src="images/t1.jpg" class="img-responsive" alt="">
							<div class="social-icons team-icons right-w3l fotw33">
							<div class="caption">
								<h4>حمزة نضال المبيض</h4>
								<p>مبرمج</p>						
							</div>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
						<div class="col-md-3 team-grids">
						<div class="thumbnail team-w3agile">
							<img src="images/t2.jpg" class="img-responsive" alt="">
							<div class="social-icons team-icons right-w3l fotw33">
							<div class="caption">
								<h4>عمر الحداد</h4>
								<p>حوت لارافل</p>						
							</div>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
						<div class="col-md-3 team-grids">
						<div class="thumbnail team-w3agile">
							<img src="images/t3.jpg" class="img-responsive" alt="">
							<div class="social-icons team-icons right-w3l fotw33">
							<div class="caption">
								<h4>محمد ابو شمالة</h4>
								<p>حوت asp</p>						
							</div>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
						<div class="col-md-3 team-grids">
						<div class="thumbnail team-w3agile">
							<img src="images/t4.jpg" class="img-responsive" alt="">
							<div class="social-icons team-icons right-w3l fotw33">
							<div class="caption">
								<h4>احمد العشي</h4>
								<p>حوت الباك اند</p>						
							</div>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
					<div class="clearfix"> </div>
				</div>
	       </div>
		</div>

@endsection
