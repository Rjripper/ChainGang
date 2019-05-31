@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Uitverkoop</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="c-grey-900 mB-20">Uitverkoop - Zomer 2019 (1)</h4>
                        {{-- Begin Form--}}               
                        <div class="form-group"><label for="disabledTextInput">Titel</label> <input type="text" id="disabledTextInput" class="form-control" disabled></div>
                        <div class="form-group"><label for="disabledTextInput">Korting (%)</label> <input type="text" id="disabledTextInput" class="form-control" disabled></div>                            
                        <div class="form-group"><label for="inputProduct">Product</label> 
                            <select id="disabledSelect" class="form-control" disabled>
                                <option>Product</option>
                            </select>
                        </div>
                        <div class="form-group"><label for="inputMedewerker">Medewerker</label>                                 
                            <select id="disabledSelect" class="form-control" disabled>
                                <option>Medewerker</option>`
                                <option>Medewerkesr</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="fw-500">Start datum</label>
                            <div class="timepicker-input input-icon form-group">
                                <div class="input-group">
                                    <div class="input-group-addon bgc-white bd bdwR-0">
                                        <i class="ti-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Start Datum" data-provide="datepicker" disabled>
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
                                    <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Eind Datum" data-provide="datepicker" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                <div class="row">   
                    <div class="btn-back">
                        <a href="{{ url('/admin/sales') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                    </div>
                    <div class="btn-add-newsletter-layout">
                    </div>                
                </div>                 
            </div>
        </div>
    </div>
</div>





@endsection