@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Reviews</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Reviews</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Totaal aantal reviews</th>
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
                                <th>Totaal aantal reviews</th>
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
                                <td>23</td>
                                <td>zomer uitverkoop</td>
                                <td>5</td>
                                <td>groot fietsje</td>
                                <td>23-03-2019 12:03:22</td>
                                <td>muffie</td>
                                <td>Goedgekeurd</td>                               
                                <td>
                                    <div class="text-center">         
                                        <a class="table-icon-link tables-icons" href="{{ url('/reviews/1/') }} "><i class="ti-eye"></i></a>                               
                                        <a class="table-icon-link tables-icons" href="{{ url('/reviews/update') }} "><i class="ti-pencil"></i></a>
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
                            <div class="btn-add-newsletter-layout">
                                <a href="{{ url('/reviews/create') }}"><button class="btn btn-primary tables-function-button">Review aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@endsection