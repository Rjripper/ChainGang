
 {{-- big images --}}
@php

    $images_for_product = 1;    
@endphp

 <div id="product-main-view">
    @for ($i = 0; $i < $images_for_product; $i++) 
        <div class="product-view">
            <img src="{{ asset($product->product_images ) }}" alt="">
        </div>
    @endfor
</div>
    
{{-- more images --}}
<div id="product-view">
    @for ($i = 0; $i < $images_for_product; $i++) 
        <div class="product-view">
            <img src="{{ asset($product->product_images ) }}" alt="">
        </div>
    @endfor
</div>
