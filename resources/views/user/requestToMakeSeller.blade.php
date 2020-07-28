@extends('layouts.app')


@section('content')
@push('css')
    <style>
        .form-sec{
            /* width:400px; */
            background:#ccc;
            padding:15px;
            background: #f8f9fa;
            padding: 15px;
            box-shadow: 0 0 4px #ccc;
            margin-top: 50px;
         }
    </style>
@endpush
<div class="container">
    
    @if ($errors->any())

    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
           <p> {{$error}}</p>
         @endforeach
    </div>
    @endif
    <div class="form-sec">
      <h3>التسجيل كبائع</h3>
      <hr>
     <form name="qryform" id="qryform" method="post" action="{{ route('client.beSeller.store') }}" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label> الاسم رباعي:</label>
          <input type="text" class="form-control" id="name" placeholder="ادخل الاسم كاملا" name="name">
        </div>
        <div class="form-group">
          <label>رقم الهوية:</label>
          <input type="text" class="form-control" id="identity" placeholder="ادخل رقم الهوية" name="identity">
        </div>
        <div class="form-group">
            <label>تاريخ الميلاد : </label>
            <input type="date" class="form-control" id="date"  name="date">
          </div>
        <div class="form-group">
          <label>مجال العمل : </label>
          <input type="text" class="form-control" id="phone" placeholder="ادخل مجال عملك." name="job">
        </div>

        <div class="form-group">
          <label>وصف لمجال عملك:</label>
          <textarea name="description" class="form-control" id="description"></textarea>
        </div>
        <div class="form-group">
            <label>ادخل صورة هويتك :</label>
            <input type="file" class="form-control" id="image"  name="image">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">طلب</button>
      </form>
      </div>
    
    
    </div>
@endsection