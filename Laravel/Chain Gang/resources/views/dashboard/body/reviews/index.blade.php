@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Recensies</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Recensies</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Titel</th>
                                <th>Beoordeling</th>
                                <th>Product</th>
                                <th>Aanmaak datum</th>
                                <th>Gemaakt door</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Titel</th>
                                <th>Beoordeling</th>
                                <th>Product</th>
                                <th>Aanmaak datum</th>
                                <th>Gemaakt door</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Reviews --}}
                            <tr>
                                <td>Coole fiets!</td>
                                <td>5</td>
                                <td>E-Bike</td>
                                <td>23-03-2019 12:03:22</td>
                                <td>Mike</td>
                                <td>Goedgekeurd</td>                               
                                <td>
                                    <div class="text-center">         
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/review/1/') }} "><i class="ti-eye"></i></a>                               
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/review/edit/1') }} "><i class="ti-pencil"></i></a>
                                        {{-- Data-id = Review_id --}}
                                        <i class="ti-trash tables-icons remove-user-icon" data-id="1"></i>
                                    </div>
                                </td>
                            </tr>
                            {{-- Loop this with all Reviews --}}
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="btn-add-index">
                                <a href="{{ url('/admin/review/create') }}"><button class="btn btn-primary tables-function-button">Recensie Aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@endsection