

@extends('admin/master_layout')


@section('content')



<div class="row ">
    <div class="col-md-4">


    </div> </div>

<div class="row">



        <div class="col-md-9">
        <div class="card card-primary">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('role.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">name role </label>
                  <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('name')}}</span>

                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name " name="name">
                </div>


              <div class="card-footer">
                <button type="submit" class="btn btn-primary">save</button>
              </div>
            </form>
        </div>
          </div></div>





      @endsection
