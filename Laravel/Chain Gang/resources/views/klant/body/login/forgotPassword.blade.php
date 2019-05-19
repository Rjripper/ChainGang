@extends('klant.index')
@section('body')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Checkout</li>
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
                                    <h1> login </h1>
                                    <div class="form-group">
                                        <input class="input" type="text" name="email" placeholder="E-mail adres">
                                    </div>
                                    <div class="form-group">
                                        <input class="input main-btn" type="submit" name="request" value="Reset wachtwoord">
                                    </div>
                                    heb je al een accoutn? <a href="{{url('/login')}}">Login</a>
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