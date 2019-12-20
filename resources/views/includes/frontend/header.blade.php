
<!-- Header -->
<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-xs-6">
                        <!-- Default Welcome Message -->
                        <div class="welcome-msg hidden-xs hidden-sm">Default welcome msg! </div>
                        <!-- Language &amp; Currency wrapper -->
                        <div class="language-currency-wrapper">
                            <div class="inner-cl">
                                <div class="block block-language form-language">
                                    <div class="lg-cur"><span><img src="{{asset('assets/images/flag-default.jpg')}}" alt="Kuwaiti"><span class="lg-fr">Kuwaiti</span><i class="fa fa-angle-down"></i></span></div>
                                    <ul>
                                        <li><a class="selected" href="#"><img src="{{asset('assets/images/flag-default.jpg')}}" alt="French"><span>Kuwaiti</span></a></li>
                                        <li><a href="#"><img src="{{asset('assets/images/flag-english.jpg')}}" alt="english"><span>English</span></a></li>
{{--                                        <li><a href="#"><img src="{{asset('assets/images/flag-german.jpg')}}" alt="German"><span>German</span></a></li>--}}
{{--                                        <li><a href="#"><img src="{{asset('assets/images/flag-brazil.jpg')}}" alt="Brazil"><span>Brazil</span></a></li>--}}
{{--                                        <li><a href="#"><img src="{{asset('assets/images/flag-chile.jpg')}}" alt="Chile"><span>Chile</span></a></li>--}}
{{--                                        <li><a href="#"><img src="{{asset('assets/images/flag-spain.jpg')}}" alt="Spain"><span>Spain</span></a></li>--}}
                                    </ul>
                                </div>
{{--                                <div class="block block-currency">--}}
{{--                                    <div class="item-cur"><span>USD</span><i class="fa fa-angle-down"></i></div>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="#"><span class="cur_icon">€</span>EUR</a></li>--}}
{{--                                        <li><a href="#"><span class="cur_icon">¥</span>JPY</a></li>--}}
{{--                                        <li><a class="selected" href="#"><span class="cur_icon">$</span>USD</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <!-- top links -->
                    <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-6">
                        <a href="tel: 123 456 789" style="color: #333;"><span class="phone  hidden-xs hidden-sm">Call Us: +123.456.789</span></a>
                        <ul class="links">
                            <li class="hidden-xs"><a title="Help Center" href="{{route('contact')}}"><span>Contact Us</span></a></li>
                            <li><a title="login" href="#"><span>Login</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header inner -->
        <div class="header-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-12 jtv-logo-block">

                        <!-- Header Logo -->
                        <div class="logo"><a title="e-commerce" href="{{route('home')}}"><img alt="Famous" title="Famous" src="{{asset('assets/images/logo.png')}}"></a> </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-6 jtv-top-search">

                        <!-- Search -->

                        <div class="top-search">
                            <div id="search">
                                <form method="post" action="{{route('search')}}">
                                    @csrf
                                    <div class="input-group">
                                        <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                                            <option value="0">&nbsp&nbsp All Categories</option>
                                            <option value="1">&nbsp&nbsp Pod Systems</option>
                                            <option value="2">&nbsp&nbsp Pods</option>
                                            <option value="3">&nbsp&nbsp Disposables</option>
                                            <option value="4">&nbsp&nbsp Mods</option>
                                            <option value="5">&nbsp&nbsp Ejuices</option>
                                            <option value="6">&nbsp&nbsp Nicotine Salts</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="Enter your search..." name="search">
                                        <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- End Search -->

                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3 top-cart">
                        <!-- top cart -->
                        <div class="top-cart-contain">
                            <div class="mini-cart">
                                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                                        <div class="cart-icon"><i class="icon-basket-loaded icons"></i><span class="cart-total">{{Session::has('cart')?Session::get('cart')->totalQty:0}}</span></div>
                                        <div class="shoppingcart-inner hidden-xs"><span class="cart-title">My Cart</span> </div>
                                    </a></div>
                                <div>
                                    <div class="top-cart-content">
                                        <div class="block-subtitle hidden">Recently added items</div>

                                        <ul id="cart-sidebar" class="mini-products-list">
                                            @if(Session::has('cart'))
                                            @foreach(Session::get('cart')->items as $each)
                                            <li class="item"> <a href="{{route('cart')}}" title="Product title here" class="product-image"><img src="{{asset('assets/images/products/'.$each['item']['image'])}}" alt="html Template" width="65"></a>
                                                <div class="product-details"> <a href="javascript:void(0)" title="Remove This Item" class="remove-cart" onclick="deleteItem({{$each['item']['id']}})"><i class="fa fa-times"></i></a>
                                                    <p class="product-name"><a href="{{route('cart')}}">{{$each['item']['title']}}</a> </p>
                                                    <strong>{{$each['qty']}}</strong> x <span class="price">${{$each['item']['price']}}</span> </div>
                                            </li>
                                            @endforeach
                                            @endif
                                        </ul>
                                        <div class="top-subtotal">Total: $<span class="price" id="total_price">{{Session::has('cart')?Session::get('cart')->totalPrice:0}}</span></div>
                                        <div class="actions">
                                            <button class="btn-checkout" type="button" onClick="checkout()"><i class="fa fa-check"></i><span>Checkout</span></button>
                                            <button class="view-cart" type="button" onClick="location.href='{{route('cart')}}'"><i class="fa fa-shopping-cart"></i><span>View Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
<nav>
    <div class="container">
        <div class="row">
            <div class="mm-toggle-wrap">
                <div class="mm-toggle"><i class="fa fa-align-justify"></i> </div>
                <span class="mm-label">Menu</span> </div>
            <div class="col-md-3 col-sm-3 mega-container hidden-xs">
                <div class="navleft-container">
                    <div class="mega-menu-title">
                        <h3><span>All Categories</span></h3>
                    </div>

                    <!-- Shop by category -->
                    <div class="mega-menu-category">
                        <ul class="nav">
                            <li><a href="#">Pod Systems</a>
                                <div class="wrap-popup">
                                    <div class="popup">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-6 has-sep">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 has-sep hidden-sm">
                                                <div class="custom-menu-right">
                                                    <div class="box-banner menu-banner">
                                                        <div class="add-right"><a href="#"><img src="{{asset('assets/images/menu-banner-img1.jpg')}}" alt="responsive"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pods</a>
                                <div class="wrap-popup">
                                    <div class="popup">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-6 has-sep">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 has-sep hidden-sm">
                                                <div class="custom-menu-right">
                                                    <div class="box-banner menu-banner">
                                                        <div class="add-right"><a href="#"><img src="{{asset('assets/images/menu-banner-img2.jpg')}}" alt="responsive"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Disposables</a>
                                <div class="wrap-popup">
                                    <div class="popup">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-6 has-sep">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 has-sep hidden-sm">
                                                <div class="custom-menu-right">
                                                    <div class="box-banner menu-banner">
                                                        <div class="add-right"><a href="#"><img src="{{asset('assets/images/menu-banner-img3.jpg')}}" alt="responsive"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Mods</a>
                                <div class="wrap-popup">
                                    <div class="popup">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-6 has-sep">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 has-sep hidden-sm">
                                                <div class="custom-menu-right">
                                                    <div class="box-banner menu-banner">
                                                        <div class="add-right"><a href="#"><img src="{{asset('assets/images/menu-banner-img4.jpg')}}" alt="responsive"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Ejuices</a>
                                <div class="wrap-popup">
                                    <div class="popup">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-6 has-sep">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 has-sep hidden-sm">
                                                <div class="custom-menu-right">
                                                    <div class="box-banner menu-banner">
                                                        <div class="add-right"><a href="#"><img src="{{asset('assets/images/menu-banner-img2.jpg')}}" alt="responsive"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Nicotine Salts</a>
                                <div class="wrap-popup">
                                    <div class="popup">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-6 has-sep">
                                                <ul class="nav">
                                                    <li><a href="#"><span>Item #1</span></a></li>
                                                    <li><a href="#"><span>Item #2</span></a></li>
                                                    <li><a href="#"><span>Item #3</span></a></li>
                                                    <li><a href="#"><span>Item #4</span> </a></li>
                                                    <li><a href="#"><span>Item #5</span> </a></li>
                                                    <li><a href="#"><span>Item #6</span> </a></li>
                                                    <li><a href="#"><span>Item #7</span> </a></li>
                                                    <li><a href="#"><span>Item #8</span> </a></li>
                                                    <li><a href="#"><span>Item #9</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 has-sep hidden-sm">
                                                <div class="custom-menu-right">
                                                    <div class="box-banner menu-banner">
                                                        <div class="add-right"><a href="#"><img src="{{asset('assets/images/menu-banner-img1.jpg')}}" alt="responsive"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 jtv-megamenu">
                <div class="mtmegamenu">
                    <ul class="hidden-xs">
                        <li class="mt-root demo_custom_link_cms">
                            <div class="mt-root-item"><a href="{{route('home')}}">
                                    <div class="title title_font"><span class="title-text">Home</span></div>
                                </a></div>
                        </li>
                        <li class="mt-root">
                            <div class="mt-root-item"><a href="{{route('about')}}">
                                    <div class="title title_font"><span class="title-text">About Us</span></div>
                                </a></div>
                        </li>
                        <li class="mt-root">
                            <div class="mt-root-item"><a href="{{route('contact')}}">
                                    <div class="title title_font"><span class="title-text">Contact Us</span></div>
                                </a></div>
                        </li>
                        <li class="mt-root">
                            <div class="mt-root-item"><a href="#">
                                    <div class="title title_font"><span class="title-text">Shipping</span></div>
                                </a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id="checkout_overlay"></div>
<div id="checkout_form">
    <form id="form-container" method="post" action="/charge">
        <!-- Tap element will be here -->
        <div id="element-container"></div>
        <div id="error-handler" role="alert"></div>

        <!-- Tap pay button -->
        <button id="tap-btn">Submit</button>
    </form>
    <a style="display: inline;" id="checkout_form_close" href="javascript:void(0);"><i class="fa fa-times"></i></a>
</div>

