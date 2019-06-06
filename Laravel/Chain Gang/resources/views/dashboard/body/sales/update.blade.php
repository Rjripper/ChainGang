@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Uitverkoop</h4>
    <form method="POST" action="{{ url('/admin/sale/update/'. $sale->id)}}" enctype="multipart/form-data">
        @csrf
        @method('patch')
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="c-grey-900 mB-20">Uitverkoop Wijzigen</h4>

                        {{-- Begin Form--}}            
                        <div class="form-group"><label for="inputTitle">Titel</label> 
                            <input type="text" class="form-control" id="inputTitle" value="{{ old('title', $sale->title) }}"  name="title"></div>
                        <div class="form-group"><label for="inputSale">Korting (%)</label> 
                            <input type="text" class="form-control" id="inputSale" value="{{ old('sale', $sale->sale) }}" name="sale"></div>                           
                        <div class="form-group"><label for="inputProduct">Product</label> 
                            <select id="inputProduct" name="product_id" class="form-control">
                                @foreach ($products as $product)
                                {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                 <option value="{{$product->id}}" @if( $product->id ==  $sale->product_id) selected @endif>{{$product->product_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"><label for="inputMedewerker">Medewerker</label> 
                            <select id="inputMedewerker" name="user_id" class="form-control">
                                @foreach ($users as $user)
                                {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                 <option value="{{$user->id}}" @if( $user->id ==  $sale->user_id) selected @endif>{{$user->username}}</option>
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
                                    <input type="text" class="form-control bdc-grey-200 start-date date" value="{{$sale->start_date}}" name="start_date" placeholder="Start Datum" data-provide="datepicker">
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
                                    <input type="text" class="form-control bdc-grey-200 start-date date" value="{{$sale->end_date}}" name="end_date" placeholder="Eind Datum" data-provide="datepicker">
                                </div>
                            </div>
                        </div>
                        {{-- Eind Form--}}
                    </div>
                    <div class="col-sm"></div>
                  </div>               
               
                  <div class="row">   
                    <div class="btn-back">
                        <a href="{{ route('sales')  }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                    </div>
                    <div class="btn-add-newsletter-layout">
                        <button class="btn btn-primary tables-function-button">Uitverkoop Wijzigen</button>
                    </div>                
                </div>  
            </div>
        </div>
    </div>
    </form>
</div>





@endsection