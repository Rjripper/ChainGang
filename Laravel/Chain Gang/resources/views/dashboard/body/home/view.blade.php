@extends('dashboard.index')

@section('body')
    <div class="row">
        @include('dashboard.body.home.small-graphs')
    </div>
    <br>
    <div class="row">
        @include('dashboard.body.home.visitors-and-graph')
    </div>
    <br>
    <div class="row">
        @include('dashboard.body.home.sales', compact('month_name', 'current_year', 'orders', 'total_price'))
    </div>
@endsection