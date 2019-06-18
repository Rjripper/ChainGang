@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Recensies</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Recensie Aanmaken</h4>
                {{-- Begin Form --}}
                    {{-- Resensie toevoegen --}} 
                    <div class="row">      
                        <div class="col-md-6">
                            <div class="card">  
                                <div class="card-body">      
                                    <div class="form-group"><label for="title">Titel</label> 
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Titel" required>
                                    </div>
                                        <div class="form-group"><label for="customer">Klant</label> 
                                        <select id="customer" name="customer_id" class="form-control" required>
                                                @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->first_name }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group"><label for="product">Product</label> 
                                        <select id="product" name="product_id" class="form-control" required>
                                            @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group"><label for="rating">Sterren</label> 
                                        <select id="rating" name="rating" class="form-control" required>
                                            <option selected="selected">Selecteer een aantal</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    {{-- <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-legend col-sm-2">Status:</legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="checked">Goedgekeurd</label></div>
                                                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">Afgekeurd</label></div>
                                                </div>
                                            </div>
                                    </fieldset> --}}
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <label class="fw-500">Opmerking:</label>
                                    <textarea class="textArea-layout-reviews" name="message" id="message" cols="30" rows="10" required></textarea>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="btn-back">
                            <a href="{{ route('reviews') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                        </div>
                        <div class="btn-add-newsletter-layout">
                            {{-- <a href="#"><button class="btn btn-primary tables-function-button">Review aanmaken</button></a> --}}
                            <button class="btn btn-primary tables-function-button" onclick="createReview();" type="button">Review aanmaken</button>
                        </div>                
                    </div>        
            </div>
        </div>
    </div>
</div>
<script>

function createReview() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var form_data = new FormData();
    form_data.append('_method', 'POST');
    form_data.append('_token', CSRF_TOKEN);
    form_data.append('title', $('#title').val());
    form_data.append('customer_id', $('#customer').val());
    form_data.append('product_id', $('#product').val());
    form_data.append('rating', $('#rating').val());
    form_data.append('message', $('#message').val());

    event.preventDefault();

    $.ajax({
        url: '/admin/review/store',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(){
            Swal.fire({
                type: 'success',
                title: 'Aanmaken Recensie',
                html: "U heeft een recensie aangemaakt.",
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
                title: 'Aanmaken Recensie!',
                html: "Er traden foutmeldingen op tijdens het aanmaken van een recensie.<br><br>" + myErrors,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
}
</script>
@endsection