@extends('klant.index')
@section('body')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Login</li>
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
                              {{-- form login --}}
                            <form id="login" class="clearfix">
                                @csrf
                                    <h1> Login </h1>
                                    <div class="form-group">
                                        <input class="input" type="email" name="email" placeholder="E-mail adres">
                                    </div>
                                    <div class="form-group">
                                            <input class="input" type="password" name="password" placeholder="Wachtwoord">
                                    </div>
                                    <div class="form-group">
                                            <input class="input-checkbox" type="checkbox" name="login"> &nbsp; Onthoud mij &nbsp; 
                                            <span class="text-right"><a href="{{ route('forgot-password') }}">Wachtwoord vergeten?</a></span>
                                        </div>
                                    <div class="form-group">
                                        <input class="input main-btn" type="submit" name="login" value="Inloggen">
                                    </div>
                                    Heb je nog geen account? <a href="{{url('/registreer')}}">Registreer hier</a>
                                 {{-- end form login --}}
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