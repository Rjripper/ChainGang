<div id="aside" class="col-md-3">
    <!-- aside widget -->
    {{-- <div class="aside">
        <h3 class="aside-title">Shop by:</h3>
        <ul class="filter-list">
            <li><span class="text-uppercase">color:</span></li>
            <li><a href="#" style="color:#FFF; background-color:#8A2454;">Camelot</a></li>
            <li><a href="#" style="color:#FFF; background-color:#475984;">East Bay</a></li>
            <li><a href="#" style="color:#FFF; background-color:#BF6989;">Tapestry</a></li>
            <li><a href="#" style="color:#FFF; background-color:#9A54D8;">Medium Purple</a></li>
        </ul>

        <ul class="filter-list">
            <li><span class="text-uppercase">Size:</span></li>
            <li><a href="#">X</a></li>
            <li><a href="#">XL</a></li>
        </ul>

        <ul class="filter-list">
            <li><span class="text-uppercase">Price:</span></li>
            <li><a href="#">MIN: $20.00</a></li>
            <li><a href="#">MAX: $120.00</a></li>
        </ul>

        <ul class="filter-list">
            <li><span class="text-uppercase">Gender:</span></li>
            <li><a href="#">Men</a></li>
        </ul>

        <button class="primary-btn">Clear All</button>
    </div> --}}
    <!-- /aside widget -->

    <!-- aside widget -->
    <div class="aside">
        <h3 class="aside-title">Filter op prijs</h3>
        <div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal">
            <div class="noUi-base">
                <div class="noUi-origin" style="left: 0%;">
                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="1.00$" style="z-index: 5;">
                        <div class="noUi-tooltip">1.00$</div>
                    </div>
                </div>
                <div class="noUi-connect" style="left: 0%; right: 0%;"></div>
                <div class="noUi-origin" style="left: 100%;">
                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="999.00$" style="z-index: 4;">
                        <div class="noUi-tooltip">999.00$</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- aside widget -->

    <!-- aside widget -->
    {{-- <div class="aside">
        <h3 class="aside-title">Filter By Color:</h3>
        <ul class="color-option">
            <li>
                <a href="#" style="background-color:#475984;"></a>
            </li>
            <li>
                <a href="#" style="background-color:#8A2454;"></a>
            </li>
            <li class="active">
                <a href="#" style="background-color:#BF6989;"></a>
            </li>
            <li>
                <a href="#" style="background-color:#9A54D8;"></a>
            </li>
            <li>
                <a href="#" style="background-color:#675F52;"></a>
            </li>
            <li>
                <a href="#" style="background-color:#050505;"></a>
            </li>
            <li>
                <a href="#" style="background-color:#D5B47B;"></a>
            </li>
        </ul>
    </div> --}}
    <!-- /aside widget -->

    <!-- aside widget -->
    {{-- <div class="aside">
        <h3 class="aside-title">Filter By Size:</h3>
        <ul class="size-option">
            <li class="active"><a href="#">S</a></li>
            <li class="active"><a href="#">XL</a></li>
            <li><a href="#">SL</a></li>
        </ul>
    </div> --}}
    <!-- /aside widget -->

    <!-- aside widget -->
    <div class="aside">
        <h3 class="aside-title">Filter op merk</h3>
        <ul class="list-links">
            @foreach ($brands as $brand)
                <li class="active"><a href="#">{{$brand->title}}</a></li>
            @endforeach
            {{-- <li><a href="#">Nike</a></li>
            <li><a href="#">Adidas</a></li>
            <li><a href="#">Polo</a></li>
            <li><a href="#">Lacost</a></li> --}}
        </ul>
    </div>
    <!-- /aside widget -->

    <!-- aside widget -->
    <div class="aside">
        <h3 class="aside-title">Filter op geslacht</h3>
        <ul class="list-links">
            {{-- <li class="active"><a href="#">Men</a></li>
            <li><a href="#">Women</a></li> --}}
        </ul>
    </div>
    <!-- /aside widget -->

    <!-- category -->
    <div class="aside">
        <h3 class="aside-title">Filter op categorie</h3>
        <ul class="list-links">
            @foreach ($categories as $categorie)
            <li class="active"><a href="#">{{ $categorie->title }}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- einde category -->

    <div class="aside">
        <h3 class="aside-title">Filter op type</h3>
        <ul class="list-links">
            @foreach ($types as $type)
                <li class="active"><a href="#">{{ $type->title }}</a></li>    
            @endforeach
        </ul>
    </div>

    <!-- aside widget -->
    {{-- <div class="aside">
        <h3 class="aside-title">Top Rated Product</h3>
        <!-- widget product -->
        <div class="product product-widget">
            <div class="product-thumb">
                <img src="./img/thumb-product01.jpg" alt="">
            </div>
            <div class="product-body">
                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o empty"></i>
                </div>
            </div>
        </div>
        <!-- /widget product -->

        <!-- widget product -->
        <div class="product product-widget">
            <div class="product-thumb">
                <img src="./img/thumb-product01.jpg" alt="">
            </div>
            <div class="product-body">
                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                <h3 class="product-price">$32.50</h3>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o empty"></i>
                </div>
            </div>
        </div>
        <!-- /widget product -->
    </div> --}}
    <!-- /aside widget -->
</div>