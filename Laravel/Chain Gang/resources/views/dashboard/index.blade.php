
<!DOCTYPE HTML>
<html>
    @include('dashboard.header.header')
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
        @include('dashboard.sidepanel.view')
        @yield('body')
    </body>
</html>

{{-- @section('body')
    
@show --}}

{{-- @yield('body') To import from sections--}}