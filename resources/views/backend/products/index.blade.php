@extends('backend.layouts.app')
@push('style')
<link rel="stylesheet" href=" {{ asset('plugins/datatables/dataTables.bootstrap4.css') }} ">
@endpush
@section('content')

    <section class="content-header">
        {{-- <h1 class="pull-left">{{ __('dashboard.attributes.prodcut') }}</h1> --}}
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('products.create') }}">{{ __('dashboard.attributes.add') }}</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('backend.products.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
    @push('js')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.js') }}"></script>
    @endpush
@endsection

