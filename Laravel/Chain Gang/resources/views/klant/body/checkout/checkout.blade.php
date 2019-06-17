	@extends('klant.index')

	@section('body')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
			<li><a href="{{url('/')}}">Home</a></li>
				<li class="active">Checkout</li>
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
				<form action="{{ url('/order/create') }}" id="checkout-form" class="clearfix" method="POST">
					@csrf
					<div class="col-md-6">
						<div class="Adres gegevens">
							@if(!Auth::check())
								<p>Bent u al klant ? <a href="#">Login</a></p>
								<div class="section-title">
									<h3 class="title">Adres gegevens</h3>
								</div>
								<div class="form-group">
									<input class="input" type="text" name="first-name" placeholder="Peter">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="last-name" placeholder="van Hagen">
								</div>
								<div class="form-group">
									<input class="input" type="email" name="email" placeholder="petervh@google.com">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="address" placeholder="Aardappelstraat 23">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="city" placeholder="Amsterdam">
								</div>
								<div class="form-group">
									<input class="input" type="text" name="zip-code" placeholder="1231 AA">
								</div>
								<div class="form-group">
									<input class="input" type="tel" name="tel" placeholder="+31649372483">
								</div>
							@else
							@php
								$user = Auth::user();
							@endphp
							<div class="section-title">
								<h3 class="title">Adres gegevens</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" value="{{ $user->first_name }}">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" value="{{ $user->last_name }}">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" value="{{ $user->email }}">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" value="{{ $user->address }}">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" value="{{ $user->city }}">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" value="{{ $user->zip_code }}">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" value="{{ $user->phonenumber }}">
							</div>
							@endif
						</div>
					</div>
					{{-- verzend methoden --}}
					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Verzend mogelijkeden</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Standaard verzending - Gratis</label>
								<div class="caption">
									<p>
										Standaard verzenden wij onze bestellingen verzekerd via PostNL. Zodra wij je bestelling hebben ingepakt melden we je zending bij PostNL en krijg je een Track & Trace-code toegestuurd waarmee je je bestelling kunt volgen. De verzendkosten die wij in rekening brengen zijn in de regel € 3,95 voor standaardpakketten binnen Nederland. In sommige gevallen zoals palletzendingen verzenden wij via DHL, hier kunnen additionele kosten aan verbonden zijn.
                                    </p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-2">
								<label for="shipping-2">Ophalen - Gratis</label>
								<div class="caption">
									<p>
											Bij Ophalen kun je de bestellingen ophalen bij onze vestiging. Graafschap College Doetinchem.
                                    </p>
								</div>
							</div>
						</div>
						{{-- einde verzend methoden --}}

						{{-- betaal mogelijkheden --}}
						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Betaal mogelijkheden</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-1" checked>
								<label for="payments-1">Vooruitbetalen</label>
								<div class="caption">
									<p>
                                        Als je ervoor kiest om het factuurbedrag vooraf via bankoverschrijving te voldoen, dan krijg je na het plaatsen van je order een bevestigingsemail met betalingsinstructies. Bij vooruitbetaling dien je altijd rekening te houden met minimaal een werkdag vertraging van je order (minimaal twee werkdagen bij een overschrijving van buiten Nederland). Wij kunnen je order pas verder verwerken zodra je betaling bij ons binnen is. Wij raden je dan ook aan om, indien mogelijk, gebruik te maken van een directere betaalmethode zoals iDeal. Aan het gebruik van deze betaalmethode zijn geen verdere kosten verbonden.
                                    </p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-2">
								<label for="payments-2">Ideal</label>
								<div class="caption">
									<p>
                                        De meest gebruikte betaalmethode is iDeal. Als je betaalt via iDeal kunnen wij je betaling direct automatisch verwerken en uw order zo snel mogelijk uitleveren. Aan het gebruik van deze betaalmethode zijn geen verdere kosten verbonden.
                                    </p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-3">
								<label for="payments-3">Paypal</label>
								<div class="caption">
									<p>
                                        Je kunt bij ons betalen met PayPal. Aan het gebruik van deze betaalmethode zijn geen verdere kosten verbonden.
                                    </p>
								</div>
							</div>
						</div>
					</div>
					{{-- einde betaal mogelijkheden --}}

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
										<th class="text-center visible-sm">Prijs</th>
                                    	<th class="text-center visible-sm">Aantal</th>
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
							<tr>
                                    <th class="empty visible-sm" colspan="3"></th>
                                    <th>SUBTOTAAL</th>
                                    @if($total_amount != null)
                                        <th colspan="2" class="sub-total">&euro;{{$total_amount}}</th>
                                    @else
                                        <th colspan="2" class="sub-total">&euro;00.00</th>
                                    @endif
                                </tr>
                                <tr>
                                    <th class="empty visible-sm" colspan="3"></th>
                                    <th>VERZENDKOSTEN</th>
                                    <td colspan="2">Gratis Verzending</td>
                                </tr>
                                <tr>
                                    <th class="empty visible-sm" colspan="3"></th>
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
								<button type="submit" class="primary-btn">Plaats bestelling</button>
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