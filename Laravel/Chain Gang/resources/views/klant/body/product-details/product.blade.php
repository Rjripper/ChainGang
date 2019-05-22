
 {{-- big images --}}
 <div id="product-main-view">
    @for ($i = 0; $i < 4; $i++) 
        <div class="product-view">
            <img src="{{ asset('images/initial/images/main-product01.jpg') }}" alt="">
        </div>
    @endfor
</div>
    
{{-- more images --}}
<div id="product-view">
    @for ($i = 0; $i < 4; $i++) 
        <div class="product-view">
            <img src="{{ asset('images/initial/images/thumb-product01.jpg') }}" alt="">
        </div>
    @endfor
</div>
