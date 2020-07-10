

@extends('backend.layouts.app')
@section('title',' view massages')


@section('content')



<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header">
              {{-- <h3 class="card-title">DataTable with default features</h3> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>{{__('dashboard.attributes.name')}}</th>
                  <th>{{__('dashboard.attributes.email')}} </th>
                  <th>{{__('dashboard.attributes.subject')}}</th>
                  <th>{{__('dashboard.attributes.message')}}</th>
                  <th>{{__('dashboard.attributes.date')}}</th>
                  <th>{{__('dashboard.attributes.action')}}</th>

                </tr>
                </thead>
                <tbody>

                    @foreach ($messages as $message )
                    <tr>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->subject}}</td>
                    <td>{{$message->meesage}}</td>
                    <td>{{$message->created_at}}</td>
                    <td>

                     <a class="remove-category  btn  btn-danger " data-value='{{$message->id}}' style ="color:#fff"><i class="far fa-trash-alt"></i>delete  </a>
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



@push('script')
<script>
  //   $('.remove-category').click(function (){


  //   var id=$(this).data("value")

  //   swal({
  // title: "Are you sure?",
  // text: "Once deleted, you will not be able to recover this imaginary file!",
  // icon: "warning",
  // buttons: true,
  // dangerMode: true

  //   })
  //   .then((willDelete)=>{
  //       if(willDelete){

  //           window.location="/admin/delete-message/"+id ;
  //           swal("Deleted!", "Your imaginary product has been deleted.", "success");}

  //       })

  //   });
    </script>
@endpush
