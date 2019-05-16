@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Product</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Product - E-bike Zoof 3000 (1)</h4>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <img class="table-user-image" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje">
                    </div>
                    <div class="col-md-10">
                        <form class="container" id="needs-validation" novalidate>
                            <div class="row">
                                <div class="masonry-item col-md-4">
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Product naam</label>
                                            <p class="table-detail-text">E-Bike Zoof 3000</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Merk</label>
                                            <select id="validationCustom03" class="form-control" disabled>
                                                <option selected="selected">Gazelle</option>
                                                <option>Batavus</option>
                                                <option>Altec</option>
                                            </select>                       
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Type</label>
                                            <select id="validationCustom03" class="form-control" disabled>
                                                <option selected="selected">E-Bike</option>
                                                <option>3-Wieler</option>
                                                <option>2-Wieler</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Categorie</label>
                                            <select id="validationCustom03" class="form-control" disabled>
                                                <option selected="selected">Heren</option>
                                                <option>Vrouwen</option>
                                                <option>Kinderen</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Prijs &euro;</label>
                                            <p class="table-detail-text">1200</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item col-md-8">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="validationCustom01">Beschrijving</label>
                                            <textarea  class="form-control"name="beschrijving" id="validationCustom01" cols="30" rows="10" placeholder="Beschrijving" disabled>2 Wieler, super snel.</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="validationCustom01">Specificaties</label>
                                            <textarea  class="form-control"name="beschrijving" id="validationCustom01" cols="30" rows="6" placeholder="Specificaties" disabled>Elektrisch, Snel, 27inch</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 md-3">
                                    <a class="btn btn-primary tables-function-button" href="{{ route('products') }}">Terug</a> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection