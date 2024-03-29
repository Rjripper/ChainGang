@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Recensies</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Recensies</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titel</th>
                                <th>Bericht</th>
                                <th>Beoordeling</th>
                                <th>Product</th>
                                <th>Aanmaak datum</th>
                                <th>Gemaakt door</th>
                                {{-- <th>Status</th> --}}
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Titel</th>
                                <th>Bericht</th>
                                <th>Beoordeling</th>
                                <th>Product</th>
                                <th>Aanmaak datum</th>
                                <th>Gemaakt door</th>
                                {{-- <th>Status</th> --}}
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Reviews --}}
                            @foreach ($reviews as $review)
                            <tr>
                                <td class="text-truncate" style="max-width:300px">{{ $review->id }}</td>
                                <td class="text-truncate" style="max-width:300px">{{ $review->title }}</td>
                                <td class="text-truncate" style="max-width:300px">{{ $review->message }}</td>
                                <td>{{ $review->rating }}</td>
                                <td>
                                    @php
                                    $productName = App\Product::Where('id', $review->product_id)->get();
                                    @endphp
                                    {{ $productName[0]->product_name }}
                                </td>
                                <td>{{ $review->created_at }}</td>
                                <td>
                                    @php
                                    $customerName = App\Customer::Where('id', $review->customer_id)->get();
                                    @endphp
                                    {{ $customerName[0]->first_name }}
                                </td>
                                {{-- <td>Goedgekeurd</td> --}}
                                <td>
                                    <div class="text-center">         
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/review/' . $review->id . '/') }} "><i class="ti-eye"></i></a>
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/review/edit/' . $review->id . '/') }} "><i class="ti-pencil"></i></a>
                                        {{-- Data-id = Review_id --}}
                                    <i class="ti-trash tables-icons" data-id="{{ $review->id }}" data-title="{{$review->title}}" onclick="deleteReview(this);"></i>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            {{-- End loop this with all Reviews --}}
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="btn-add-index">
                                <a href="{{ url('/admin/reviews/create') }}"><button class="btn btn-primary tables-function-button">Recensie Aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <script>
        function deleteReview(node) {
            let review_id = node.getAttribute('data-id');
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
                        url: '/admin/review/delete/' + review_id,
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
                            'Recensie is verwijderd!',
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