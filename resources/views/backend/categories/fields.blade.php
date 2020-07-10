{{-- <!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-default">Cancel</a>
</div> --}}

<div class="card-body">
    <div class="form-group">
    <label for="name">{{__('dashboard.attributes.name')}}</label>
      <input type="text" class="form-control" value="{{ $category->name }}" id="name" name="name" placeholder="{{__('dashboard.placeholder.name_category')}}">
    </div>
    <div class="form-group">
        <label>{{__('dashboard.attributes.status')}}</label>
        <select class="form-control" name="status">
            {{ $category->status }}
            <option value="1" {{ $category->status== "فعال" ? 'selected':''}} >فعال</option>
            <option value="2" {{ $category->status== "غير فعال" ? 'selected':''}}>غير فعال</option>
        </select>
      </div>

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{__('dashboard.attributes.save')}}</button>
</div>
