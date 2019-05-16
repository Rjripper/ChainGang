@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Toevoegen Nieuwsbrief</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mB-20">Nieuwsbrief</h4>
               
                {{-- Begin Form --}}
                <form action="POST">
                    @csrf
                    {{-- Nieuwsbrief toevoegen --}}
                    <div class="row">
                            <div class="col-sm-2">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        Titel:
                                        <input type="text">
                                    </div> 
                                    <div>
                                        Auteur:
                                        <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                            <option selected>Auteur</option>
                                            <option value="1">Mustafa</option>
                                            <option value="2">Mufasa</option>
                                            <option value="3">Muffie</option>
                                        </select>
                                    </div>                                       
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-5">
                            <div class="card">
                                <div class="card-body">
                                    <div>HTML nieuwsbrief</div>
                                    <textarea name="sourceCode" id="sourceCode" class="textArea-layout">

                                    </textarea>
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
                        <div class="submit-newsletter">
                            <input type="submit" value="Updaten nieuwsbrief" class="btn btn-primary">
                        </div>                     
                        
                    {{-- EIND Nieuwsbrief toevoegen--}}
                </form>
                {{-- EIND Form--}}
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









