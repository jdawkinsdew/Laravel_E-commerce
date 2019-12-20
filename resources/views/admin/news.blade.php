
@extends('layouts.master')

@section('page_styles')
    <link  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.1/cropper.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.1/cropper.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection

@section('page_content')

    <div class="col-lg-12  p-lg-5 " style="display:flex; justify-content:center; align-items:center;">
        <div class="col-lg-12 p-lg-3 rounded-lg" style="background-color:white;box-shadow: 2px 2px 5px 5px rgba(100, 100, 100, .3);">
            <form enctype="multipart/form-data" id="addnews_form">
                <div class="row row-15">
                    <div class="col-md-6 col-xl-5">
                        <div class="tower-file">
                            <input class="tower-file-input" id="cropperfile" name = "imagedd" type="file" accept=".gif,.jpg,.jpeg,.png">
                            <div class="group-10">
                                <label class="btn btn-lg btn-primary" for="cropperfile" data-default-text="<span class=&quot;mdi-upload&quot;></span><span>Select Files</span>"><span class="mdi-upload"></span><span>Select Image</span></label>
                                <button class="tower-file-clear btn btn-lg btn-secondary align-top" type="button" disabled="disabled">Clear</button>
                            </div>
                            <div class="container">
                                <br />
                                <div style="width:100%;height:100%;">
                                    <img src="" id="cropper-img"  style="object-fit:contain"/>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-7">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="basic-addon1"><span class="fa-tag"></span></label>
                            </div>
                            <input class="form-control" id="basic-addon1" type="text" placeholder="News Title" name="title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="standardTextarea" rows="50" placeholder="News Descripion" name="description"></textarea>
                        </div>
                        <div class="col-sm-12 text-right mt-4">
                            <button class="btn btn-primary btn-addnews-submit" type="submit">Save News</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="panel-body p-0">
            <div class="table-responsive">
                <table class="table table-sm  table-vertical-align table-bordered">
                    <thead>
                    <tr class="border-bottom bg-lighter">
                        <th class="text-center" style="width: 310px;">Image</th>
                        <th class="text-center">News</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $i => $item)
                        <tr id="tr{{$item->id}}">
                            <td rowspan="2" class="text-center" ><img src="{{asset('assets/images/news/'.$item->image)}}" width="250" height="250" alt=""></td>
                            <td class="text-center" style="height:30px;">{{$item->title}}
                                <div class="float-right" style="width:100px">
                                    <span class="fa fa-pencil fa-fw" data-toggle="modal"  id="{{$item->id}}" data-target="#deleteModal"></span>&nbsp&nbsp<span class="fa fa-trash-o"  data-toggle="modal"  id="{{$item->id}}" data-target="#deleteModal"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">{{$item->content}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <section>
        <!--  Delete Modal -->
        <div class="modal fade"  data-keyboard="false" data-backdrop="static" id="deleteModal" tabindex="-1"  style="margin-top: 50px">
            <div class="modal-dialog modal-sm"  role="document" style="z-index: 2">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form enctype="multipart/form-data" id="editproduct_form">
                        <div class="modal-body">
                            <p>Are you sure you want to delete this?</p>
                        </div>
                        <div class="modal-footer">
                            <button id="delete-news" type="submit" class="btn btn-success" data-dismiss="modal">Delete</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page_scripts')
    <script src="{{asset('assets/js/admin/news.js')}}"></script>
@endsection
