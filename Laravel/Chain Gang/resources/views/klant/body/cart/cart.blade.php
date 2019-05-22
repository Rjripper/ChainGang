@extends('klant.index')

@section('body')
<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">card</li>
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
            {{-- Start checkout-form --}}
            <form id="checkout-form" class="clearfix">
                @csrf
                <div class="col-md-12">
                    <div class="order-summary clearfix">
                        <div class="section-title">
                            <h3 class="title">Controleer order</h3>
                        </div>
                        {{-- Inhoud van de winkelwagen --}}
                        <table class="shopping-cart-table table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th></th>
                                    <th class="text-center">Prijs</th>
                                    <th class="text-center">Aantal</th>
                                    <th class="text-center">Totaal</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
                                    <td class="details">
                                        <a href="#">Product naam komt hier</a>
                                        <ul>
                                            <li><span>Maat: XL</span></li>
                                            <li><span>Kleur: Camelot</span></li>
                                        </ul>
                                    </td>
                                    <td class="price text-center"><strong>€32.50</strong><br><del class="font-weak"><small>€40.00</small></del></td>
                                    <td class="qty text-center"><input class="input" type="number" value="1"></td>
                                    <td class="total text-center"><strong class="primary-color">€32.50</strong></td>
                                    <td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>SUBTOTAAL</th>
                                    <th colspan="2" class="sub-total">$97.50</th>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>VERZENDKOSTEN</th>
                                    <td colspan="2">Free Shipping</td>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>TOTAAL</th>
                                    <th colspan="2" class="total">$97.50</th>
                                </tr>
                            </tfoot>
                        </table>
                        {{-- Einde inhoud van de winkelwagen --}}
                        <div class="pull-right">
                            <button class="primary-btn"><a href="{{url('/checkout')}}">Plaats bestelling</a></button>
                        </div>
                    </div>

                </div>
            </form>
            {{-- Einde checkout-form --}}
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection