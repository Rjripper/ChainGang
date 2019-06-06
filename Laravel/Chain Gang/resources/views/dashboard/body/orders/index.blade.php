@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Bestelling</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Bestellingen</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Factuur Nummer</th>
                                <th>Status</th>
                                <th>Klant</th>
                                <th>Medewerker</th>
                                <th>Track & Trace</th>
                                <th>Datum Bestelling</th>
                                <th>Prijs</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Factuur Nummer</th>
                                <th>Status</th>
                                <th>Klant</th>
                                <th>Medewerker</th>
                                <th>Track & Trace</th>
                                <th>Datum Bestelling</th>
                                <th>Prijs</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Orders --}}
                            @if($orders != null)
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->status->title}}</td>
                                        <td>{{$order->customer->fullname}}</td>
                                        <td>{{$order->user->username}}</td>
                                        <td>{{$order->track_and_trace}}</td>
                                        <td>{{$order->order_date}}</td>
                                        <td>&euro; {{$order->total_price($order)}}</td>
                                        <td>
                                            <div class="text-center">                                        
                                                <a class="table-icon-link tables-icons" href="{{ url('/laravel/public/admin/order/' . $order->id) }} "><i class="ti-eye"></i></a>
                                                <a class="table-icon-link tables-icons" href="{{ url('/laravel/public/admin/order/edit/' . $order->id) }} "><i class="ti-pencil"></i></a>
                                                {{-- Data-id = Order_id --}}
                                                <i class="ti-trash tables-icons" data-id="{{$order->id}}" onclick="deleteOrder(this);"></i>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            {{-- Loop this with all Orders --}}
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="btn-add-index">
                                <a href="{{ url('/laravel/public/admin/order/create') }}"><button class="btn btn-primary tables-function-button">Bestelling Aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <script>
    function deleteOrder(node)
    {
        let order_id = node.getAttribute('data-id');
        Swal.fire({
            title: 'Weet je het zeker?',
            text: "Je kan deze optie niet terug zetten.",
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Annuleren',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ja, verwijder ('+ order_id  +')!'
            }).then((result) => {
                if (result.value) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    var form_data = new FormData();
                    form_data.append('_method', 'DELETE');
                    form_data.append('_token', CSRF_TOKEN);

                    
                    $.ajax({
                        url: '/laravel/public/admin/order/delete/' + order_id,
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
                            'Bestelling is verwijderd!',
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