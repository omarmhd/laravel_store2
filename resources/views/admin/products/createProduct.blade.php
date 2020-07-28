

@extends('admin/master_layout')

@section('title','Add Product')

@section('content')

<div class="row">



    <div class="col-md-9">

        <div class="card card-success">
            <div class="card-header">

            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">name product </label>
                  <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('name')}}</span>

                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" name="name">
                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">price </label>
                     <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('price')}}</span>

                    <input type="text" class="form-control" name="price">

                  </div>




                <div class="form-group">
                    <label>category </label>                      <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('category')}}</span>

                    <select class="form-control select2" style="width: 100%;" name="category_id">

                        @foreach ($category as $cat  )


                    <option value="{{$cat->id}}">{{$cat->name}} </option>

                      @endforeach



                    </select>
                  </div>


              <!-- /.card-body -->
             <!-- textarea -->
             <div class="form-group">
              <label>long Description </label>
                 <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('long_description')}}</span>

              <textarea class="form-control" rows="3" placeholder="Enter Description." name="long_description"></textarea>
            </div>

            <div class="form-group">
                <label>details</label>
                   <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('details')}}</span>

                <textarea class="form-control" rows="3" placeholder="Enter Description." name="details"></textarea>
              </div>
            <div class="form-group">
              <label for="exampleInputFile">image </label>
              <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('image')}}</span>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file"  name="image" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-grojopiv bhkjui90up-text" id="">Upload</span>
                </div>
              </div>
            </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
          </div></div>





      @endsection
