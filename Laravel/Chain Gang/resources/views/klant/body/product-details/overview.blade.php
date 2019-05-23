
{{-- @php
$product_in_sale = App\Sale::where('product_id', $product->id)->first();

if($product_in_sale != null)
{
    $price_off = round(($product->price / 100 ) * $product_in_sale->sale, 2);
    $new_price = $product->price - $price_off;
} else {
    $new_price = null;
}
@endphp --}}

{{-- @if($new_price != null)
<h3 class="product-price">&euro;{{$new_price}}</h3>
@else
<h3 class="product-price">&euro;{{$newest_product->price}}</h3>
@endif --}}

<div class="product-body">
    <div class="product-label">
        <span>New</span>
        <span class="sale">-{{$product_in_sale->sale}}%</span>
    </div>
    <h2 class="product-name">{{$product->product_name}}</h2>    
        @if($new_price != null)
        <h3 class="product-price">&euro;{{$new_price}}</h3>
        <h3><del class="product-old-price">{{$product->price}}</del></h3>
        @else
        <h3 class="product-price">&euro;{{$product->price}}</h3>
        @endif
    <div>
        <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o empty"></i>
        </div>
        <a href="#">{{$reviews_amount}} Review(s) / Add Review</a>
    </div>
    <p><strong>Brand:</strong>{{$product->brand->title}}</p>
    <p>{{$product->description}}</p>
<div class="product-options">
            
    <div class="product-btns">
        <div class="qty-input">
            <span class="text-uppercase">QTY: </span>
            <input class="input" type="number">
        </div>
        <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
        <div class="pull-right">
            
        </div>
    </div>
</div>
