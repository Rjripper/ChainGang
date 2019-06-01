@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Bestelling</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Bestellingen</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Factuur Nummer</th>
                                <th>Status</th>
                                <th>Klant</th>
                                <th>Medewerker</th>
                                <th>Track & Trace</th>
                                <th>Datum Bestelling</th>
                                <th>Prijs</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Factuur Nummer</th>
                                <th>Status</th>
                                <th>Klant</th>
                                <th>Medewerker</th>
                                <th>Track & Trace</th>
                                <th>Datum Bestelling</th>
                                <th>Prijs</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Orders --}}
                            @if($orders != null)
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->status_id}}</td>
                                        <td>{{$order->customer_id}}</td>
                                        <td>{{$order->user_id}}</td>
                                        <td>{{$order->track_and_trace}}</td>
                                        <td>{{$order->order_date}}</td>
                                        <td>€100,-</td>
                                        <td>
                                            <div class="text-center">                                        
                                                <a class="table-icon-link tables-icons" href="{{ url('/admin/order/1/') }} "><i class="ti-eye"></i></a>
                                                <a class="table-icon-link tables-icons" href="{{ url('/admin/order/edit/1/') }} "><i class="ti-pencil"></i></a>
                                                {{-- Data-id = Order_id --}}
                                                <i class="ti-trash tables-icons remove-user-icon" data-id="1"></i>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            {{-- Loop this with all Orders --}}
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="btn-add-index">
                                <a href="{{ url('/admin/order/create') }}"><button class="btn btn-primary tables-function-button">Bestelling Aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@endsection