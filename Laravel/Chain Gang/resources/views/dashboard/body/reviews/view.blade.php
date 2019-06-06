@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Recensie</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                
                    <h4 class="c-grey-900 mB-20">
                        Recensie - 
                        @foreach ($review as $item)
                        {{ $item->title }}    
                        @endforeach
                    </h4>
                    {{-- Begin Form --}}
                    <form>     
                        {{-- Reviews toevoegen --}} 
                        <div class="row">      
                            <div class="col-md-6">
                                <div class="card">  
                                    <div class="card-body">      
                                        <div class="form-group"><label for="inputTitle">Titel</label>
                                        <input type="text" class="form-control" id="validationCustom05" value="{{ $review[0]->title }}" disabled required>
                                        </div>
                                        <div class="form-group"><label for="inputKlant">Klant</label> 
                                            @foreach ($review as $item)
                                            @php
                                            $userName = App\Customer::Where('id', $item->customer_id)->get();
                                            @endphp
                                            <input type="text" class="form-control" value="{{ $userName[0]->first_name }}" required disabled>
                                        </div>
                                        <div class="form-group"><label for="inputKlant">Product</label> 
                                            @php
                                            $productName = App\Product::Where('id', $item->product_id)->get();
                                            @endphp
                                            <input type="text" class="form-control" value="{{ $productName[0]->product_name }}" required disabled>
                                        </div>
                                        <div class="form-group"><label for="inputKlant">Sterren</label> 
                                            @php
                                            $userName = App\Customer::Where('id', $item->customer_id)->get();
                                            @endphp
                                            <input type="text" class="form-control" value="{{ $item->rating }}" required disabled>
                                        </div>
                                        @endforeach
                                        {{-- <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-legend col-sm-2">Status:</legend>
                                                    <div class="col-sm-10">
                                                        <div class="form-check disabled"><label class="form-check-label"><input disabled class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="checked" disabled="disabled">Goedgekeurd</label></div>
                                                        <div class="form-check disabled"><label class="form-check-label"><input disabled class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" disabled="disabled">Afgekeurd</label></div>
                                                    </div>
                                                </div>
                                        </fieldset> --}}
                                        <div class="form-group">
                                            <label class="fw-500">Aanmaak datum</label>
                                            <div class="timepicker-input input-icon form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon bgc-white bd bdwR-0">
                                                        <i class="ti-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control bdc-grey-200 start-date" value="{{ $item->created_at }}" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="fw-500">Opmerking:</label>
                                        <textarea disabled class="textArea-layout-reviews" name="description" id="descriptionReview" cols="30" rows="10">{{ $item->message }}</textarea>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- Begin Form --}}              
                    
                    <div class="row">   
                        <div class="btn-back">
                            <a href="{{ url('/admin/reviews') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                        </div>
                        <div class="btn-add-newsletter-layout">
                        </div>                
                    </div>    
                    {{-- Reviews toevoegen Eind --}}

            </div>
        </div>
    </div>
</div>


@endsection