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
                    <div class="review-form" >
                        <div class="form-group">
                            <input class="input" id="contactName" type="text" name="name" placeholder="Uw naam" />
                        </div>
                        <div class="form-group">
                            <input class="input" id="contactEmail" type="email" name="email" placeholder="Uw email addres" />
                        </div>
                        <div class="form-group">
                            <textarea class="input" id="contactMessage" name="message" placeholder="Uw bericht"></textarea>
                        </div>
                        <button type="submit" class="primary-btn" onclick="contactEmail()">Verzenden</button>
                    </div>
                </div>
                {{-- address details --}}
                <div class="col-md-6">
                    <div class="section-title">
                        <h2 class="title">Addres gegevens</h2>
                    </div>
                    <h4 style="font-weight:normal"><a href="mailto:info@chaingang.nl"><i class="fa fa-envelope"></i> info@chaingang.nl</a></h4>
                    <h4 style="font-weight:normal"><i class="fa fa-phone"></i>&nbsp;&nbsp;020 - 254789</h4>
                    <h4 style="font-weight:normal"><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;J.F Kenedylaan 49,<br>&nbsp;&nbsp;&nbsp;&nbsp; 7001 EA Doetinchem</h4>
                    <h4 style="font-weight:normal"><i class="fa fa-info"></i>&nbsp;&nbsp;&nbsp;BTW nr: NL 4587.25.785.B02</h4>
                    <h4 style="font-weight:normal"><i class="fa fa-info"></i>&nbsp;&nbsp;&nbsp;KvK nr: 5874692</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    {{-- niewsbrief signup --}}
                    <div class="section-title">
                        <h2 class="title">Blijf op de hoogte</h2>
                    </div>
                    <div>
                        <div class="form-group">
                            <input class="input nieuwsbrief-form" id="newsletterEmail" name="email" placeholder="Vul e-mail adres in">
                        </div>
                        <button type="submit" class="primary-btn" onclick="addToNewsletter()">Schrijf je in voor de nieuwsbrief!</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-title">
                        <h2 class="title">Onze vestiging</h2>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2458.167376961543!2d6.296373015992452!3d51.96737328478761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c784c716ae2ee7%3A0xe3665d8a07166e2a!2sGraafschap+College!5e0!3m2!1snl!2snl!4v1558290668832!5m2!1snl!2snl" style="width:100%;height:100%"frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <script>
        function contactEmail() {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                
                var form_data = new FormData();
                form_data.append('_token', CSRF_TOKEN);
                form_data.append('name', document.getElementById('contactName').value);
                form_data.append('email', document.getElementById('contactEmail').value);
                form_data.append('message', document.getElementById('contactMessage').value);
        
                $.ajax({
                    url: '/contact/send/',
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(){
                        tempAlert('Email is verstuurd',3);
                        document.getElementById('contactName').value = '';
                        document.getElementById('contactEmail').value = '';
                        document.getElementById('contactMessage').value = '';
                    },
                    error: function(errors) {
                        console.log(errors);
                    }
                });
            }

            function addToNewsletter() {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                
                var form_data = new FormData();
                form_data.append('_token', CSRF_TOKEN);
                form_data.append('email', document.getElementById('newsletterEmail').value);
        
                $.ajax({
                    url: '/newsletter/signup',
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(){
                        tempAlert('U bent toegevoegt aan niewsbrief',3);
                        document.getElementById('newsletterEmail').value = '';
                    },
                    error: function(errors) {
                        console.log(errors);
                    }
                });
            }
    </script>

@endsection