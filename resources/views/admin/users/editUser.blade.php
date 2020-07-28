@extends('admin/master_layout')
@section('title','edit User')

@section('content')

<div class="row">
    <div class="col-md-9">

        <div class="card card-primary">
            <div class="card-header">
            </div>

        <form role="form" action="{{route('user.update',['id'=>$user->id] )}}" method="POST" >
           @method('PUT')
            @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">name </label> <span class="text-danger">{{$errors->first('name')}}</span>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name " disabled  value="{{$user->name}}">
                 <input type="hidden" name="name" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">last role  </label>
                    @foreach ($user->roles as $role )


                    <div  class="alert alert-success "> {{$role->name}}</div>


                    @endforeach

                </div>

                <div class="form-group">
                    <label>change role </label>  <span class="text-danger">{{$errors->first('role_id')}}</span>
                    <select class="form-control select2" style="width: 100%;" name="role_id">

                         @foreach ($roles as $role )

                    <option value="{{$role->id}}">{{$role->name}} </option>
                        @endforeach

                    </select>
                  </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">update</button>
              </div>
            </form>
        </div>
          </div></div>





      @endsection
