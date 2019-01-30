@extends('layouts.products')

@section('title')
{{ $title }}
@endsection

@section('content')

<!-- HOME -->
<div id="home">
   
        <div class="row">
                <div class="col-md-12" id="home-slick">
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
        </div>
  
</div>
<!-- /HOME -->

<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">About Us</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				
                
				<!-- Product Slick -->
				<div class="col-md-12">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
							
								<div class="product-body">
                                        <h3>{!! session('about') !!}</h3>
                                    </div>

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


{{--  <!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- banner -->
            <div class="col-md-4 col-sm-6">
                <a class="banner banner-1" href="#">
                    <img src="/img/assets/img/banner10.jpg" alt="">
                    <div class="banner-caption text-center">
                        <h2 class="white-color">NEW COLLECTION</h2>
                    </div>
                </a>
            </div>
            <!-- /banner -->

            <!-- banner -->
            <div class="col-md-4 col-sm-6">
                <a class="banner banner-1" href="#">
                    <img src="/img/assets/img/banner11.jpg" alt="">
                    <div class="banner-caption text-center">
                        <h2 class="white-color">NEW COLLECTION</h2>
                    </div>
                </a>
            </div>
            <!-- /banner -->

            <!-- banner -->
            <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
                <a class="banner banner-1" href="#">
                    <img src="/img/assets/img/banner12.jpg" alt="">
                    <div class="banner-caption text-center">
                        <h2 class="white-color">NEW COLLECTION</h2>
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
  --}}


@endsection