@extends('klant.index')

@section('body')
    
    <div class="section">
        <div class="container">
            <div class="row">
                {{-- contact form --}}
                <div class="col-md-6">
                    <div class="section-title">
						<h2 class="title">Contact form</h2>
					</div>
                    <form class="review-form">
                        @csrf
                        <div class="form-group">
                            <input class="input" type="text" placeholder="Uw naam" />
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" placeholder="Uw email addres" />
                        </div>
                        <div class="form-group">
                            <textarea class="input" placeholder="Uw bericht"></textarea>
                        </div>
                        <button class="primary-btn">Verzenden</button>
                    </form>
                </div>
                {{-- address details --}}
                <div class="col-md-6">
                    <div class="section-title">
                        <h2 class="title">Addres gegevens</h2>
                    </div>
                    <h3><a href="mailto:info@chaingang.nl"><i class="fa fa-envelope"></i> info@chaingang.nl</a></h3>
                    <h3><i class="fa fa-phone"></i>&nbsp;&nbsp;0545 - 123455</h3>
                    <h3><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;J.F Kenedylaan 49,<br>&nbsp;&nbsp;&nbsp;&nbsp; 7001 EA Doetinchem</h3>
                </div>

                
            </div>

            <div class="row">
                <div class="col-md-6">
                    {{-- niewsbrief signup --}}
                    <div class="section-title">
                        <h2 class="title">Blijf op de hoogte</h2>
                    </div>
                    <form>
                        @csrf
                        <div class="form-group">
                            <input class="input" placeholder="Vul e-mail adres in">
                        </div>
                        <button class="primary-btn">Schrijf je in voor de nieuwsbrief!</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="section-title">
                        <h2 class="title">Onze vestiging</h2>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2458.167376961543!2d6.296373015992452!3d51.96737328478761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c784c716ae2ee7%3A0xe3665d8a07166e2a!2sGraafschap+College!5e0!3m2!1snl!2snl!4v1558290668832!5m2!1snl!2snl" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


@endsection