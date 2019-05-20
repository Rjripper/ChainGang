@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Recensies</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                
                    <h4 class="c-grey-900 mB-20">Recensie Aanmaken</h4>
                    {{-- Begin Form --}}
                    <form>     
                        @csrf
                        {{-- Nieuwsbrief toevoegen --}} 
                        <div class="row">      
                            <div class="col-md-6">
                                <div class="card">  
                                    <div class="card-body">      
                                        <div class="form-group"><label for="inputTitle">Titel</label> <input type="text" class="form-control" id="inputTitle"></div>
                                        <div class="form-group"><label for="inputKlant">Klant</label> 
                                            <select id="inputKlant" class="form-control">
                                                <option selected="selected">Klant...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for="inputKlant">Product</label> 
                                            <select id="inputKlant" class="form-control">
                                                <option selected="selected">Product...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group"><label for="inputKlant">Sterren</label> 
                                            <select id="inputKlant" class="form-control">
                                                <option selected="selected">Sterren...</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-legend col-sm-2">Status:</legend>
                                                    <div class="col-sm-10">
                                                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="checked">Goedgekeurd</label></div>
                                                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">Afgekeurd</label></div>
                                                    </div>
                                                </div>
                                        </fieldset>
                                        <div class="form-group">
                                            <label class="fw-500">Aanmaak datum</label>
                                            <div class="timepicker-input input-icon form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon bgc-white bd bdwR-0">
                                                        <i class="ti-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Start Datum" data-provide="datepicker">
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
                                        <textarea class="textArea-layout-reviews" name="description" id="descriptionReview" cols="30" rows="10"></textarea>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- Begin Form --}}
                    <div class="row">   
                        <div class="btn-back">
                            <a href="{{ url('/reviews') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                        </div>
                        <div class="btn-add-newsletter-layout">
                            <a href="#"><button class="btn btn-primary tables-function-button">Reviews aanmaken</button></a> 
                        </div>                
                    </div>        
                    {{-- Nieuwsbrief toevoegen --}}


            </div>
        </div>
    </div>
</div>





@endsection