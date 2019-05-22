@extends('klant.index')

@section('body')
<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">card</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            {{-- Start checkout-form --}}
            <form id="checkout-form" class="clearfix">
                @csrf
                <div class="col-md-12">
                    <div class="order-summary clearfix">
                        <div class="section-title">
                            <h3 class="title">Controleer order</h3>
                        </div>
                        {{-- Inhoud van de winkelwagen --}}
                        <table class="shopping-cart-table table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th></th>
                                    <th class="text-center">Prijs</th>
                                    <th class="text-center">Aantal</th>
                                    <th class="text-center">Totaal</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Loop with Items in Cart --}}

                                {{-- Get from Session or storage, cookie, json file, with amount and product-Id, in order to get data from DB --}}
                                @php
                                    // Get Session Storage
                                    // Get json and get product id
                                    // get Data from product from the id
                                    // Put Data etc
                                    // Amount of products in json set them.
                                    // Calculate prices


                                    //Json obj
                                    // 0: {
                                    //     product_id: 2,
                                    // }

                                    // Retrieve a piece of data from the session...
                                    $cart_items = session('cart');

                                    //Check if cart session isn't empty
                                    if($cart_items != null) {
                                        $product_ids = [];

                                        //Add the product ids needed to the array
                                        foreach ($cart_items as $cart_item) {
                                            array_push($product_ids, $cart_item->product_id);
                                        }

                                        //Get real time database data about the product and fill in
                                        $products = null;

                                        foreach ($product_ids as $id) {
                                            $product = App\Product::where('id', $id)->first();
                                            $products->push($product);
                                        }
                                    }
                                @endphp
                                <tr>
                                    @if($products->count() > 0)
                                        @foreach ($products as $product)
                                            @php
                                                //Get Image for product 
                                                $product_image = App\ProductImage::where('product_id', $product->id)->first();
                                            @endphp
                                            {{-- $product_image->image --}}
                                            <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
                                            <td class="details">
                                                <a href="{{ url('/product/' . $product->id) }}">{{ $product->product_name }}</a>
                                                <ul>
                                                    <li><span>{{ $product->specifications }}</span></li>
                                                </ul>
                                            </td>
                                            @php
                                                //Check if product has a sale

                                                $sale = Sale::where('product_id', $product->id)->first();

                                                if($sale != null) {

                                                    $sale_percentage = $sale->sale;
                                                    $price_off = $product->price / 100 * 20;
                                                    $new_price = $product->price - $price_off;
                                                }
                                            @endphp
                                            @if($sale != null)
                                                <td class="price text-center"><strong>&euro;{{$new_price}}</strong>
                                                    <br>
                                                    <del class="font-weak"><small>&euro;{{$product->price}}</small></del>
                                                </td>
                                            @else
                                                <td class="price text-center"><strong>&euro;{{$product->price}}</strong></td>
                                            @endif

                                            {{-- Calculate with jQuery --}}
                                            <td class="qty text-center"><input class="input" type="number" value="1"></td>
                                            <td class="total text-center"><strong class="primary-color">€32.50</strong></td>
                                            <td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
                                        @endforeach  
                                    @endif
                                </tr>
                                {{-- Loop with Items in Cart --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>SUBTOTAAL</th>
                                    <th colspan="2" class="sub-total">$97.50</th>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>VERZENDKOSTEN</th>
                                    <td colspan="2">Free Shipping</td>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>TOTAAL</th>
                                    <th colspan="2" class="total">$97.50</th>
                                </tr>
                            </tfoot>
                        </table>
                        {{-- Einde inhoud van de winkelwagen --}}
                        <div class="pull-right">
                            <button class="primary-btn"><a href="{{url('/betalen')}}">Plaats bestelling</a></button>
                        </div>
                    </div>

                </div>
            </form>
            {{-- Einde checkout-form --}}
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection