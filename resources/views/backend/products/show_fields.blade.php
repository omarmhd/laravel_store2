
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $product->name }}</p>
</div>
<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $product->category_id }}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    <p>{{ $product->details }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Long Description Field -->
<div class="form-group">
    {!! Form::label('long_description', 'Long Description:') !!}
    <p>{{ $product->long_description }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <img src="{{ asset('/product_images/'. $product->image ) }}">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $product->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {{-- <p>{{ $product->updated_at }}</p> --}}
</div>

