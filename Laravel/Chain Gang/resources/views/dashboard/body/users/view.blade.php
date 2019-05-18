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
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="" disabled required>
                                        </div>
                                        <div class="col-md-6 mb-3"><label for="validationCustom02">Achternaam</label>
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="" disabled required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">E-mailadres</label>
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="" disabled required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Rol</label> 
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="" disabled required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Adres</label>
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="" disabled required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom04">Plaats</label>
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="" disabled required>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom05">Telefoonnummer</label>
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="" disabled required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Registratie datum</label>
                                            <div class="timepicker-input input-icon form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon bgc-white bd bdwR-0">
                                                        <i class="ti-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control bdc-grey-200 start-date" placeholder="Eind Datum" data-provide="datepicker" disabled>
                                                </div>
                                            </div>
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

