{{-- Check if product has sale
if sale show old price
get new price and add it --}}

<!-- row -->
<div class="row">
    @if (count($products) == 0)
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p>Er zijn geen producten beschikbaar</p>
        </div>
    @endif
    @foreach ($products as $product)
        @php
            $sale = App\Sale::where('product_id', $product->id)->first();
        @endphp
        <!-- Product Single -->
        <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="product product-single">
                <div class="product-thumb">
                    <div class="product-label">
                        {{-- <span>New</span> --}}
                        @if($sale != null)
                            <span class="sale">-{{ $sale->sale}}%</span>
                        @endif
                    </div>
                    <a href="{{ url('/product/' . $product->id) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</a>

                    {{-- Location of Product Item --}}
                    <img src="{{ asset($product->product_images) }}" alt="">
                </div>
                <div class="product-body">
                    
                    <h3 class="product-price">&euro; {{ $product->price }}
                        @if($sale != null)
                            @php
                                $sale_percentage = $sale->sale;
                                $price_off = round($product->price / 100 * 20, 2);
                                $new_price = $product->price - $price_off;
                            @endphp
                            <del class="product-old-price"> {{ $new_price }}</del>
                        @endif
                    </h3>
                    <div class="product-rating">
                        @php
                            $MAX_RATING = 5;

                            $reviews = App\Review::where('product_id', $product->id)->get();
                            $reviews_count = $reviews->count();

                            $reviews_amount_added = null;
                            if($reviews->count() > 0) {
                                foreach($reviews as $review) {
                                    $reviews_amount_added += $review->rating;
                                }
                                if($reviews_amount_added > 0) {
                                    $review_average = ceil($reviews_amount_added / $reviews_count);
                                    $uncolored_review = $MAX_RATING - $review_average;
                                }
                            } else {
                                $review_average = 0;
                                $uncolored_review = 5;
                            }

                        @endphp
                        @for ($i = 1; $i <= $review_average; $i++)
                            <i class="fa fa-star"></i>
                        @endfor
                        @for ($i = 1; $i <= $uncolored_review; $i++)
                            <i class="fa fa-star-o empty"></i>
                        @endfor
                    </div>
                    <h2 class="product-name"><a href="#">{{ $product->product_name}}</a></h2>
                    <div class="product-btns">
                        <button onclick="addItemToCart(this.getAttribute('data-id'));" data-id="{{$product->id}}" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Product Single -->
    @endforeach
</div>
<script>
function addItemToCart(product_id) {
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	var form_data = new FormData();
	form_data.append('_method', 'POST');
    form_data.append('_token', CSRF_TOKEN);
    //Tempalert staat in header
    tempAlert('Toegevoegd aan winkelwagen',3);
	event.preventDefault();

	$.ajax({
		url: '/product/add/cart/' + product_id,
		dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
		success: function(data) {
			console.log(data.cart_session);
		}
	});
}
</script>

<!-- /row -->