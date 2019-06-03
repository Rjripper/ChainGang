@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Product</h4>

    
    {{-- begin Form --}}
    {{-- geef de forum een post en de action mee --}}
    {{-- bij action geef je het pad waar hij hem moet opslaan gewoon het zelfde als de get van index. --}}
    <form method="POST" action="{{ url('/admin/product/')}}" enctype="multipart/form-data">
        @csrf
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
                                            <label for="validationCustom01">Product naam</label>
                                            {{-- kijk naar de naam input field(naam moet het zelfde zijn als database table name) --}}
                                            <input type="text" class="form-control" id="validationCustom01" name="product_name" placeholder="Product naam" required>
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
                                            <label for="validationCustom01">Merk</label>
                                            {{-- kijk naar de naam select(naam moet het zelfde zijn als database table name) --}}
                                            <select id="validationCustom03" name="brand_id" class="form-control">
                                                {{-- loop door elementen die je wilt laten weergeven in de dropdown --}}
                                                @foreach ($brands as $brand)
                                                {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                                 <option value="{{$brand->id}}">{{$brand->title}}</option>
                                                @endforeach
                                              </select>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-7 md-3">
                                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Nieuwe merk naam">
                                                </div>
                                                <div class="col-md-5 md-3">
                                                    <button class="btn btn-primary">Toevoegen</button>
                                                </div>
                                            </div>                         
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Type</label>
                                            <select id="validationCustom03" name="type_id" class="form-control">
                                                @foreach ($types as $type)
                                                    <option value="{{$type->id}}">{{$type->title}}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-7 md-3">
                                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Nieuwe type">
                                                </div>
                                                <div class="col-md-5 md-3">
                                                    <button class="btn btn-primary">Toevoegen</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Categorie</label>
                                            <select id="validationCustom03" name="category_id" class="form-control">
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                            </select>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-7 md-3">
                                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Nieuwe categorie">
                                                </div>
                                                <div class="col-md-5 md-3">
                                                    <button class="btn btn-primary">Toevoegen</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Prijs &euro;</label>
                                            <input type="text" class="form-control" id="validationCustom04" name="price" placeholder="1200" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item col-md-8">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="validationCustom01">Beschrijving</label>
                                            <textarea  class="form-control" name="description" id="validationCustom01" cols="30" rows="10" placeholder="Beschrijving" required></textarea>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="validationCustom01">Specificaties</label>
                                            <textarea  class="form-control" name="specifications" id="validationCustom01" cols="30" rows="6" placeholder="Specificaties" required></textarea>
                                            <div class="invalid-feedback">Please provide a valid adres.</div>
                                        </div>
                                    </div>
                                </div>
                                <script>!function(){"use strict";window.addEventListener("load",function(){var e=document.getElementById("needs-validation");e.addEventListener("submit",function(t){!1===e.checkValidity()&&(t.preventDefault(),t.stopPropagation()),e.classList.add("was-validated")},!1)},!1)}()</script>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-6">
                                    <a class="btn btn-primary tables-function-button" href="{{ route('products') }}">Terug</a> 
                                </div>
                                <div class="col-md-6 mb-6">
                                    <div class="text-right">
                                        <button class="btn btn-primary tables-function-button" type="submit">Product aanmaken</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </form>
        {{-- einde form --}}
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

</script>
@endsection