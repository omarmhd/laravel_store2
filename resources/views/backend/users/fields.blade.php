
<div class="card-body">
    <div class="form-group">
    <label for="name">{{__('dashboard.attributes.name')}}</label>
    <input type="text" class="form-control" id="name" @isset($user) value="{{ $user->name }}" @endisset value="{{ old('name') }}"  name="name" placeholder="{{__('dashboard.placeholder.name_user')}}">
    </div>
    <div class="form-group">
        <label for="password">{{__('dashboard.attributes.password')}}</label>
        <input type="password" class="form-control" id="password"  name="password" placeholder="{{__('dashboard.placeholder.password')}}">
        </div>
    <div class="form-group">
        <label for="email">{{__('dashboard.attributes.email')}}</label>
        <input type="text" class="form-control" id="email"@isset($user)  value="{{ $user->email }}" @endisset  value="{{ old('email') }}"  name="email" placeholder="{{__('dashboard.placeholder.email')}} ">
      </div>

    <div class="form-group">
      <label for="mobile">{{__('dashboard.attributes.mobile')}}</label>
      <input type="text" class="form-control" id="mobile" @isset($user) value="{{ $user->mobile }}" @endisset  value="{{ old('mobile') }}"  name="mobile" placeholder="{{__('dashboard.placeholder.mobile')}} ">
    </div>

  
    <div class="form-group">
      <label>{{__('dashboard.attributes.role')}}</label>
      <select class="form-control" name="role">
          @foreach ($roles as $role)
               <option value="{{$role->id}}" @isset($user) @if($user->roles[0]->id == $role->id) {{ 'selected' }} @endif @endisset>{{$role->name}}</option>
          @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="website">{{__('dashboard.attributes.website')}}</label>
      <input type="text" class="form-control" id="website"  @isset($user) value="{{ $user->website }} "@endisset name="website"  value="{{ old('website') }}" placeholder="{{__('dashboard.placeholder.website')}} ">
    </div>
    
    <div class="form-group">
      <label for="long_description">{{__('dashboard.attributes.description')}}</label>
      <input type="text" class="form-control pb-5" value="{{ old('long_description') }}"  @isset($user) value="{{ $user->description }}" @endisset  id="long_description" name="long_description" placeholder="{{__('dashboard.placeholder.description')}} ">
    </div>
    <div class="form-group">
      <label for="photo">{{__('dashboard.attributes.photo')}}</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="photo" name="image">
          <label class="custom-file-label" for="image">{{__('dashboard.placeholder.photo_user')}}</label>
        </div>

      </div>
    </div>
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">{{__('dashboard.attributes.save')}}</button>
  </div>
