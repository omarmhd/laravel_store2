@extends('layouts.app')

@section('content')
@push('css')
    @include('auth.cssLoginReg')
    <style>
        small{
            position: absolute;
             color: red;
        }
    </style>
@endpush

{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
            <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="login100-form-title p-b-32">
                 إنشاء حساب جديد
                </span>

                <span class="txt1 p-b-11">
                   الاسم
                </span>
                <div class="wrap-input100 validate-input m-b-36" data-validate = "ادخل الاسم">
                    <input class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <span class="focus-input100"></span>
                    @error('name')
                    <small  role="alert">
                       {{ $message }}
                    </small>
                @enderror
                </div>

                <span class="txt1 p-b-11">
                    البريد الالكتروني
                </span>
                <div class="wrap-input100 validate-input m-b-36" data-validate = "ادخل البريد الالكتروني">
                    <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                   
                    @error('email')
                    <small>{{ $message }}</small>
                    {{-- <span class="invalid-feedback" role="alert">
                        <strong></strong>
                    </span> --}}
                @enderror
                </div>
                
                <span class="txt1 p-b-11">
                    كلمة السر
                </span>
                <div class="wrap-input100 validate-input m-b-36" data-validate = "ادخل كلمة السر">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" >
                    <span class="focus-input100"></span>
                    @error('password')
                    <small  role="alert">
                        {{ $message }}
                    </small>
                @enderror
                </div>

                <span class="txt1 p-b-11">
                    تأكيد كلمة المرور
                </span>
                <div class="wrap-input100 validate-input m-b-12" data-validate = "ادخل كلمة السر">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input class="input100" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" >
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        تسجيل
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@push('js')
    @include('auth.jsLoginReg')
@endpush
@endsection
