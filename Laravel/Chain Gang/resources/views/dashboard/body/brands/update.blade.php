@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Merk</h4>
    <form method="POST" action="{{ url('/admin/brand/update/'. $brand->id)}}" enctype="multipart/form-data">
        @csrf
        @method('patch')
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">
                    
                        {{-- Begin Form--}}      
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <h4 class="c-grey-900 mB-20">Merk aanpassen</h4>
    
                            {{-- Begin Form--}}             
                            <div class="form-group"><label for="inputTitle">Merknaam</label> 
                                <input type="text" class="form-control" id="inputTitle" value="{{ old('title', $brand->title) }}"  name="title">
                            </div>
                        </div>
                        <div class="col-sm-4"></div>                   
                        {{-- Eind Form--}}

                  </div>               
               
                  <div class="row">   
                    <div class="btn-back">
                        <a href="{{ route('brands')  }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                    </div>
                    <div class="btn-add-newsletter-layout">
                        <button class="btn btn-primary tables-function-button">Merk Wijzigen</button>
                    </div>                
                </div>  
            </div>
        </div>
    </div>
    </form>
</div>





@endsection