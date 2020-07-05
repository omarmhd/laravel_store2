

@extends('admin/master_layout')
@section('title','view  Roles')


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
                  <th> created_at</th>
                  <th>action</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ($roles as $role)
                    <tr>
                    <td>{{$role->name}}</td>
                    <td>{{$role->created_at->diffForHumans()}}</td>

                    <td>

                     <a class="remove-role  btn  btn-danger " data-value='{{$role->id}}' style ="color:#fff"><i class="far fa-trash-alt"></i>delete  </a>
                    <a class="btn btn-warning" style="color: #fff" href="{{route('role.edit',['id'=>$role->id])}}" data-target="#modal-danger">  <i class="fas fa-pencil-alt"></i> edit </a>

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
    $('.remove-role').click(function (){


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

            window.location="/admin/delete-role/"+id ;
            swal("Deleted!", "Your imaginary product has been deleted.", "success");}

        })

    });
    </script>
@endsection
