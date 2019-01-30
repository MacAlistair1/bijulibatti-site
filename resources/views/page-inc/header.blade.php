<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>@yield('title')</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	
	<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{ asset('/css/slick.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{ asset('/css/nouislider.min.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('/css/style.css') }}" />
	<link rel="icon" href="/img/site/{{ session('logo') }}"/>

	<script src="https://khalti.com/static/khalti-checkout.js"></script>

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Welcome to {{ session('name') }}</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="callTo:{{ session('contact1') }}">Call us at : <b> {{ session('contact1') }} </b></a></li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="/">
							<img src="/img/site/{{ session('logo') }}" alt="">
						</a>
					</div>
					<!-- /Logo -->

				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<h5><mark style="background-color:yellow;">Leave a Message or Just give a Misscall we will call you ASAP!!</mark></h5>
						</li>
						<!-- /Account -->

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

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">

				<!-- category nav -->
				<div class="category-nav">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
						@foreach ($categories as $category)
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{ $category->name }} <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									@foreach ($category->subcategories as $subcategory)
										<div class="col-md-3">
												<ul class="list-links">
													<li>
													<h3 class="list-links-title"><a href="/my-category/{{ $subcategory->category->slug }}">{{ $subcategory->name }}</a></h3></li>
													@foreach ($subcategory->products as $product)
													<li><a href="/my-category/{{ $product->subcategory->category->slug }}">{{ $product->name }}</a></li>
													@endforeach
												</ul>
												<hr class="hidden-md hidden-lg">
											</div>
									@endforeach
									
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="/my-category/{{ $category->slug }}">
											<img src="/img/site/{{ $category->name }}/{{ $category->image }}" alt="" width="100%" height="267px">
											<div class="banner-caption text-center">
												<h2 class="white-color">{{ $category->name }}</h2>
											</div>
										</a>
									</div>
                                </div>
                                
							</div>
                        </li>
						@endforeach
                        
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="/">Home</a></li>
						
						@foreach ($fewcate as $category)
						<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> {{ $category->name }} <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									@foreach ($category->subcategories as $subcategory)
									<div class="col-md-3">
											<div class="hidden-sm hidden-xs">
												<a class="banner banner-1" href="/my-category/{{ $subcategory->category->slug }}">
													<img src="/img/site/{{ $subcategory->category->name }}/{{ $subcategory->name }}/{{ $subcategory->image }}" alt="" width="100%" height="150px">
													<div class="banner-caption text-center">
														<h3 class="white-color text-uppercase">{{ $subcategory->name }}</h3>
													</div>
												</a>
												<hr>
											</div>
											<ul class="list-links">
												<a href="/my-category/{{ $subcategory->category->slug }}"><li>
													<h3 class="list-links-title">{{ $subcategory->name }}</h3></li>
												@foreach ($subcategory->products as $product)
												<li><a href="/my-category/{{ $product->subcategory->category->slug }}">{{ $product->name }}</a></li>
												</a>
												@endforeach
											</ul>
										</div>
									@endforeach
								
								</div>
							</div>
						</li>
						@endforeach

                        <li><a href="/about-us">About Us</a></li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->