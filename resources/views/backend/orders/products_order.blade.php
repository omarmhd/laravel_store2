

@extends('backend.layouts.app')
@section('title',' view  Orders')


@section('content')



<div class="row">
    <div class="col-12">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>


        @endif
        <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>اسم المنتج</th>
                  <th>السعر</th>
                  <th>الكمية</th>
                  <th>الصورة</th>
                  <th>الايميل</th>
                  <th>اسم صاحب الطلب</th>
                  <th>المدينة</th>
                  <th>الهاتف</th>
                  <th>الحدث</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ($orders as $order )
                    <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->quantity}}</td>
                    <td><img  src="/product_images/{{$order->image}}"  width="99px" alt=""></td>
                    <td> {{$order->billing_email}}</td>
                    <td> {{$order->billing_name}}</td>
                    <td> {{$order->billing_city}}</td>
                    <td> {{$order->billing_phone}}</td>
                    <td>


                     @if($order->status=='0')
                      <a class="btn btn-warning" style="color: #fff" href="{{route('status.update.order',['id'=>$order->id,'status'=>1])}}" data-target="#modal-danger">  قبول  </a>
                      <a class="btn btn-danger" style="color: #fff" href="{{route('status.update.order',['id'=>$order->id,'status'=>2])}}" data-target="#modal-danger">  رفض  </a>
                    @else
                         @if($order->status=='1')
                        <a class="btn btn-success disabled" style="color: #fff"  data-target="#modal-danger">  <i class="fas fa-check"></i>  مقبول </a>
                        @else
                        <a class="btn btn-danger disabled" style="color: #fff"  data-target="#modal-danger">  <i class="fas fa-check"></i>  مرفوض </a>
                        @endif
                     @endif

                </td>
                               </tr>

                    @endforeach

                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->


@endsection



@section('script')
<script>
    $('.remove-category').click(function (){


    var id=$(this).data("value")

    swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true

    })
    .then((willDelete)=>{
        if(willDelete){

            window.location="/admin/delete-product/"+id ;
            swal("Deleted!", "Your imaginary product has been deleted.", "success");}

        })

    });
    </script>
@endsection
