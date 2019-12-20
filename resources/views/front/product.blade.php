@extends('layouts.shop')

@section('page_title')
    Our Product
@endsection

@section('page_meta')
@endsection

@section('page_style')
@endsection

@section('content')
    <div class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="col-main">
                    <div class="product-view-area">
                        <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                            @if($product->sale)
                            <div class="icon-sale-label sale-left">Sale</div>
                            @endif
                            @if($product->newitem)
                            <div class="icon-new-label new-right">New</div>
                            @endif
                            <div class="large-image"> <a href="{{asset('assets/images/products/'.$product->image)}}" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="{{asset('assets/images/products/'.$product->image)}}" alt="products"> </a> </div>
{{--                            <div class="flexslider flexslider-thumb">--}}
{{--                                <ul class="previews-list slides">--}}
{{--                                    <li><a href='{{asset('assets/images/products/product-1.jpg')}}' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('assets/images/products/product-1.jpg')}}' "><img src="{{asset('assets/images/products/product-1.jpg')}}" alt = "Thumbnail 2"/></a></li>--}}
{{--                                    <li><a href='{{asset('assets/images/products/product-1a.jpg')}}' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('assets/images/products/product-1a.jpg')}}' "><img src="{{asset('assets/images/products/product-1a.jpg')}}" alt = "Thumbnail 1"/></a></li>--}}
{{--                                    <li><a href='{{asset('assets/images/products/product-1b.jpg')}}' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('assets/images/products/product-1b.jpg')}}' "><img src="{{asset('assets/images/products/product-1b.jpg')}}" alt = "Thumbnail 1"/></a></li>--}}
{{--                                    <li><a href='{{asset('assets/images/products/product-1c.jpg')}}' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('assets/images/products/product-1c.jpg')}}' "><img src="{{asset('assets/images/products/product-1c.jpg')}}" alt = "Thumbnail 2"/></a></li>--}}
{{--                                    <li><a href='{{asset('assets/images/products/product-1d.jpg')}}' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '{{asset('assets/images/products/product-1d.jpg')}}' "><img src="{{asset('assets/images/products/product-1d.jpg')}}" alt = "Thumbnail 2"/></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

                            <!-- end: more-images -->

                        </div>
                        <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
                            <div class="product-name">
                                <h1>{{$product->title}}</h1>
                            </div>
                            <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ${{$product->price}} </span> </p>
                                @if($product->sale)
                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ${{$product->origin_price}} </span> </p>
                                @endif
                            </div>
                            <div class="ratings">
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
{{--                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>--}}
                                <p class="availability in-stock pull-right">Availability: <span>{{$product->status}}</span></p>
                            </div>
                            <div class="short-description">
                                <h2>Quick Overview</h2>
                                <p>{{$product->description}}</p>
                            </div>
{{--                            <div class="product-color-size-area">--}}
{{--                                <div class="color-area">--}}
{{--                                    <h2 class="saider-bar-title">Color</h2>--}}
{{--                                    <div class="color">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#"></a></li>--}}
{{--                                            <li><a href="#"></a></li>--}}
{{--                                            <li><a href="#"></a></li>--}}
{{--                                            <li><a href="#"></a></li>--}}
{{--                                            <li><a href="#"></a></li>--}}
{{--                                            <li><a href="#"></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="size-area">--}}
{{--                                    <h2 class="saider-bar-title">Size</h2>--}}
{{--                                    <div class="size">--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#">S</a></li>--}}
{{--                                            <li><a href="#">L</a></li>--}}
{{--                                            <li><a href="#">M</a></li>--}}
{{--                                            <li><a href="#">XL</a></li>--}}
{{--                                            <li><a href="#">XXL</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="product-variation">
                                <form action="" method="post">
                                    <div class="cart-plus-minus">
                                        <label for="qty">Quantity:</label>
                                        <div class="numbers-row">
                                            <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                                            <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                            <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                                        </div>
                                    </div>
                                    <button class="button pro-add-to-cart" title="Add to Cart" type="button" onclick="addItemToCart({{$product->id}})"><span><i class="fa fa-shopping-basket"></i> Add to Cart</span></button>
                                </form>
                            </div>
{{--                            <div class="product-cart-option">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="fa fa-heart-o"></i><span>Add to Wishlist</span></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-link"></i><span>Add to Compare</span></a></li>--}}
{{--                                    <li><a href="#"><i class="fa fa-envelope"></i><span>Email to a Friend</span></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                            <div class="pro-tags">
                                <div class="pro-tags-title">Tags: {{$product->tags}}</div>
{{--                                <a href="#">ecommerce</a>, <a href="#">bootstrap</a>, <a href="#">shopping</a>, <a href="#">fashion</a>, <a href="#">responsive</a> </div>--}}
                            <div class="share-box">
                                <div class="title">Share in social media</div>
                                <div class="socials-box"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-overview-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="product-tab-inner">
                                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                        <li class="active"> <a href="#description" data-toggle="tab"> Description </a> </li>
{{--                                        <li> <a href="#reviews" data-toggle="tab">Reviews</a> </li>--}}
{{--                                        <li><a href="#product_tags" data-toggle="tab">Tags</a></li>--}}
{{--                                        <li> <a href="#custom_tabs" data-toggle="tab">Custom Tab</a> </li>--}}
                                    </ul>
                                    <div id="productTabContent" class="tab-content">
                                        <div class="tab-pane fade in active" id="description">
                                            <div class="std">
                                                <p>{{$product->description}}</p>
                                            </div>
                                        </div>
{{--                                        <div id="reviews" class="tab-pane fade">--}}
{{--                                            <div class="col-sm-5 col-lg-5 col-md-5">--}}
{{--                                                <div class="reviews-content-left">--}}
{{--                                                    <h2>Customer Reviews</h2>--}}
{{--                                                    <div class="review-ratting">--}}
{{--                                                        <p><a href="#">Amazing</a> Review by Company</p>--}}
{{--                                                        <table>--}}
{{--                                                            <tbody>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Price</th>--}}
{{--                                                                <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Value</th>--}}
{{--                                                                <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Quality</th>--}}
{{--                                                                <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>--}}
{{--                                                            </tr>--}}
{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                        <p class="author"> Angela Mack<small> (Posted on 16/12/2015)</small> </p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="review-ratting">--}}
{{--                                                        <p><a href="#">Good!!!!!</a> Review by Company</p>--}}
{{--                                                        <table>--}}
{{--                                                            <tbody>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Price</th>--}}
{{--                                                                <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Value</th>--}}
{{--                                                                <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Quality</th>--}}
{{--                                                                <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>--}}
{{--                                                            </tr>--}}
{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                        <p class="author"> Lifestyle<small> (Posted on 20/12/2015)</small> </p>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="review-ratting">--}}
{{--                                                        <p><a href="#">Excellent</a> Review by Company</p>--}}
{{--                                                        <table>--}}
{{--                                                            <tbody>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Price</th>--}}
{{--                                                                <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Value</th>--}}
{{--                                                                <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>--}}
{{--                                                            </tr>--}}
{{--                                                            <tr>--}}
{{--                                                                <th>Quality</th>--}}
{{--                                                                <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>--}}
{{--                                                            </tr>--}}
{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                        <p class="author"> Jone Deo<small> (Posted on 25/12/2015)</small> </p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-sm-7 col-lg-7 col-md-7">--}}
{{--                                                <div class="reviews-content-right">--}}
{{--                                                    <h2>Write Your Own Review</h2>--}}
{{--                                                    <form>--}}
{{--                                                        <h3>You're reviewing: <span>Donec Ac Tempus</span></h3>--}}
{{--                                                        <h4>How do you rate this product?<em>*</em></h4>--}}
{{--                                                        <div class="table-responsive reviews-table">--}}
{{--                                                            <table>--}}
{{--                                                                <tbody>--}}
{{--                                                                <tr>--}}
{{--                                                                    <th></th>--}}
{{--                                                                    <th>1 star</th>--}}
{{--                                                                    <th>2 stars</th>--}}
{{--                                                                    <th>3 stars</th>--}}
{{--                                                                    <th>4 stars</th>--}}
{{--                                                                    <th>5 stars</th>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td>Quality</td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td>Price</td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                </tr>--}}
{{--                                                                <tr>--}}
{{--                                                                    <td>Value</td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                    <td><input type="radio"></td>--}}
{{--                                                                </tr>--}}
{{--                                                                </tbody>--}}
{{--                                                            </table>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-area">--}}
{{--                                                            <div class="form-element">--}}
{{--                                                                <label>Nickname <em>*</em></label>--}}
{{--                                                                <input type="text">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="form-element">--}}
{{--                                                                <label>Summary of Your Review <em>*</em></label>--}}
{{--                                                                <input type="text">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="form-element">--}}
{{--                                                                <label>Review <em>*</em></label>--}}
{{--                                                                <textarea></textarea>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="buttons-set">--}}
{{--                                                                <button class="button submit" title="Submit Review" type="submit"><span><i class="fa fa-thumbs-up"></i> &nbsp;Review</span></button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade" id="product_tags">--}}
{{--                                            <div class="box-collateral box-tags">--}}
{{--                                                <div class="tags">--}}
{{--                                                    <form id="addTagForm" action="#" method="get">--}}
{{--                                                        <div class="form-add-tags">--}}
{{--                                                            <div class="input-box">--}}
{{--                                                                <label for="productTagName">Add Your Tags:</label>--}}
{{--                                                                <input class="input-text" name="productTagName" id="productTagName" type="text">--}}
{{--                                                                <button type="button" title="Add Tags" class="button add-tags"><i class="fa fa-plus"></i> &nbsp;<span>Add Tags</span> </button>--}}
{{--                                                            </div>--}}
{{--                                                            <!--input-box-->--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
{{--                                                <!--tags-->--}}
{{--                                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tab-pane fade" id="custom_tabs">--}}
{{--                                            <div class="product-tabs-content-inner clearfix">--}}
{{--                                                <p><strong>Lorem Ipsum</strong><span>&nbsp;is--}}
{{--                          simply dummy text of the printing and typesetting industry. Lorem Ipsum--}}
{{--                          has been the industry's standard dummy text ever since the 1500s, when--}}
{{--                          an unknown printer took a galley of type and scrambled it to make a type--}}
{{--                          specimen book. It has survived not only five centuries, but also the--}}
{{--                          leap into electronic typesetting, remaining essentially unchanged. It--}}
{{--                          was popularised in the 1960s with the release of Letraset sheets--}}
{{--                          containing Lorem Ipsum passages, and more recently with desktop--}}
{{--                          publishing software like Aldus PageMaker including versions of Lorem--}}
{{--                          Ipsum.</span></p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
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
                                <h3>30 Days Return</h3>
                                <p>Moneyback guarantee </p>
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

@endsection

@section('page_script')
    <script>
        function addItemToCart(id)
        {
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
                    console.log(err);
                },

            });
        }
    </script>
@endsection
