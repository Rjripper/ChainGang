<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Chain Gang</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
    <link href="{{ asset('css/customer/initial/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

	<!-- Slick -->
    <link href="{{ asset('css/customer/initial/css/slick.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/customer/initial/css/slick-theme.css') }}" rel="stylesheet" type="text/css" >

	<!-- nouislider -->
    <link href="{{ asset('css/customer/initial/css/nouislider.min.css') }}" rel="stylesheet" type="text/css" >

	<!-- Font Awesome Icon -->
    <link href="{{ asset('css/customer/initial/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >

	<!-- Custom stlylesheet -->
    <link href="{{ asset('css/customer/initial/css/style.css') }}" rel="stylesheet" type="text/css" >

</head>

<body>
    @include('klant.header.header')

    @include('klant.header.menu')

    <div id="main-content">
        @yield('body')
    </div>

    @include('klant.footer.information')

    @include('klant.footer.copyright')

    <!-- jQuery Plugins -->
	<script src="{{ asset('js/customer/initial/js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/customer/initial/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/customer/initial/js/slick.min.js') }}"></script>
	<script src="{{ asset('js/customer/initial/js/nouislider.min.js') }}"></script>
	<script src="{{ asset('js/customer/initial/js/jquery.zoom.min.js') }}"></script>
	<script src="{{ asset('js/customer/initial/js/main.js') }}"></script>
</body>
</html>
