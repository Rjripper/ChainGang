@extends('klant.index')

@section('body')
    <div class="section">
        <div class="container">
            <div class="row">
                @include('klant.body.products.filter', compact('brands', 'categories', 'types'))
                
                <div id="main" class="col-md-9">
                    @include('klant.body.products.sort', $products)
                    
                    <div id="store">
                        @if($products != null)
                            @include('klant.body.products.products-section', $products)
                        @else
                            @include('klant.body.products.products-section')
                        @endif
                    </div>
                
                    @include('klant.body.products.sort', $products)
                </div>
            </div>
        </div>
    </div>
@endsection