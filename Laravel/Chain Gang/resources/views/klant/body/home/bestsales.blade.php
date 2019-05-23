<!-- section-title -->
<div class="col-md-12">
		<div class="section-title">
			<h2 class="title">Producten met aanbieding</h2>
			<div class="pull-right">
				<div class="product-slick-dots-2 custom-dots">
					
				</div>
			</div>
	</div>
</div>
<!-- /section-title -->

{{-- product slider --}}
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="row">
		<div id="product-slick-2" class="product-slick">
			{{-- single product --}}
			@if($products_in_sale->count() > 0)
				@foreach($products_in_sale as $product_in_sale)
					@php
						$product_to_show = App\Product::where('id', $product_in_sale->product_id)->first();
						$product_to_show_image = App\ProductImage::where('product_id', $product_to_show->id)->first();
					@endphp
					
					<!-- Product Single -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="product product-single">
							<div class="product-thumb">
								<a href="{{ url('/product/' . $product_in_sale->id) }}"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Zie Meer</button></a>
								{{-- $product_to_show_image->image --}}
								@if($product_to_show_image != null)
									<img src="{{ asset($product_to_show_image->image) }}" alt="">
								@else
									<img src="{{ asset('images/products/default.jpg') }}" alt="">
								@endif
							</div>
							<div class="product-body">
								@php
									$price_off = round(($product_to_show->price / 100 ) * $product_in_sale->sale, 2);
									$new_price = $product_to_show->price - $price_off;
								@endphp
								<h3 class="product-price">&euro;{{$new_price}}</h3>
								<div class="product-rating">
										@php
										$MAX_RATING = 5;

										$reviews = App\Review::where('product_id', $product_to_show->id)->get();
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
								<h2 class="product-name">{{ $product_to_show->product_name }}</h2>
								<div class="product-btns">
									<button onclick="addItemToCart(this.getAttribute('data-id'));" class="primary-btn add-to-cart" data-id="{{$product_to_show->id}}"><i class="fa fa-shopping-cart"></i> Toevoegen</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Product Single -->
				@endforeach
			@else
			<div class="text-center">
					<h5>Geen Aanbiedingen</h5>
				</div>
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
		


