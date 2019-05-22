		<!-- HEADER -->
		<header>
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
							<form>
								<input class="input" type="text" placeholder="Enter your keyword">
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
								<a href="{{ url('/login') }}" class="text-uppercase">Login</a> / <a href="{{ url('/register') }}" class="text-uppercase">Aanmelden</a>
								<ul class="custom-menu">
									<li><a href="{{ url('/account/gegevens') }}"><i class="fa fa-user-o"></i> Mijn Account</a></li>
									<li><a href="{{ url('/betalen') }}"><i class="fa fa-check"></i> Checkout</a></li>
									<li><a href="{{ url('/login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
									<li><a href="{{ url('/register') }}"><i class="fa fa-user-plus"></i> Aanmelden</a></li>
								</ul>
							</li>
							<!-- /Account -->
	
							<!-- Cart -->
							<li class="header-cart dropdown default-dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<div class="header-btns-icon">
										<i class="fa fa-shopping-cart"></i>
										<span class="qty">3</span>
									</div>
									<strong class="text-uppercase">Winkelwagen:</strong>
									<br>
									<span>35.20$</span>
								</a>
								<div class="custom-menu">
									<div id="shopping-cart">
										<div class="shopping-cart-list">
											<div class="product product-widget">
												<div class="product-thumb">
													<img src="./img/thumb-product01.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
													<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
												</div>
												<button class="cancel-btn"><i class="fa fa-trash"></i></button>
											</div>
											<div class="product product-widget">
												<div class="product-thumb">
													<img src="./img/thumb-product01.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
													<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
												</div>
												<button class="cancel-btn"><i class="fa fa-trash"></i></button>
											</div>
										</div>
										<div class="shopping-cart-btns">
											<a href="{{ url('/winkelwagen') }}"><button class="main-btn">Winkelwagen</button></a>
											<a href="{{ url('/betalen') }}"><button class="primary-btn">Betalen <i class="fa fa-arrow-circle-right"></i></button></a>
										</div>
									</div>
								</div>
							</li>
							<!-- /Cart -->
	
							<!-- Mobile nav toggle-->
							<li class="nav-toggle">
								<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
							</li>
							<!-- / Mobile nav toggle -->
						</ul>
					</div>
				</div>
				<!-- header -->
			</div>
			<!-- container -->
		</header>
		<!-- /HEADER -->