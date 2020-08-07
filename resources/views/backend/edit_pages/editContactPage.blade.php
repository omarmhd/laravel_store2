

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
                  {{-- {{ dd($contact) }} --}}
                  <label for="exampleInputEmail1"> رقم الدعم	 </label>
                  <input type="number" class="form-control" rows="3" @isset($contact) value="{{ $contact->support_phone }}" @else value="{{ old('phone') }}" @endisset  placeholder="ادخل رقم الدعم" name="phone" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">الموقع </label>
                    <input type="text" class="form-control" rows="3" placeholder="ادخل الموقع"  @isset($contact) value="{{ $contact->location_name }}" @else value="{{ old('name') }}" @endisset name="name" >
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">البريد الالكتروني</label>
                    <input type="email" class="form-control" rows="3" placeholder="ادخل البريد الالكتروني"  @isset($contact) value="{{ $contact->support_email }}" @else value="{{ old('email') }}" @endisset name="email" >
                  </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">save</button>
              </div>
            </form>
        </div>
          </div></div>


        </div>


      @endsection
