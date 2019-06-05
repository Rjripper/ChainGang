@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Klant</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Klant Wijzigen</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 mb-3"><label for="firstname">Voornaam</label>
                                <input type="text" class="form-control" id="firstname" value="{{$customer->first_name}}" required>
                            </div>
                            <div class="col-md-6 mb-3"><label for="lastname">Achternaam</label>
                                <input type="text" class="form-control" id="lastname" value="{{$customer->last_name}}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email">E-mailadres</label>
                                <input type="email" class="form-control" id="email" value="{{$customer->email}}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phonenumber">Telefoonnummer</label> 
                                <input type="text" class="form-control" id="phonenumber"value="{{$customer->phonenumber}}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="address">Adres</label>
                                <input type="text" class="form-control" id="address" value="{{$customer->address}}" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="city">Plaats</label>
                                <input type="text" class="form-control" id="city" value="{{$customer->city}}" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zipcode">Postcode</label>
                                <input type="text" class="form-control" id="zipcode" value="{{$customer->zip_code}}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <a class="btn btn-primary tables-function-button" href="{{ route('customers') }}">Terug</a> 
                            </div>
                            <div class="col-md-6 mb-6">
                                <div class="text-right">
                                    <button class="btn btn-primary tables-function-button" type="button" onclick="updateCustomer({{$customer->id}});">Klant wijzigen</button>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

function updateCustomer(user_id) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var form_data = new FormData();
    form_data.append('_method', 'PATCH');
    form_data.append('_token', CSRF_TOKEN);
    form_data.append('first_name', $('#firstname').val());
    form_data.append('last_name', $('#lastname').val());
    form_data.append('email', $('#email').val());
    form_data.append('phonenumber', $('#phonenumber').val());
    form_data.append('address', $('#address').val());
    form_data.append('city', $('#city').val());
    form_data.append('zip_code', $('#zipcode').val());
    form_data.append('password', $('#password').val());

    event.preventDefault();
    
    $.ajax({
        url: '/admin/customer/update/' + user_id,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(){
            Swal.fire({
                type: 'success',
                title: 'Wijziging Klant',
                html: "U heeft de klant aangepast.",
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
                title: 'Wijziging Klant!',
                html: "Er traden foutmeldingen op tijdens het wijzigen van de klant.<br><br>" + myErrors,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
}
</script>
@endsection

