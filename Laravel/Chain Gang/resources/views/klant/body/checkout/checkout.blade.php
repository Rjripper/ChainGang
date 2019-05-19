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
				<form id="checkout-form" class="clearfix">
					@csrf
					<div class="col-md-6">
						<div class="Adres gegevens">
							<p>Bent u al klant ? <a href="#">Login</a></p>
							<div class="section-title">
								<h3 class="title">Adres gegevens</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Voornaam">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Achternaam">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Adres">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="Woonplaats">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Land">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="Postcode">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telefoon">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="register">
									<label class="font-weak" for="register">Account aanmaken?</label>
									<div class="caption">
                                        <p>Vul hieronder een wachtwoord voor uw account in.</p>
                                        <input class="input" type="password" name="password" placeholder="Vul uw wachtwoord in">
									</div>
								</div>
							</div>
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
								<label for="shipping-1">Standaard verzending - €3.95</label>
								<div class="caption">
									<p>
											Standaard verzenden wij onze bestellingen verzekerd via PostNL. Zodra wij je bestelling hebben ingepakt melden we je zending bij PostNL en krijg je een Track & Trace-code toegestuurd waarmee je je bestelling kunt volgen. De verzendkosten die wij in rekening brengen zijn in de regel € 3,95 voor standaardpakketten binnen Nederland. In sommige gevallen zoals palletzendingen verzenden wij via DHL, hier kunnen additionele kosten aan verbonden zijn.
                                    </p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-2">
								<label for="shipping-2">Rembours - €15.00</label>
								<div class="caption">
									<p>
											Bij verzending onder rembours betaal je het volledige factuurbedrag en de bijkomende rembourskosten via PIN aan de postbode. Bij orders met een waarde boven € 500,- zal de bestelling bezorgd worden bij een PostNL-locatie bij jou in de buurt. Houd er rekening mee dat rembourszendingen niet op zaterdagen geleverd worden en alleen mogelijk zijn voor afleveradressen binnen Nederland. Ook kan het voorkomen dat een rembourszending een dag later verzonden wordt. <br>
											De bijkomende kosten bij een rembourszending zijn € 15,- per bestelling.
                                    </p>
								</div>
							</div>
							<div class="input-checkbox">
									<input type="radio" name="shipping" id="shipping-3">
									<label for="shipping-2">Pakje gemak</label>
									<div class="caption">
										<p>
											Wil je je bestelling afhalen bij een PakjeGemakpunt? Kies dan voor standaardverzending en selecteer als verzendadres een PakjeGemakpunt. Waar je je bestelling normaal thuisbezorgd krijgt, kun je deze met PakjeGemak afhalen op een van de vele afhaalpunten.
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
										<th class="text-center">Prijs</th>
										<th class="text-center">Aantal</th>
										<th class="text-center">Totaal</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
										<td class="details">
											<a href="#">Product naam komt hier</a>
											<ul>
												<li><span>Maat: XL</span></li>
												<li><span>Kleur: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>€32.50</strong><br><del class="font-weak"><small>€40.00</small></del></td>
										<td class="qty text-center"><input class="input" type="number" value="1"></td>
										<td class="total text-center"><strong class="primary-color">€32.50</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
									</tr>
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
								<button class="primary-btn">Plaats bestelling</button>
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