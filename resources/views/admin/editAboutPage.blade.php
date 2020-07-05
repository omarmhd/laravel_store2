

@extends('admin/master_layout')
@section('title','create About us')

@section('content')

<div class="row">



    <div class="col-md-9">


        <div class="card card-primary">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Our_Mission </label>
                    <textarea class="form-control" rows="3" placeholder="Enter ......." name="Our_Mission" value=""></textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Our_Vision </label>
                      <textarea class="form-control" rows="3" placeholder="Enter .........." name="Our_Vision" value="">></textarea>
                    </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">save</button>
              </div>
            </form>
        </div>
          </div></div>





      @endsection
