@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Recensie</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Recensie Aanpassen</h4>
                    {{-- Recensie aanpassen --}} 
                    <div class="row">      
                        <div class="col-md-6">
                            <div class="card">  
                                <div class="card-body">      
                                    <div class="form-group"><label for="title">Titel</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $review->title) }}" required>
                                    </div>
                                    <div class="form-group"><label for="customer">Klant</label> 
                                        <select id="customer" name="customer_id" class="form-control" required>
                                            @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}" @if( $customer->id == $review->customer_id) selected @endif>
                                                {{ $customer->first_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group"><label for="product">Product</label> 
                                        <select id="product" name="product_id" class="form-control" required>
                                            @foreach ($products as $product)
                                            <option value="{{ $product->id }}" @if( $product->id == $review->product_id) selected @endif>
                                                {{ $product->product_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group"><label for="rating">Sterren</label> 
                                        <select id="rating" name="rating" class="form-control" required>
                                            <option>{{$review->rating }}</option>
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
                                    <div class="form-group">
                                        <label class="fw-500">Aanmaak datum</label>
                                        <div class="timepicker-input input-icon form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon bgc-white bd bdwR-0">
                                                    <i class="ti-calendar"></i>
                                                </div>
                                                <input type="text" id="created_at" name="created_at" class="form-control bdc-grey-200 start-date" value="{{ $review->created_at }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <label class="fw-500">Opmerking:</label>
                                    <textarea class="textArea-layout-reviews" name="message" id="message" cols="30" rows="10" required>{{ old('message', $review->message) }}</textarea>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="btn-back">
                                <a class="btn btn-primary tables-function-button" href="{{ route('reviews') }}">Terug</a>
                        </div>
                        <div class="btn-add-newsletter-layout">
                            <button class="btn btn-primary tables-function-button" onclick="updateReview({{$review->id}})" type="button">Recensie Wijzigen</button>
                        </div>                
                    </div>      
            </div>
        </div>
    </div>
</div>
<script>
function updateReview(review_id) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var form_data = new FormData();
    form_data.append('_method', 'PATCH');
    form_data.append('_token', CSRF_TOKEN);
    form_data.append('title', $('#title').val());
    form_data.append('customer_id', $('#customer').val());
    form_data.append('product_id', $('#product').val());
    form_data.append('rating', $('#rating').val());
    form_data.append('message', $('#message').val());
    form_data.append('created_at', $('#created_at').val());

    event.preventDefault();
    
    $.ajax({
        url: '/admin/review/update/' + review_id,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(){
            Swal.fire({
                type: 'success',
                title: 'Wijziging Recensie',
                html: "U heeft de recensie aangepast.",
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
                title: 'Wijziging Recensie!',
                html: "Er traden foutmeldingen op tijdens het wijzigen van de recensie.<br><br>" + myErrors,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
}
</script>
@endsection