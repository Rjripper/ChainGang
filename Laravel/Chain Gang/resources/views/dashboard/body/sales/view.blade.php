@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Korting</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm">
                        <h4 class="c-grey-900 mB-20">Overzicht Korting</h4>
                        <form>                    
                            <div class="form-group"><label for="disabledTextInput">Title</label> <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"></div>
                            <div class="form-group"><label for="disabledTextInput">Korting (%)</label> <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"></div>                            
                            <div class="form-group"><label for="inputProduct">Product</label> 
                                <select id="disabledSelect" class="form-control">
                                    <option>Product</option>
                                </select>
                            </div>
                            <div class="form-group"><label for="inputMedewerker">Medewerker</label>                                 
                                <select id="disabledSelect" class="form-control">
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
                                        <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Start Datum" data-provide="datepicker">
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
                                        <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Eind Datum" data-provide="datepicker">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-sm"></div>
                  </div>               
            </div>
        </div>
    </div>
</div>





@endsection