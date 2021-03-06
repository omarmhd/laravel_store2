
<div class="card-body">
    <div class="form-group">
    <label for="name">{{__('dashboard.attributes.name')}}</label>
    <input type="text" class="form-control" id="name" value="@isset($product) {{ $product->name }} @endisset " name="name" placeholder="{{__('dashboard.placeholder.name_pro')}}">
    </div>

    <div class="form-group">
      <label for="price">{{__('dashboard.attributes.price')}}</label>
      <input type="text" class="form-control" id="price" value="@isset($product) {{ $product->price }} @endisset "  name="price" placeholder="{{__('dashboard.placeholder.price_pro')}} ">
    </div>

    <div class="form-group">
      <label>{{__('dashboard.attributes.category')}}</label>
      <select class="form-control" name="category_id">
          @foreach ($categories as $category)
               <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
      </select>
    </div>
    @can('admin')
    @isset($users)
      <div class="form-group">
        <label>{{__('dashboard.attributes.user')}}</label>
        <select class="form-control" name="user_id">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
      </div>  
      @endisset
  
    @endcan


    <div class="form-group">
      <label for="details">{{__('dashboard.attributes.details')}}</label>
      <input type="text" class="form-control" id="details"  value="@isset($product){{ $product->details }}@endisset" name="details" placeholder="{{__('dashboard.placeholder.description_pro')}} ">
    </div>
    
    <div class="form-group">
      <label for="long_description">{{__('dashboard.attributes.description')}}</label>
      <input type="text" class="form-control pb-5"   value="@isset($product) {{ $product->long_description }} @endisset " id="long_description" name="long_description" placeholder="{{__('dashboard.placeholder.description_pro')}} ">
    </div>
    <div class="form-group">
      <label for="photo">{{__('dashboard.attributes.photo')}}</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="photo" name="image">
          <label class="custom-file-label" for="photo">{{__('dashboard.placeholder.photo_pro')}}</label>
        </div>

      </div>
    </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">{{__('dashboard.attributes.save')}}</button>
  </div>
