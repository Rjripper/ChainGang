@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Gebruiker</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Gebruiker wijzigen</h4>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <div class="user-upload-image">
                            <div class="text-center">
                                <i class="ti-plus user-upload-plus"></i>
                                <p class="user-upload-text">FOTO UPLOADEN</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="masonry-item col-md-12">
                                <form class="container" id="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6 mb-3"><label for="validationCustom01">Voornaam</label> <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required></div>
                                        <div class="col-md-6 mb-3"><label for="validationCustom02">Achternaam</label> <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">E-mailadres</label> <input type="text" class="form-control" id="validationCustom03" placeholder="markotto@frank.com" required>
                                            <div class="invalid-feedback">Gebruik een geldig E-mailadres.</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Rol</label> 
                                                <select id="inputState" class="form-control">
                                                    <option selected="selected">Gebruiker</option>
                                                    <option>Admin</option>
                                                </select>
                                            <div class="invalid-feedback">Gebruik een geldig E-mailadres.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Adres</label> <input type="text" class="form-control" id="validationCustom03" placeholder="Kerklaan 69" required>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom04">Plaats</label> <input type="text" class="form-control" id="validationCustom04" placeholder="Amsterdam" required>
                                            <div class="invalid-feedback">Please provide a valid plaats.</div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom05">Telefoonnummer</label> <input type="text" class="form-control" id="validationCustom05" placeholder="+31643284931" required>
                                            <div class="invalid-feedback">Please provide a valid telefoonnummer.</div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom03">Huidige wachtwoord</label> <input type="password" class="form-control" id="validationCustom03" placeholder="" required password>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom03">Nieuwe wachtwoord</label> <input type="password" class="form-control" id="validationCustom03" placeholder="" required password>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom03">Nieuwe wachtwoord bevesteging</label> <input type="password" class="form-control" id="validationCustom03" placeholder="" password required>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-6">
                                            <a class="btn btn-primary tables-function-button" href="{{ route('users') }}">Terug</a> 
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <div class="text-right">
                                                <a href="#"><button class="btn btn-primary tables-function-button" type="submit">Gebruiker Wijzigen</button></a> 
                                            </div>
                                        </div>
                                    </div>  
                                </form>
                                <script>!function(){"use strict";window.addEventListener("load",function(){var e=document.getElementById("needs-validation");e.addEventListener("submit",function(t){!1===e.checkValidity()&&(t.preventDefault(),t.stopPropagation()),e.classList.add("was-validated")},!1)},!1)}()</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

