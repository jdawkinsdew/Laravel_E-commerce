@extends('layouts.shop')

@section('page_title')
    Cigavape Website
@endsection

@section('page_meta')
@endsection

@section('page_style')
@endsection

@section('content')
<!-- Main Container -->

<div class="main container">

    <div class="about-page">
        <div class="col-xs-12 col-sm-6">

            <h1>Welcome to <span class="text_color">Cigavape</span></h1>
            <p>The Life is Good brand is about more than spreading optimism -- although, with uplifting T-shirt slogans like "Seas The Day" and "Forecast: Mostly Sunny," it's hard not to crack a smile.<br>
                <br>
                There are a ton of T-shirt companies in the world, but Life is Good's mission sets itself apart with a mission statement goes beyond fun clothing: to spread the power of optimism. This mission is perhaps a little unexpected if you're not familiar with the company's public charity: How will a T-shirt company help spread optimism? Life is Good answers that question below the fold, where what the mission means is explained in more detail, with links to programs implemented to support it: its #GrowTheGood initiative and the Life is Good Kids Foundation page. We really like how lofty yet specific this mission statement is -- it's a hard-to-balance combination.</p>
            <ul>
                <li><i class="fa fa-arrow-right"></i>&nbsp; <a href="#">Suspendisse potenti. Morbi mollis tellus ac sapien.</a></li>
                <li><i class="fa fa-arrow-right"></i>&nbsp; <a href="#">Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu.</a></li>
                <li><i class="fa fa-arrow-right"></i>&nbsp; <a href="#">Phasellus accumsan cursus velit. Pellentesque egestas.</a></li>
                <li><i class="fa fa-arrow-right"></i>&nbsp; <a href="#">Lorem Ipsum generators on the Internet tend to repeat predefined.</a></li>
            </ul>

        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="single-img-add sidebar-add-slider">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"> <img src="{{asset('assets/images/about_us_slide1.jpg')}}" alt="slide1"> </div>
                        <div class="item"> <img src="{{asset('assets/images/about_us_slide2.jpg')}}" alt="slide2"> </div>
                        <div class="item"> <img src="{{asset('assets/images/about_us_slide3.jpg')}}" alt="slide3"> </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Section: services -->
<section id="service" class="text-center">



    <div class="container">

        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon"> <i class="fa fa-handshake-o"></i> </div>
                        <div class="service-desc">
                            <h4>Dedicated Service</h4>
                            <p>Consult our specialists for help with an order, customization, or design advice.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon"> <i class="fa fa-money"></i> </div>
                        <div class="service-desc">
                            <h4>Free Returns</h4>
                            <p>We stand behind our goods and services and want you to be satisfied with them.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-box">
                        <div class="service-icon"> <i class="fa fa-truck"></i> </div>
                        <div class="service-desc">
                            <h4>International Shipping</h4>
                            <p>Currently over 50 countries qualify for express international shipping.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Our Vision -->
<div class="main container">
    <div class="about-page">
        <div class="col-12">
            <h1>Our <span class="text_color">Vision</span></h1>
            <p>Notice that sweetgreen's mission is positioned to align with your values -- not just written as something the brand believes. We love the inclusive language used in its statement, letting us know that the company is all about connecting its growing network of farmers growing healthy, local ingredients with us -- the customer -- because we're the ones who want more locally grown, healthy food options.<br>
                <br>
                The mission to connect people is what makes this statement so strong. And that promise has gone beyond sweetgreen's website and walls of its food shops: The team has made strides in the communities where it's opened stores as well. Primarily, it provides education to young kids on healthy eating, fitness, sustainability, and where food comes from. The sweetlife music festival attracts 20,000 like-minded people every year who come together to listen to music, eat healthy food, and give back to a cause -- the sweetgreen in schools charity partner, FoodCorps.</p>
        </div>
    </div>
</div>

<!-- /Section: services -->
<div class="our-team">

    <div class="container"> <div class="page-header">
            <h2>Our Team</h2>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team">
                        <div class="inner">
                            <div class="avatar"><img src="{{asset('assets/images/team-img01.jpg')}}" alt="HTML template" class="img-responsive" /></div>
                            <h5>Joana Doe</h5>
                            <p class="subtitle">Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                    <div class="team">
                        <div class="inner">
                            <div class="avatar"><img src="{{asset('assets/images/team-img02.jpg')}}" alt="HTML template" class="img-responsive" /></div>
                            <h5>Josefine</h5>
                            <p class="subtitle">Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.8s">
                    <div class="team">
                        <div class="inner">
                            <div class="avatar"><img src="{{asset('assets/images/team-img03.jpg')}}" alt="HTML template" class="img-responsive" /></div>
                            <h5>Paulo Moreira</h5>
                            <p class="subtitle">Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="1s">
                    <div class="team">
                        <div class="inner">
                            <div class="avatar"><img src="{{asset('assets/images/team-img04.jpg')}}" alt="HTML template" class="img-responsive" /></div>
                            <h5>Tom Joana</h5>
                            <p class="subtitle">Team Member</p>
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

@endsection
