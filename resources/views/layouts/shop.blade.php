
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vape</title>
    <meta name="google" content="clean template, electronics Store, html5, electronics template, makeup store, modern, multipurpose store, electronics shop, commerce, ecommerce, electronics, electronics theme, megamenu, modern, retail, store"/>

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">

    <!-- CSS Style -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/loader.css">
    <style>
        #checkout_overlay{
            display: none;
            z-index: 1000;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0,0,0,.5);
        }

        #checkout_form{
            display: none;
            z-index: 1001;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 40px;
        }
        .form-row {
            width: 70%;
            float: left;
            background-color: #ededed;
        }
        #card-element {
            background-color: transparent;
            height: 40px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        #card-element--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        #card-element--invalid {
            border-color: #fa755a;
        }

        #card-element--webkit-autofill {
            background-color: #fefde5 !important;
        }

        #submitbutton,#tap-btn{
            align-items:flex-start;
            background-attachment:scroll;background-clip:border-box;
            background-color:rgb(50, 50, 93);background-image:none;
            background-origin:padding-box;
            background-position-x:0%;
            background-position-y:0%;
            background-size:auto;
            border-bottom-color:rgb(255, 255, 255);
            border-bottom-left-radius:4px;
            border-bottom-right-radius:4px;border-bottom-style:none;
            border-bottom-width:0px;border-image-outset:0px;
            border-image-repeat:stretch;border-image-slice:100%;
            border-image-source:none;border-image-width:1;
            border-left-color:rgb(255, 255, 255);
            border-left-style:none;
            border-left-width:0px;
            border-right-color:rgb(255, 255, 255);
            border-right-style:none;
            border-right-width:0px;
            border-top-color:rgb(255, 255, 255);
            border-top-left-radius:4px;
            border-top-right-radius:4px;
            border-top-style:none;
            border-top-width:0px;
            box-shadow:rgba(50, 50, 93, 0.11) 0px 4px 6px 0px, rgba(0, 0, 0, 0.08) 0px 1px 3px 0px;
            box-sizing:border-box;color:rgb(255, 255, 255);
            cursor:pointer;
            display:block;
            float:left;
            font-family:"Helvetica Neue", Helvetica, sans-serif;
            font-size:15px;
            font-stretch:100%;
            font-style:normal;
            font-variant-caps:normal;
            font-variant-east-asian:normal;
            font-variant-ligatures:normal;
            font-variant-numeric:normal;
            font-weight:600;
            height:35px;
            letter-spacing:0.375px;
            line-height:35px;
            margin-bottom:0px;
            margin-left:12px;
            margin-right:0px;
            margin-top:28px;
            outline-color:rgb(255, 255, 255);
            outline-style:none;
            outline-width:0px;
            overflow-x:visible;
            overflow-y:visible;
            padding-bottom:0px;
            padding-left:14px;
            padding-right:14px;
            padding-top:0px;
            text-align:center;
            text-decoration-color:rgb(255, 255, 255);
            text-decoration-line:none;
            text-decoration-style:solid;
            text-indent:0px;
            text-rendering:auto;
            text-shadow:none;
            text-size-adjust:100%;
            text-transform:none;
            transition-delay:0s;
            transition-duration:0.15s;
            transition-property:all;
            transition-timing-function:ease;
            white-space:nowrap;
            width:150.781px;
            word-spacing:0px;
            writing-mode:horizontal-tb;
            -webkit-appearance:none;
            -webkit-font-smoothing:antialiased;
            -webkit-tap-highlight-color:rgba(0, 0, 0, 0);
            -webkit-border-image:none;
        }
        #checkout_form_close, #quick_view_popup_close
        {
            position: fixed;
            right: 0;
            top: 0;
            font-size: 24px;
            padding-right: 10px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.4/bluebird.min.js"></script>
    <script src="https://secure.gosell.io/js/sdk/tap.min.js"></script>
</head>

<body>

<div class="loading">
    <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div>
    <img src="{{asset('assets/images/logo.png')}}" class="logo_image">
</div>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
@include('includes.frontend.mobileMenu')

<div id="page">

    @include('includes.frontend.header')

    @yield('content')

    @include('includes.frontend.footer')
</div>

<!-- JS -->

<!-- jquery js -->
<script src="/assets/js/jquery.min.js"></script>

<!-- bootstrap js -->
<script src="/assets/js/bootstrap.min.js"></script>

<!-- owl.carousel.min js -->
<script src="/assets/js/owl.carousel.min.js"></script>

<!-- jquery.mobile-menu js -->
<script src="/assets/js/mobile-menu.js"></script>

<!--jquery-ui.min js -->
<script src="/assets/js/jquery-ui.js"></script>

<!-- main js -->
<script src="/assets/js/main.js"></script>

<!-- countdown js -->
<script src="/assets/js/countdown.js"></script>

<!-- Slider Js -->
<script src="/assets/js/revolution-slider.js"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('#rev_slider_4').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 865,
            startheight: 450,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',

            touchenabled: 'on',
            onHoverStop: 'on',

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: 'spinner0',
            keyboardNavigation: 'off',

            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'off',

            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: 'off',

            autoHeight: 'off',
            forceFullWidth: 'on',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,


            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
</script>

@yield('page_script')

<script>
    window.onload = function () {
        setTimeout(function () {
            $('.loading').fadeOut('slow');
        }, 100);
    }
    function deleteItem(id)
    {
        $.ajax({
            url:"{{route('deleteItemFromCart')}}",
            method: "GET",
            data: {id:id},
            success:function(result)
            {
                console.log(result);
                $(".cart-total").html(result.qty);
                $("#cart-sidebar").html(result.cart_area);
                $("#total_price").html(result.totalPrice);
            },
            error:function (err) {
                console.log(err);
            },
        });
    }
    function checkout()
    {
        if(document.getElementById('total_price').innerHTML!='0')
        {
            document.getElementById("checkout_form").style.display = 'block';
            document.getElementById("checkout_overlay").style.display = 'block';
        }

    }
    $("#checkout_form_close").click(function(){
        document.getElementById("checkout_form").style.display = 'none';
        document.getElementById("checkout_overlay").style.display = 'none';
    })
</script>
<script>
    var tap = Tapjsli('pk_test_Pg2efQVK1zDh0MEacS463j7F');
    var elements = tap.elements({});
    var style = {
        base: {
            color: '#535353',
            lineHeight: '18px',
            fontFamily: 'sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: 'rgba(0, 0, 0, 0.26)',
                fontSize:'15px'
            }
        },
        invalid: {
            color: 'red'
        }
    };
    // input labels/placeholders
    var labels = {
        cardNumber:"Card Number",
        expirationDate:"MM/YY",
        cvv:"CVV",
        cardHolder:"Card Holder Name"
    };
    //payment options
    var paymentOptions = {
        currencyCode:["KWD","USD","SAR"],
        labels : labels,
        TextDirection:'ltr'
    }
    //create element, pass style and payment options
    var card = elements.create('card', {style: style},paymentOptions);
    //mount element
    card.mount('#element-container');
    //card change event listener
    card.addEventListener('change', function(event) {
        if(event.BIN){
            console.log(event.BIN)
        }
        if(event.loaded){
            console.log("UI loaded :"+event.loaded);
            console.log("current currency is :"+card.getCurrency())
        }
        var displayError = document.getElementById('error-handler');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission
    var form = document.getElementById('form-container');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        $('.loading').css('display', 'flex');

        tap.createToken(card).then(function(result) {
            console.log(result);
            if (result.error) {
                // Inform the user if there was an error
                var errorElement = document.getElementById('error-handler');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server
                console.log(result);

                $.ajax({
                    url:"{{route('checkout')}}",
                    method: "GET",
                    data: {
                        id: result.id,
                        name:result.card.name,
                        amount: $("#total_price").text(),
                    },
                    success:function(result)
                    {
                        //console.log(JSON.parse(result)['status']);
                        location.reload();
                    },
                    error:function (err) {
                        console.log(err);
                    },

                });
            }
        });
    });
</script>
</body>
</html>
