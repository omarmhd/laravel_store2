@extends('layouts.app')

@section('content')
@push('css')
    <style>
      .nav-tabs > li {
    float: right !important;
    }
    .text-right {
      text-align: right;
    }
    .img-thumbnail {
    height: 184px;
    width: 184px;
    padding: 2px;
    background-color: #dbdada7a;
    cursor: pointer;
  }
  .fa-camera {
    position: relative;
    top: 144px;
    font-size: 25px;
    float: right;
    color: #000000;
    right: 25%;
    cursor: pointer;
}
  
    </style>
@endpush
<div class="container bootstrap snippet" style="margin-top: 50px;">

  <div class="row">
    <div class="col-sm-3" style="float: right;"><!--left col-->
            

    <div class="text-center iconCam">
    <img src="{{$user->image != null ? asset('/profile/'.$user->image ) : 'http://ssl.gstatic.com/accounts/ui/avatar_2x.png'}}" class="avatar img-circle img-thumbnail" alt="avatar" id="click">
    <i class="fa fa-camera" aria-hidden="true"></i>

      <div class="hidden">
        <form method="post" action="{{ url('user/update-image') }}" id="upload_form" accept-charset="utf-8" enctype="multipart/form-data">
          @csrf
          @method('put')
          <input type="file" name="photo" id="ValidPhotoProfile">
          <input type="submit"  class='d-none' name="" id="submit">
        </form>
      </div>
      {{-- <input type="file" class="text-center center-block file-upload"> --}}
    </div></hr><br>

             
        <div class="panel panel-default">
          <div class="panel-heading"><i class="fa fa-link fa-1x"></i> الموقع الالكتروني </div>
          <div class="panel-body"><a href="{{$user->website}}">{{$user->website}}</a></div>
        </div>
        
        
        <ul class="list-group">
          <li class="list-group-item text-muted"><i class="fa fa-dashboard fa-1x"></i> القائمة </li>
          <li class="list-group-item text-left"><a href="{{route('show.status')}}"><span class="pull-right"><strong> الطلبات المقبولة</strong></span></a> {{$numberOfOrders['accepted']}}</li>
          <li class="list-group-item text-left"><a href="{{route('show.status')}}"><span class="pull-right"><strong> الطلبات المعلقة</strong></span></a> {{$numberOfOrders['pending']}}</li>
          <li class="list-group-item text-left"><a href="{{route('show.status')}}"><span class="pull-right"><strong> الطلبات المرفوضة</strong></span></a> {{$numberOfOrders['rejected']}}</li>
          {{-- <li class="list-group-item text-right"><span class="pull-left"><strong></strong></span> 37</li>
          <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li> --}}
        </ul> 
        <ul class="list-group">
          <li class="list-group-item text-muted"> <i class="fa fa-wrench fa-1x"></i> اعدادات</li>
          <li class="list-group-item text-right"><a href="{{route('show.status')}}"><strong>طلب التسجيل كحرفي</strong></a></li>
        </ul>   
        
      </div><!--/col-3-->
    <div class="col-sm-9">
          <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">الرئيسية</a></li>
            </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="home">
              <hr>
          <form class="form" action="{{route('client.update')}}" method="post" id="registrationForm">
            @method('put')
            @csrf
                    <div class="form-group">
                        
                        <div class="col-xs-12">
                            <label for="name"><h4>الاسم</h4></label>
                        <input type="text"  value="{{$user->name}}"class="form-control" name="name" id="name" placeholder="الاسم" title="ادخل الاسم">
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-xs-12">
                          <label for="email"><h4>البريد الالكتروني</h4></label>
                            <input type="email" value="{{$user->email}}" class="form-control" name="email" id="last_name" placeholder="ادخل البريد الالكتروني" title="ادخل البريد الالكتروني">
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="col-xs-12">
                           <label for="mobile"><h4>رقم الجوال</h4></label>
                            <input type="text" class="form-control" value="{{$user->mobile}}" name="mobile" id="mobile" placeholder="ادخل رقم الجوال" title="ادخل رقم الجوال">
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12">
                         <label for="website"><h4>الموقع الالكتروني</h4></label>
                          <input type="text" class="form-control" value="{{$user->website}}" name="website" id="website" placeholder="ادخل موقعك الالكتروني" title="ادخل موقعك الالكتروني">
                      </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label>الجنس</label>
                      <select id="gender"  name="gender" class="form-control">
                        <option value = "0" <?php echo  $user->gender == 0 ? 'selected' : ''?> > اختار</option>
                        <option value = "1" <?php  echo $user->gender == 1 ? 'selected' : ''?> > ذكر</option>
                        <option value = "2" <?php echo  $user->gender == 2 ? 'selected': '' ?> > انثى</option>
                      </select>
                      </div> <!-- form-group end.// -->

                    </div>
                    <div class="form-group">
                         <div class="col-xs-12">
                              <br>
                              <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> حفظ</button>
                               {{-- <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> تفريغ الحقول</button> --}}
                          </div>
                    </div>
              </form>
            <hr>
           </div><!--/tab-pane-->
            </div><!--/tab-pane-->
        </div><!--/tab-content-->

      </div><!--/col-9-->
  </div><!--/row-->
  @push('js')
  <script>
    $('#click,.fa-camera').click(function(){
        document.getElementById('ValidPhotoProfile').click();
    });
    $('#ValidPhotoProfile').on('change',function(){
        // console.log('data');
        document.getElementById('submit').click();
    });
</script>
  @endpush
@endsection
