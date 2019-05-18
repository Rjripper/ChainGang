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


    {{-- nieuwste producten --}}
    <div class="container">
        <div class="section">
            <div class="row">
            @include('klant.body.home.newcollection')
        </div>
    </div>
    
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="row">
                @include('klant.body.home.bestsales')
            </div>
        </div>
    </div>
@endsection
    