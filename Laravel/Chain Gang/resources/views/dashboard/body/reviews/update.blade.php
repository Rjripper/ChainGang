@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Recensie</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                
                    <h4 class="c-grey-900 mB-20">Recensie Aanpassen</h4>
                    {{-- Begin Form --}}
                    <form method="POST" action="{{ url('/admin/review/' . $review->id . '/update')}}" enctype="multipart/form-data">
                        {{-- <form method="POST" action="{{ url('/admin/review/update/' . $review->id . '/')}}" enctype="multipart/form-data"> --}}
                        @csrf
                        @method('patch')
                        {{-- Recensie aanpassen --}} 
                        <div class="row">      
                            <div class="col-md-6">
                                <div class="card">  
                                    <div class="card-body">      
                                        <div class="form-group"><label for="inputTitle">Titel</label>
                                            <input type="text" class="form-control" id="inputTitle" name="title" value="{{ old('title', $review->title) }}" required>
                                        </div>
                                        <div class="form-group"><label for="inputKlant">Klant</label> 
                                            <select id="inputKlant" name="customer_id" class="form-control" required>
                                                @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}" @if( $customer->id == $review->customer_id) selected @endif>
                                                    {{ $customer->first_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group"><label for="inputKlant">Product</label> 
                                            <select id="inputKlant" name="product_id" class="form-control" required>
                                                @foreach ($products as $product)
                                                <option value="{{ $product->id }}" @if( $product->id == $review->product_id) selected @endif>
                                                    {{ $product->product_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group"><label for="inputKlant">Sterren</label> 
                                            <select id="inputKlant" name="rating" class="form-control" required>
                                                <option value="{{$review->rating }}"></option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        {{-- <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-legend col-sm-2">Status:</legend>
                                                    <div class="col-sm-10">
                                                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="checked">Goedgekeurd</label></div>
                                                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">Afgekeurd</label></div>
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
                                                    <input type="text" name="created_at" class="form-control bdc-grey-200 start-date" value="{{ $review->created_at }}">
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
                                        <textarea class="textArea-layout-reviews" name="message" id="descriptionReview" cols="30" rows="10" required>{{ old('message', $review->message) }}</textarea>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="row">   
                                <div class="btn-back">
                                        <a class="btn btn-primary tables-function-button" href="{{ route('reviews') }}">Terug</a>
                                </div>
                                <div class="btn-add-newsletter-layout">
                                    <button class="btn btn-primary tables-function-button" type="submit">Recensie Wijzigen</button>
                                </div>                
                            </div>     

                            {{-- error handling --}}
                            @if($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" style="text-align: center;">
                                {{ $error }}
                            </div>
                            @endforeach
                            @endif
                            {{-- end error handling --}}
                    </form>
                    {{-- Eind Form --}}         
                    {{-- Eind Nieuwsbrief toevoegen --}}

                            
            </div>
        </div>
    </div>
</div>





@endsection