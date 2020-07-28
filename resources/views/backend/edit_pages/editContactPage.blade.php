

@extends('backend.layouts.app')
@section('title','create Contact')

@section('content')

<div class="row">



    <div class="col-md-9">


        <div class="card card-primary">
            <div class="card-header">
              تواصل معنا
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> رقم الدعم	 </label>
                  <input type="number" class="form-control" rows="3" placeholder="ادخل رقم الدعم" name="phone" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">الموقع </label>
                    <input type="text" class="form-control" rows="3" placeholder="ادخل الموقع" name="name" value="">
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">البريد الالكتروني</label>
                    <input type="email" class="form-control" rows="3" placeholder="ادخل البريد الالكتروني" name="email" value="">
                  </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">save</button>
              </div>
            </form>
        </div>
          </div></div>





      @endsection
