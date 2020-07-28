{{-- <div class="coupons">
	<div class="coupons-grids text-center">
		<div class="w3layouts_mail_grid">
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>FREE SHIPPING</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-headphones" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>24/7 SUPPORT</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>MONEY BACK GUARANTEE</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-gift" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>FREE GIFT COUPONS</h3>
					<p>Lorem ipsum dolor sit amet, consectetur</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div> --}}

<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left" style="
    float: right;
">
			<h2><a href="index.html">حرفتي</a></h2>
			<p>موقع يهتم بكل ما هو تراثي واثري  من الاعمال اليدوية</p>
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
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4><span>معلوماتنا</span> </h4>
					<ul>
						
						<li><a href="{{ route('home.index') }}">الرئيسية</a></li>
						<li><a href="{{ route('home.products') }}">الحرف اليدوية</a></li>
						{{-- <li><a href="womens.html">Women's wear</a></li> --}}
						<li><a href="{{ route('about.index') }}">من نحن</a></li>
						<li><a href="{{ route('contact.index') }}">اتصل بنا</a></li>
						<li><a href="{{ url('messenger/t/1') }}">تواصل مع الادمن</a></li>
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4>تواصل معنا عبر</h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								@php
								 $contact = \DB::table('contact')->latest('id')->first();
								@endphp
								<h6>رقم الهاتف</h6>
								<p>@isset($contact->support_phone )
									{{ $contact->support_phone }}
								@endisset</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>البريد الالكتروني</h6>
								<p>الايميل:<a href="mailto:  @isset($contact->support_email)
									{{$contact->support_email }}
								@endisset">@isset($contact->support_email)
									{{$contact->support_email }}
								@endisset</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>الموقع</h6>
								<p>@isset($contact->location_name)
									{{$contact->location_name }}
								@endisset
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft" style="
    float: right;
">
				<h3>ليصلك كل جديد اشترك معنا</h3>
			</div>
			<div class="col-sm-6 newsright" style="
">
				<form action="#" method="post">
					<input type="email" placeholder="ادخل بريدك الالكتروني" name="email" required="">
					<input type="submit" value="أشتراك">
				</form>
			</div>

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">© 2017 Elite shoppy. All rights reserved | Design by </p>
	</div>
</div>