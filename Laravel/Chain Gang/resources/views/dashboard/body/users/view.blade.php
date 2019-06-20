@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Gebruikers</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
            <h4 class="c-grey-900 mB-20">Gebruiker - {{ $user->getFullName() }}</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">                                        
                            <div class="col-md-6 mb-3">
                                <label for="first_name">Voornaam</label> 
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{$user->first_name}}" placeholder="Voornaam" required disabled>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="last_name">Achternaam</label> 
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{$user->last_name}}" placeholder="Achternaam" required disabled>
                            </div>
                        
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email">E-mailadres</label> 
                                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email}}" placeholder="E-mailadres" required disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="is_admin">Admin</label>
                                <input type="hidden" name="is_admin" value="0"> 
                                <input type="checkbox" style="display: block;height: 30px;width: 30px;" id="is_admin" name="is_admin" value="1" {{$user->is_admin == 1 ? 'checked' : ''}} disabled>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="username">Gebruikersnaam</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}" placeholder="Gebruikersnaam" required disabled>
                            </div>
                            <div class="col-md-6 mb-3">
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