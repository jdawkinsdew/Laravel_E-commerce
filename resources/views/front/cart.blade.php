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

    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart">

                    <div class="page-content page-order"><div class="page-title">
                            <h2>Shopping Cart</h2>
                        </div>


                        <div class="order-detail-content">
                            <div class="table-responsive">
                                <table class="table table-bordered cart_summary">
                                    <thead>
                                    <tr>
                                        <th class="cart_product">Product</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Unit price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th  class="action"><i class="fa fa-trash-o"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody id="cart_table_area">
                                    @if(Session::has('cart'))
                                    @foreach(Session::get('cart')->items as $each)
                                    <tr>
                                        <td class="cart_product"><a href="{{route('product', ['id'=>$each['item']['slug']])}}"><img src="{{asset('assets/images/products/'.$each['item']['image'])}}" alt="Product"></a></td>
                                        <td class="cart_description"><p class="product-name"><a href="{{route('product', ['id'=>$each['item']['id']])}}">{{$each['item']['title']}} </a></p>
                                        <td class="availability in-stock"><span>{{$each['item']['description']}}</span></td>
                                        <td class="price"><span>${{$each['item']['price']}}</span></td>
                                        <td class="qty"><span>{{$each['qty']}}</span></td>
                                        <td class="price"><span>${{$each['item']['price']*$each['qty']}}</span></td>
                                        <td class="action"><a href="javascript:void(0)" onclick="deleteFromCartPage({{$each['item']['id']}})"><i class="icon-close"></i></a></td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="2" rowspan="2"></td>
                                        <td colspan="3">Total products (tax incl.)</td>
                                        <td colspan="2" id="total_qty_holder">${{Session::get('cart')->totalPrice?? '0'}} </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><strong>Total</strong></td>
                                        <td colspan="2" id="total_price_holder"><strong>${{Session::get('cart')->totalPrice?? '0'}} </strong></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="cart_navigation"> <a class="continue-btn" href="{{route('home')}}"><i class="fa fa-arrow-left"> </i>&nbsp; Continue shopping</a> <a class="checkout-btn" href="javascript:void(0)" onclick="checkout()"><i class="fa fa-check"></i> Proceed to checkout</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        function deleteFromCartPage(id)
        {
            $.ajax({
                url:"{{route('deleteFromCartPage')}}",
                method: "GET",
                data: {id:id},
                success:function(result)
                {
                    console.log(result);
                    $("#total_qty_holder").html(result.qty);
                    $("#cart_table_area").html(result.cart_table_area);
                    $("#total_price_holder").html(result.totalPrice);
                },
                error:function (err) {
                    console.log(err);
                },
            });
        }
    </script>
@endsection
