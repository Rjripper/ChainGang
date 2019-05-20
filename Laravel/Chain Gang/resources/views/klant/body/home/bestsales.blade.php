<!-- section-title -->
<div class="col-md-12">
		<div class="section-title">
			<h2 class="title">Best verkochte producten</h2>
			<div class="pull-right">
				<div class="product-slick-dots-2 custom-dots">
					
				</div>
			</div>
	</div>
</div>
<!-- /section-title -->


{{-- image before slider --}}
<div class="col-md-3 col-sm-6 col-xs-6">
	<div class="banner banner-2">
		<img src="{{ asset('images/initial/images/banner14.jpg') }}" alt="">
		<div class="banner-caption">
			<h2 class="white-color">NEW<br>COLLECTION</h2>
			<button class="primary-btn">Shop Now</button>
		</div>
	</div>
</div>
{{-- end image before slider --}}

{{-- product slider --}}
<div class="col-md-9 col-sm-6 col-xs-6">
	<div class="row">
		<div id="product-slick-2" class="product-slick">
			{{-- single product --}}
			@for($i = 0; $i < 6; $i++)
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							<img src="{{ asset('images/initial/images/product01.jpg') }}" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
			@endfor
			{{-- end single product --}}

		</div>
	</div>
</div>


