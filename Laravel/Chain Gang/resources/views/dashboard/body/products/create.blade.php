@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Product</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Product aanmaken</h4>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <div class="user-upload-image">
                            <div class="text-center">
                                <i class="ti-plus user-upload-plus"></i>
                                <p class="user-upload-text">FOTO'S UPLOADEN</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <form class="container" id="needs-validation" novalidate>
                            <div class="row">
                                <div class="masonry-item col-md-4">
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Product naam</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Product naam" required>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Merk</label>
                                            <select id="validationCustom03" class="form-control">
                                                <option selected="selected">Gazelle</option>
                                                <option>Batavus</option>
                                                <option>Altec</option>
                                            </select>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-7 md-3">
                                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Nieuwe merk naam" required>
                                                </div>
                                                <div class="col-md-5 md-3">
                                                    <button class="btn btn-primary">Toevoegen</button>
                                                </div>
                                            </div>                         
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Type</label>
                                            <select id="validationCustom03" class="form-control">
                                                <option selected="selected">E-Bike</option>
                                                <option>3-Wieler</option>
                                                <option>2-Wieler</option>
                                            </select>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-7 md-3">
                                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Nieuwe type" required>
                                                </div>
                                                <div class="col-md-5 md-3">
                                                    <button class="btn btn-primary">Toevoegen</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Categorie</label>
                                            <select id="validationCustom03" class="form-control">
                                                <option selected="selected">Heren</option>
                                                <option>Vrouwen</option>
                                                <option>Kinderen</option>
                                            </select>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-7 md-3">
                                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Nieuwe categorie" required>
                                                </div>
                                                <div class="col-md-5 md-3">
                                                    <button class="btn btn-primary">Toevoegen</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Prijs &euro;</label>
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="1200" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item col-md-8">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="validationCustom01">Beschrijving</label>
                                            <textarea  class="form-control"name="beschrijving" id="validationCustom01" cols="30" rows="10" placeholder="Beschrijving" required></textarea>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="validationCustom01">Specificaties</label>
                                            <textarea  class="form-control"name="beschrijving" id="validationCustom01" cols="30" rows="6" placeholder="Specificaties" required></textarea>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                    </div>
                                </div>
                                <script>!function(){"use strict";window.addEventListener("load",function(){var e=document.getElementById("needs-validation");e.addEventListener("submit",function(t){!1===e.checkValidity()&&(t.preventDefault(),t.stopPropagation()),e.classList.add("was-validated")},!1)},!1)}()</script>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-6">
                                    <a class="btn btn-primary tables-function-button" href="{{ route('products') }}">Terug</a> 
                                </div>
                                <div class="col-md-6 mb-6">
                                    <div class="text-right">
                                        <a href="#"><button class="btn btn-primary tables-function-button" type="submit">Product aanmaken</button></a> 
                                    </div>
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