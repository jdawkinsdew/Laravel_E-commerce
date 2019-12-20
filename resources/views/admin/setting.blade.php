
@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.1/cropper.css" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.1/cropper.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
    h3:hover{
        color:rgb(0,195,170);
    }
</style>
@section('page_styles')

@endsection
@section('page_content')

    <section class="topbar">
        <!-- Breadcrumbs-->
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item"><a class="breadcrumbs-link" href="index.html"><span class="breadcrumbs-icon fa-home"></span><span>Dashboard</span></a></li>
        </ul>
    </section>
    <section class="section-sm">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xxl-10">
                    <div class="row justify-content-center">
                        <div class="col-xl-11 col-xxl-9">
                            <div class="panel panel-border-top panel-border-warning">
                                <div class="panel-header">
                                    <h2 class="panel-title h2">Banner Setting</h2>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-group" id="accordion">
                                        <!--  -->
                                        @foreach ($data as $i => $item)
                                            <div id="banner{{$item->id}}" class="panel panel-default  my-3 ">
                                                <div id="{{$item->id}}" class="panel-heading p-3 bg-100" style="display:flex; justify-content:space-between">
                                                    <h3 tag="{{$item->id}}" id="collapse-title{{$item->id}}" data-toggle="collapse" data-target="#collapse{{$item->id}}" style="font-family:'abril fatface'">{{$item->title}}</h3>
                                                    <span tag="{{$item->id}}" id="save-icon{{$item->id}}" class="fa fa-save fa-fw" style="font-size:16px;">
                                                </div>
                                            </div>
                                            <div id="collapse{{$item->id}}" class="collapse">
                                                <div id="title{{$item->id}}" class="panel-body">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="banner-title{{$item->id}}">Banner Title</label>
                                                        </div>
                                                        <input class="form-control" id="banner-title{{$item->id}}" type="text" name="source" value="{{$item->title}}">
                                                    </div>
                                                </div>
                                                <div id="subscription{{$item->id}}" class="panel-body">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="banner-subscription{{$item->id}}">Subscription</label>
                                                        </div>
                                                        <input class="form-control" id="banner-subscription{{$item->id}}" type="text" name="source" value="{{$item->subscription}}">
                                                    </div>
                                                </div>
                                                <div id="text{{$item->id}}" class="panel-body">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="banner-text{{$item->id}}">Banner Text</label>
                                                        </div>
                                                        <input class="form-control" id="banner-text{{$item->id}}" type="text" name="text" value="{{$item->text}}">
                                                    </div>
                                                </div>
                                                <div id="image-contaner{{$item->id}}" class="panel-body">

                                                    <div>
                                                        <input tag="{{$item->id}}" id="demo{{$item->id}}" name = "image" type="file" hidden>
                                                        <div class="group-10">
                                                            <label class="btn btn-lg btn-primary" for="demo{{$item->id}}" data-default-text="<span class=&quot;mdi-upload&quot;></span><span>Select Files</span>"><span class="mdi-upload"></span><span>Change Image</span></label>
                                                        </div>
                                                    </div>

                                                    <div class="container">
                                                        <br>
                                                        <div style="width:100%;height:100%;">
                                                            <img id="banner-image{{$item->id}}" src="{{asset('assets/images/banners/'.$item->image)}}" width="100%" style="object-fit:contain"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    @endforeach
                                    <!--  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer footer-small">
        <div class="d-flex justify-content-between align-items-center group-10">
            <div>© BlackTheme</div>
            <div><span>60GB of 350GB Free</span>
                <button class="to-top btn btn-sm btn-primary"><span class="fa-chevron-up"></span></button>
            </div>
        </div>
    </footer>
@endsection
@section('page_scripts')
    <script src="{{asset('assets/js/admin/setting.js')}}"></script>
@endsection
