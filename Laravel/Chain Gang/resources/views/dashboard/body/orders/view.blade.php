@extends('dashboard.index')
@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Bestelling</h4>
    <div class="row">
        <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Bestelling Aanmaken</h4>
                       
                        {{-- Begin Form --}}
                            {{-- Orders toevoegen --}}
                            <div class="row">
                                    <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group"><label for="title">Status</label> 
                                                <select id="status" class="form-control" disabled>
                                                    <option selected="selected">{{$order->status->title}}</option>
                                                </select>
                                            </div>
                                            <div class="form-group"><label for="creator">Auteur</label> 
                                                <select id="creator" class="form-control" disabled>
                                                    <option selected="selected">{{$order->user->username}}</option>
                                                </select>
                                            </div>
                                            <div class="form-group"><label for="customer">Klant</label> 
                                                <select id="customer" class="form-control" disabled>
                                                    <option selected="selected">{{$order->customer->email}}</option>
                                                </select>
                                            </div>                                  
                                            <div class="form-group"><label for="track_and_trace">Track & Trace</label> <input disabled type="text" value="{{$order->track_and_trace}}" class="form-control" id="track_and_trace"></div>
                                            <div class="form-group">
                                                <label class="fw-500">Datum van Bestelling</label>
                                                <div class="timepicker-input input-icon form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon bgc-white bd bdwR-0">
                                                            <i class="ti-calendar"></i>
                                                        </div>
                                                        <input type="text" value="{{$order->order_date}}" disabled class="form-control bdc-grey-200 start-date" id="order_date" placeholder="Datum van Bestelling" data-provide="datepicker">
                                                    </div>
                                                </div>
                                            </div>                                     
                                            <div class="form-group">
                                                <label class="fw-500">Datum van Verzending</label>
                                                <div class="timepicker-input input-icon form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon bgc-white bd bdwR-0">
                                                            <i class="ti-calendar"></i>
                                                        </div>
                                                        <input type="text" value="{{$order->shipped_date}}" disabled class="form-control bdc-grey-200 start-date" id="ship_date" placeholder="Datum van Verzending" data-provide="datepicker">
                                                    </div>
                                                </div>
                                            </div>         
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-sm-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="tafeltje" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Productnaam</th>
                                                        <th>Hoeveelheid</th>
                                                        <th>Prijs</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr> 
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th id="total_amount"></th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach ($items as $item)
                                                        <tr> 
                                                            <td><img style="width: 50px; height: 50px;" class="user-table-avatar" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje"></td>
                                                            <td>{{$item->product->product_name}} </td>
                                                            <td>{{$item->amount}} </td>
                                                            <td>&euro; {{$item->product->price}}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>  
                            {{-- EIND Form--}}
                            <div class="row">   
                                <div class="btn-back">
                                    <a href="{{ route('orders') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                                </div>       
                            </div>                  
                            {{-- EIND Orders toevoegen--}}
                    </div>
        </div>
    </div>
</div>

<script>
    let table = document.getElementById("tafeltje");
    table = table.children[2];


let total_amount = 0;
    for(let i = 0; i < table.children.length; i++){
        let price = table.children[i].children[3].innerText;
        price = price.replace('€', '');
        total_amount += parseFloat(price);
    }

    document.getElementById('total_amount').innerHTML = "&euro;" + total_amount;
</script>
@endsection