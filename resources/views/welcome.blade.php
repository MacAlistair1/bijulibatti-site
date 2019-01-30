@extends('layouts.app')

@section('title')
 {{ $title }}
@endsection

@section('content')
    

	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">

					@foreach ($top_banners as $banner)
					<!-- banner -->
					<div class="banner banner-1">
						<img src="/img/site/topbanner/{{ $banner->image }}" alt="">
						<div class="banner-caption text-center">
							<h1 class="primary-color">{{ $banner->title }}</h1>
							<h3 class="white-color font-weak">{{ $banner->heading }}</h3>
						</div>
					</div>
					<!-- /banner -->
					@endforeach
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->


	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				@foreach ($my_cats as $category)
					
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="/my-category/{{ $category->slug }}">
						<img src="/img/site/{{ $category->name }}/{{ $category->image }}" alt="" width="100%" height="300px">
						<div class="banner-caption text-center">
							<h2 class="white-color">{{ $category->name }}</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->
				@endforeach

				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->


	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Deals Of The Day</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="/img/site/ads/{{ $ad1[1] }}" alt="">
						<div class="banner-caption">
							<h2 class="white-color">{{ $ad1[0] }}</h2>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
							@foreach ($bestseller as $product)
							<!-- Product Single -->
							<div class="product product-single">
								<div class="product-thumb">
									<img src="/img/site/{{ $product->category->name }}/{{ $product->subcategory->name }}/{{ $product->name }}/{{ $product->image }}" alt="{{ $product->name }}">
								</div>
								<div class="product-body">
									<h3 class="product-price">Rs.{{ $product->price }}</h3>
									<div class="product-rating">
											
											<small>{{ $product->company_name }}</small>
										</div>
									
									<h2 class="product-name"><a href="/my-category/{{ $product->subcategory->category->slug }}">{{ $product->name }}</a></h2>
									
								</div>
							</div>
							<!-- /Product Single -->
							@endforeach
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Seasonal Products</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots">
								
							</div>
						</div>
					</div>
				</div>
				<!-- section title -->

				@foreach ($seasonal1 as $product)
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single product-hot">
						<div class="product-thumb">
								<img src="/img/site/{{ $product->category->name }}/{{ $product->subcategory->name }}/{{ $product->name }}/{{ $product->image }}" alt="{{ $product->name }}">							
						</div>
						<div class="product-body">
							<h3 class="product-price">Rs.{{ $product->price }}</h3>
							<div class="product-rating">
								<small>{{ $product->company_name }}</small>
							</div>
							<h2 class="product-name"><a href="/my-category/{{ $product->subcategory->category->slug }}">{{ $product->name }}</a></h2>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
				@endforeach

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
							
							@foreach ($seasonal as $product)
							<!-- Product Single -->
							<div class="product product-single">
								<div class="product-thumb">
										<img src="/img/site/{{ $product->category->name }}/{{ $product->subcategory->name }}/{{ $product->name }}/{{ $product->image }}" alt="{{ $product->name }}">							
								</div>
								<div class="product-body">
									<h3 class="product-price">{{ $product->price }}</h3>
									<div class="product-rating">
										<small>{{ $product->company_name }}</small>
									</div>
									<h2 class="product-name"><a href="/my-category/{{ $product->subcategory->category->slug }}">{{ $product->name }}</a></h2>
								</div>
							</div>
							<!-- /Product Single -->
							@endforeach


						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-8">
					<div class="banner banner-1">
						<img src="/img/site/ads/{{ $ad2[1] }}" alt="">
						<div class="banner-caption text-center">
							<h1 class="primary-color">{{ $ad2[0] }}</span></h1>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="/img/site/ads/{{ $ad3[1] }}" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">{{ $ad2[0] }}</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="/img/site/ads/{{ $ad4[1] }}" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">{{ $ad4[0] }}</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Latest Products</h2>
					</div>
				</div>
				<!-- section title -->

				@foreach ($latest as $product)
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								
							</div>
							<img src="/img/site/{{ $product->category->name }}/{{ $product->subcategory->name }}/{{ $product->name }}/{{ $product->image }}" alt="{{ $product->name }}">						
						</div>
						<div class="product-body">
							<h3 class="product-price">Rs.{{ $product->price }}</h3>
							<div class="product-rating">
								<small>{{ $product->company_name }}</small>
							</div>
							<h2 class="product-name"><a href="/my-category/{{ $product->subcategory->category->slug }}">{{ $product->name }}</a></h2>
							
						</div>
					</div>
				</div>
				<!-- /Product Single -->
					
				@endforeach
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="/img/site/ads/{{ $ad5[1] }}" alt="">
						<div class="banner-caption">
							<h2 class="white-color">{{ $ad5[0] }}</h2>
						</div>
					</div>
				</div>
				<!-- /banner -->

				@foreach ($featured as $product)
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
									<span class="sale">New</span>
								
							</div>
							<img src="/img/site/{{ $product->category->name }}/{{ $product->subcategory->name }}/{{ $product->name }}/{{ $product->image }}" alt="{{ $product->name }}">						
						</div>
						<div class="product-body">
							<h3 class="product-price">Rs.{{ $product->price }}</h3>
							<div class="product-rating">
								<small>{{ $product->company_name }}</small>
							</div>
							<h2 class="product-name"><a href="/my-category/{{ $product->subcategory->category->slug }}">{{ $product->name }}</a></h2>
							
						</div>
					</div>
				</div>
				<!-- /Product Single -->
				@endforeach

			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Picked For You</h2>
					</div>
				</div>
				<!-- section title -->

				<button id="payment-button" style="background-color: #773292; cursor: pointer; color: #fff; border: none; padding: 5px 10px; border-radius: 2px">Pay with Khalti</button>

				@foreach ($highprice as $product)
					
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
								<img src="/img/site/{{ $product->category->name }}/{{ $product->subcategory->name }}/{{ $product->name }}/{{ $product->image }}" alt="{{ $product->name }}">						
						</div>
						<div class="product-body">
							<h3 class="product-price">Rs.{{ $product->price }}</h3>
							<div class="product-rating">
								<small>{{ $product->company_name }}</small>
							</div>
							<h2 class="product-name"><a href="/my-category/{{ $product->subcategory->category->slug }}">{{ $product->name }}</a></h2>
							
						</div>
					</div>
				</div>
				<!-- /Product Single -->
				@endforeach
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            checkout.show({amount: 1000});
        }
    </script>

@endsection