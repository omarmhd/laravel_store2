

@extends('admin/master_layout')

@section('title','create Contact')

@section('content')

<div class="row">



    <div class="col-md-9">


        <div class="card card-primary">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> support phone	 </label>
                  <input type="number" class="form-control" rows="3" placeholder="Enter support phone." name="phone" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">location name </label>
                    <input type="text" class="form-control" rows="3" placeholder="Enter location name." name="name" value="">
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">support email</label>
                    <input type="email" class="form-control" rows="3" placeholder="Enter support email ." name="email" value="">
                  </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">save</button>
              </div>
            </form>
        </div>
          </div></div>





      @endsection
