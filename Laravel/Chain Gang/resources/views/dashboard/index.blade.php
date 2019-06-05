<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard</title>
        <style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style>
        
        <link href=" {{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('css/dashboard/Robert-Jan.css') }}" rel="stylesheet" type="text/css">
        <link href=" {{ asset('resources/sass/custom/index.sass') }}" rel="stylesheet" type="text/css">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        
    </head>
    <body class="app">
        <div id="loader">
            <div class="spinner"></div>
        </div>
        <script>
            window.addEventListener('load', function load() {
            const loader = document.getElementById('loader');
            setTimeout(function() {
                loader.classList.add('fadeOut');
            }, 300);
            });
        </script>
        <div>
            {{-- Sidepanel --}}
            @include('dashboard.sidepanel.view')
            {{-- Sidepanel --}}
            <div class="page-container">
                @include('dashboard.header.header')
                <main class="main-content bgc-grey-100">
                    <div id="mainContent">
                        {{-- Body --}}
                        @yield('body')
                        {{-- Body --}}
                    </div>
                </main>
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2019 Designed by <a href="{{ route('home') }}">Chain Gang</a>. All rights reserved.</span></footer>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>

{{-- @section('body')
    
@show --}}

{{-- @yield('body') To import from sections--}}
