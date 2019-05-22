@extends('klant.index')
@section('body')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Mijn Gegevens</li>
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
                    {{-- col --}}
                    <div class="col">
                        <h1>Mijn Gegevens</h1>
                    </div>
                    {{-- klant menu --}}
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        {{-- <h1> mijn account </h1> --}}
                        <div class="card" style="width:50%;">
                            <ul class="list-group list-group-flush list-links">
                                <li class="list-group-item"><a href="{{ url('/account/overzicht')  }}">Details</a></li>
                                <li class="list-group-item"><a href="{{ url('/account/orders')   }}">Orders</a></li>
                                <li class="list-group-item"><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- Einde klant menu --}}
                    {{-- Klant form --}}
                    <form action="{{ url('/account/update') }}" class="clearfix" method="POST">
                        @csrf

                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                    <input class="input" type="text" name="first-name" placeholder="Voornaam" value="{{$user->first_name}}">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="last-name" placeholder="Achternaam" value="{{$user->last_name}}">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="street" placeholder="straat" value="{{$user->address}}">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="zip-code" placeholder="Postcode" value="{{$user->zip_code}}">
                            </div>
                            <div class="form-group">
                                    Bestellings  <input class="input" type="text" name="city" placeholder="Woonplaats" value="{{$user->city}}">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="phone" placeholder="Telefoonnummer" value="{{$user->phonenumber}}">
                            </div>
                            <div class="form-group">
                                <input class="main-btn" type="submit" name="save" value="Opslaan">
                            </div>
                        </div>
                    </form>
                    <form action="{{ url('/account/details/update') }}" class="clearfix" method="POST">
                        @csrf

                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input class="input" type="text" name="email" placeholder="E-mail adres" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="password" name="current-password" placeholder="Huidig wachtwoord">
                            </div>
                            <div class="form-group">
                                <input class="input" type="password" name="new-password" placeholder="Nieuw wachtwoord">
                            </div>
                            <div class="form-group">
                                <input class="input" type="password" name="confirm-password" placeholder="herhaal wachtwoord">
                            </div>
                            <div class="form-group">
                                <input class="main-btn" type="submit" name="save" value="Opslaan">
                            </div>
                        </div>
                    </form>
                    {{-- Einde klant form --}}
                </div>
                {{-- end row --}}
            </div>
            {{-- end container --}}
    </div>
    {{-- end section --}}
    @endsection