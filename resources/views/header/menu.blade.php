<!-- banner -->
<style>
	a.w3view-cart {
    outline: none;
    border: none;
    background: #17c3a2;
    width: 48px;
    height: 43px;
    font-size: 24px;
    color: #000;
}
</style>
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
				  <li class="active menu__item {{isset($current) && $current  == 'home' ? 'menu__item--current':''}}"><a class="menu__link" href="{{route('home.index')}}">الرئيسية <span class="sr-only">(current)</span></a></li>
				  <li class=" menu__item {{isset($current) && $current  == 'about' ? 'menu__item--current':''}}"><a class="menu__link" href="{{ route('about.index') }}">من نحن</a></li>
					<li class=" menu__item"><a class="menu__link" href="about.html">الأعمال</a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الصفحات <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Clothing</a></li>
											<li><a href="womens.html">Wallets</a></li>
											<li><a href="womens.html">Footwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
				<li class=" menu__item"><a class="menu__link {{isset($current) && $current  == 'orders' ? 'menu__item--current':''}}" href="{{route('show.status')}}">طلباتي</a></li>
				<li class=" menu__item {{isset($current) && $current  == 'contact' ? 'menu__item--current':''}}"><a class="menu__link" href="{{route('contact.index')}}">اتصل بنا</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
				

						<a class="w3view-cart" href="{{route('cart.index')}}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>  
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->