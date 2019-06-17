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
                              {{-- form login --}}
                            <form id="login" class="clearfix" method="POST" action="{{ route('login') }}">
                                @csrf
                                    <h1> Login </h1>
                                    <div class="form-group">
                                        <input class="input" type="email" name="email" placeholder="E-mail adres">
                                    </div>
                                    <div class="form-group">
                                            <input class="input" type="password" name="password" placeholder="Wachtwoord">
                                    </div>
                                    <div class="form-group">
                                            <input class="input-checkbox" type="checkbox" name="login"> &nbsp; Onthoud mij &nbsp; 
                                            <span class="text-right"><a href="{{url('/forgotPassword')}}">Wachtwoord vergeten?</a></span>
                                        </div>
                                    <div class="form-group">
                                        <input class="input main-btn" type="submit" name="login" value="Inloggen">
                                    </div>
                                    Heb je nog geen account? <a href="{{url('/registreer')}}">Registreer hier</a>
                                 {{-- end form login --}}
                                </form>
                                @if($errors->any())
                                <br>
                                <br>
                                <div class="bg-danger">
                                    <ul class="alert-box warning radius">
                                        @foreach($errors->all() as $error)
                                            <li>&nbsp;{{ $error }} </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
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