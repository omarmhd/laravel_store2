{{-- 
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobile', 'Mobile:') !!}
    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
</div> --}}




<div class="card-body">
    <div class="form-group">
    <label for="name">{{__('dashboard.attributes.name')}}</label>
    <input type="text" class="form-control" id="name" value="@isset($user) {{ $user->name }} @endisset " name="name" placeholder="{{__('dashboard.placeholder.name_user')}}">
    </div>
    <div class="form-group">
        <label for="password">{{__('dashboard.attributes.password')}}</label>
        <input type="password" class="form-control" id="password"  name="password" placeholder="{{__('dashboard.placeholder.password')}}">
        </div>
    <div class="form-group">
        <label for="email">{{__('dashboard.attributes.email')}}</label>
        <input type="text" class="form-control" id="email" value="@isset($user) {{ $user->email }} @endisset "  name="email" placeholder="{{__('dashboard.placeholder.email')}} ">
      </div>

    <div class="form-group">
      <label for="mobile">{{__('dashboard.attributes.mobile')}}</label>
      <input type="text" class="form-control" id="mobile" value="@isset($user) {{ $user->mobile }} @endisset "  name="mobile" placeholder="{{__('dashboard.placeholder.mobile')}} ">
    </div>

  
    <div class="form-group">
      <label>{{__('dashboard.attributes.role')}}</label>
      <select class="form-control" name="role">
          @foreach ($roles as $role)
               <option value="{{$role->id}}" @if($user->roles[0]->id == $role->id) {{ 'selected' }} @endif>{{$role->name}}</option>
          @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="website">{{__('dashboard.attributes.website')}}</label>
      <input type="text" class="form-control" id="website"  value="@isset($user){{ $user->website }}@endisset" name="website" placeholder="{{__('dashboard.placeholder.website')}} ">
    </div>
    
    <div class="form-group">
      <label for="long_description">{{__('dashboard.attributes.description')}}</label>
      <input type="text" class="form-control pb-5"   value="@isset($user) {{ $user->description }} @endisset " id="long_description" name="long_description" placeholder="{{__('dashboard.placeholder.description')}} ">
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
