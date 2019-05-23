<!-- section-title -->
<div class="col-md-12">
		<div class="section-title">
			<h2 class="title">Reviews</h2>
	</div>
</div>
<!-- /section-title -->

@foreach($reviews as $review)
    <!-- banner -->
    <div class="col-md-4 col-sm-6">
        <p>{{ $review->message }}</p>
        <small>- {{ $review->customer->first_name . " " . $review->customer->last_name }} {{ $review->created_at}}</small>
        <br>
        <br>
        <div class="product-rating">
            @php
                $total_stars = 5;
                //Uncolored Ratings
                $uncolored_stars = $total_stars - $review->rating;
                
            @endphp
            @for ($i = 1; $i <= $review->rating; $i++)
                <i class="fa fa-star"></i>
            @endfor
            @if ($uncolored_stars > 0)
                @for ($i = 1; $i <= $uncolored_stars; $i++)
                    <i class="fa fa-star-o empty"></i>
                @endfor
            @endif
        </div>
    </div>
    <!-- /banner -->
@endforeach
    