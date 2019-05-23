	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
						@php
							$categories = App\Category::all();
						@endphp
						@foreach ($categories as $category)
							<li><a href="{{ url('/producten/categorie/' . $category->id ) }}">{{ $category->title }}</a></li>
						@endforeach
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/producten') }}">Producten</a></li>
					<li><a href="{{ url('/overons')}}">Over ons</a></li>
						<li><a href="{{ url('/contact')}}">Contact</a></li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->