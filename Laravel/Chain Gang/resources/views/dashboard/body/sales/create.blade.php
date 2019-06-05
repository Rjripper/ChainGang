@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Uitverkoop</h4>
    {{-- begin Form --}}
    {{-- geef de forum een post en de action mee --}}
    {{-- bij action geef je het pad waar hij hem moet opslaan gewoon het zelfde als de get van index. --}}
    <form method="POST" action="{{ route ('storeSale')}}" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="c-grey-900 mB-20">Uitverkoop Aanmaken</h4>

                        {{-- Begin Form--}}             
                            <div class="form-group"><label for="inputTitle">Titel</label> 
                                <input type="text" class="form-control" id="inputTitle" name="title"></div>
                            <div class="form-group"><label for="inputSale" name="product_id">Korting in (%)</label> 
                                <input type="text" class="form-control" id="inputSale" name="sale"></div>                            
                            <div class="form-group"><label for="inputProduct">Product</label> 
                                <select id="inputProduct" name="product_id" class="form-control">
                                    @foreach ($products as $product)
                                    {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                     <option value="{{$product->id}}">{{$product->product_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group"><label for="inputMedewerker">Medewerker</label> 
                                <select id="inputMedewerker" name="user_id" class="form-control">
                                    @foreach ($users as $user)
                                    {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                     <option value="{{$user->id}}">{{$user->username}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fw-500">Start datum</label>
                                <div class="timepicker-input input-icon form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon bgc-white bd bdwR-0">
                                            <i class="ti-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control bdc-grey-200 start-date date" name="start_date" placeholder="Start Datum" data-provide="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="fw-500">Eind datum</label>
                                <div class="timepicker-input input-icon form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon bgc-white bd bdwR-0">
                                            <i class="ti-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control bdc-grey-200 start-date date" name="end_date" placeholder="Eind Datum" data-provide="datepicker">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm"></div>                    
                  </div>

                  <div class="row">   
                    <div class="btn-back">
                        <a href="{{ url('/admin/sales') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                    </div>
                    <div class="btn-add-newsletter-layout">
                        <button class="btn btn-primary tables-function-button">Korting aanmaken</button>
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