{{-- Check if product has sale
if sale show old price
get new price and add it --}}

<!-- row -->
<div class="row">
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
                    <img src="{{ asset('images/initial/images/product01.jpg') }}" alt="">
                </div>
                <div class="product-body">
                    
                    <h3 class="product-price">&euro; {{ $product->price }}
                        @if($sale != null)
                            @php
                                $sale_percentage = $sale->sale;
                                $price_off = ceil($product->price / 100 * 20, 2);
                                $new_price = $product->price - $price_off;
                            @endphp
                            <del class="product-old-price"> {{ $new_price }}</del>
                        @endif
                    </h3>
                    <div class="product-rating">
                        @php
                            // Get Reviews for Product
                            // Count how many reviews there are
                            // Add the amount of rating
                            // Divide Rating by amount of reviews
                            // Count ratings up
                            // For int amount of ratings, create fa-star
                            // if less then or is 4 then create fa-star-o empty
                            $reviews = App\Review::where('product_id', $product->id)->where('deleted_at', null)->get();
                            $reviews_count = $reviews->count();

                            $star_rating = 1;

                            foreach ($reviews as $review) {
                                $star_rating += $review->rating;
                            }

                            $rating = 5;

                            if($reviews_count > 0) {
                                $star_rating = ceil($star_rating / $reviews_count);
                                $rating -= $star_rating;
                            } else {
                                $rating = 0;
                            }

                        @endphp
                        @if($rating > 0)
                            @for ($i = 1; $i <= $star_rating; $i++)
                                <i class="fa fa-star"></i>
                            @endfor
                            @if ($rating <= 4)
                                @for ($i = 1; $i < $rating; $i++)
                                    <i class="fa fa-star-o empty"></i>
                                @endfor
                            @endif
                        @else
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa fa-star-o empty"></i>
                            @endfor
                        @endif
                    </div>
                    <h2 class="product-name"><a href="#">{{ $product->product_name}}</a></h2>
                    <div class="product-btns">
                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                        <a href="{{ url('/product/add/cart/' . $product->id ) }}"><button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Product Single -->
    @endforeach
</div>
<!-- /row -->