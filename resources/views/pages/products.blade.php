@extends('layouts.products')

@section('content')

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">{{ $category->name }}</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
           

            <!-- MAIN -->
            <div id="main" class="col-md-12">
                @foreach ($category->subcategories as $subcategory)
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="pull-left">
                        <div class="row-filter">
                                <h3 style="color:red">{{ $subcategory->name }}</h3>
                        </div>
                    </div>
                   
                </div>
                <!-- /store top filter -->

                <!-- STORE -->
                <div id="store">
                    <!-- row -->
                    <div class="row">
                        @foreach ($subcategory->products as $product)
                        
                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single product-hot">
                                <div class="product-thumb">
                                    @if ($product->latest == 1)
                                        <div class="product-label">
                                            <span class="sale">New</span>
                                        </div>
                                    @endif
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
                        <div class="clearfix visible-sm visible-xs"></div>

                    </div>
                    <!-- /row -->
                </div>
                <!-- /STORE -->
           
                @endforeach
{{--  
                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <div class="pull-left">
                        <div class="row-filter">
                            <a href="#"><i class="fa fa-th-large"></i></a>
                            <a href="#" class="active"><i class="fa fa-bars"></i></a>
                        </div>
                        <div class="sort-filter">
                            <span class="text-uppercase">Sort By:</span>
                            <select class="input">
                                    <option value="0">Position</option>
                                    <option value="0">Price</option>
                                    <option value="0">Rating</option>
                                </select>
                            <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="page-filter">
                            <span class="text-uppercase">Show:</span>
                            <select class="input">
                                    <option value="0">10</option>
                                    <option value="1">20</option>
                                    <option value="2">30</option>
                                </select>
                        </div>
                        <ul class="store-pages">
                            <li><span class="text-uppercase">Page:</span></li>
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /store bottom filter -->  --}}
            </div>
            <!-- /MAIN -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

@endsection