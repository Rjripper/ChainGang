@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Gebruiker</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Gebruiker wijzigen</h4>
                <div class="row">
                    {{-- <div class="col-md-2 mb-3">
                        <div class="user-upload-image">
                            <div class="text-center">
                                <i class="ti-plus user-upload-plus"></i>
                                <p class="user-upload-text">FOTO UPLOADEN</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-8">
                            <div class="row">
                                
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">Voornaam</label> 
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name', $user->first_name)}}" placeholder="Voornaam" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="last_name">Achternaam</label> 
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name', $user->last_name)}}" placeholder="Achternaam" required>
                                </div>
                            
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email">E-mailadres</label> 
                                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="E-mailadres" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="is_admin">Admin</label>
                                    <input type="checkbox" style="display: block;height: 30px;width: 30px;" id="is_admin" name="is_admin" {{old('is_admin', $user->is_admin) == 1 ? 'checked' : ''}}>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username">Gebruikersnaam</label>
                                    <input type="text" class="form-control" id="username" name="username" value="{{old('username', $user->username)}}" placeholder="Gebruikersnaam" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="current_password">Huidige wachtwoord</label> 
                                    <input type="password" class="form-control" id="current_password" name="current_password" value="" password>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3"></div>
                                <div class="col-md-6 mb-6">
                                    <label for="new_password">Nieuwe wachtwoord</label> 
                                    <input type="password" class="form-control" id="new_password" name="new_password" value="" password>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 mb-3"></div>
                                <div class="col-md-6 mb-6">
                                    <label for="confirm_password">Nieuwe wachtwoord bevesteging</label> 
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="" password>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-6">
                            <a class="btn btn-primary tables-function-button" href="{{ route('users') }}">Terug</a> 
                        </div>
                        <div class="col-md-6 mb-6">
                            <div class="text-right">
                                <button class="btn btn-primary tables-function-button" onclick="updateUser({{$user->id}});" type="button">Gebruiker Wijzigen</button>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function updateUser(user_id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    
        var form_data = new FormData();
        form_data.append('_method', 'PATCH');
        form_data.append('_token', CSRF_TOKEN);
        form_data.append('first_name', $('#first_name').val());
        form_data.append('last_name', $('#last_name').val());
        form_data.append('email', $('#email').val());
        let admin = 0;
        if($('#is_admin').is(":checked"))
        {
            admin = 1;
        }
        form_data.append('is_admin', admin);
        form_data.append('username', $('#username').val());
        form_data.append('current_password', $('#current_password').val());
        form_data.append('new_password', $('#new_password').val());
        form_data.append('confirm_password', $('#confirm_password').val());
    
        event.preventDefault();
        
        $.ajax({
            url: '/admin/user/update/' + user_id,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'POST',
            success: function(){
                Swal.fire({
                    type: 'success',
                    title: 'Wijziging Gebruiker',
                    html: "U heeft de gebruiker aangepast.",
                    timer: 3000
                });
            },
            error: function(response) {
                let errors = response.responseJSON.errors;
                let myErrors = "";
                for (let key in errors) {
                    for(let index in errors[key]) {
                        myErrors += "<p style='color: red; margin:0; padding:0; text-align: left;'>" + errors[key][index] + "</p>";
                    }
                }
    
                Swal.fire({
                    type: 'error',
                    title: 'Wijziging Gebruiker!',
                    html: "Er traden foutmeldingen op tijdens het wijzigen van de gebruiker.<br><br>" + myErrors,
                    showConfirmButton: false,
                    timer: 3000
                });
            }
        });
    }
</script>
@endsection

