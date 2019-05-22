@extends('klant.index')

@section('body')
    <!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
			<li><a href="{{url('/')}}">Home</a></li>
				<li class="active">products</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

    <div class="section">
        <div class="container">
            <div class="row">
                @include('klant.body.products.filter')

                <div id="main" class="col-md-9">
                    @include('klant.body.products.sort')
                    
                    <div id="store">
                        @if($products != null)
                            @include('klant.body.products.products-section', $products)
                        @else
                            @include('klant.body.products.products-section')
                        @endif
                    </div>
                
                    @include('klant.body.products.sort')
                </div>
            </div>
        </div>
    </div>
@endsection