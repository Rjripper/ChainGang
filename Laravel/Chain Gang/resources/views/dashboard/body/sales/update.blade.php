@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Uitverkoop</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="c-grey-900 mB-20">Uitverkoop Wijzigen</h4>

                        {{-- Begin Form--}}            
                        <div class="form-group"><label for="title">Titel</label> 
                            <input type="text" class="form-control" id="title" value="{{ old('title', $sale->title) }}"  name="title"></div>
                        <div class="form-group"><label for="sale">Korting (%)</label> 
                            <input type="text" class="form-control" id="sale" value="{{ old('sale', $sale->sale) }}" name="sale"></div>                           
                        <div class="form-group"><label for="product">Product</label> 
                            <select id="product" name="product_id" class="form-control">
                                @foreach ($products as $product)
                                {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                 <option value="{{$product->id}}" @if( $product->id ==  $sale->product_id) selected @endif>{{$product->product_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"><label for="reference">Medewerker</label> 
                            <select id="reference" name="user_id" class="form-control">
                                @foreach ($users as $user)
                                {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                 <option value="{{$user->id}}" @if( $user->id ==  $sale->user_id) selected @endif>{{$user->username}}</option>
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
                                    <input type="text" id="start_date" class="form-control bdc-grey-200 start-date date" value="{{$sale->start_date}}" name="start_date" placeholder="Start Datum" data-provide="datepicker">
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
                                    <input type="text" id="end_date" class="form-control bdc-grey-200 start-date date" value="{{$sale->end_date}}" name="end_date" placeholder="Eind Datum" data-provide="datepicker">
                                </div>
                            </div>
                        </div>
                        {{-- Eind Form--}}
                    </div>
                    <div class="col-sm"></div>
                  </div>               
               
                  <div class="row">   
                    <div class="btn-back">
                        <a href="{{ route('sales')  }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                    </div>
                    <div class="btn-add-newsletter-layout">
                        <button class="btn btn-primary tables-function-button" type="button" onclick="updateSale({{$sale->id}});">Uitverkoop Wijzigen</button>
                    </div>                
                </div>  
            </div>
        </div>
    </div>
</div>
<script>
function updateSale(sale_id) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var form_data = new FormData();
    form_data.append('_method', 'PATCH');
    form_data.append('_token', CSRF_TOKEN);
    form_data.append('title', $('#title').val());
    form_data.append('sale', $('#sale').val());
    form_data.append('product_id', $('#product').val());
    form_data.append('user_id', $('#reference').val());
    form_data.append('start_date', $('#start_date').val());
    form_data.append('end_date', $('#end_date').val());

    event.preventDefault();
    
    $.ajax({
        url: '/admin/sale/update/' + sale_id,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(){
            Swal.fire({
                type: 'success',
                title: 'Wijziging Uitverkoop',
                html: "U heeft de uitverkoop aangepast.",
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
                title: 'Wijziging Uitverkoop!',
                html: "Er traden foutmeldingen op tijdens het wijzigen van de uitverkoop.<br><br>" + myErrors,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
}
</script>
@endsection