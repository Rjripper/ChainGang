@extends('dashboard.index')

@section('body')
        <div class="container-fluid">
            <h4 class="c-grey-900 mT-10 mB-30">Nieuwsbrief</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Nieuwsbrieven</h4>
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titel</th>
                                    <th>Bericht</th>
                                    <th>Auteur</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Titel</th>
                                    <th>Bericht</th>
                                    <th>Auteur</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>

                            {{-- Loop this with all Newsletters --}}
                            @foreach ($newsletters as $newsletter)
                            <tr>
                                <td class="text-truncate" style="max-width:300px">{{$newsletter->id}}</td>
                                <td class="text-truncate" style="max-width:300px">{{$newsletter->title}}</td>
                                <td class="text-truncate" style="max-width:300px">{{$newsletter->message}}</td>
                                <td class="text-truncate" style="max-width:250px">
                                    @php
                                        $userReference = App\User::Where('id', $newsletter->reference)->get();
                                        // dd($userReference[0]->first_name);
                                    @endphp
                                    {{
                                        $userReference[0]->first_name
                                    }}</td>
                                <td>
                                    <div class="text-center">
                                        {{-- hier moet nog id in komen --}}
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/newsletter/'. $newsletter->id . '/') }} "><i class="ti-eye"></i></a>
                                        <a class="table-icon-link tables-icons" href="{{ url('/admin/newsletter/edit/'. $newsletter->id . '/') }} "><i class="ti-pencil"></i></a>
                                        {{-- Data-id = Nieuwsbrief_id --}}
                                        <i class="ti-trash tables-icons" data-id="{{ $newsletter->id }}" onclick="newsletterDelete(this);"></i>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            {{-- End loop this with all Newsletters --}}
                            </tbody>                            
        
                        </table>
                        <div class="row">
                            <div class="col-md-12 mb-12">
                                <div class="btn-add-index">
                                    <a href="{{ url('/admin/newsletters/create') }}"><button class="btn btn-primary tables-function-button">Nieuwsbrief aanmaken</button></a> 
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>


        <script>
            function newsletterDelete(node)
            {
                let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                let form_data = new FormData();
                form_data.append('_method', 'DELETE'); // Geef delete mee
                form_data.append('_token', CSRF_TOKEN);

                event.preventDefault();

                let newsletter_id = node.getAttribute('data-id'); // Pak het id van de nieuwsbrief
                console.warn("Het id van de nieuwsbrief is : ", newsletter_id);

                $.ajax(
                    {
                        url: '/admin/newsletter/delete/' + newsletter_id,
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post', // dit moet post blijven
                        success: function()
                        {
                            // werkt alles?
                            // verwijder de HTML
                            node.parentElement.parentElement.parentElement.parentElement.removeChild(node.parentElement.parentElement.parentElement); //Verwijder het html element
                        },

                        error: function(errors)
                        {
                            console.error(errors);
                        }
                    }
                );
            }
        </script>
@endsection