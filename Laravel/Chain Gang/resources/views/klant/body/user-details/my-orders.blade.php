@extends('klant.index')
@section('body')
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">Mijn orders</li>
                </ul>
            </div>
        </div>
        <!-- /BREADCRUMB -->
	<!-- section -->
	<div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    {{-- col --}}
                    <div class="col">
                        <h1> mijn orders </h1>
                    </div>
                </div>
                <div class="row">
                    {{-- klant menu --}}
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="card" style="width:50%;">
                            <ul class="list-group list-group-flush list-links">
                            <li class="list-group-item"><a href="{{url('/my-account')}}">Details</a></li>
                            <li class="list-group-item"><a href="{{url('/my-orders')}}">Orders</a></li>
                            <li class="list-group-item"><a href="{{url('#')}}">Logout</a></li>
                        </ul>
                    </div>
                    </div>
                    {{-- Einde klant menu --}}
                    <div class="col-md-8 col-sm-6 col-xs-6">
                    {{-- start order tabel --}}
                    <table class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Order nummer</th>
                                <th>Datum</th>
                                <th>Status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                            </tr>
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