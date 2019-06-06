@extends('dashboard.index')
@section('body')


<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Type Overzicht</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="row">
                    <div class="col-sm-4"></div>

                    <div class="col-sm-4">
                        <h4 class="c-grey-900 mB-20">Type</h4>
                        {{-- Begin Form--}}               
                        <div class="form-group"><label for="disabledTextInput">Typenaam</label>
                            <input type="text" id="disabledTextInput" value="{{ old('title', $type->title) }}"  name="title" class="form-control" disabled>
                        </div>                     
                    </div>
                    <div class="col-sm-4"></div>

                </div>
                <div class="row">   
                    <div class="btn-back">
                        <a href="{{ route ('types') }}"><button class="btn btn-primary tables-function-button">Terug</button></a>
                    </div>
                    <div class="btn-add-newsletter-layout">
                    </div>                
                </div>                 
            </div>
        </div>
    </div>
</div>





@endsection