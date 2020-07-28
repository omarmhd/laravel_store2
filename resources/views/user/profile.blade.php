@extends('layouts.app')

@section('content')

@push('css')

    <link rel="stylesheet" href="{{ asset('newDesign/css/styleProfile.css') }}">
    <style>
        .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }
        .userData{
           position: relative;top: 20px;right: 8px;
        }
    </style>
@endpush

<div class="container" style="
    padding: 50px;
">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">
                            <div class="image-container">
                                <img src="{{ asset('profile/'.$user->image) }}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail">
                                
                            </div>
                            <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">{{ $user->name }}</a></h2>
                                <h6 class="d-block"style="margin-bottom: 5px">{{ $user->email }}</h6>
                                <h6 class="d-block" style="margin-bottom: 5px"> {{ $user->mobile }}</h6>
                                <h6 class="d-block"style="margin-bottom: 5px"> {{ $user->website }}</h6>
                                <h6 class="d-block btn btn-xs btn-primary" style="font-size: 1.5rem; font-weight: bold ;"><a href="{{ route('messenger',['id'=>$user->id]) }}" style="color:white">أرسل رسالة</a></h6>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                <li class="nav-item active" style="
    float: right;
">
                                    <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true" aria-expanded="true">الاعمال</a>
                                </li>
                                <li class="nav-item">
                                    
                                </li>
                            </ul>
                            <div class="tab-content ml-1" id="myTabContent">
                                <div class="tab-pane fade show active in" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                    

                                </div>
                                
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>

@endsection