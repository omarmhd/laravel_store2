

@extends('admin/master_layout')

@section('title','view Users')

@section('content')



<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Table to display userS data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>created_at</th>
                  <th> role</th>
                  <th>action</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user )
                    <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td> @foreach ( $user->roles as $role )
                    <span>{{$role->name}}</span>
                    @endforeach
                </td>
                    <td>
                        @can('access_to_edit_user')

                     <a class="remove-category  btn  btn-danger " data-value='{{$user->id}}' style ="color:#fff"><i class="far fa-trash-alt"></i>delete  </a>
                    <a class="btn btn-warning" style="color: #fff" href="{{route('user.edit',['id'=>$user->id])}}" data-target="#modal-danger">  <i class="fas fa-pencil-alt"></i> edit </a>
                    @endcan
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

            window.location="/admin/delete-user/"+id ;
            swal("Deleted!", "Your imaginary product has been deleted.", "success");}

        })

    });
    </script>
@endsection
