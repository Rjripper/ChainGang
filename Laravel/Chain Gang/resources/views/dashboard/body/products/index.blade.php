@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Producten</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Producten</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Naam</th>
                                <th>Merk</th>
                                <th>Type</th>
                                <th>Categorie</th>
                                <th>Prijs</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Naam</th>
                                <th>Merk</th>
                                <th>Type</th>
                                <th>Categorie</th>
                                <th>Prijs</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Users --}}
                            @foreach ($products as $product)                                
                            
                            <tr>
                                <td><img class="user-table-avatar" src="https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100&ssl=1" alt="Gebruikers Plaatje"></td>
                                <td>{{$product->id}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->brand->title}}</td>
                                <td>{{$product->type->title}}</td>
                                <td>{{$product->category->title}}</td>
                                <td>&euro;{{$product->price}}</td>
                                <td>
                                    <div class="text-center">
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/product/1/') }} "><i class="ti-eye"></i></a>
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/product/edit/'. $product->id) }} "><i class="ti-pencil"></i></a>
                                        {{-- Data-id = User_id --}}
                                        <i class="ti-trash tables-icons remove-user-icon" data-id="1"></i>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            {{-- Loop this with all Users --}}

                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="text-right">
                                <a href="{{ url('/admin/product/create') }}"><button class="btn btn-primary tables-function-button">Product aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
@endsection