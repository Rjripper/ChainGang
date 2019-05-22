@extends('klant.index')

@section('body')
    {{-- slider --}}
    <!-- HOME -->
    <div id="home">
		<!-- container -->
		<div class="container"> 
            <!-- home wrap -->
            <div class="home-wrap">
                <!-- home slick -->
                <div id="home-slick">
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('images/initial/images/banner01.jpg') }}" alt="">
                        <div class="banner-caption text-center">
                            <h1>Bags sale</h1>
                            <h3 class="white-color font-weak">Up to 50% Discount</h3>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('images/initial/images/banner02.jpg') }}" alt="">
                        <div class="banner-caption">
                            <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('images/initial/images/banner03.jpg') }}" alt="">
                        <div class="banner-caption">
                            <h1 class="white-color">New Product <span>Collection</span></h1>
                            <button class="primary-btn">Shop Now</button>
                        </div>
                    </div>
                    <!-- /banner -->
                </div>
                <!-- /home slick -->
            </div>
            <!-- /home wrap -->
        </div>
	    <!-- /container -->
    </div>
    <!-- /HOME -->
    {{-- end slider --}}

    {{-- product tumbnail --}}
    <div class="container">
        <div class="section">
            <div class="row">
            @include('klant.body.home.newest')
        </div>
    </div>
    {{-- end product tumbnail --}}
    
    {{-- nieuwste producten --}}
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="row">
                @include('klant.body.home.newestproducts')
            </div>
        </div>
    </div>
    {{-- end nieuwste producten --}}

    {{-- nieuwsbrief signup --}}
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-sm-0 col-xs-0 col-md-3"></div>                   
                <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                    <h3 class="title">Blijf op de hoogte</h3>
                    <p>Dit is de nieuwsbrief, die moet nog ergens anders naar toe!!</p>
                    <form>
                        @csrf
                        <div class="form-group">
                            <input class="input nieuwsbrief-form" placeholder="Vul e-mail adres in">
                        </div>
                        <button class="primary-btn">Schrijf je in voor de nieuwsbrief!</button>
                    </form>
                </div>
                <div class="col-sm-0 col-xs-0 col-md-3"></div>
            </div>
        </div>
    </div>
    {{-- end nieuwsbrief signup --}}


    {{-- best verkochte --}}
    <div class="section">
            <!-- container -->
        <div class="container">
            <div class="row">
                @include('klant.body.home.bestsales')
            </div>
        </div>
    </div>
    {{-- end best verkochte --}}

    {{-- best verkochte --}}
    <div class="section">
            <!-- container -->
        <div class="container">
            <div class="row">
                @include('klant.body.home.reviews')
            </div>
        </div>
    </div>
    {{-- end best verkochte --}}
@endsection
    