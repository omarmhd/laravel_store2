@extends('admin/master_layout')

@section('title','edit category')

@section('content')

<div class="row">


    <div  class="col-md-6">


    </div>
        <div class="col-md-9">

        <div class="card card-primary">
            <div class="card-header">
            </div>

        <form role="form" action="{{route('category.update',['id'=>$category->id] )}}" method="POST" >
           @method('PUT')
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">name category </label> <span class="text-danger">{{$errors->first('name')}}</span>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name " name="name" value="{{$category->name}}">
                </div>

                  <!-- textarea -->
             <div class="form-group">
             <label> Description </label> <span class="text-danger">{{$errors->first('description')}}</span>
             <textarea class="form-control" rows="3" placeholder="Enter Description." name="description" >{{$category->description}}</textarea>
              </div>


                <div class="form-group">
                    <label>status </label>  <span class="text-danger">{{$errors->first('status')}}</span>
                    <select class="form-control select2" style="width: 100%;" name="status">
                      <option value="active"  {{$category->status=='active'?'selected':''}}>active </option>
                      <option  value="disabled"  {{$category->status=='disabled'?'selected':''}}>disabled </option>
                    </select>
                  </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">update</button>
              </div>
            </form>
        </div>
          </div></div>





      @endsection
