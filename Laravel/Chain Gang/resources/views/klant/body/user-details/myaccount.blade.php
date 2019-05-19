@extends('klant.index')
@section('body')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Mijn account</li>
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
                        <h1> mijn account </h1>
                    </div>
                    {{-- klant menu --}}
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        {{-- <h1> mijn account </h1> --}}
                        <div class="card" style="width:50%;">
                            <ul class="list-group list-group-flush list-links">
                            <li class="list-group-item"><a href="{{url('/myaccount')}}">Details</a></li>
                            <li class="list-group-item"><a href="{{url('/myaccount')}}">Orders</a></li>
                            <li class="list-group-item"><a href="{{url('/myaccount')}}">Logout</a></li>
                        </ul>
                    </div>
                    </div>
                    {{-- Einde klant menu --}}
                    {{-- Klant form --}}
                    <form id="klant" class="clearfix">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                            @csrf
                            <div class="form-group">
                                    <input class="input" type="text" name="first-name" placeholder="Voornaam">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="insertion" placeholder="Tussenvoegsel">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="last-name" placeholder="Achternaam">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="street" placeholder="straat">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="zip-code" placeholder="Postcode">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="city" placeholder="Woonplaats">
                            </div>
                            <div class="form-group">
                                    <input class="input" type="text" name="phone" placeholder="Telefoonnummer">
                            </div>
                            <div class="form-group">
                                    <input class="main-btn" type="submit" name="save" value="Opslaan">
                            </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <input class="input" type="text" name="email" placeholder="E-mail adres">
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