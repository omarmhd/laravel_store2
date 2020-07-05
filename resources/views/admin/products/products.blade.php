@extends('admin/master_layout')
@section('title',' view products ')


@section('content')



<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>name</th>
                  <th>price</th>
                  <th>details</th>
                  <th>long_description</th>
                  <th>image</th>
                  <th>created_at</th>
                  <th>action</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product )
                    <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->details}}</td>

                    <td>{{$product->long_description}}</td>
                    <td><img  src={{asset("/product_images/$product->image") }}  width="99px" alt="Error displaying images due to heroku hosting"></td>
                    <td>{{$product->created_at->diffForHumans()}}</td>
                    <td>

                     <a class="remove-category  btn  btn-danger " data-value='{{$product->id}}' style ="color:#fff"><i class="far fa-trash-alt"></i>delete  </a>
                    <a class="btn btn-warning" style="color: #fff" href="{{route('product.edit',['id'=>$product->id])}}" data-target="#modal-danger">  <i class="fas fa-pencil-alt"></i> edit </a>
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
