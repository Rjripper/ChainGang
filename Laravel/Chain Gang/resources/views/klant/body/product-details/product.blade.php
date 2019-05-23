 {{-- big images --}}
@php
    $images_for_product = App\ProductImage::Where('product_id', $product->id)->get('image');
@endphp

 <div id="product-main-view">
    @for ($i = 0; $i < 3; $i++) 
        <div class="product-view">
            <img src="{{ asset($images_for_product[$i]->image ) }}" alt="">
        </div>
    @endfor
</div>
    
{{-- more images --}}
<div id="product-view">
    @for ($i = 0; $i < 3; $i++) 
        <div class="product-view">
            <img src="{{ asset($images_for_product[$i]->image ) }}" alt="">
        </div>
    @endfor
</div>