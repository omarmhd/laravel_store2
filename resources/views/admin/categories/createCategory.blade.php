

@extends('admin/master_layout')


@section('content')

<div class="row">



    <div class="col-md-9">


        <div class="card card-primary">
            <div class="card-header">
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        <form role="form" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">name category </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name " name="name">
                </div>

                  <!-- textarea -->
             <div class="form-group">
                <label> Description </label> <span class="text-danger">{{$errors->first('description')}}</span>

                <textarea class="form-control" rows="3" placeholder="Enter Description." name="description"></textarea>
              </div>


                <div class="form-group">
                    <label>status </label>
                    <select class="form-control select2" style="width: 100%;" name="status">
                      <option value="active">active </option>
                      <option  value="disabled">disabled </option>
                    </select>
                  </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">save</button>
              </div>
            </form>
        </div>
          </div></div>





      @endsection
