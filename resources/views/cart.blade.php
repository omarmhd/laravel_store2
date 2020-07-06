@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 50px">
  <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
          <table class="table table-hover">
              <thead>
                  <tr>
                      <th>المنتج</th>
                      <th>الكمية</th>
                      <th class="text-center">السعر</th>
                      <th class="text-center">الإجمالي</th>
                      <th> </th>
                  </tr>
              </thead>
              <tbody class="data">
                @foreach ($products as $product)
                <tr>
                  <td class="col-sm-8 col-md-6">
                  <div class="media">
                  <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{asset('product_images/'.$product->image)}}" style="width: 72px; height: 72px;"> </a>
                      <div class="media-body">
                      <h4 class="media-heading"><a href="#">{{$product->name}}</a></h4>
                      {{-- {{dd()}} --}}
                      <h5 class="media-heading"> بواسطة  <a href="#">{{$product->getUser->name}}</a></h5>
                      
                          {{-- <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> --}}
                      </div>
                  </div></td>
                  <td class="col-sm-1 col-md-1" style="text-align: center">
                  <input type="text" class="form-control quantity"  value="{{$product->pivot->quantity}}">
                  <input type="hidden" class="product_id" value="{{$product->id}}">
                  </td>
                  <td class="col-sm-1 col-md-1 text-center price"><strong>${{$product->price}}</strong>
                  
                  </td>
                  <td class="col-sm-1 col-md-1 text-center priqty"><strong>${{$product->price*$product->pivot->quantity}}</strong></td>
                  <td class="col-sm-1 col-md-1">
                    <form action="{{route('cart.remove')}}" method="post">
                      @csrf
                      @method('delete')
                      <input type="hidden" name='product_id' value="{{$product->id}}">
                      <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span> إزالة
                  </button>
                  </form>
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
                      <td>   </td>
                      <td>   </td>
                      <td>   </td>
                      <td><h3>الإجمالي</h3></td>
                      <td class="text-right"><h3><strong id="totalPrice">{{$subtotal}}</strong></h3></td>
                  </tr>
                  <tr>
                      <td>   </td>
                      <td>   </td>
                      <td>   </td>
                      <td>
                      {{-- <button type="button" class="btn btn-default">
                          <span class="glyphicon glyphicon-shopping-cart"></span> الاستمر
                      </button> --}}
                    </td>
                      <td>
                      <a  class="btn btn-success" href="{{route('checkout.index')}}"> 
                          طلب المنتجات <span class="glyphicon glyphicon-play"></span>
                      </a></td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>
@push('js')
    <script>
      $(document).on('keyup','.quantity',function (e) { 
        let totalPrice = 0;
        let tagsTotalPrice =  $(this).parent().parent().parent().children('tr').children('.priqty').children();
        let price = $(this).parent().siblings('.price').children().html();
        let product_id = $(this).siblings('.product_id').val();
        let priqty = $(this).parent().siblings('.priqty').children();
        price = price.replace("$",'');
          if(!isNaN(parseInt($(this).val())) ){
          if($(this).val()>0 && $(this).val()<99){
           let total = calcuateTotal(price,$(this).val())
            priqty.html(`$${total}`);
          }else{
            if ($(this).val()<=0) {
                $(this).val(1)
                let total = calcuateTotal(price,1)
                priqty.html(`$${total}`);
            }
            if($(this).val()>99){
               $(this).val(99)
              let total = calcuateTotal(price,99);
               priqty.html(`$${total}`);
            }
          }
          $.ajax({
              type: "get",
              url: "{{url('cart/updateQty')}}",
              data: {
                quantity :parseInt($(this).val()),
                product_id : product_id
              },
              dataType: "json",
              success: function (response) {
                console.log(response);
              }
            });
        }else{
          if(isNaN(parseInt($(this).val())) && $(this).val() != ''){
               $(this).val(1)
          }
        }

         tagsTotalPrice.map((key,value)=> {
          return  totalPrice +=parseFloat(value.innerHTML.replace("$",''));
        });
        $('#totalPrice').html("$"+totalPrice);
      });

      function calcuateTotal(price,qty){
        return price*qty;
      }
    </script>
@endpush
 @endsection
