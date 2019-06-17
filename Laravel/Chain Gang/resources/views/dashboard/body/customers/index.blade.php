@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Klanten</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Klanten</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>E-mailadres</th>
                                <th>Telefoonnummer</th>
                                <th>Adres</th>
                                <th>Plaats</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>E-mailadres</th>
                                <th>Telefoonnummer</th>
                                <th>Adres</th>
                                <th>Plaats</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Users --}}
                            @if($customers != null)
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{{$customer->id}}</td>
                                        <td>{{$customer->first_name}}</td>
                                        <td>{{$customer->last_name}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->phonenumber}}</td>
                                        <td>{{$customer->address}}</td>
                                        <td>{{$customer->city}}</td>
                                        <td>
                                            <div class="text-center">
                                                <a class="table-icon-link tables-icons" href="{{ url('/admin/customer/' . $customer->id) }} "><i class="ti-eye"></i></a>
                                                <a class="table-icon-link tables-icons" href="{{ url('/admin/customer/edit/' . $customer->id) }} "><i class="ti-pencil"></i></a>
                                                {{-- Data-id = User_id --}}
                                                <i class="ti-trash tables-icons" onclick="deleteCustomer(this);" data-id="{{$customer->id}}"></i>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            {{-- Loop this with all Users --}}
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="text-right">
                                <a href="{{ route('createCustomer') }}"><button class="btn btn-primary tables-function-button">Klant aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteCustomer(node) {
            let customer_id = node.getAttribute('data-id');

            Swal.fire({
                title: 'Weet je het zeker?',
                text: "Je kan deze optie niet terug zetten.",
                type: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Annuleren',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ja, verwijder ('+ customer_id  +')!'
                }).then((result) => {
                if (result.value) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    
                    var form_data = new FormData();
                    form_data.append('_method', 'DELETE');
                    form_data.append('_token', CSRF_TOKEN);
            
                    $.ajax({
                        url: '/admin/customer/delete/' + customer_id,
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
                            'Klant is verwijderd!',
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