@extends('klant.index')
@section('body')
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
                                <li class="list-group-item"><a href="{{ url('/account/overzicht') }}">Details</a></li>
                                <li class="list-group-item"><a href="{{ url('/account/bestellingen') }}">Orders</a></li>
                                <li class="list-group-item"><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- Einde klant menu --}}
                    {{-- Klant form --}}
                    <form action="{{ url('/account/update/details/'. $user->id) }}" class="" method="POST">
                        @method('PATCH')
                        @csrf

                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                    <input class="input" type="text" name="first_name" placeholder="Voornaam" value="{{$user->first_name}}">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="last_name" placeholder="Achternaam" value="{{$user->last_name}}">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="address" placeholder="straat" value="{{$user->address}}">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="zip_code" placeholder="Postcode" value="{{$user->zip_code}}">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="city" placeholder="Woonplaats" value="{{$user->city}}">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="phonenumber" placeholder="Telefoonnummer" value="{{$user->phonenumber}}">
                            </div>
                            <div class="form-group">
                                <input class="main-btn" type="submit" value="Opslaan">
                            </div>
                        </div>
                    </form>
                    <form action="{{ url('/account/update/inlog/'. $user->id) }}" class="clearfix" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input class="input" type="text" name="email" placeholder="E-mail adres" value="{{$user->email}}" required>
                            </div>
                            <div class="form-group">
                                <input class="input" type="password" name="current_password" placeholder="Huidig wachtwoord">
                            </div>
                            <div class="form-group">
                                <input class="input" type="password" name="new_password" placeholder="Nieuw wachtwoord">
                            </div>
                            <div class="form-group">
                                <input class="input" type="password" name="confirm_password" placeholder="herhaal wachtwoord">
                            </div>
                            <div class="form-group">
                                <input class="main-btn" type="submit" name="save" value="Opslaan">
                            </div>
                        </div>
   
                    </form>
                    @if (session('alert'))
                    <div class="alert alert-success" style="text-align: center;">
                        {{ session('alert') }}
                    </div>
                    @endif                    
                    @if(session('error'))
                    <div class="alert alert-danger" style="text-align: center;">
                        {{ session('error') }}
                    </div>
                    @endif
                    {{-- Einde klant form --}}
                </div>
                {{-- end row --}}
            </div>
            {{-- end container --}}
    </div>
    {{-- end section --}}
    @endsection