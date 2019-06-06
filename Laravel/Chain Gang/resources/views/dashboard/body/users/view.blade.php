@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Gebruikers</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
            <h4 class="c-grey-900 mB-20">Gebruiker - {{ $user->getFullName() }}</h4>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <img class="table-user-image" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje">
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="masonry-item col-md-12">
                                <form class="container" id="needs-validation" novalidate>
                                    <div class="row">                                        
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">Voornaam</label> 
                                            <input type="text" class="form-control" id="validationCustom01" name="first_name" value="{{$user->first_name}}" placeholder="Voornaam" required disabled>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Achternaam</label> 
                                            <input type="text" class="form-control" id="validationCustom02" name="last_name" value="{{$user->last_name}}" placeholder="Achternaam" required disabled>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">E-mailadres</label> 
                                            <input type="text" class="form-control" id="validationCustom03" name="email" value="{{ $user->email}}" placeholder="E-mailadres" required disabled>
                                            <div class="invalid-feedback">Gebruik een geldig E-mailadres.</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Admin</label>
                                            <input type="hidden" name="is_admin" value="0"> 
                                            <input type="checkbox" style="display: block;height: 30px;width: 30px;" id="validationCustom03" name="is_admin" value="1" {{$user->is_admin == 1 ? 'checked' : ''}} disabled>
                                            <div class="invalid-feedback">Gebruik een geldig E-mailadres.</div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Gebruikersnaam</label>
                                            <input type="text" class="form-control" id="validationCustom03" name="username" value="{{$user->username}}" placeholder="Gebruikersnaam" required disabled>
                                            <div class="invalid-feedback">Gebruik een geldig Gebruikersnaam.</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
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