@extends('klant.index')
@section('body')
        <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h1 class="title">Veel gestelde vragen</h1>
                            {{-- end section title --}}
                            </div> 
                            <div class="col-md-12">

                                    <strong> Hoe kan ik een product toevoegen aan een bestelling?</strong><br>
                                    <p>
                                            U heeft een bestelling geplaatst en u wilt hieraan nog een product toevoegen, of u wilt een andere wijziging doorvoeren in een lopende order.<br>
                                            Zelf kunt u een lopende order niet aanpassen. Neem contact met ons op om te informeren naar de mogelijkheden.
                                    </p>

                                    <strong>Hoe kan ik een bestelling annuleren?</strong>
                                    <p>
                                            U heeft een bestelling geplaatst en u wilt deze weer annuleren. Hoewel wij dit natuurlijk jammer vinden doen wij hier niet moeilijk over.<br>
                                            Neem om een order te annuleren contact met ons op en wij maken het in orde.
                                    </p>

                                    <strong> Mijn betaling is mislukt, hoe kan ik alsnog betalen? </strong>
                                    <p>
                                            indien uw iDeal-, creditcard-, of PayPal-betaling niet goed is gegaan kunt u de betaling via uw account alsnog voldoen. Volg hiervoor de onderstaande stappen.<br>
                                            {{-- <div class="card" style="width:50%"> --}}
                                                <ul style="padding:20px;">
                                                    <li>Log in</li>
                                                    <li>Navigeer naar 'Orders'<li>
                                                    <li>Selecteer de juiste order</li>
                                                    <li>Klik op de link bij 'Betaalwijze'</li>
                                                    <li>U kunt nu de betaling alsnog voldoen via de bekende beveiligde omgeving</li>
                                                </ul>
                                            {{-- </div> --}}
                                            Wilt u uw betaling op een andere manier voldoen? Neem dan contact met ons op en wij zorgen dat de betalingsmethode wordt aangepast.
                                    </p>
                        {{-- end col --}}
                        </div>
                    {{-- end row --}}
                    </div>
                {{-- end container --}}
                </div>
        {{-- end section --}}
        </div>
@endsection