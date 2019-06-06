@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Recensies</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                
                    <h4 class="c-grey-900 mB-20">Recensie Aanmaken</h4>
                    {{-- Begin Form --}}
                    <form method="POST" action="{{ url('/admin/reviews/')}}" enctype="multipart/form-data">
                        @csrf
                        {{-- Resensie toevoegen --}} 
                        <div class="row">      
                            <div class="col-md-6">
                                <div class="card">  
                                    <div class="card-body">      
                                        <div class="form-group"><label for="inputTitle">Titel</label> 
                                            <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Titel" required>
                                        </div>
                                            <div class="form-group"><label for="inputKlant">Klant</label> 
                                            <select id="inputKlant" name="customer_id" class="form-control" required>
                                                    @foreach ($customers as $customer)
                                                    <option value="{{ $customer->id }}">{{ $customer->first_name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group"><label for="inputKlant">Product</label> 
                                            <select id="inputKlant" name="product_id" class="form-control" required>
                                                @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group"><label for="inputKlant">Sterren</label> 
                                            <select id="inputKlant" name="rating" class="form-control" required>
                                                <option selected="selected">Selecteer een aantal</option>
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
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="fw-500">Opmerking:</label>
                                        <textarea class="textArea-layout-reviews" name="message" id="descriptionReview" cols="30" rows="10" required></textarea>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="row">   
                                <div class="btn-back">
                                    <a href="{{ route('reviews') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                                </div>
                                <div class="btn-add-newsletter-layout">
                                    {{-- <a href="#"><button class="btn btn-primary tables-function-button">Review aanmaken</button></a> --}}
                                    <button class="btn btn-primary tables-function-button" type="submit">Review aanmaken</button>
                                </div>                
                            </div>        
                    </form>
                    {{-- Eind Form --}}
                    {{-- Nieuwsbrief toevoegen --}}
            </div>
        </div>
    </div>
</div>





@endsection