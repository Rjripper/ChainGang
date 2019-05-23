<!-- section-title -->
<div class="col-md-12">
		<div class="section-title">
			<h2 class="title">Nieuwste producten</h2>
			<div class="pull-right">
				<div class="product-slick-dots-1 custom-dots">
					
				</div>
			</div>
	</div>
</div>
<!-- section-title -->

{{-- product slider --}}
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="row">
		<div id="product-slick-1" class="product-slick">
			{{-- single product --}}
			@if($newest_products->count() > 0)
				@foreach($newest_products as $newest_product)
					@php
						//Get Product image
						$newest_product_image = App\ProductImage::where('product_id', $newest_product->id)->first();
						$product_in_sale = App\Sale::where('product_id', $newest_product->id)->first();
					@endphp
					<!-- Product Single -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="product product-single">
							<div class="product-thumb">
								<div class="product-label">
										{{-- <span>New</span> --}}
									@if($product_in_sale != null)
										<span class="sale">-{{ $product_in_sale->sale}}%</span>
									@endif
								</div>
								<a href="{{ url('/product/' . $newest_product->id) }}"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Zie Meer</button></a>
								{{-- $newest_product_image->image --}}
								@if($newest_product_image != null)
									<img src="{{ asset($newest_product_image->image) }}" alt="">
								@else
									<img src="{{ asset('images/products/default.jpg') }}" alt="">
								@endif
							</div>

							<div class="product-body">
								@php
									

									if($product_in_sale != null)
									{
										$price_off = round(($newest_product->price / 100 ) * $product_in_sale->sale, 2);
										$new_price = $newest_product->price - $price_off;
									} else {
										$new_price = null;
									}
								@endphp
								@if($new_price != null)
									<h3 class="product-price">&euro;{{$new_price}}
										<del class="product-old-price"> {{ $newest_product->price }}</del>
									</h3>
								@else
									<h3 class="product-price">&euro;{{$newest_product->price}}</h3>
								@endif
								<div class="product-rating">
									@php
										$MAX_RATING = 5;

										$reviews = App\Review::where('product_id', $newest_product->id)->get();
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
								<h2 class="product-name">{{ $newest_product->product_name }}</h2>
								<div class="product-btns">
									<form action="">
										@method('POST')
										@csrf
										<button onclick="addItemToCart(this.getAttribute('data-id'));" class="primary-btn add-to-cart" data-id="{{$newest_product->id}}"><i class="fa fa-shopping-cart"></i> Toevoegen</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Product Single -->
				@endforeach
			@endif
			{{-- end single product --}}

		</div>
	</div>
</div>
<script>
function addItemToCart(product_id) {
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	var form_data = new FormData();
	form_data.append('_method', 'POST');
	form_data.append('_token', CSRF_TOKEN);

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


