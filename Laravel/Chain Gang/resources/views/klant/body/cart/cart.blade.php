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
                                @php
                                    $products = array();

                                    $cart_session = session('cart_session');
                                    if($cart_session != null) {

                                        //New
                                        foreach ($cart_session as $key => $e) {
                                            $product = App\Product::where('id', $key)->first();
                                            $product->amount = $cart_session[$key]['amount'];
                                            array_push($products, $product);
                                        }
                                    }

                                    $total_amount = 0;

                                @endphp
                                {{-- Loop with Items in Cart --}}
                                @if($products != null)
                                    @if(count($products) > 0)
                                        @foreach ($products as $product)
                                            <tr>
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

                                                    $sale = App\Sale::where('product_id', $product->id)->first();

                                                    if($sale != null) {

                                                        $sale_percentage = $sale->sale;
                                                        $price_off = round($product->price / 100 * 20, 2);
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
                                                <td class="qty text-center"><input class="input" type="number" value="{{ $product->amount }}"></td>
                                                @if($sale != null)
                                                    <td class="total text-center"><strong class="primary-color">&euro;{{round($product->amount * $new_price, 2)}}</strong></td>
                                                    @php
                                                        $total_amount += round($product->amount * $new_price, 2);
                                                    @endphp
                                                @else
                                                    <td class="total text-center"><strong class="primary-color">&euro;{{round($product->amount * $product->price, 2)}}</strong></td>
                                                    @php
                                                        $total_amount += round($product->amount * $product->price, 2);
                                                    @endphp
                                                @endif
                                                <td class="text-right">
                                                    <button onclick="removeItemFromCart(this.getAttribute('data-id'))" data-id="{{ $product->id }}" class="main-btn icon-btn"><i class="fa fa-close"></i></button>
                                                </td>
                                            </tr>
                                            @endforeach  
                                        @endif
                                    @endif
                                {{-- Loop with Items in Cart --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>SUBTOTAAL</th>
                                    @if($total_amount != null)
                                        <th colspan="2" class="sub-total">&euro;{{$total_amount}}</th>
                                    @else
                                        <th colspan="2" class="sub-total">&euro;00.00</th>
                                    @endif
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>VERZENDKOSTEN</th>
                                    <td colspan="2">Gratis Verzending</td>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>TOTAAL</th>
                                    @if($total_amount != null)
                                        <th colspan="2" class="total">&euro;{{$total_amount}}</th>
                                    @else
                                        <th colspan="2" class="total">&euro;00.00</th>
                                    @endif
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
<script>
    function removeItemFromCart(product_id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    
        var form_data = new FormData();
        form_data.append('_method', 'POST');
        form_data.append('_token', CSRF_TOKEN);
    
        event.preventDefault();
    
        $.ajax({
            url: '/product/remove/cart/' + product_id,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(data) {
                console.log(data.cart_session);
                location.reload();
            }
        });
    }
</script>
<!-- /section -->
@endsection