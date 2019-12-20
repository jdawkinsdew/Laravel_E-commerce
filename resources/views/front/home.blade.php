@extends('layouts.shop')

@section('page_title')
    Cigavape Website
@endsection

@section('page_meta')
@endsection

@section('page_style')
@endsection

@section('content')
    <!-- Slideshow  -->
    <div class="main-slider" id="home">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 jtv-slideshow">
                    <div id="jtv-slideshow">
                        <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                                <ul>

                                    <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='{{asset('assets/images/banners/'.$banner[0]->image)}}' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="caption-inner left">
                                            <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='50'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>{{$banner[0]->subscription}}</div>
                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='50'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>{{$banner[0]->title}}</div>
                                            <div class='tp-caption' data-x='72'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>{{$banner[0]->text}}</div>
                                            <div class='tp-caption sfb  tp-resizeme ' data-x='72'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#shop-section' class="buy-btn scroll_to_shop">EXPLORE NOW</a> </div>
                                        </div>
                                    </li>
                                    <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='{{asset('assets/images/banners/'.$banner[1]->image)}}' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="caption-inner">
                                            <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='250'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>{{$banner[1]->subscription}}</div>
                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='200'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#fff; text-shadow:none;'>{{$banner[1]->title}}</div>
                                            <div class='tp-caption' data-x='310'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#f8f8f8;'>{{$banner[1]->text}}</div>
                                            <div class='tp-caption sfb  tp-resizeme ' data-x='370'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#shop-section' class="buy-btn scroll_to_shop">Get Started</a> </div>
                                        </div>
                                    </li>
                                    <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='{{asset('assets/images/banners/'.$banner[2]->image)}}' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                        <div class="caption-inner left">
                                            <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='350'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>{{$banner[2]->subscription}}</div>
                                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>{{$banner[2]->title}}</div>
                                            <div class='tp-caption' data-x='375'  data-y='245'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>{{$banner[2]->text}}</div>
                                            <div class='tp-caption sfb  tp-resizeme ' data-x='375'  data-y='290'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#shop-section' class="buy-btn scroll_to_shop">Start Buying </a> </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section -->
    <div class="jtv-service-area">
        <div class="container">
            <div class="row">
                <div class="col col-md-3 col-sm-6 col-xs-12">
                    <div class="block-wrapper ship">
                        <div class="text-des">
                            <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
                            <div class="service-wrapper">
                                <h3>World-Wide Shipping</h3>
                                <p>On order over $99</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-6 col-xs-12 ">
                    <div class="block-wrapper return">
                        <div class="text-des">
                            <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
                            <div class="service-wrapper">
                                <h3>100% secure payments</h3>
                                <p>Credit/ Debit Card/ Banking </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-6 col-xs-12">
                    <div class="block-wrapper support">
                        <div class="text-des">
                            <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
                            <div class="service-wrapper">
                                <h3>Support 24/7</h3>
                                <p>Call us: ( +123 ) 456 789</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-6 col-xs-12">
                    <div class="block-wrapper user">
                        <div class="text-des">
                            <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
                            <div class="service-wrapper">
                                <h3>Member Discount</h3>
                                <p>25% on order over $199</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All products-->

    <div class="container">
        <div class="home-tab">
            <div class="tab-title text-left">
                <h2>Best selling</h2>
            </div>
            <div id="productTabContent" class="tab-content">
                <div class="tab-pane active in" id="computer">
                    <div class="featured-pro">
                        <div class="slider-items-products">
                            <div id="computer-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4">
                                    @foreach($bestSeller as $each)
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                @if($each->sale)
                                                    <div class="icon-sale-label sale-left">Sale</div>
                                                @endif
                                                @if($each->newitem)
                                                    <div class="icon-new-label new-right">New</div>
                                                @endif
                                                <div class="pr-img-area"> <a title="Product title here" href="{{route('product', $each->slug)}}">
                                                        <figure> <img class="first-img" src="{{asset('assets/images/products/'.$each->image)}}" alt="HTML template"> <img class="hover-img" src="{{asset('assets/images/products/'.$each->image)}}" alt="HTML template"></figure>
                                                    </a> </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="javascript:void(0);" class="quick_view_btn" data-content="{{$each}}"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="#">{{$each->title}} </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price"> <span class="price">${{$each->price}}</span> </span>
                                                                @if($each->sale)
                                                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ${{$each->origin_price}} </span> </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart" onclick="addItemToCart({{$each->id}})"><span> Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-box">
        <div class="container">
            <div class="row">
                <!-- Banner -->
                <div class="col-md-3 top-banner hidden-sm">
                    <div class="jtv-banner3">
                        <div class="jtv-banner3-inner"><a href="#"><img src="{{asset('assets/images/sub1.jpg')}}" alt="HTML template"></a>
                            <div class="hover_content">
                                <div class="hover_data">
                                    <div class="title" style="color: #36a144;"> Big Sale </div>
                                    <div class="desc-text">Up to 55% off</div>
                                    <span>Camera, Laptop & Mobile</span>
                                    <p><a href="#scroll_to_sale" class="shop-now scroll_to_bottom_sale">Get it now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Best Sale -->
                <div class="col-sm-12 col-md-9 jtv-best-sale special-pro">
                    <div class="jtv-best-sale-list">
                        <div class="wpb_wrapper">
                            <div class="best-title text-left">
                                <h2>Special Offers</h2>
                            </div>
                        </div>
                        <div class="slider-items-products">
                            <div id="jtv-best-sale-slider" class="product-flexslider">
                                <div class="slider-items">
                                    @foreach($products as $each)
                                        @if($each->special)
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    @if($each->sale)
                                                    <div class="icon-sale-label sale-left">Sale</div>
                                                    @endif
                                                    @if($each->newitem)
                                                    <div class="icon-new-label new-right">New</div>
                                                    @endif
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Product title here" href="{{route('product', $each->slug)}}">
                                                                <figure> <img class="first-img" src="{{asset('assets/images/products/'.$each->image)}}" alt="HTML template"> <img class="hover-img" src="{{asset('assets/images/products/'.$each->image)}}" alt="HTML template"></figure>
                                                            </a> </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                                <div class="mt-button quick-view"> <a href="javascript:void(0);" class="quick_view_btn" data-content="{{$each}}"> <i class="fa fa-search"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$each->title}} </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <span class="regular-price"> <span class="price">${{$each->price}}</span> </span>
                                                                        @if($each->sale)
                                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ${{$each->origin_price}} </span> </p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="pro-action">
                                                                    <button type="button" class="add-to-cart" onclick="addItemToCart({{$each->id}})"><span> Add to Cart</span> </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-9 col-xs-12 col-sm-push-3" id="shop-section">
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                                    <!-- Item -->
                                    <div class="item"> <a href="#x"><img alt="HTML template" src="{{asset('assets/images/cat-slider-img1.jpg')}}"></a>
                                        <div class="inner-info">
                                            <div class="cat-img-title"> <span>Best Product 2017</span>
                                                <h2 class="cat-heading">Best Selling Brand</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                 </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item"> <a href="#x"><img alt="HTML template" src="{{asset('assets/images/cat-slider-img2.jpg')}}"></a> </div>

                                    <!-- End Item -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-inner">
                        <div class="page-title">
                            <h2>Our Shop</h2>
                        </div>
                        <div class="product-grid-area">
                            <ul class="products-grid">
                                @foreach($products as $each)
                                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                                    <div class="product-item">
                                        <div class="item-inner">
                                            @if($each->sale)
                                            <div class="icon-sale-label sale-left">Sale</div>
                                            @endif
                                            @if($each->newitem)
                                            <div class="icon-new-label new-right">New</div>
                                            @endif
                                            <div class="product-thumbnail">
                                                <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="{{route('product', $each->slug)}}">
                                                        <figure> <img class="first-img" src="{{asset('assets/images/products/'.$each->image)}}" alt="HTML template"> <img class="hover-img" src="{{asset('assets/images/products/'.$each->image)}}" alt="HTML template"></figure>
                                                    </a> </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                        <div class="mt-button quick-view"> <a href="javascript:void(0);" class="quick_view_btn" data-content="{{$each}}"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Ipsums Dolors Untra" href="{{route('product', $each->slug)}}">{{$each->title}} </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price"> <span class="price">${{$each->price}}</span> </span>
                                                                @if($each->sale)
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ${{$each->origin_price}} </span> </p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart" onclick="addItemToCart({{$each->id}})"><span> Add to Cart</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <div class="offer-banner"><img src="{{asset('assets/images/offer-banner.jpg')}}" alt="banner"></div>
                    <div class="block shop-by-side">
                        <div class="sidebar-bar-title">
                            <h3>Shop Info</h3>
                        </div>
                        <div class="block-content">
                            <p class="block-subtitle">&nbsp</p>
                            <div class="layered-Category">
                                <h2 class="saider-bar-title">Categories</h2>
                                <div class="layered-content">
                                    <ul class="check-box-list">
                                        <li>
                                            <a href="{{route('category', ['category_id'=>1])}}"><label for="jtv1"> <span class="button"></span> Pod Systems<span class="count">(12)</span> </label></a>
                                        </li>
                                        <li>
                                            <a href="{{route('category', ['category_id'=>2])}}"><label for="jtv1"> <span class="button"></span> Pods<span class="count">(22)</span> </label> </a>
                                        </li>
                                        <li>
                                            <a href="{{route('category', ['category_id'=>3])}}"><label for="jtv1"> <span class="button"></span> Disposables<span class="count">(15)</span> </label></a>
                                        </li>
                                        <li>
                                            <a href="{{route('category', ['category_id'=>4])}}"><label for="jtv1"> <span class="button"></span> Mods<span class="count">(12)</span> </label></a>
                                        </li>
                                        <li>
                                            <a href="{{route('category', ['category_id'=>5])}}"><label for="jtv1"> <span class="button"></span> Ejuices<span class="count">(12)</span> </label></a>
                                        </li>
                                        <li>
                                            <a href="{{route('category', ['category_id'=>6])}}"><label for="jtv2"> <span class="button"></span> Nicotine Salts<span class="count">(18)</span> </label></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="manufacturer-area">
                                <h2 class="saider-bar-title">Manufacturer</h2>
                                <div class="saide-bar-menu">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Duis tempus id </a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Leo quis molestie. </a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Suspendisse </a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Nunc gravida </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-img-add sidebar-add-slider ">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active"> <img src="{{asset('assets/images/add-slide1.jpg')}}" alt="slide1">
                                    <div class="carousel-caption">
                                        <h3><a href="#" title=" Sample Product">Sale Up to 50% off</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="#" class="info">shopping Now</a> </div>
                                </div>
                                <div class="item"> <img src="{{asset('assets/images/add-slide2.jpg')}}" alt="slide2">
                                    <div class="carousel-caption">
                                        <h3><a href="#" title=" Sample Product">Smartwatch Collection</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="#" class="info">All Collection</a> </div>
                                </div>
                                <div class="item"> <img src="{{asset('assets/images/add-slide3.jpg')}}" alt="slide3">
                                    <div class="carousel-caption">
                                        <h3><a href="#" title=" Sample Product">Summer Sale</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <section class="blog-post-wrapper">
        <div class="container">
            <div class="best-title text-left">
                <h2>The Latest News</h2>
            </div>
            <div class="slider-items-products">
                <div id="latest-news-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">
                        @foreach($blogs as $each)
                        <div class="item">
                            <div class="blog-box"> <a href="{{route('blog', ['id'=>$each->id])}}"> <img class="primary-img" src="{{asset('assets/images/news/'.$each->image)}}" alt="HTML template"></a>
                                <div class="blog-btm-desc">
                                    <div class="blog-top-desc">
                                        <div class="blog-date"> {{date('d', strtotime($each->created_at))}} {{substr(date('F', strtotime($each->created_at)), 0, 3)}} {{date('Y', strtotime($each->created_at))}} </div>
                                        <h5><a href="{{route('blog', ['id'=>$each->id])}}">{{str_limit($each->title, 24)}}</a></h5>
                                        <div class="jtv-entry-meta"> <i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="{{route('blog', ['id'=>$each->id])}}"><i class="fa fa-thumbs-o-up"></i> <strong>{{$each->like}}</strong></a></div>
                                    </div>
                                    <p>{{str_limit($each->content, 120)}}</p>
                                    <br>
                                    <a class="read-more" href="{{route('blog', ['id'=>$each->id])}}"> Read More</a> </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="featured-products">
        <div class="container">
            <div class="row">

                <!-- Best Sale -->
                <div class="col-sm-12 col-md-4 jtv-best-sale">
                    <div class="jtv-best-sale-list">
                        <div class="wpb_wrapper">
                            <div class="best-title text-left">
                                <h2>Top Rate</h2>
                            </div>
                        </div>
                        <div class="slider-items-products">
                            <div id="toprate-products-slider" class="product-flexslider">
                                <div class="slider-items">
                                    <ul class="products-grid">
                                        @if(isset($bestSeller[0]))
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="{{route('product', $bestSeller[0]->slug)}}"> <img alt="HTML template" src="{{asset('assets/images/products/'.$bestSeller[0]->image)}}"> </a> </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="#">{{$bestSeller[0]->title}}</a> </div>
                                                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price">${{$bestSeller[0]->price}}</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" class="add-to-cart" onclick="addItemToCart({{$bestSeller[0]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                        <div class="pr-button-hover">
                                                            <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endif
                                        @if(isset($bestSeller[1]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="{{route('product', $bestSeller[1]->slug)}}"> <img alt="HTML template" src="{{asset('assets/images/products/'.$bestSeller[1]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$bestSeller[1]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$bestSeller[1]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$bestSeller[1]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                    <ul class="products-grid">
                                        @if(isset($bestSeller[2]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="{{route('product', $bestSeller[2]->slug)}}"> <img alt="HTML template" src="{{asset('assets/images/products/'.$bestSeller[2]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$bestSeller[2]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$bestSeller[2]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$bestSeller[2]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        @if(isset($bestSeller[3]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="{{route('product', $bestSeller[3]->slug)}}"> <img alt="HTML template" src="{{asset('assets/images/products/'.$bestSeller[3]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$bestSeller[3]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$bestSeller[3]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$bestSeller[3]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                    <ul class="products-grid">
                                        @if(isset($bestSeller[4]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="{{route('product', $bestSeller[4]->slug)}}"> <img alt="HTML template" src="{{asset('assets/images/products/'.$bestSeller[4]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$bestSeller[4]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$bestSeller[4]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$bestSeller[4]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        @if(isset($bestSeller[5]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="{{route('product', $bestSeller[5]->slug)}}"> <img alt="HTML template" src="{{asset('assets/images/products/'.$bestSeller[5]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$bestSeller[5]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$bestSeller[5]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$bestSeller[5]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner -->
                <div class="col-md-4 top-banner hidden-sm" id="scroll_to_sale">
                    <div class="jtv-banner3">
                        <div class="jtv-banner3-inner"><a href="#"><img src="{{asset('assets/images/sub1a.jpg')}}" alt="HTML template"></a>
                            <div class="hover_content">
                                <div class="hover_data bottom">
                                    <div class="desc-text">Top Brands at discount prices </div>
                                    <div class="title">Electronisc Sale</div>
                                    <span>Smartphone & Cell phone</span>
                                    <p><a href="#" class="shop-now">Get it now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 jtv-best-sale">
                    <div class="jtv-best-sale-list">
                        <div class="wpb_wrapper">
                            <div class="best-title text-left">
                                <h2>New products</h2>
                            </div>
                        </div>
                        <div class="slider-items-products">
                            <div id="new-products-slider" class="product-flexslider">
                                <div class="slider-items">
                                    <ul class="products-grid">
                                        @if(isset($new[0]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="HTML template" src="{{asset('assets/images/products/'.$new[0]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$new[0]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$new[0]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$new[0]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        @if(isset($new[1]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="HTML template" src="{{asset('assets/images/products/'.$new[1]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$new[1]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$new[1]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$new[1]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                    <ul class="products-grid">
                                        @if(isset($new[2]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="HTML template" src="{{asset('assets/images/products/'.$new[2]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$new[2]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$new[2]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$new[2]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        @if(isset($new[3]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="HTML template" src="{{asset('assets/images/products/'.$new[3]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$new[3]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$new[3]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$new[3]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                    <ul class="products-grid">
                                        @if(isset($new[4]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="HTML template" src="{{asset('assets/images/products/'.$new[4]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$new[4]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$new[4]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$new[4]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                        @if(isset($new[5]))
                                            <li class="item">
                                                <div class="item-inner">
                                                    <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="#"> <img alt="HTML template" src="{{asset('assets/images/products/'.$new[5]->image)}}"> </a> </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a title="Product title here" href="#">{{$new[5]->title}}</a> </div>
                                                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">${{$new[5]->price}}</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart" onclick="addItemToCart({{$new[5]->id}})"><i class="fa fa-shopping-cart"></i></button>
                                                            </div>
                                                            <div class="pr-button-hover">
                                                                <div class="mt-button add_to_compare"> <a href="#"> <i class="fa fa-link"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- our clients Slider -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="our-clients">
                    <div class="slider-items-products">
                        <div id="our-clients-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col6">
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand1.png')}}" alt="Image"></a> </div>
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand2.png')}}" alt="Image"></a> </div>
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand3.png')}}" alt="Image"></a> </div>
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand4.png')}}" alt="Image"></a> </div>
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand5.png')}}" alt="Image"></a> </div>
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand6.png')}}" alt="Image"></a> </div>
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand7.png')}}" alt="Image"></a> </div>
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand8.png')}}" alt="Image"></a> </div>
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand9.png')}}" alt="Image"></a> </div>
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand10.png')}}" alt="Image"></a> </div>
                                <div class="item"><a href="#"><img src="{{asset('assets/images/brand11.png')}}" alt="Image"></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BANNER-AREA-START -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
                            <div class="banner-block"> <a href="#"> <img src="{{asset('assets/images/banner-sunglasses.jpg')}}" alt="banner sunglasses"> </a>
                                <div class="text-des-container">
                                    <div class="text-des">
                                        <h2>Galaxy Note 5</h2>
                                        <p>Fall Phone 25% off Colorful designs!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
                            <div class="banner-block"> <a href="#"> <img src="{{asset('assets/images/banner-kids.jpg')}}" alt="banner kids"> </a>
                                <div class="text-des-container">
                                    <div class="text-des">
                                        <h2>Music & Sound</h2>
                                        <p>For the littlest people</p>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-block"> <a href="#"> <img src="{{asset('assets/images/banner-women.jpg')}}" alt="banner women"> </a>
                                <div class="text-des-container">
                                    <div class="text-des">
                                        <h2>Best Quality Music</h2>
                                        <p>Modern Headphones designs shop!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                    <div class="banner-block"> <a href="#"> <img src="{{asset('assets/images/banner-arrival.jpg')}}" alt="banner arrival"> </a>
                        <div class="text-des-container">
                            <div class="text-des">
                                <h2>special collection</h2>
                                <p>Sale upto 50% off on selected items</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER-AREA-END -->
    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <!-- Newsletter -->
                <div class="col-md-6 col-sm-6">
                    <form id="newsletter-validate-detail" method="post" action="#">
                        <h3>Join Our Newsletter</h3>
                        <div class="title-divider"><span></span></div>
                        <span class="sub-text">Enter your emali address to</span>
                        <p class="sub-title text-center">Get 25% off</p>
                        <span class="sub-text1">On your next Purchase</span>
                        <div class="newsletter-inner">
                            <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
                            <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Customers Box -->
                <div class="col-sm-6 col-xs-12 testimonials">
                    <div class="page-header">
                        <h2>What Our Customers Say</h2>
                        <div class="title-divider"><span></span></div>
                    </div>
                    <div class="slider-items-products">
                        <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
                            <div class="slider-items slider-width-col4 ">
                                <div class="holder">
                                    <blockquote>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip volutpat.
                                        Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel.</blockquote>
                                    <div class="thumb"> <img src="{{asset('assets/images/testimonials-img3.jpg')}}" alt="testimonials img"> </div>
                                    <div class="holder-info"> <strong class="name">John Doe</strong> <strong class="designation">CEO, Company</strong></div>
                                </div>
                                <div class="holder">
                                    <blockquote>Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.Lorem ipsum dolor sit ame consetur adipisicing elit.Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.</blockquote>
                                    <div class="thumb"> <img src="{{asset('assets/images/testimonials-img1.jpg')}}" alt="testimonials img"> </div>
                                    <div class="holder-info"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, Newspaper</strong> </div>
                                </div>
                                <div class="holder">
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Donec sit amet eros. Cras feugiat luctus nulla vitae posuere. Suspendisse potenti. </blockquote>
                                    <div class="thumb"> <img src="{{asset('assets/images/testimonials-img2.jpg')}}" alt="testimonials img"> </div>
                                    <div class="holder-info"><strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong></div>
                                </div>
                                <div class="holder">
                                    <blockquote>Aliquam erat volutpat. Sed do eiusmod tempor incididunt Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. Donec sit amet eros. Nulla non ornare nisi, sed condimentum lorem. Morbi sed vehicula magna.</blockquote>
                                    <div class="thumb"> <img src="{{asset('assets/images/testimonials-img4.jpg')}}" alt="testimonials img"> </div>
                                    <div class="holder-info"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="quick_view_popup-overlay" style="display: none;"></div>
    <div style="display: none;" id="quick_view_popup-wrap">
        <div id="quick_view_popup-outer">
            <div id="quick_view_popup-content">
                <div style="width:auto;height:auto;overflow: auto;position:relative;">
                    <div class="product-view-area">
                        <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                            <div class="icon-sale-label sale-left" id="quick_view_sale" style=" display: none;">Sale</div>
                            <div class="icon-new-label new-right" id="quick_view_newitem" style="display: none;">New</div>
                            <div class="large-image"> <a href="{{asset('assets/images/products/')}}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src=""> </a> </div>

                            <!-- end: more-images -->

                        </div>
                        <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7">
                            <div class="product-details-area">
                                <div class="product-name">
                                    <h1 id="quick_view_title">Donec Ac Tempus</h1>
                                </div>
                                <div class="price-box">
                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price" id="quick_view_price"> $329.99 </span> </p>
                                    <p class="old-price" id="quick_view_origin" style="display: none;"> <span class="price-label">Regular Price:</span> <span class="price" id="quick_view_originprice"> $359.99 </span> </p>
                                </div>
                                <div class="ratings">
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                    <p class="availability in-stock pull-right">Availability: <span id="quick_view_status">In Stock</span></p>
                                </div>
                                <div class="short-description">
                                    <h2>Quick Overview</h2>
                                    <p id="quick_view_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. </p>
                                </div>
                                <div class="product-variation">
                                    <form action="" method="post">
                                        <div class="cart-plus-minus">
                                            <label for="qty">Quantity:</label>
                                            <div class="numbers-row">
                                                <input type="hidden" name="id" id="hidden_input">
                                                <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                                                <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                                            </div>
                                        </div>
                                        <button class="button pro-add-to-cart" title="Add to Cart" type="button" onclick="addQuick()"><span><i class="fa fa-shopping-basket"></i> Add to Cart</span></button>
                                    </form>
                                </div>
{{--                                <div class="product-cart-option">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="#"><i class="fa fa-retweet"></i><span>Add to Compare</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <!--product-view-->

                </div>
            </div>
            <a style="display: inline;" id="quick_view_popup_close" href="javascript:void(0);"><i class="fa fa-times"></i></a> </div>
    </div>

@endsection

@section('page_script')
    <script type="text/javascript">
        $(".quick_view_btn").click(function() {
            var content = $(this).data("content");
            var image = document.getElementById('zoom1').getElementsByTagName('a');
            $(".zoom-img").attr('src', '{{asset('assets/images/products')}}'+'/'+content.image);
            image.href = 'assets/images/products/'+content.image;
            document.getElementById("quick_view_title").innerHTML = content.title;
            if(content.sale){
                document.getElementById("quick_view_sale").style.display = 'block';
                document.getElementById("quick_view_origin").style.display = 'block';
            }
            if(content.newitem){
                document.getElementById("quick_view_newitem").style.display = 'block';
            }
            document.getElementById("hidden_input").value = content.id;
            document.getElementById("qty").value = 0;
            document.getElementById("quick_view_description").innerHTML = content.description;
            document.getElementById("quick_view_price").innerHTML = '$'+content.price;
            document.getElementById("quick_view_originprice").innerHTML = '$'+content.origin_price;
            document.getElementById("quick_view_status").innerHTML = content.status;
            document.getElementById("quick_view_popup-overlay").style.display = 'block';
            document.getElementById("quick_view_popup-wrap").style.display = 'block';
            document.getElementById("quick_view_popup-wrap").style.position = 'fixed';
        });
        $("#quick_view_popup_close").click(function(){
            document.getElementById("quick_view_popup-overlay").style.display = 'none';
            document.getElementById("quick_view_popup-wrap").style.display = 'none';
        })
        // $(document).ready(function(){
        //
        // });
        $( "a.scroll_to_shop" ).click(function( event ) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 1000);
        });
        $( "a.scroll_to_bottom_sale" ).click(function( event ) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 1000);
        });
        function addItemToCart(id)
        {
            $.ajax({
                url:"{{route('addOne')}}",
                method: "GET",
                data: {id:id},
                success:function(result)
                {
                    $(".cart-total").html(result.qty);
                    $("#cart-sidebar").html(result.cart_area);
                    console.log(result);
                    $("#total_price").html(result.totalPrice);
                },
                error:function (err) {
                    console.log(err);
                },

            });
        }
        function addQuick()
        {
            var id = $('#hidden_input').val();
            var qty = $('#qty').val();

            $.ajax({
                url:"{{route('addOne')}}",
                method: "GET",
                data: {id:id, qty:qty},
                success:function(result)
                {
                    $(".cart-total").html(result.qty);
                    $("#cart-sidebar").html(result.cart_area);
                    console.log(result);
                    $("#total_price").html(result.totalPrice);
                },
                error:function (err) {
                    alert(err);
                },

            });
            document.getElementById("quick_view_popup-overlay").style.display = 'none';
            document.getElementById("quick_view_popup-wrap").style.display = 'none';
        }
    </script>
@endsection
