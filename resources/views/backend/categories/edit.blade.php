@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Category
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')

       <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary mt-2 mr-2">
                      <div class="card-header">
                        <h3 class="card-title">{{__('dashboard.attributes.edit')}} {{__('dashboard.attributes.category')}}</h3>
                      </div>
                      {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'patch']) !!}

                      @include('backend.categories.fields')

                    {!! Form::close() !!}
                    </div>
                 </div>
            </div>
        </div>
    </div>

   </div>
@endsection
