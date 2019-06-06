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
                                {{-- Begin Form --}}
                                <form class="container" id="needs-validation" action="{{ url('/laravel/public/admin/user/'. $user->id.'/update')}}" method="POST">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">Voornaam</label> 
                                            <input type="text" class="form-control" id="validationCustom01" name="first_name" value="{{old('first_name', $user->first_name)}}" placeholder="Voornaam" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Achternaam</label> 
                                            <input type="text" class="form-control" id="validationCustom02" name="last_name" value="{{old('last_name', $user->last_name)}}" placeholder="Achternaam" required>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">E-mailadres</label> 
                                            <input type="text" class="form-control" id="validationCustom03" name="email" value="{{ old('email', $user->email) }}" placeholder="E-mailadres" required>
                                            <div class="invalid-feedback">Gebruik een geldig E-mailadres.</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Admin</label>
                                            <input type="hidden" name="is_admin" value="0"> 
                                            <input type="checkbox" style="display: block;height: 30px;width: 30px;" id="validationCustom03" name="is_admin" value="1" {{old('is_admin', $user->is_admin) == 1 ? 'checked' : ''}}>
                                            <div class="invalid-feedback">Gebruik een geldig E-mailadres.</div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Gebruikersnaam</label>
                                            <input type="text" class="form-control" id="validationCustom03" name="username" value="{{old('username', $user->username)}}" placeholder="Gebruikersnaam" required>
                                            <div class="invalid-feedback">Gebruik een geldig Gebruikersnaam.</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">Huidige wachtwoord</label> 
                                            <input type="password" class="form-control" id="current_password" name="current_password" value="" password>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            @if(session('error'))
                                                <div class="alert alert-danger" style="text-align: center;">
                                                    {{ session('error') }}
                                                </div>
                                            @endif

                                            @if($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <div class="alert alert-danger" style="text-align: center;">
                                                        {{ $error }}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label for="validationCustom03">Nieuwe wachtwoord</label> 
                                            <input type="password" class="form-control" id="new_password" name="new_password" value="" password>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">

                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label for="validationCustom03">Nieuwe wachtwoord bevesteging</label> 
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="" password>
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
                                {{-- Einde Form --}}
                                <script>!function(){"use strict";window.addEventListener("load",function(){var e=document.getElementById("needs-validation");e.addEventListener("submit",function(t){!1===e.checkValidity()&&(t.preventDefault(),t.stopPropagation()),e.classList.add("was-validated")},!1)},!1)}()</script>
                                {{-- als nieuw wachtwoord wordt ingevoerd zet dan new en confirm required --}}
                                <script>
                                    document.getElementById("current_password").addEventListener("input", function() {
                                        if(document.getElementById("current_password").value.length > 0) {
                                            document.getElementById('new_password').required = true;
                                            document.getElementById('confirm_password').required = true;
                                        }else {
                                            document.getElementById('new_password').required = false;
                                            document.getElementById('confirm_password').required = false;
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

