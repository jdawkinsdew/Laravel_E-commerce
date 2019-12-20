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
            <div class="row">
                <section class="col-main col-sm-12">
                    <div id="contact" class="page-content page-contact">
                        <div class="page-title">
                            <h2>Contact Us</h2>
                        </div>
                        <div id="message-box-conact">We're available for new projects</div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6" id="contact_form_map">
                                <h3 class="page-subheading">Let's get in touch</h3>
                                <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget. Mauris tincidunt aliquam lectus sed vestibulum. Vestibulum bibendum suscipit mattis.</p>
                                <br/>
                                <ul>
                                    <li><i class="fa fa-circle"></i> Praesent nec tincidunt turpis.</li>
                                    <li><i class="fa fa-circle"></i> Aliquam et nisi risus.&nbsp;Cras ut varius ante.</li>
                                    <li><i class="fa fa-circle"></i> Ut congue gravida dolor, vitae viverra dolor.</li>
                                </ul>
                                <br/>
                                <ul class="store_info">
                                    <li><i class="fa fa-home"></i>7064 Lorem Ipsum Vestibulum 666/13</li>
                                    <li><i class="fa fa-phone"></i><span>+ 012 315 678 1234</span></li>
                                    <li><i class="fa fa-print"></i><span>+39 0035 356 765</span></li>
                                    <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:support@justthemevalley.com">support@justthemevalley.com</a></span></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="page-subheading">Make an enquiry</h3>
                                <form method="post" action="{{route('mail')}}">
                                    @csrf
                                    <div class="contact-form-box">
                                        <div class="form-selector">
                                            <label>Name</label>
                                            <input type="text" class="form-control input-sm" id="name" name="name"/>
                                        </div>
                                        <div class="form-selector">
                                            <label>Email</label>
                                            <input type="text" class="form-control input-sm" id="email" name="email"/>
                                        </div>
                                        <div class="form-selector">
                                            <label>Phone</label>
                                            <input type="text" class="form-control input-sm" id="phone" name="phone"/>
                                        </div>
                                        <div class="form-selector">
                                            <label>Message</label>
                                            <textarea class="form-control input-sm" rows="10" id="message" name="message"></textarea>
                                        </div>
                                        <div class="form-selector">
                                            <button type="submit" class="button"><i class="icon-paper-plane icons"></i>&nbsp; <span>Send Message</span></button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- Main Container End -->
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
@endsection
