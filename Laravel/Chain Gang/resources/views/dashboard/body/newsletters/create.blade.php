@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Nieuwsbrief</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Nieuwsbrief Aanmaken</h4>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group"><label for="title">Titel</label> 
                                        {{-- input field moet zelde naam hebben als in de database --}}
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Titel" required></div>
                                        {{-- @if ($errors->has('product_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('product_name') }}</strong>
                                        </span> 
                                        @endif --}}

                                    <div class="form-group"><label for="reference">Auteur</label> 
                                        {{-- kijk naar de naam select(naam moet het zelfde zijn als database table name) --}}
                                        <select id="reference" name="reference" class="form-control" required>
                                            {{-- Loop door de elementen die je wil laten zien in de dropdown --}}
                                            @foreach ($users as $user)
                                                <option value="{{$user->id}}">{{$user->username}}</option>
                                            @endforeach
                                        </select>
                                    </div>                                     
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-5">
                            <div class="card">
                                <div class="card-body">
                                    <div>HTML/Tekst Nieuwsbrief</div>
                                    <textarea id="message" class="textArea-layout" name="message" required></textarea>
                                    <div class="preview-newsletter">
                                        <a class="btn btn-light" onclick="runCode();">Maak preview!</a>
                                    </div>                                    
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tag">Preview nieuwsbrief:</div>
                                    <iframe class="iframe-layout" name="targetCode" id="targetCode"></iframe>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="btn-back">
                                <a href="{{ route('newsletters') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                            </div>                    
                            <div class="btn-add-newsletter-layout">
                                <button class="btn btn-primary tables-function-button" type="button" onclick="createNewsletter();">Maak nieuwsbrief</button>
                            </div>                
                            </div>   
                        </div>            
                    </div>                  
        </div>
    </div>
</div>

<script>

function runCode() {
    var content = document.getElementById('message').value;
    var iframe = document.getElementById('targetCode');
    iframe = (iframe.contentWindow)?iframe.contentWindow:(iframe.contentDocument)? iframe.contentDocument.document: 
    iframe.contentDocument;
    
    iframe.document.open();
    iframe.document.write(content);
    iframe.document.close();
    return false;
}
runCode();

function createNewsletter() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var form_data = new FormData();
    form_data.append('_method', 'POST');
    form_data.append('_token', CSRF_TOKEN);
    form_data.append('title', $('#title').val());
    form_data.append('reference', $('#reference').val());
    form_data.append('message', $('#message').val());

    event.preventDefault();

    $.ajax({
        url: '/admin/newsletter/store',
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(){
            Swal.fire({
                type: 'success',
                title: 'Aanmaken Newsletter',
                html: "U heeft een newsletter aangemaakt.",
                timer: 3000
            });
        },
        error: function(response) {
            let errors = response.responseJSON.errors;
            let myErrors = "";
            for (let key in errors) {
                for(let index in errors[key]) {
                    myErrors += "<p style='color: red; margin:0; padding:0; text-align: left;'>" + errors[key][index] + "</p>";
                }
            }

            Swal.fire({
                type: 'error',
                title: 'Aanmaken Newsletter!',
                html: "Er traden foutmeldingen op tijdens het aanmaken van een newsletter.<br><br>" + myErrors,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
}
</script>


@endsection









