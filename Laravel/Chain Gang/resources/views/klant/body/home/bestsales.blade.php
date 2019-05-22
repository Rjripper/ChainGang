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
			@if($products_in_sale != null)
				@foreach($products_in_sale as $product_in_sale)

					@php
						$product_to_show = App\Product::where('id', $product_in_sale->product_id)->first();
						$product_to_show_image = App\ProductImage::where('product_id', $product_to_show->id)->first();
					@endphp
					
					<!-- Product Single -->
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="product product-single">
							<div class="product-thumb">
								<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
								{{-- $product_to_show_image->image --}}
								<img src="{{ asset('images/initial/images/product01.jpg') }}" alt="">
							</div>
							<div class="product-body">
								@php
									//Get price of product in sale
									$sale_percentage = $product_in_sale->sale;
									$price_off = $product_to_show->price / 100 * 20;
									$new_price = $product_to_show->price - $price_off;
								@endphp
								<h3 class="product-price">&euro;{{$new_price}}</h3>
								<div class="product-rating">
									@php
										// Get Reviews for Product
										// Count how many reviews there are
										// Add the amount of rating
										// Divide Rating by amount of reviews
										// Count ratings up
										// For int amount of ratings, create fa-star
										// if less then or is 4 then create fa-star-o empty
										$reviews = App\Review::where('product_id', $product_to_show->id)->where('deleted_at', null)->get();
										$reviews_count = $reviews->count();

										$star_rating = 1;

										foreach ($reviews as $review) {
											$star_rating += $review->rating;
										}

										$rating = 5;

										$star_rating = ceil($star_rating / $reviews_count);

										$rating -= $star_rating;
									@endphp
									@for ($i = 1; $i <= $star_rating; $i++)
										<i class="fa fa-star"></i>
									@endfor
									@if ($rating <= 4)
										@for ($i = 1; $i < $rating; $i++)
											<i class="fa fa-star-o empty"></i>
										@endfor
									@endif
								</div>
								<h2 class="product-name"><a href="{{ url('/product/'. $product_to_show->id )}}">{{ $product_to_show->product_name }}</a></h2>
								<div class="product-btns">
									<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
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


