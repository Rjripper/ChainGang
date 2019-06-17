@extends('dashboard.index')

@section('body')
<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Product</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">{{$product->product_name}}</h4>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <img class="table-user-image" src="{{asset( $product->product_images)}}" alt="Product foto">
                    </div>
                    <div class="col-md-10">
                        <form class="container" id="needs-validation" novalidate>
                            <div class="row">
                                <div class="masonry-item col-md-4">
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Product naam</label>
                                            <input type="text" class="form-control" id="validationCustom05" value="{{$product->product_name}}" placeholder="" disabled required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Merk</label>
                                            <select id="validationCustom03" class="form-control" disabled>
                                                @foreach ($brands as $brand)                                               
                                                {{-- geef waarde van de optie weer doe dit tussen <option>...</option> --}}
                                                    <option value="{{$brand->id}}" @if( $brand->id ==  $product->brand_id) selected @endif>{{$brand->title}}</option>
                                                @endforeach
                                            </select>                       
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Type</label>
                                            <select id="validationCustom03" class="form-control" disabled>
                                                @foreach ($types as $type)
                                                    <option value="{{$type->id}}" @if( $type->id ==  $product->type_id) selected @endif>{{$type->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Categorie</label>
                                            <select id="validationCustom03" class="form-control" disabled>
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}" @if($category->id ==  $product->category_id) selected @endif>{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10 md-3">
                                            <label for="validationCustom01">Prijs &euro;</label>
                                            <input type="text" class="form-control" id="validationCustom05" value="{{$product->price}}" placeholder="" disabled required>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item col-md-8">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="validationCustom01">Beschrijving</label>
                                            <textarea  class="form-control" id="validationCustom01" cols="30" rows="10" placeholder="Beschrijving" disabled>{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="validationCustom01">Specificaties</label>
                                            <textarea  class="form-control" id="validationCustom01" cols="30" rows="6" placeholder="Specificaties" disabled>{{$product->specifications}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 md-3">
                                    <a class="btn btn-primary tables-function-button" href="{{ route('products') }}">Terug</a> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection