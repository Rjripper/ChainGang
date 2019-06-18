@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Nieuwsbrief</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Nieuwsbrief Wijzigen</h4>
                    {{-- Nieuwsbrief toevoegen --}}
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group"><label for="title">Titel</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $newsletter->title) }}" required>
                                    </div>
                                    <div class="form-group"><label for="reference">Auteur</label> 
                                        {{-- kijk naar de naam select(naam moet het zelfde zijn als database table name) --}}
                                        <select id="reference" name="reference" class="form-control" required>
                                            {{-- Loop door de elementen die je wil laten zien in de dropdown --}}
                                            @foreach ($users as $user)
                                                <option value="{{$user->id}}" @if( $user->id == $newsletter->reference) selected @endif>
                                                    {{$user->first_name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>                                     
                                </div>
                            </div>
                            </div>
                            <div class="col col-sm-5">
                            <div class="card">
                                <div class="card-body">
                                    <div>HTML/Tekst Nieuwsbrief</div>
                                    <textarea name="message" id="message" class="textArea-layout" required>{{ old('message', $newsletter->message) }}</textarea>
                                    <div class="preview-newsletter">
                                        <a class="btn btn-light" onclick="runCode();">Maak preview!</a>
                                    </div>                                    
                                </div>
                            </div>
                            </div>
                            <div class="col col-sm-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tag">Preview Nieuwsbrief:</div>
                                    <iframe class="iframe-layout" name="targetCode" id="targetCode"></iframe>
                                </div>
                            </div>
                            </div>
                        </div>   
                        <div class="row">   
                                <div class="btn-back">
                                    <a class="btn btn-primary tables-function-button" href="{{ route('newsletters') }}">Terug</a>
                                </div>                    
                                <div class="btn-add-newsletter-layout">
                                    <button class="btn btn-primary tables-function-button" onclick="updateNewsletter({{$newsletter->id}});" type="button">Nieuwsbrief Wijzigen</button>
                                </div>                
                                </div>  
                            </div>        
                        </div>            
                    {{-- EIND Nieuwsbrief toevoegen--}}
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

function updateNewsletter(newsletter_id) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var form_data = new FormData();
    form_data.append('_method', 'PATCH');
    form_data.append('_token', CSRF_TOKEN);
    form_data.append('title', $('#title').val());
    form_data.append('reference', $('#reference').val());
    form_data.append('message', $('#message').val());

    event.preventDefault();
    
    $.ajax({
        url: '/admin/newsletter/update/' + newsletter_id,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(){
            Swal.fire({
                type: 'success',
                title: 'Wijziging Newsletter',
                html: "U heeft de newsletter aangepast.",
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
                title: 'Wijziging Newsletter!',
                html: "Er traden foutmeldingen op tijdens het wijzigen van de newsletter.<br><br>" + myErrors,
                showConfirmButton: false,
                timer: 3000
            });
        }
    });
}
</script>


@endsection









