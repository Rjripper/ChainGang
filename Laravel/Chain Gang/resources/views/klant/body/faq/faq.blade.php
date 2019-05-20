@extends('klant.index')
@section('body')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Veel gestelde vragen</li>
                </ul>
            </div>
        </div>
        <!-- /BREADCRUMB -->
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
                                            <ul>
                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;* Log in</li>
                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;* Navigeer naar 'Orders'<li>
                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;* Selecteer de juiste order</li>
                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;* Klik op de link bij 'Betaalwijze'</li>
                                                <li>&nbsp;&nbsp;&nbsp;&nbsp;* U kunt nu de betaling alsnog voldoen via de bekende beveiligde omgeving</li>
                                            </ul>
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