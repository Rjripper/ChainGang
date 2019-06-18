@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Uitverkoop</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Uitverkopen</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titel</th>
                                <th>Korting</th>
                                <th>Product</th>
                                <th>Start datum</th>
                                <th>Medewerker</th>
                                <th>Eind datum</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <tr>
                                    <th>ID</th>
                                    <th>Titel</th>
                                    <th>Korting</th>
                                    <th>Product</th>
                                    <th>Start datum</th>
                                    <th>Medewerker</th>
                                    <th>Eind datum</th>
                                    <th></th>
                                </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Orders --}}
                            @foreach ($sales as $sale) 
                            <tr>
                                <td>{{$sale->id}}</td>
                                <td>{{$sale->title}}</td>
                                <td>{{$sale->sale}}%</td>
                                <td>{{$sale->product->product_name}}</td>
                                <td>{{$sale->start_date}}</td>
                                <td>{{$sale->user->username}}</td>
                                <td>{{$sale->end_date}}</td>                                
                                <td>
                                    <div class="text-center">
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/sale/'. $sale->id . '/') }}"><i class="ti-eye"></i></a>                          
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/sale/edit/'. $sale->id . '/') }}"><i class="ti-pencil"></i></a>
                                        {{-- Data-id = Order_id --}}
                                        <i class="ti-trash tables-icons" data-id="{{$sale->id}}" data-title="{{$sale->title}}" onclick="deleteSale(this);"></i> 
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            {{-- Loop this with all Orders --}}
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="btn-add-index">

                                <a href="{{ route ('createSale') }}"><button class="btn btn-primary tables-function-button">Korting aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <script>
    function deleteSale(node) {
        let sale_id = node.getAttribute('data-id');
        let title = node.getAttribute('data-title');

        Swal.fire({
            title: 'Weet je het zeker?',
            text: "Je kan deze optie niet terug zetten.",
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Annuleren',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ja, verwijder ('+ title  +')!'
            }).then((result) => {
            if (result.value) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', CSRF_TOKEN);
        
                $.ajax({
                    url: '/admin/sale/delete/' + sale_id,
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
                        'Uitverkoop is verwijderd!',
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