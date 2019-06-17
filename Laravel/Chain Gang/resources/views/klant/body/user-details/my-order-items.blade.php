@extends('klant.index')
@section('body')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            {{-- col --}}
            <div class="col">
                <h1>Mijn Bestellingen</h1>
            </div>
        </div>
        <div class="row">
            {{-- klant menu --}}
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="card" style="width:50%;">
                    <ul class="list-group list-group-flush list-links">
                        <li class="list-group-item"><a href="{{ url('/account/overzicht') }}">Details</a></li>
                        <li class="list-group-item"><a href="{{ url('/account/bestellingen') }}">Orders</a></li>
                        <li class="list-group-item"><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
            {{-- Einde klant menu --}}
            <div class="col-md-8 col-sm-6 col-xs-6">
            {{-- start order tabel --}}
            <table class="table table-hover" style="width:100%">
                <thead>
                    <tr>                        
                        <th>Product</th>
                        <th>Hoeveelheid</th>
                        <th>Totale Prijs</th>
                        <th></th>
                </thead>
                <tbody>
                    @if($order_items->count() > 0)
                        @foreach ($order_items as $order_item)
                            <tr>
                                <td>{{$order_item->product->product_name}}</a></td>
                                <td>{{ $order_item->amount }}</td>
                                <td>&euro;{{ $order_item->amount * $order_item->product->price }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    @endif
                </tbody>
          </table>
          {{-- Einde order tabel --}}
        </div>
        {{-- end row --}}
    </div>
    {{-- end container --}}
</div>
{{-- end section --}}
@endsection