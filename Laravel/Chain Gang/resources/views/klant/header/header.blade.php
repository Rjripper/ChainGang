		<!-- HEADER -->
		<header>
			<style>
				.dropdown-backdrop{
					z-index: -1 !important;
				}	
			</style>
			<!-- header -->
			<div id="header">
				<div class="container">
					<div class="pull-left">
						<!-- Logo -->
						<div class="header-logo">
						<a class="logo" href="{{ url('/') }}">
								<img src="{{ asset('images/logo.png') }}" alt="">
							</a>
						</div>
						<!-- /Logo -->
	
						<!-- Search -->
						<div class="header-search">
							<form action="{{ url('/producten/zoeken') }}" action="GET">
								<input class="input" type="text" name="search" placeholder="Enter your keyword">
								<button class="search-btn"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /Search -->
					</div>
					<div class="pull-right">
						<ul class="header-btns">
							<!-- Account -->
							<li class="header-account dropdown default-dropdown">
								<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
									<div class="header-btns-icon">
										<i class="fa fa-user-o"></i>
									</div>
										<strong class="text-uppercase">Mijn Account <i class="fa fa-caret-down"></i></strong>
								</div>
								
								@if (Auth::check())
								<a href="{{  route('logout') }}" class="text-uppercase" style="font-size:12px;" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">Afmelden</a>
								@else 
									<a href="{{ url('/login') }}" class="text-uppercase" style="font-size:12px;">Login</a> / <a href="{{ url('/register') }}" class="text-uppercase" style="font-size:12px;">Registreer</a>
								@endif

								<ul class="custom-menu">
									<li><a href="{{ url('/account/overzicht') }}"><i class="fa fa-user-o"></i> Mijn Account</a></li>
									@if(Auth::check())
										<li><a href="{{ url('/betalen') }}"><i class="fa fa-check"></i> Betalen</a></li>
									@endif
									@if (Auth::check())
										<li><a href="{{  route('logout') }}" onclick="event.preventDefault();
											document.getElementById('logout-form').submit();"> <i class="fa fa-unlock-alt"></i>Afmelden</a></li>
									@else 
										<li><a href="{{  url('/login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
									@endif

									@if(!Auth::check())
									<li><a href="{{ url('/register') }}"><i class="fa fa-user-plus"></i> maak een account</a></li>
									@endif
								</ul>
							</li>
							<!-- /Account -->
	
							<!-- Cart -->
							<li class="header-cart dropdown default-dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<a href="{{ url('/winkelwagen') }}">
									<div class="header-btns-icon">
										<i class="fa fa-shopping-cart"></i>
										@php
											$cart = session('cart_session');
										@endphp
										@if($cart != null)
											<span class="qty">{{count($cart)}}</span>
										@endif
									</div>
									</a>
								</a>
							</li>
							<!-- /Cart -->
	
							<!-- Mobile nav toggle-->
							<li class="nav-toggle">
								<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
							</li>
							<!-- / Mobile nav toggle -->
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</ul>
					</div>
				</div>
				<!-- header -->
			</div>
			<!-- container -->
		</header>
		<script>
		function tempAlert(msg,duration)
			{
				let el = document.createElement("div");
				el.setAttribute("style","position: fixed;top: 0;width: 100%;max-width:100%;text-align: center;padding: 20px;background-color: rgba(93, 216, 111,0.7);color: white;");
				el.innerHTML = msg;
				setTimeout(function(){
				el.parentNode.removeChild(el);
				},duration * 1000);
				document.body.appendChild(el);
			}

			function tempAlertError(msg,duration)
			{
				let el = document.createElement("div");
				el.setAttribute("style","position: fixed;top: 0;width: 100%;max-width:100%;text-align: center;padding: 20px;background-color: rgba(255, 0, 0,0.7);color: white;");
				el.innerHTML = msg;
				setTimeout(function(){
				el.parentNode.removeChild(el);
				},duration * 1000);
				document.body.appendChild(el);
			}
		</script>
		<!-- /HEADER -->