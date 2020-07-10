@extends('backend.layouts.app')

@section('content')

    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary mt-2 mr-2">
                          <div class="card-header">
                            <h3 class="card-title">{{__('dashboard.attributes.user_cerate')}}</h3>
                          </div>
                            {!! Form::open(['route' => 'users.store']) !!}

                                @include('backend.users.fields')

                            {!! Form::close() !!}
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection
