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
    <section class="blog_post">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <div class="entry-detail">
                        <div class="page-title">
                        </div>
                        <div class="entry-photo">
                            <figure><img src="{{asset('assets/images/news/'.$blog->image)}}" alt="Blog"></figure>
                        </div>
                        <br>
                        <div class="entry-meta-data">

                            <div class="blog-top-desc">
                                <div class="blog-date"> {{date('d', strtotime($blog->created_at))}} {{substr(date('F', strtotime($blog->created_at)), 0, 3)}} {{date('Y', strtotime($blog->created_at))}} </div>
                                <h1>{{$blog->title}}</h1>
                                <div class="jtv-entry-meta"> <i class="fa fa-user-o"></i> <strong>Admin</strong> <a href="{{route('like', ['id'=>$blog->id])}}"><i class="fa fa-thumbs-o-up"></i> <strong>{{$blog->like}} Like</strong></a> </div>
                            </div>



                        </div>
                        <div class="content-text clearfix">
                            <p>{{$blog->content}}</p>
                        </div>
                    </div>

                </div>
                <!-- right colunm -->
                <aside class="sidebar col-xs-12 col-sm-3">
                    <br>
                    <!-- Popular Posts -->
                    <div class="block blog-module">
                        <div class="sidebar-bar-title">
                            <h3>Popular Posts</h3>
                        </div>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="blog-list-sidebar">
                                        @foreach($blogs as $each)
                                        <br>
                                        <li>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-12 col-sm-6">
                                                    <div class="post-thumb"> <a href="{{route('blog', ['id'=>$each->id])}}"><img src="{{asset('assets/images/news/'.$each->image)}}" alt="Blog"></a> </div>
                                                </div>
                                                <div class="col-lg-7 col-md-12 col-sm-6">
                                                    <div class="post-info">
                                                        <h5 class="entry_title"><a href="#">Lorem ipsum dolor</a></h5>
                                                        <div class="post-meta"> <span class="date"><i class="pe-7s-date"></i> {{date('d', strtotime($each->created_at))}} {{substr(date('F', strtotime($each->created_at)), 0, 3)}} {{date('Y', strtotime($each->created_at))}}</span> <span class="comment-count"> <i class="fa fa-thumbs-o-up"></i> {{$each->like}} </span> </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./Popular Posts -->

                    <!-- Banner -->
                    <div class="single-img-add sidebar-add-slider">
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
                                </div>
                                <div class="item"> <img src="{{asset('assets/images/add-slide2.jpg')}}" alt="slide2">
                                </div>
                                <div class="item"> <img src="{{asset('assets/images/add-slide3.jpg')}}" alt="slide3">
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                    </div>
                    <!-- ./Banner -->
                </aside>
                <!-- ./right colunm -->
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
