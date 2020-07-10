

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
                  <th>الاسم</th>
                  <th>رقم الهوية</th>
                  <th>تاريخ الميلاد</th>
                  <th>مجال العمل</th>
                  <th>الوصف</th>
                  <th>صورة الهوية</th>
                  <th>الحدث</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ($orders as $order )
                    <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->identify_number}}</td>
                    <td>{{$order->dob}}</td>
                    <td> {{$order->job}}</td>
                    <td> {{$order->description}}</td>
                    <td><img  src="/identities/{{$order->image}}"  width="99px" alt=""></td>
                    <td>


                      <a class="btn btn-warning" style="color: #fff" href="{{route('update-order-role',['user_id'=>$order->user_id,'order_id'=>$order->id])}}" data-target="#modal-danger">  قبول  </a>
                      <a class="btn btn-danger" style="color: #fff" href="{{route('delete-order-roles',['id'=>$order->id])}}" data-target="#modal-danger">  رفض  </a>


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
