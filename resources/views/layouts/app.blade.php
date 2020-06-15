<!DOCTYPE html>

<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <title>my store | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" >
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
<link rel="stylesheet" href="{{asset('template/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('template/assets/css/slicknav.css')}}">
        <link rel="stylesheet" href="{{asset('template/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('template/assets/css/magnific-popup.css')}}">

        <link rel="stylesheet" href="{{asset('template/assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('template/assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('template/assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('template/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('template/assets/css/all.min.css')}}">

</head>

<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <span> my store </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                        <span style="color: red">  <a  style="color:rgb(0, 0, 0); font-size: 30px" href="{{route('home.index')}}"> my store </a></span>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{route('home.index')}}">Home</a></li>
                                <li><a href="{{route('about.index')}}">about</a></li>
                                 <li><a href="{{route('contact.index')}}">contact</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('cart.index')}}">Cart</a></li>
                                            <li><a href="{{route('about.index')}}">about</a></li>
                                            <li><a href="{{route('contact.index')}}">contact</a></li>
                                            <li><a href="{{route('show.status')}}">status product</a></li>
                                            <li><a href="{{route('checkout.index')}}">Product Checkout</a></li>
                                        </ul>

                                    </li>
                                    <li><a href="{{route('show.status')}}">status product</a></li>

                                </ul>

                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                {{-- <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li> --}}

                                <li><a href="{{route('cart.index')}} " style="color:#141517" style="margin-right: 22px"><span style="font-size: 22px "> <i  class="fas fa-cart-plus"></i> @auth {{Auth::user()->products()->count('name')}} @endauth
                                </a> </span></li>

                                @guest
                                <li> <a href="{{route('login')}}"  style="color:#141517"><i style="font-size: 22px"  class="fas fa-sign-in-alt"></i></a></li>
                                <li style="margin-left: 22px"><a href="{{route('register')}}" style="color:#141517" ><i style="font-size: 22px" class="fas fa-user-plus"></i></a> </li>
                                @endguest


                               @auth

                                <li> <a href="{{route('logout')}}" style="color:#141517 " ><i  style="font-size: 22px  " class="fas fa-sign-out-alt"></i></a>
                                    @endauth
                                    @can('access_to_controll_panel')

                                    <li style="margin-left: 22px"> <a href="{{route('product.index')}}" style="color:#141517  " ><i style="font-size: 22px  "class="fas fa-users-cog"></i>     </a>
                                        @endcan

                            </ul>

                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
  @yield('content')

    </main>

        <footer>
            <!-- Footer Start-->
            <div class="footer-area footer-padding" style="background-color: #fdd">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        {{-- <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a> --}}
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="{{route('home.index')}}">home</a></li>
                                        <li><a href="{{route('cart.index')}}">Cart</a></li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="{{route('about.index')}}">about us</a></li>
                                        <li><a href="{{route('contact.index')}}">contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="{{route('show.status')}}">status product</a></li>
                                        <li><a href="{{route('checkout.index')}}">Product Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer bottom -->
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-8 col-md-7">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This websit is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/omarmhd2012" target="_blank">omar al haddad </a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-5">
                            <div class="footer-copy-right f-right">
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/omarmhd2012"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>




    <script src="{{asset('template/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{asset('template/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        {{-- <script src="{{asset('template/assets/js/popper.min.js')}}"></script> --}}
        <script src="{{asset('template/assets/js/bootstrap.min.js')}}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{asset('template/assets/js/jquery.slicknav.min.js')}}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('template/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('template/assets/js/slick.min.js')}}"></script>

        <!-- One Page, Animated-HeadLin -->
        <script src="{{asset('template/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('template/assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('template/assets/js/jquery.magnific-popup.js')}}"></script>

        <!-- Scroll up, nice-select, sticky -->
        <script src="{{asset('template/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('template/assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('template/assets/js/jquery.sticky.js')}}"></script>

        <!-- contact js -->
        <script src="{{asset('template/assets/js/contact.js')}}"></script>
        <script src="{{asset('template/assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('template/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('template/assets/js/mail-script.js')}}"></script>
        <script src="{{asset('template/assets/js/jquery.ajaxchimp.min.js')}}"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="{{asset('template/assets/js/plugins.js')}}"></script>
        <script src="{{asset('template/assets/js/main.js')}}"></script>



        {{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('template/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('template/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Blouses &amp; Shirts</a></li>
                                        <li><a href="shop.html">T-shirts</a></li>
                                        <li><a href="shop.html">Rompers</a></li>
                                        <li><a href="shop.html">Bras &amp; Panties</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                        <li><a href="shop.html">T-Shirts</a></li>
                                        <li><a href="shop.html">Polo</a></li>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">Jackets</a></li>
                                        <li><a href="shop.html">Trench</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">T-shirts</a></li>
                                        <li><a href="shop.html">Jackets</a></li>
                                        <li><a href="shop.html">Trench</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="single-product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="regular-page.html">Regular Page</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                <a href="#"><img src="{{asset('template/img/core-img/heart.svg')}}" alt=""></a>
                </div>
                <!-- User Login Info -->

                @guest

                <div class="user-login-info">
                <a href="{{route('login')}}"><img src="{{asset('template/img/core-img/user.svg')}}" alt=""> login</a>
                </div>


                <div class="user-login-info">
                    <a href="{{route('register')}}">registar </a>
                    </div>
                @endguest


                   @auth

                <div class="user-login-info">
                    <a href="{{route('logout')}}"title><i class="fa fa-sign-out" style="font-size: 20px" ></i>

                  logout
                    </a> </div>
                    @endauth

                <!-- Cart Area -->
                <div class="cart-area">
                <a href="/cart" id="essenceCartBtn"><img src="{{asset('template/img/core-img/bag.svg')}}" alt="">

                   @auth
                    <span>{{Auth::user()->products()->count('name')}}</span>
                @endauth

                </a>
                </div>
            </div>

        </div>
    </header>


  @yield('content')


    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="{{asset('template/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('template/js/plugins.js')}}"></script>
    <!-- Classy Nav js -->
    <script src="{{asset('template/js/classy-nav.min.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('template/js/active.js')}}"></script>

</body>

</html> --}}
