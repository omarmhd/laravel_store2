

   @extends('layouts.app')

   @section('content')
   @push('css')
       <style>
           /* .styled-input label{
            left: 420px;
           } */

           .contact-right {
                padding-right: 2em;
                float: right;
            }
            .mail-agileits-w3layouts i {
                    float: right;
            }
        .styled-input label {
            right: 0;
            }
       </style>
   @endpush
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>اتصل بنا</h3>
        <!--/w3_short-->
             <div class="services-breadcrumb">
                    <div class="agile_inner_breadcrumb">

                       <ul class="w3_short">
                       <li><a href="{{route('home.index')}}">الرئيسية</a><i>|</i></li>
                            <li>اتصل بنا</li>
                        </ul>
                     </div>
            </div>
   <!--//w3_short-->
</div>
</div>
<!--/contact-->
<div class="banner_bottom_agile_info">
    <div class="container">
      <div class="contact-grid-agile-w3s">
            <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w31">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h4>العنوان</h4>
                        <p>{{$contact->location_name}} </p>
                    </div>
                </div>
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w32">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4>تواصل معنا</h4>
                        <p>{{$contact->support_phone}}</p>
                    </div>
                </div>
                <div class="col-md-4 contact-grid-agile-w3">
                    <div class="contact-grid-agile-w33">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <h4>البريد الالكتروني</h4>
                        <p><a href="mailto:{{$contact->support_email}}">{{$contact->support_email}}</a>
                            {{-- <span>
                            <a href="mailto:{{$contact->support_email}}"><p>{{$contact->support_email}}</p></a>
                        </span> --}}
                    </p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
   </div>
 </div>
   <div class="contact-w3-agile1 map" data-aos="flip-right">  
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3030.2737797393047!2d34.44081752026938!3d31.514070729773348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1591952334706!5m2!1sar!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="banner_bottom_agile_info">
<div class="container">
   <div class="agile-contact-grids">
            <div class="agile-contact-left">
                <div class="col-md-6 contact-form">
                    <h4 class="white-w3ls">تواصل معنا </span></h4>
                <form action="{{route('meesage.store')}}" method="post">
                    @csrf
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" name="name" required="">
                            <label>الاسم</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <input type="email" name="email" required=""> 
                            <label>البريد الالكتروني</label>
                            <span></span>
                        </div> 
                        <div class="styled-input">
                            <input type="text" name="subject" required="">
                            <label>الموضوع</label>
                            <span></span>
                        </div>
                        <div class="styled-input">
                            <textarea name="message" required=""></textarea>
                            <label>الرسالة</label>
                            <span></span>
                        </div>	 
                        <input type="submit" value="ارسال">
                    </form>
                </div>
                <div class="col-md-6 address-grid">
                    <h4>للمزيد من المعلومات</h4>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            <div class="contact-right">
                                
                                <p>رقم الهاتف </p><span>{{$contact->support_phone}}</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>البريد الالكتروني </p><a href="mailto:{{$contact->support_email}}">{{$contact->support_email}}</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>العنوان</p>
                               <span>{{$contact->location_name}} </span>
                               
                            </div>
                            <div class="clearfix"> </div>
                        </div>
           
                </div>
                
            </div>
            <div class="clearfix"> </div>
        </div>
   </div>
</div>
<!--//contact-->

  @endsection

  <main>
    <!--? Hero Area Start-->
    {{-- <div class="slider-area ">

        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Contacts</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? Hero Area End-->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">

        <div class="container">

            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
            @endif

            <div class="d-none d-sm-block mb-5 pb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3030.2737797393047!2d34.44081752026938!3d31.514070729773348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1591952334706!5m2!1sar!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>


            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{route('meesage.store')}}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="meesage" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="button button-contactForm boxed-btn" value="Send">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Our Location</h3>
                        <p>{{$contact->location_name}}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>support phone</h3>
                            <p>{{$contact->support_phone}}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support email</h3>
                        <p>{{$contact->support_email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ================ contact section end ================= -->
</main>