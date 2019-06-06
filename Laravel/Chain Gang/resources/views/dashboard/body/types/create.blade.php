@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Type</h4>
    {{-- begin Form --}}
    {{-- geef de forum een post en de action mee --}}
    {{-- bij action geef je het pad waar hij hem moet opslaan gewoon het zelfde als de get van index. --}}
    <form method="POST" action="{{ route ('storeType')}}" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">

                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <h4 class="c-grey-900 mB-20">Type Aanmaken</h4>

                        {{-- Begin Form--}}             
                        <div class="form-group"><label for="inputTitle">Typenaam</label> 
                            <input type="text" class="form-control" id="inputTitle" name="title">
                        </div>
                    </div>
                    <div class="col-sm-4"></div>                    
                </div>

                  <div class="row">   
                    <div class="btn-back">
                        <a href="{{ route ('types') }}"><span class="btn btn-primary tables-function-button">Terug</span></a>
                    </div>
                    <div class="btn-add-newsletter-layout">
                        <button class="btn btn-primary tables-function-button">Type aanmaken</button>
                    </div>                
                </div>    
            </div>
        </div>
    </div>
    </form>
</div>



<script type="text/javascript">
$( function() {
    $('.date').datepicker({
                format: 'yy/mm/dd',
                autoclose: true,
                todayHighlight: true
    });
});
}


</script> 


@endsection