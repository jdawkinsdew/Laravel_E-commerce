
@extends('layouts.master')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.1/cropper.css" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.4.1/cropper.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
            <div class="panel panel-nav">
                <div class="panel-header d-flex flex-wrap align-items-center justify-content-between">
                    <h3 class="panel-title">Add New Product</h3>
                    <ul class="nav nav-tabs scroller scroller-horizontal" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#panelTab1" role="tab" aria-controls="panelTab1" aria-selected="true">General</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panelTab2" role="tab" aria-controls="panelTab2" aria-selected="false">Description</a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" id="addproduct_form">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="panelTab1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4 col-xl-3">
                                        <div>
                                            <input id="demo1" name = "image" type="file" hidden>
                                            <div class="group-10">
                                                <label class="btn btn-lg btn-primary" for="demo1" data-default-text="<span class=&quot;mdi-upload&quot;></span><span>Select Files</span>"><span class="mdi-upload"></span><span>Select Image</span></label>
                                                <!-- <button class="tower-file-clear btn btn-lg btn-secondary align-top" type="button" disabled="disabled">Clear</button> -->
                                            </div>
                                        </div>
                                        <div class="border col-lg-10 h-100 m-2" style="height:78%!important">
                                            <img id="product-image" src="" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xl-9">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="basic-addon1"><span class="fa-tag"></span></label>
                                            </div>
                                            <input class="form-control" id="basic-addon1" type="text" placeholder="Product Title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="standardTextarea" rows="8" placeholder="Product Descripion" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="panelTab2" role="tabpanel">
                                <div class="row row-30">
                                    <div class="col-md-5">
                                        <select id="category" class="form-control">
                                            <option selected="selected">Product Category...</option>
                                            @foreach ($category as $i => $item)
                                                <option id="{{$item->id}}">{{$item->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="form-control" name="status">
                                            <option selected="selected">Active</option>
                                            <option>Deactive</option>
                                            <option>Sold_out</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <div style="width:100%; height:100%; display:flex; justify-content:center; align-items:center;">
                                            <div class="custom-control custom-checkbox custom-checkbox-light">
                                                <input class="custom-control-input" type="checkbox" id="special" name="special">
                                                <label class="custom-control-label" for="special">Special</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="basic-addon2"><span class="fa-usd"></span></label>
                                            </div>
                                            <input class="form-control" id="basic-addon2" type="text" placeholder="Product Price..." name="price">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="basic-addon3"><span class="fa-shopping-cart"></span></label>
                                            </div>
                                            <input class="form-control" id="basic-addon3" type="text" placeholder="Stock..." name="source">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="basic-addon4"><span class="fa-barcode"></span></label>
                                            </div>
                                            <input class="form-control" id="basic-addon4" type="text" placeholder="Product SKU..." name="sku">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="basic-addon4"><span class="fa-arrow-down"></span></label>
                                            </div>
                                            <input class="form-control" id="basic-addon4" type="text" placeholder="Product Source..." name="product_source">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="tag-manager">
                                            <input class="form-control tag-manager-input" type="text" placeholder="Create a new tag..."><input type="hidden" value="">
                                            <div class="tag-manager-container add_tag_manager"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr class="m-0">
                                    </div>

                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-primary btn-addproduct-submit" type="submit">Save Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel">
                <!-- <div class="panel-header">
                    <div class="row row-30">
                        <div class="col-lg-5">
                            <select class="form-control" name="filter-category">
                                <option selected="selected">Filter by Category</option>
                                <option>Smart Phones</option>
                                <option>Smart Watches</option>
                                <option>Notebooks</option>
                                <option>Desktops</option>
                                <option>Music Players</option>
                            </select>
                        </div>
                        <div class="col-lg-5">
                            <select class="form-control" name="filter-status">
                                <option selected="selected">Filter by Status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>Low Stock</option>
                                <option>Out of Stock</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <select class="form-control" name="bulk-action">
                                <option selected="selected">Actions</option>
                                <option>Edit</option>
                                <option>Delete</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div> -->
                <div class="panel-body p-0">
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless table-vertical-align">
                            <thead>
                            <tr class="border-bottom bg-lighter">
                                <th class="text-center">Image</th>
                                <th style="min-width: 100px;" class="text-center">Product Title</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">description</th>
                                <th class="text-center">Price</th>
                                <th class="text-center" style="min-width: 100px;">Stock</th>
                                <th class="text-center">Tags</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $i => $item)
                                <tr id="tr{{$item->id}}">
                                <!-- <td class="text-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-light">
                                        <input class="custom-control-input" type="checkbox" id="{{$item->id}}">
                                        <label class="custom-control-label" for="{{$item->id}}">
                                        </label>
                                    </div>
                                </td> -->
                                    <td class="text-center"  style="max-width: 60px;"><img src="{{asset('assets/images/products/'.$item->image)}}" width="50" height="50" alt=""></td>
                                    <td class="text-center">{{$item->title}}</td>
                                    @if($item->category_id)
                                        <td class="text-center">{{$item->category()->first()->title}}</td>
                                    @else
                                        <td class="text-center">No Category</td>
                                    @endif
                                    <td class="text-center">{{str_limit($item->description, 25)}}</td>
                                    <td class="text-center">{{$item->price}}</td>
                                    <td class="text-center">{{$item->stock}}</td>
                                    <td class="text-center">{{str_limit($item->tags, 20)}}</td>
                                    <td class="text-center" style="min-width: 70px;" >
                                        @if ($item->status=='Active')
                                            <button class="btn btn-success btn-sm"><span>Active</span>
                                            </button>
                                        @elseif ($item->status=='Deactive')
                                            <button class="btn btn-warning btn-sm"><span>Deactive</span>
                                            </button>
                                        @else
                                            <button class="btn btn-danger btn-sm"><span>Sold Out</span>
                                            </button>
                                        @endif
                                    </td>
                                    <td class="text-center" style="min-width: 70px;" >
                                        <div id="action-dropdown" class="dropdown">
                                            <button class="btn dropdown-toggle btn-success btn-sm action-button" data-toggle="dropdown"><span>Show</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <a class="dropdown-item" data-toggle="modal" id="{{$item->id}}" data-target="#editModal">Edit</a>
                                                <a class="dropdown-item" data-toggle="modal"  id="{{$item->id}}" data-target="#deleteModal">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <!-- Edit Modal -->
        <div class="modal fade"  data-keyboard="false" data-backdrop="static" id="editModal" tabindex="-1"  style="margin-top: 50px">

            <div class="modal-dialog modal-lg"  role="document" style="z-index: 2">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form enctype="multipart/form-data" id="editproduct_form">
                        <div class="modal-body">
                            <div>

                                <div>
                                    <div class="row">
                                        <div class="col-md-5 col-xl-4">
                                            <div class="tower-file">
                                                <input class="tower-file-input" id="edit_image" name = "edit_image" type="file">
                                                <div class="group-10">
                                                    <label class="btn btn-lg btn-primary" for="edit_image" data-default-text="<span class=&quot;mdi-upload&quot;></span><span>Select Files</span>"><span class="mdi-upload"></span><span>Select Files</span></label>
                                                    <!-- <button class="tower-file-clear btn btn-lg btn-secondary align-top" type="button" disabled="disabled">Clear</button> -->
                                                </div>
                                                <div id="edit-img-container" style="width:100%;height:100%; display:flex;justify-content:center;align-items:center">
                                                    <img id="edit-product-image"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xl-8">
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="basic-addon1"><span class="fa-tag"></span></label>
                                                </div>
                                                <input class="form-control" id="basic-addon1" type="text" placeholder="Product Title" name="edit_title">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="standardTextarea" rows="5" placeholder="Product Descripion" name="edit_description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="row row-15">
                                        <div class="col-md-5">
                                            <select id="edit_category" class="form-control" name="edit_category">
                                                <option selected="selected">Product Category...</option>
                                                @foreach ($category as $i => $item)
                                                    <option id="{{$item->id}}">{{$item->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-5">
                                            <select class="form-control" name="edit_status">
                                                <option selected="selected">Product Status</option>
                                                <option>Active</option>
                                                <option>Deactive</option>
                                                <option>Sold_out</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <div style="width:100%; height:100%; display:flex; justify-content:center; align-items:center;">
                                                <div class="custom-control custom-checkbox custom-checkbox-light">
                                                    <input class="custom-control-input" type="checkbox" id="edit_special" name="edit_special">
                                                    <label class="custom-control-label" for="edit_special">Special</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="basic-addon2"><span class="fa-usd"></span></label>
                                                </div>
                                                <input class="form-control" id="basic-addon2" type="text" placeholder="Product Price..." name="edit_price">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="basic-addon3"><span class="fa-shopping-cart"></span></label>
                                                </div>
                                                <input class="form-control" id="basic-addon3" type="text" placeholder="Stock..." name="edit_source">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="basic-addon4"><span class="fa-barcode"></span></label>
                                                </div>
                                                <input class="form-control" id="basic-addon4" type="text" placeholder="Product SKU..." name="edit_sku">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="basic-addon4"><span class="fa-arrow-down"></span></label>
                                                </div>
                                                <input class="form-control" id="basic-addon4" type="text" placeholder="Product Source..." name="edit_product_source">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tag-manager">
                                                <input class="form-control tag-manager-input edit-tag-manager-input" type="text" placeholder="Create a new tag..." ><input type="hidden" value="">
                                                <div class="tag-manager-container edit_tag_manager"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr class="m-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="edit-save-product" type="submit" class="btn btn-success" data-dismiss="modal">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
                            <button id="delete-product" type="submit" class="btn btn-success" data-dismiss="modal">Delete</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
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
    <script src="{{asset('assets/js/admin/products.js')}}"></script>
@endsection
