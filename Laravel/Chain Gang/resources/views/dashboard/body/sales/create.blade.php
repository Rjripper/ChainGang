@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Uitverkoop</h4>
    {{-- begin Form --}}
    {{-- geef de forum een post en de action mee --}}
    {{-- bij action geef je het pad waar hij hem moet opslaan gewoon het zelfde als de get van index. --}}
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="c-grey-900 mB-20">Uitverkoop Aanmaken</h4>
                        {{-- Begin Form--}}             
                            <div class="form-group"><label for="title">Titel</label> 
                                <input type="text" class="form-control" id="title" name="title"></div>

                            <div class="form-group"><label for="sale" name="product_id">Korting in (%)</label> 
                                <input type="text" class="form-control" id="sale" name="sale"></div>       

                            <div class="form-group"><label for="product">Product</label> 
                                <select id="product" name="product_id" class="form-control">
                                    @foreach ($products as $product)
                                    {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                     <option value="{{$product->id}}">{{$product->product_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group"><label for="reference">Medewerker</label> 
                                <select id="reference" name="user_id" class="form-control">
                                    @foreach ($users as $user)
                                    {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                     <option value="{{$user->id}}">{{$user->username}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fw-500">Start datum</label>
                                <div class="timepicker-input input-icon form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon bgc-white bd bdwR-0">
                                            <i class="ti-calendar"></i>
                                        </div>
                                        <input type="text" id="start_date" class="form-control bdc-grey-200 start-date date" name="start_date" placeholder="Start Datum" data-provide="datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="fw-500">Eind datum</label>
                                <div class="timepicker-input input-icon form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon bgc-white bd bdwR-0">
                                            <i class="ti-calendar"></i>
                                        </div>
                                        <input type="text" id="end_date"  class="form-control bdc-grey-200 start-date date" name="end_date" placeholder="Eind Datum" data-provide="datepicker">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-sm"></div>                    
                  </div>

                  <div class="row">   
                    <div class="btn-back">
                        <a href="{{ url('/admin/sales') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                    </div>
                    <div class="btn-add-newsletter-layout">
                        <button class="btn btn-primary tables-function-button" type="button" onclick="createSale();">Korting aanmaken</button>
                    </div>                
                </div>    
            </div>
        </div>
    </div>
</div>

<script>
function createSale() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var form_data = new FormData();
    form_data.append('_method', 'POST');
    form_data.append('_token', CSRF_TOKEN);
    form_data.append('title', $('#title').val());
    form_data.append('sale', $('#sale').val());
    form_data.append('product_id', $('#product').val());
    form_data.append('user_id', $('#reference').val());
    form_data.append('start_date', $('#start_date').val());
    form_data.append('end_date', $('#end_date').val());

    event.preventDefault();

    $.ajax({
        url: '/admin/sale/store',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(){
            Swal.fire({
                type: 'success',
                title: 'Aanmaken Uitverkoop',
                html: "U heeft een uitverkoop aangemaakt.",
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
                title: 'Aanmaken Uitverkoop!',
                html: "Er traden foutmeldingen op tijdens het aanmaken van een uitverkoop.<br><br>" + myErrors,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
}
</script>

@endsection