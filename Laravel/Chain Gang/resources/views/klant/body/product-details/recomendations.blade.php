
<!-- section title -->
<div class="col-md-12">
        <div class="section-title">
        <h2 class="title">Aanbevolen producten</h2>
    </div>
</div>
<!-- section title -->
    
@for ($i = 0; $i < 4; $i++)
    
<!-- Product Single -->
<div class="col-md-3 col-sm-6 col-xs-6">
    
    <div class="product product-single">
        <div class="product-thumb">
            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
            <img src="{{ asset('images/initial/images/product04.jpg') }}" alt="">
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
