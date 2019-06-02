@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Uitverkoop</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Uitverkopen</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
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
                                    <th>ID</th>
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
                            @foreach ($sales as $sale) 
                            <tr>
                                <td>{{$sale->id}}</td>
                                <td>{{$sale->title}}</td>
                                <td>{{$sale->sale}}%</td>
                                <td>{{$sale->product->product_name}}</td>
                                <td>{{$sale->start_date}}</td>
                                <td>{{$sale->user->username}}</td>
                                <td>{{$sale->end_date}}</td>                                
                                <td>
                                    <div class="text-center">         
                                        <a class="table-icon-link tables-icons" href="{{  url('/admin/sale/'. $sale->id) }} }}"><i class="ti-eye"></i></a>                               
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/sale/edit/'. $sale->id) }}"><i class="ti-pencil"></i></a>
                                        {{-- Data-id = Order_id --}}
                                        <i class="ti-trash tables-icons" onclick="removeProduct(this);" data-id="{{$sale->id}}">
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            {{-- Loop this with all Orders --}}
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="btn-add-index">
                                <a href="{{ route ('createSale') }}"><button class="btn btn-primary tables-function-button">Korting aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@endsection