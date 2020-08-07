

@extends('backend.layouts.app')
@section('title','create About us')

@section('content')

<div class="row">



    <div class="col-md-9">


        <div class="card card-primary">
            <div class="card-header">
              من نحن
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">اهدافنا</label>
                    <textarea class="form-control" rows="3" name="Our_Mission" > @isset($about) {{ $about->Our_Mission }} @else {{ old('Our_Mission') }} @endisset</textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">رؤيتنا </label>
                      <textarea class="form-control" rows="3"  name="Our_Vision" > @isset($about) {{ $about->Our_Vision }} @else {{ old('Our_Vision') }} @endisset</textarea>
                    </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">save</button>
              </div>
            </form>
        </div>
          </div></div>





      @endsection
