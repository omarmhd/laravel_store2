@extends('layouts.app')

@section('content')


@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif
<div class="banner-bootom-w3-agileits">
	<div class="container">
        <div class="sort-grid">
				
            <h4>نتائج البحث :  {{ $wordSearsh}}</h4>
            <div class="clearfix"></div>
        </div>
		
		<div class="single-pro">
            @foreach ($products as $product)
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ asset('product_images/'.$product->image) }}" alt="" class="pro-image-front" style="    height: 250px;">
                        <img src="{{ asset('product_images/'.$product->image) }}" alt="" class="pro-image-back" style="    height: 250px;">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{url('show_product/'.$product->id)}}" class="link-product-add-cart">التفاصيل</a>
                                </div>
                            </div>
                            {{-- <span class="product-new-top">New</span> --}}
                            
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="{{url('show_product/'.$product->id)}}">{{ $product->name }}</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">{{ $product->price }}</span>
                            {{-- <del>$189.71</del> --}}
                        </div>								
                    </div>
                </div>
            </div>
            @endforeach
			
				
	

			<div class="clearfix"></div>
        </div>
        {{ $products->links() }}
	</div>
</div>
    
@endsection
