@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Klanten</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Klant - {{$customer->fullname}} ({{$customer->id}})</h4>
                <div class="row">
                    <div class="masonry-item col-md-12">
                        <form id="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3"><label for="firstname">Voornaam</label>
                                    <input type="text" class="form-control" id="firstname" value="{{$customer->first_name}}" disabled required>
                                </div>
                                <div class="col-md-6 mb-3"><label for="lastname">Achternaam</label>
                                    <input type="text" class="form-control" id="lastname" value="{{$customer->last_name}}" disabled required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email">E-mailadres</label>
                                    <input type="email" class="form-control" id="email" value="{{$customer->email}}" disabled required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phonenumber">Telefoonnummer</label> 
                                    <input type="text" class="form-control" id="phonenumber" value="{{$customer->phonenumber}}" disabled required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="address">Adres</label>
                                    <input type="text" class="form-control" id="address" value="{{$customer->address}}" disabled required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="city">Plaats</label>
                                    <input type="text" class="form-control" id="city" value="{{$customer->city}}" disabled required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zipcode">Postcode</label>
                                    <input type="text" class="form-control" id="zipcode" value="{{$customer->zip_code}}" disabled required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="created_at">Registratie datum</label>
                                    <div class="timepicker-input input-icon form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon bgc-white bd bdwR-0">
                                                <i class="ti-calendar"></i>
                                            </div>
                                            <input type="text" id="created_at" value="{{$customer->created_at}}" class="form-control bdc-grey-200 start-date" placeholder="Eind Datum" data-provide="datepicker" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 mb-12">
                        <a href="{{ route('customers') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>
@endsection

