@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Categoriën</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Categoriën</h4>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titel</th>
                                <th>Updated at</th>
                                <th>Created at</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <tr>
                                    <th>ID</th>
                                    <th>Titel</th>
                                    <th>Updated at</th>
                                    <th>Created at</th>
                                    <th></th>
                                </tr>
                        </tfoot>
                        <tbody>
                            {{-- Loop this with all Orders --}}
                            @foreach ($categories as $category) 
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td>{{$category->updated_at}}</td>
                                <td>{{$category->created_at}}</td>                                
                                <td>
                                    <div class="text-center">         
                                        <a class="table-icon-link tables-icons" href="{{  url('/admin/category/'. $category->id) }} }}"><i class="ti-eye"></i></a>                               
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/category/edit/'. $category->id) }}"><i class="ti-pencil"></i></a>
                                        {{-- Data-id = Order_id --}}
                                        {{-- <i class="ti-trash tables-icons" data-id="{{$sale}}" onclick="deleteSale(this);"></i>  --}}
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
                                <a href="{{ route ('createCategory') }}"><button class="btn btn-primary tables-function-button">Categorie aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <script>
    function deleteSale(node)
    {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
 
        var form_data = new FormData();
        form_data.append('_method', 'DELETE'); //Geef DELETE MEE
        form_data.append('_token', CSRF_TOKEN);
 
        let order_id = node.getAttribute('data-id'); //Pak de Product-Id
        $.ajax({
            url: '/admin/sale/delete/' + $id , //Je url
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post', //Dit blijft post
            success: function(){
        //Werkt t allemaal?
        //Verwijder de HTML
          node.parentElement.parentElement.parentElement.parentElement.removeChild(node.parentElement.parentElement.parentElement); //Verwijder de html element
            },
            error: function(errors) {
                console.log(errors);
            }
        });
    }
    
    </script>
@endsection