

@extends('admin/master_layout')
@section('title','edit Roles')


@section('content')

<div class="row">



    <div class="col-md-9">


        <div class="card card-primary">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('role.update',['id'=>$role->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
           @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">name role </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name " name="name" value={{$role->name}}>
                </div>


              <div class="card-footer">
                <button type="submit" class="btn btn-primary">save</button>
              </div>
            </form>
        </div>
          </div></div>





      @endsection
