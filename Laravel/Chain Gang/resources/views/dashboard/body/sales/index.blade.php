@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Korting</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Kortingen</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Hoeveelheid</th>
                                <th>Titel</th>
                                <th>Korting</th>
                                <th>Product</th>
                                <th>Start datum</th>
                                <th>Medewerker</th>
                                <th>Eind datum</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <tr>
                                    <th>Hoeveelheid</th>
                                    <th>Titel</th>
                                    <th>Korting</th>
                                    <th>Product</th>
                                    <th>Start datum</th>
                                    <th>Medewerker</th>
                                    <th>Eind datum</th>
                                    <th></th>
                                </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Orders --}}
                            <tr>
                                <td>23</td>
                                <td>zomer uitverkoop</td>
                                <td>20%</td>
                                <td>groot fietsje</td>
                                <td>23-03-2019 12:03:22</td>
                                <td>muffie</td>
                                <td>24-05-2019 15:03:22</td>                                
                                <td>
                                    <div class="text-center">         
                                        <a class="table-icon-link tables-icons" href="{{ url('/sales/1/') }} "><i class="ti-eye"></i></a>                               
                                        <a class="table-icon-link tables-icons" href="{{ url('/sales/update') }} "><i class="ti-pencil"></i></a>
                                        {{-- Data-id = Order_id --}}
                                        <i class="ti-trash tables-icons remove-user-icon" data-id="1"></i>
                                    </div>
                                </td>
                            </tr>
                            {{-- Loop this with all Orders --}}
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="btn-add-index">
                                <a href="{{ url('/sales/create') }}"><button class="btn btn-primary tables-function-button">Korting aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@endsection