<div class="card-body">
    <div class="form-group">
    <label for="name">{{__('dashboard.attributes.name')}}</label>
    <input type="text" class="form-control" id="name" value="@isset($role) {{ $role->name }} @endisset " name="name" placeholder="{{__('dashboard.placeholder.role')}}">
    </div>

  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">{{__('dashboard.attributes.save')}}</button>
  </div>
