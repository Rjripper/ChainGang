@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Merken</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Merken</h4>
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
                            @foreach ($brands as $brand) 
                            <tr>
                                <td>{{$brand->id}}</td>
                                <td>{{$brand->title}}</td>
                                <td>{{$brand->updated_at}}</td>
                                <td>{{$brand->created_at}}</td>                                
                                <td>
                                    <div class="text-center">         
                                        <a class="table-icon-link tables-icons" href="{{  url('/admin/brand/'. $brand->id) }} }}"><i class="ti-eye"></i></a>                               
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/brand/edit/'. $brand->id) }}"><i class="ti-pencil"></i></a>
                                        {{-- Data-id = Order_id --}}
                                        <i class="ti-trash tables-icons" data-id="{{$brand->id}}" onclick="deleteBrand(this);"></i> 
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
                                <a href="{{ route ('createBrand') }}"><button class="btn btn-primary tables-function-button">Merk aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <script>
    function deleteBrand(node)
    {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
 
        var form_data = new FormData();
        form_data.append('_method', 'DELETE'); //Geef DELETE MEE
        form_data.append('_token', CSRF_TOKEN);
 
        let brand_id = node.getAttribute('data-id'); //Pak de Product-Id
        $.ajax({
            url: '/admin/brand/delete/' + brand_id, //Je url
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