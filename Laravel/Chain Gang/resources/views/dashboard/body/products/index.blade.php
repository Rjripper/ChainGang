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
                                <td><img class="user-table-avatar" style="border-radius: 100%;" src="{{asset ($product->product_images)}}" alt="Product plaatje"></td>
                                <td>{{$product->id}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->brand->title}}</td>
                                <td>{{$product->type->title}}</td>
                                <td>{{$product->category->title}}</td>
                                <td>&euro;{{$product->price}}</td>
                                <td>
                                    <div class="text-center">
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/product/'. $product->id .'/') }} "><i class="ti-eye"></i></a>
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/product/edit/'. $product->id) }} "><i class="ti-pencil"></i></a>
                                        {{-- Data-id = User_id --}}
                                        <i class="ti-trash tables-icons"  data-id="{{$product->id}}" data-product_name="{{$product->product_name}}" onclick="deleteProduct(this);"></i>
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


    <script>
        function deleteProduct(node) {
            let customer_id = node.getAttribute('data-id');
            let product_name = node.getAttribute('data-product_name');

            Swal.fire({
                title: 'Weet je het zeker?',
                text: "Je kan deze optie niet terug zetten.",
                type: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Annuleren',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ja, verwijder ('+ product_name  +')!'
                }).then((result) => {
                if (result.value) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    
                    var form_data = new FormData();
                    form_data.append('_method', 'DELETE');
                    form_data.append('_token', CSRF_TOKEN);
            
                    $.ajax({
                        url: '/admin/product/delete/' + customer_id,
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function(){
                            node.parentElement.parentElement.parentElement.parentElement.removeChild(node.parentElement.parentElement.parentElement);
                            Swal.fire(
                            'Verwijderd!',
                            'Product is verwijderd!',
                            'success'
                            );
                        },
                        error: function(errors) {
                            console.log(errors);
                        }
                    });
                    
                }
            });
            
        }
        
    </script>
@endsection