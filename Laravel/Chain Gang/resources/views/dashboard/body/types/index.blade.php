@extends('dashboard.index')

@section('body')
    <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">Types</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Alle Types</h4>
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
                            @foreach ($types as $type) 
                            <tr>
                                <td>{{$type->id}}</td>
                                <td>{{$type->title}}</td>
                                <td>{{$type->updated_at}}</td>
                                <td>{{$type->created_at}}</td>                                
                                <td>
                                    <div class="text-center">         
                                        <a class="table-icon-link tables-icons" href="{{  url('/admin/type/'. $type->id) }} }}"><i class="ti-eye"></i></a>                               
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/type/edit/'. $type->id) }}"><i class="ti-pencil"></i></a>
                                        {{-- Data-id = Order_id --}}
                                        <i class="ti-trash tables-icons" data-id="{{$type->id}}" onclick="deleteType(this);"></i> 
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
                                <a href="{{ route ('createType') }}"><button class="btn btn-primary tables-function-button">Type aanmaken</button></a> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <script>
    function deleteType(node)
    {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
 
        var form_data = new FormData();
        form_data.append('_method', 'DELETE'); //Geef DELETE MEE
        form_data.append('_token', CSRF_TOKEN);
 
        let type_id = node.getAttribute('data-id'); //Pak de Product-Id
        $.ajax({
            url: '/admin/type/delete/' + type_id , //Je url
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