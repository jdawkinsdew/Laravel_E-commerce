
@extends('layouts.master')

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
            <div class="panel">
                <div class="panel-header">
                    <div class="row row-15">
                        <div class="col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="datetime2"><span class="fa fa-calendar"></span></label>
                                </div>
                                <input class="form-control" id="datetime2" type="text" name="datetime">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control" name="filter-status">
                                <option selected="selected">Filter by Status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>Low Stock</option>
                                <option>Out of Stock</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control" name="filter-customer">
                                <option selected="selected">Filter Customer</option>
                                <option>Alan</option>
                                <option>Susan</option>
                                <option>Louis</option>
                                <option>Randy</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-body p-0">
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-align">
                            <thead>
                            <tr class="border-bottom bg-lighter">
                                <th>Order Date</th>
                                <th>Product</th>
                                <th style="min-width: 180px;">Customer</th>
                                <th style="min-width: 200px;">Notes</th>
                                <th>Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $i => $item)
                                <tr>
                                    <td>{{date("d/m/Y",strtotime($item->created_at))}}</td>
                                    <td>{{$item->product()->first()->title}}</td>
                                <!-- <td>
                                    <div class="group-10 d-flex align-items-center"><img src="{{asset('assets/images/users/user-02-40x40.jpg')}}" width="40" height="40" alt=""><span class="d-inline-block">Tom Jorgensen</span></div>
                                </td> -->
                                    <td>{{$item->customer_name}}</td>
                                    <td>{{$item->note}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle btn-info btn-sm" data-toggle="dropdown"><span>Pending</span>
                                            </button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a><a class="dropdown-item" href="#">Archive</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Complete</a><a class="dropdown-item" href="#">Pending</a><a class="dropdown-item" href="#">Canceled</a>
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

@endsection
