@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Gebruikers</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Gebruiker - Mark Otto (3)</h4>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <img class="table-user-image" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje">
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="masonry-item col-md-12">
                                <form class="container" id="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-6 mb-3"><label for="validationCustom01">Voornaam</label>
                                            <p class="table-detail-text">Mark</p>
                                        </div>
                                        <div class="col-md-6 mb-3"><label for="validationCustom02">Achternaam</label>
                                            <p class="table-detail-text">Otto</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">E-mailadres</label>
                                            <p class="table-detail-text">Markotto@frank.com</p>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Rol</label> 
                                            <p class="table-detail-text">Gebruiker</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Adres</label>
                                            <p class="table-detail-text">Kerklaan 69</p>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom04">Plaats</label>
                                            <p class="table-detail-text">Amsterdam</p>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom05">Telefoonnummer</label>
                                            <p class="table-detail-text">+316403740372</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Registratie datum</label>
                                            <p class="table-detail-text">12:03:43 12/03/2019</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 mb-12">
                        <a href="{{ route('users') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>
@endsection

