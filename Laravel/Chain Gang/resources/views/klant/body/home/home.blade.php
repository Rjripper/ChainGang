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
                        <img src="{{ asset('images/initial/images/fiets_1.png') }}" style="opacity:0.6;" alt="">
                        <div class="banner-caption text-center">
                            <h1>Bags sale</h1>
                            <h3 class="blue-color font-weak">Tot wel 50% KORTING!</h3>
                            <button class="primary-btn">Winkel nu!</button>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('images/initial/images/fiets_2.png') }}" style="opacity:0.6;" alt="">
                        <div class="banner-caption">
                            <h1 class="primary-color">HOT DEAL<br><span class="blue-color font-weak">Tot wel 50% KORTING</span></h1>
                            <button class="primary-btn">Winkel nu!</button>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset('images/initial/images/fiets_3.png') }}" style="opacity:0.6;" alt="">
                        <div class="banner-caption">
                            <h1 class="dark-color">Nieuwe fietsen <span>Collectie!</span></h1>
                            <button class="primary-btn">Winkel nu!</button>
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
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="row">
                @if ($newest_products)
                    @include('klant.body.home.newestproducts', $newest_products)
                @else
                    @include('klant.body.home.newestproducts')
                @endif
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
                    <form action="{{ url('/newsletter/signup') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="input nieuwsbrief-form" name="email" placeholder="Vul e-mail adres in">
                        </div>
                        <button type="submit" class="primary-btn">Schrijf je in voor de nieuwsbrief!</button>
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
                @if($products_in_sale != null)
                    @include('klant.body.home.bestsales', $products_in_sale)
                @else
                    @include('klant.body.home.bestsales')
                @endif
            </div>
        </div>
    </div>
    {{-- end best verkochte --}}

    {{-- best verkochte --}}
    <div class="section">
            <!-- container -->
        <div class="container">
            <div class="row">
                @if($reviews != null)
                    @include('klant.body.home.reviews', $reviews)
                @else
                    @include('klant.body.home.reviews')
                @endif
            </div>
        </div>
    </div>
    {{-- end best verkochte --}}
@endsection
    