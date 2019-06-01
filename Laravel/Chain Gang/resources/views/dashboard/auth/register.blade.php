@extends('klant.index')
@section('body')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Registreer</li>
                </ul>
            </div>
        </div>
        <!-- /BREADCRUMB -->
        <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                            <div class="col-sm-4">
                              
                            </div>
                            <div class="col-sm-4">
                              {{-- form register --}}
                            <form id="register" class="clearfix" method="POST" action="{{ route('register') }}">
                                @csrf
                                    <h1> Registreer </h1>
                                    <div class="form-group">
                                        <input type="email" name="email" class="input" placeholder="E-mail adres" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="bg-danger" role="alert">
                                                <strong>&nbsp;{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                            <input type="password" name="password" class="input" placeholder="Wachtwoord" value="{{ old('password') }}" required>
                                            @if ($errors->has('password'))
                                                <span class="bg-danger" role="alert">
                                                    <strong>&nbsp;{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="password" name="password_confirmation" placeholder="Herhaal wachtwoord" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="first_name" placeholder="Voornaam" value="{{ old('first_name') }}">
                                        @if ($errors->has('first_name'))
                                            <span class="bg-danger" role="alert">
                                                <strong>&nbsp;{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="last_name" placeholder="Achternaam" value="{{ old('last_name') }}" required>
                                        @if ($errors->has('last_name'))
                                            <span class="bg-danger" role="alert">
                                                <strong>&nbsp;{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="address" placeholder="adres" value="{{ old('address') }}" required>
                                        @if ($errors->has('address'))
                                            <span class="bg-danger" role="alert">
                                                <strong>&nbsp;{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="zip_code" placeholder="Postcode" value="{{ old('zip_code') }}" required>
                                        @if ($errors->has('zip_code'))
                                            <span class="bg-danger" role="alert">
                                                <strong>&nbsp;{{ $errors->first('zip_code') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="city" placeholder="Woonplaats" value="{{ old('city') }}" required>
                                        @if ($errors->has('city'))
                                            <span class="bg-danger" role="alert">
                                                <strong>&nbsp;{{ $errors->first('city') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="phonenumber" placeholder="Telefoonnummer" value="{{ old('phonenumber') }}" required>
                                        @if ($errors->has('phonenumber'))
                                            <span class="bg-danger" role="alert">
                                                <strong>&nbsp;{{ $errors->first('phonenumber') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                            <input  type="hidden" name="has_newsletter" value="0">
                                        <p> <input style="width:20px;height:20px;" type="checkbox" id="backend_access" name="has_newsletter" value="1" class="switch-input" {{ old('has_newsletter') == '1' ? 'checked' : '' }}>
                                            schrijf me in voor de nieuws brief!</p>
                                        @if ($errors->has('has_newsletter'))
                                            <span class="bg-danger" role="alert">
                                                <strong>&nbsp;{{ $errors->first('has_newsletter') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="input main-btn" type="submit" name="register" value="Registreer">
                                    </div>
                                 {{-- end form register --}}
                                </form>

                            </div>
                            <div class="col-sm-4">                              
                            </div>
                    {{-- end row --}}
                    </div>
            {{-- end container --}}
            </div>
        {{-- end section --}}
        </div>
@endsection