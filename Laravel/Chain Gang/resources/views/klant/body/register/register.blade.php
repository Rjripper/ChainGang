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
                            <form id="register" class="clearfix">
                                @csrf
                                    <h1> Registreer </h1>
                                    <div class="form-group">
                                        <input class="input" type="email" name="email" placeholder="E-mail adres">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="password" name="password" placeholder="Wachtwoord">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="password" name="password-repeat" placeholder="Herhaal wachtwoord">
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