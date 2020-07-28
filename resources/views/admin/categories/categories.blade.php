
@extends('admin/master_layout')


@section('content')


<div class="row">
    <div class="col-12">
        @if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
@endif



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
                  <th>status</th>
                  <th>description</th>
                  <th>created_at</th>
                  <th>action</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)
                    <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->status}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->created_at->diffForHumans()}}</td>
                    <td>

                    <a class="remove-category  btn  btn-danger " data-value='{{$category->id}}' style ="color:#fff"><i class="far fa-trash-alt"></i>delete  </a>
                    <a class="btn btn-warning" style="color: #fff" href="{{route('category.edit',['id'=>$category->id])}}" data-target="#modal-danger">  <i class="fas fa-pencil-alt"></i> edit </a>

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
  text: "Once deleted, you will not be able to recover this Category !",
  icon: "warning",
  buttons: true,
  dangerMode: true

    })
    .then((willDelete)=>{
        if(willDelete){

            window.location="/admin/delete-category/"+id ;
            swal("Deleted!", "Your imaginary product has been deleted.", "success");}

        })

    });
    </script>
@endsection
