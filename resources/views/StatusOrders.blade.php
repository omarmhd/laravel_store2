@extends('layouts.app')

@section('content')
{{-- <meta content=""> --}}
@push('css')
   <style>
      tr{
      
      border-bottom: 1px solid gainsboro;
  
      }
   </style>
         <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

@endpush
  <main>
  {{-- put message  --}}
  
  @if (session('error'))
  <div class="alert alert-danger" role="alert">
      {{ session('error') }}
  </div>
  @endif
        <!-- Hero Area Start-->
      <div class="slider-area ">
          <div class="single-slider slider-height2 d-flex align-items-center" style="margin-top: 49px;margin-bottom: 41px;">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="hero-cap text-center">
                              <h2>حالة الطلبات</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
      <section class="cart_area section_padding">
        <div class="container">

          <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>المنتج</th>
                            <th>الكمية</th>
                            <th class="text-center">السعر</th>
                            <th class="text-center">الحالة</th>
                            <th class="text-center">التاريخ</th>
                            <th class="text-center">الحدث</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody class="data">
                      @foreach ($orders as $order)
                      <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{asset('product_images/'.$order->image)}}" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                            <h4 class="media-heading"><a href="{{route('home.show',['id'=>$order->product_id])}}">{{$order->name}}</a></h4>
                            {{-- {{dd()}} --}}
                            {{-- <h5 class="media-heading"> بواسطة  <a href="#">{{$order->getUser->name}}</a></h5> --}}
                            
                                {{-- <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> --}}
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                          {{$order->quantity}}
                        {{-- <input type="text" class="form-control quantity"  value="{{$order->quantity}}"> --}}
                        {{-- <input type="hidden" class="product_id" value="{{$order->id}}"> --}}
                        </td>
                        <td class="col-sm-1 col-md-1 text-center price"><strong>₪{{$order->price}}</strong></td>
                        {{-- <td class="col-sm-1 col-md-1 text-center priqty"><strong>${{$product->price}}</strong></td> --}}
                        <td class="col-sm-1 col-md-1">
                          {{-- <form action="{{route('cart.remove')}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name='product_id' value="{{$product->id}}">
                            <button type="submit" class="btn btn-danger">
                          <span class="glyphicon glyphicon-remove"></span> إزالة
                        </button>
                        </form> --}}
                        @if($order->status=='0')
                        <a class="btn btn-warning disabled" style="color: #fff" data-target="#modal-danger">  <i class="fa fa-clock-o" aria-hidden="true"></i></a>

                        @php
                            $time = new DateTime();
                            $time = strtotime($time->format('Y-m-d H:i:s'));
                        @endphp
                        {{-- {{ dump(strtotime($order->time_close)), --}}
                        {{-- dump($time) }} --}}
                        <td class="col-sm-1 col-md-1 text-center price"><strong>{{$order->updated_at}}</strong></td>
                        @if ($time<=strtotime($order->time_close))
                        <td class="col-sm-2 col-md-2 text-center price">
                         <a href="#" class='btn btn-default btn-xs' id="quantity" data-type="text" data-pk="{{ $order->id }}" data-url="{{ route('order.update') }}" data-title="ادخل الكمية" title="تعديل الطلب"><i class="fa fa-edit"></i></a>
                         <input type="hidden" value="{{ $order->id }}" id="order_id">
                         <button  id="order_delete" class='btn btn-default btn-xs' title="حذف الطلب" onclick="return confirm('هل انت متأكد من حذف الطلب ؟')"><i class="fa fa-trash"></i></button>

                        </td>
                        @endif
                         @elseif( $order->status=='1') 
                         <a class="btn btn-success disabled" style="color: #fff"  data-target="#modal-danger">  <i class="fa fa-check" aria-hidden="true"></i></a>
                         @else
                         <a class="btn btn-danger disabled" style="color: #fff"  data-target="#modal-danger"> <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                         </a>
                         @endif
                        
                      

                      </tr>
                    </td>
                      @endforeach
                   
                        {{-- <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h5>Subtotal</h5></td>
                            <td class="text-right"><h5><strong>{{$subtotal}}</strong></h5></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h5>Estimated shipping</h5></td>
                            <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                        </tr> --}}
                        <tr>
                            {{-- <td>   </td> --}}
                            {{-- <td>   </td> --}}
                            {{-- <td>   </td> --}}
                            {{-- <td><h3>الإجمالي</h3></td> --}}
                            {{-- <td class="text-right"><h3><strong id="totalPrice">{{$subtotal}}</strong></h3></td> --}}
                        </tr>
                        <tr>
                            {{-- <td>   </td> --}}
                            {{-- <td>   </td> --}}
                            {{-- <td>   </td> --}}
                            {{-- <td>
                            <button type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-shopping-cart"></span> الاستمر
                            </button>
                          </td> --}}
                            {{-- <td>
                           </td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


          {{-- <div class="cart_inner">
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
                    {{-- <td>
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
          </div> --}}
      </section>
      <!--================End Cart Area =================-->
  </main>
  @push('js')
      <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $(document).ready(function() {
          $('#quantity').editable();
      });

      $('#order_delete').on('click',function(){
        $.ajax({
        type: "post",
        url: "{{ route('order.delete') }}",
        data: {
          order_id:$('#order_id').val()
        },
        dataType: "html",
        success: function (response) {
          console.log(response);
        }
      });
      })
    </script>
  @endpush
 @endsection
