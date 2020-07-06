<!-- js -->
<script type="text/javascript" src="{{ asset('newDesign/js/jquery-2.1.4.min.js') }}"></script>
<!-- //js -->
<script src="{{ asset('newDesign/js/modernizr.custom.js') }}"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="{{ asset('newDesign/js/minicart.min.js') }}"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="{{ asset('newDesign/js/easy-responsive-tabs.js') }}"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
    var $tab = $(this);
    $category_id = $tab.children()[0].value;
	
    $.ajax({
        type: "get",
        url: "/category_products/"+$category_id,
        dataType: "json",
        success: function (response) {

            $output='';
           
            for (let index = 0; index < response.length; index++) {
                $output+= `	<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="{{ asset('product_images/') }}/${response[index].image}" alt="" class="pro-image-front">
										<img src="{{ asset('product_images/') }}/${response[index].image}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{url('show_product/')}}/${response[index].id} " class="link-product-add-cart">التفاصيل</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="{{url('show_product/')}}/${response[index].id} ">${response[index].name}</a></h4>
										<div class="info-product-price">
											<span class="item_price">$ ${response[index].price}</span>
											<del>$ ${response[index].price}</del>
										</div>
																			
									</div>
								</div>
							</div>
							`

            }
            $('.tab-'+$category_id).html($output);
            // console.log(response[0]);
        }
    });
	
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
    console.log();
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>

	<script src="{{ asset('newDesign/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('newDesign/js/jquery.countup.js') }}"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ asset('newDesign/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('newDesign/js/jquery.easing.min.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {					
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{ asset('newDesign/js/bootstrap.js') }}"></script>
@stack('js')