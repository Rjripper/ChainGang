
<div class="product-tab">
    {{-- headers tabs --}}
    <ul class="tab-nav">
        <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
        <li><a data-toggle="tab" href="#tab2">Details</a></li>
        <li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
    </ul>

    <div class="tab-content">
        {{-- data tab1 --}}
        <div id="tab1" class="tab-pane fade in active">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Product descriptie: {{ $product->description}} </p> 
                </div>
            </div>
               
        </div>
        {{-- data tab2 --}}
        <div id="tab2" class="tab-pane fade in active">
            <div class="card">
                <div class="card-body">    
                    <p class="card-text">Productnaam: {{ $product->product_name}} </p>
                    <p class="card-text">Product prijs: {{ $product->price}} </p>
                    <p class="card-text">Product merk: {{ $product->brand->title}} </p>   
                    <p class="card-text">Product type: {{ $product->type->title}} </p>   
                    <p class="card-text">Product categoriën: {{ $product->category->title}} </p>      
                    <p class="card-text">Product specificaties: {{ $product->specifications}} </p>
                </div>
            </div> 
       </div>
            
       {{-- data tab3 --}}
        <div id="tab3" class="tab-pane fade in">  
            <div class="row">
                <div class="col-md-6">
                    <div class="product-reviews">
                     
                        {{-- Review loop --}}
                            @foreach ($reviews as $review)                           
                                <div class="single-review">
                                    <div class="review-heading">
                                    <div><a href="#"><i class="fa fa-user-o"></i> {{ $review->customer->first_name}}</a></div>
                                        <div><a href="#"><i class="fa fa-clock-o"></i>{{ $review->created_at}}</a></div>
                                        <div class="review-rating pull-right">
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
                                    </div>
                                    <div class="review-body">
                                        <p>{{ $review->message}}</p>
                                    </div>
                                </div>
                            @endforeach
                            {{-- Eind Review loop --}}
                      
                          
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-uppercase">Write Your Review</h4>
                    <p>Your email address will not be published.</p>
                    {{-- review form --}}
                    <form class="review-form">
                        @csrf
                        <div class="form-group">
                            <input class="input" type="text" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" placeholder="Email Address" />
                        </div>
                        <div class="form-group">
                            <textarea class="input" placeholder="Your review"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-rating">
                                <strong class="text-uppercase">Your Rating: </strong>
                                <div class="stars">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label for="star5"></label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label for="star4"></label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label for="star3"></label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label for="star2"></label>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label for="star1"></label>
                                </div>
                            </div>
                        </div>
                        <button class="primary-btn">Submit</button>
                    </form>
                    {{-- end review form --}}
                </div>
            </div>    
        </div>
    </div>
</div>

