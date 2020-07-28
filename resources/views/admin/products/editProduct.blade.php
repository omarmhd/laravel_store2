

@extends('admin.master_layout')
@section('title','edit product')


@section('content')

<div class="row">



    <div class="col-md-9">


        <div class="card card-primary">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <!-- form start -->


          <form role="form" action="{{route('product.update',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
             @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">name product </label>
                  <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('name')}}</span>

                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name" value="{{$product->name}}">
                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">price </label>
                    <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('price')}}</span>


                    <input type="text" class="form-control" name="price" value="{{$product->price}}">

                  </div>




                <div class="form-group">
                    <label>category </label>
                    <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('category')}}</span>
                    <select class="form-control select2" style="width: 100%;" name="category">
                       @foreach ($categories as $category)
                          <option {{$product->category->id==$category->id ? 'selected':''}}  value="{{$category->id}}" >{{ $category->name}}  </option>

                        @endforeach

                     </select>
                  </div>
              <!-- /.card-body -->
             <!-- textarea -->
             <div class="form-group">
              <label>long Description </label>
              <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('long_description')}}</span>
             <textarea class="form-control" rows="3" placeholder="Enter Description." name="long_description" value="">{{$product->long_description}}</textarea>
            </div>

            <div class="form-group">
                <label>details </label>
                <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('details')}}</span>

                <textarea class="form-control" rows="3" placeholder="Enter details." name="details">{{$product->details}}</textarea>
              </div>

            <div class="form-group">
              <label for="exampleInputFile">image </label>
              <span   style="margin-left: 20px ;font-size: 14px"class="text-danger ">{{$errors->first('image')}}</span>

              <div class="input-group">
                <div class="custom-file">
                  <input type="file"  name="image" class="custom-file-input" id="exampleInputFile" value="{{$product->image}}">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>

              </div>
            </div>
            <div>
                <img  src="/product_images/{{$product->image}} " width="10%" alt="ss" style="margin-left: 22px">
                </div>
         <br>
           <br>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
          </div></div>



      @endsection
