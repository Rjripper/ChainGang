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
                        <h1>&nbsp; Mijn Bestellingen</h1>
                    </div>
                </div>
                <div class="row">
                    {{-- klant menu --}}
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="card" style="width:50%;">
                            <ul class="list-group list-group-flush list-links">
                                <li class="list-group-item"><a href="{{ url('/account/overzicht') }}">Details</a></li>
                                <li class="list-group-item"><a href="{{ url('/account/bestellingen') }}">Orders</a></li>
                                <li class="list-group-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                    {{-- Einde klant menu --}}
                    <div class="col-md-8 col-sm-6 col-xs-6">
                    {{-- start order tabel --}}
                    <table class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Factuur Nummer</th>
                                <th>Bestellings Datum</th>
                                <th>Status</th>
                        </thead>
                        <tbody>
                            @if($orders->count() > 0)
                                @foreach ($orders as $order)
                                    <tr>
                                        <td><a href="{{ url('/account/bestellingen/overzicht/'. $order->id) }}">{{ $order->id }}</a></td>
                                        <td>{{ $order->created_at }}</td>
                                        @if($order->status != null)
                                        <td>{{ $order->status->title }}</td>
                                        @endif
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