@extends('layouts.shop')

@section('page_title')
    Cigavape Website
@endsection

@section('page_meta')
@endsection

@section('page_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')
<div class="main-container">
    <div class="container">
        <div class="row">
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
        </div>
    </div>
</div>
<br>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
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
