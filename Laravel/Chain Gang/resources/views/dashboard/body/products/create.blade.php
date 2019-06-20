@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Product</h4>

    
    {{-- begin Form --}}
    {{-- geef de forum een post en de action mee --}}
    {{-- bij action geef je het pad waar hij hem moet opslaan gewoon het zelfde als de get van index. --}}
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Product aanmaken</h4>
                <div class="row">

                    <div class="col-md-2 mb-3">
                        <div class="user-upload-image">
                            <div class="text-center">
                                {{-- Foto upload --}}
                                {{-- onderaan deze blade staat de javascript voor foto uploaden. --}}
                                <label for="upload-photo" class="ti-plus user-upload-plus" style="cursor: pointer;">     
                                    <img src="" alt="" id="blah" style="width: 100%; height: 100%; display:block;">                               
                                </label>
                                <input id="upload-photo" type="file" name="image" style="opacity: 0; z-index: -1;" onchange="readURL(this);">
                                <label for="upload-photo" style="cursor: pointer;">
                                    <p class="user-upload-text">FOTO'S UPLOADEN</p>
                                </label>
                                {{-- Eind Foto upload --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <form class="container" id="needs-validation" novalidate>
                            <div class="row">
                                <div class="masonry-item col-md-4">
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="product_name">Product naam</label>
                                            {{-- kijk naar de naam input field(naam moet het zelfde zijn als database table name) --}}
                                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product naam" required>
                                            <div class="invalid-feedback"><strong>Geef een product naam op.</strong></div>
                                            @if ($errors->has('product_name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('product_name') }}</strong>
                                            </span> 
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="brand">Merk</label>
                                            {{-- kijk naar de naam select(naam moet het zelfde zijn als database table name) --}}
                                            <select id="brand" name="brand_id" class="form-control">
                                                {{-- loop door elementen die je wilt laten weergeven in de dropdown --}}
                                                @foreach ($brands as $brand)
                                                    {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                                    <option value="{{$brand->id}}">{{$brand->title}}</option>
                                                @endforeach
                                            </select>        
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="type">Type</label>
                                            <select id="type" name="type_id" class="form-control">
                                                @foreach ($types as $type)
                                                    <option value="{{$type->id}}">{{$type->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="category">Categorie</label>
                                                <select id="category" name="category_id" class="form-control">
                                                    @foreach ($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                            </select>
                                            <br>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="price">Prijs &euro;</label>
                                            <input type="text" class="form-control" id="price" name="price" placeholder="1200" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item col-md-8">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="description">Beschrijving</label>
                                            <textarea  class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Beschrijving" required></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="specifications">Specificaties</label>
                                            <textarea  class="form-control" name="specifications" id="specifications" cols="30" rows="6" placeholder="Specificaties" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <a class="btn btn-primary tables-function-button" href="{{ route('products') }}">Terug</a> 
                            </div>
                            <div class="col-md-6 mb-6">
                                <div class="text-right">
                                    <button class="btn btn-primary tables-function-button" onclick="createProduct();" type="button">Product aanmaken</button>
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
//foto upload js
//gewoon in de blade laten staan.
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function createProduct() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var file_data = $('#upload-photo').prop('files')[0];

    var form_data = new FormData();
    form_data.append('_method', 'POST');
    form_data.append('_token', CSRF_TOKEN);
    form_data.append('product_name', $('#product_name').val());
    form_data.append('brand_id', $('#brand').val());
    form_data.append('type_id', $('#type').val());
    form_data.append('category_id', $('#category').val());
    form_data.append('price', $('#price').val());
    form_data.append('description', $('#description').val());
    form_data.append('specifications', $('#specifications').val());
    form_data.append('image', file_data);

    event.preventDefault();

    $.ajax({
        url: '/admin/product/store',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(){
            Swal.fire({
                type: 'success',
                title: 'Aanmaken Product',
                html: "U heeft een product aangemaakt.",
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
                title: 'Aanmaken Product!',
                html: "Er traden foutmeldingen op tijdens het aanmaken van een product.<br><br>" + myErrors,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
}
</script>
@endsection