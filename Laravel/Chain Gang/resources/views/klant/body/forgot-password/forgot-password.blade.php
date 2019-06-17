@extends('klant.index')
@section('body')
        <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                            <div class="col-sm-4">
                              
                            </div>
                            <div class="col-sm-4">
                              {{-- form forgot-password --}}
                            <form id="forgot-password" class="clearfix">
                                @csrf
                                    <h1> Reset wachtwoord </h1>
                                    <div class="form-group">
                                        <input class="input" type="email" name="email" placeholder="E-mail adres">
                                    </div>
                                    <div class="form-group">
                                        <input class="input main-btn" type="submit" name="request" value="Reset wachtwoord">
                                    </div>
                                    heb je al een accoutn? <a href="{{ route('login')}}">Login</a>
                                 {{-- end form forgot-password --}}
                                </form>
                            </div>
                            <div class="col-sm-4">                              
                            </div>
                    {{-- end row --}}
                    </div>
            {{-- end container --}}
            </div>
        {{-- end section --}}
        </div>
@endsection