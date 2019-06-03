@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Nieuwsbrief</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Nieuwsbrief Wijzigen</h4>
               
                {{-- Begin Form --}}
                {{-- <form method="POST" action="{{ url('/admin/newsletter/')}}" enctype="multipart/form-data"> --}}
                <form method="POST" action="{{ url('/admin/newsletter',[$newsletter->id])}}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    {{-- Nieuwsbrief toevoegen --}}
                    <div class="row">
                            <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group"><label for="inputTitle">Titel</label>
                                        <input type="text" class="form-control" id="inputTitle" value="{{ old('title', $newsletter->title) }}" required>
                                    </div>
                                    <div class="form-group"><label for="inputAteur">Auteur</label> 
                                        {{-- kijk naar de naam select(naam moet het zelfde zijn als database table name) --}}
                                        <select id="inputAteur" name="reference" class="form-control" required>
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
                                    <textarea name="sourceCode" id="sourceCode" class="textArea-layout" required>{{ old('message', $newsletter->message) }}</textarea>
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
                                    <a href="#"><button class="btn btn-primary tables-function-button" type="submit">Nieuwsbrief Wijzigen</button></a> 
                                </div>                
                                </div>  
                            </div>            
                    </form>
                    {{-- EIND Form--}}                    
                    
                    </div>            
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









