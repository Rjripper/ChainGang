@extends('klant.index')

@section('body')
    
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="product product-details clearfix">
                    <div class="col-md-6">
                        @include('klant.body.product-details.product')
                    </div>

                    <div class="col-md-6">
                        @include('klant.body.product-details.overview')
                    </div>

                    <div class="col-md-12">
                        @include('klant.body.product-details.details')
                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                @include('klant.body.product-details.recomendations')
            </div>
        </div>
    </div>

@endsection