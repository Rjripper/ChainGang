@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Nieuwsbrief</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Nieuwsbrief Aanmaken</h4>
               
                {{-- Begin Form --}}
                <form method="POST" action="{{ url('/admin/newsletters/')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- Nieuwsbrief toevoegen --}}
                    <div class="row">
                            <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group"><label for="inputTitle">Titel</label> 
                                        {{-- input field moet zelde naam hebben als in de database --}}
                                        <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Titel" required></div>
                                        <div class="invalid-feedback">Please provide a valid adres.</div>
                                        {{-- @if ($errors->has('product_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('product_name') }}</strong>
                                        </span> 
                                        @endif --}}

                                    <div class="form-group"><label for="inputAteur">Auteur</label> 
                                        {{-- kijk naar de naam select(naam moet het zelfde zijn als database table name) --}}
                                        <select id="inputAteur" name="reference" class="form-control" required>
                                            {{-- Loop door de elementen die je wil laten zien in de dropdown --}}
                                            @foreach ($users as $user)
                                                <option value="{{$user->id}}">{{$user->username}}</option>
                                            @endforeach
                                            {{-- <option>...</option> --}}
                                        </select>
                                    </div>                                     
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-5">
                            <div class="card">
                                <div class="card-body">
                                    <div>HTML/Tekst Nieuwsbrief</div>
                                    <textarea id="sourceCode" class="textArea-layout" name="message" required></textarea>
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
                                    <button class="btn btn-primary tables-function-button" type="submit">Maak nieuwsbrief</button>
                                </div>                
                                </div>   
                            </div>            
                    </form>
                    {{-- EIND Form--}}
                {{-- EIND Nieuwsbrief toevoegen--}}
                </div>                      
              
        </div>
    </div>
</div>

<script>

function runCode() {
    var content = document.getElementById('sourceCode').value;
    var iframe = document.getElementById('targetCode');
    iframe = (iframe.contentWindow)?iframe.contentWindow:(iframe.contentDocument)? iframe.contentDocument.document: 
    iframe.contentDocument;
    
    iframe.document.open();
    iframe.document.write(content);
    iframe.document.close();
    return false;
}
runCode();
</script>


@endsection









