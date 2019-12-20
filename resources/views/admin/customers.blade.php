
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
                    <div class="row row-30">
                        <div class="col-lg-4">
                            <select class="form-control" name="filter-purchases">
                                <option value="0">Filter by Purchases</option>
                                <option value="1">1-49</option>
                                <option value="2">50-499</option>
                                <option value="1">500-999</option>
                                <option value="2">1000+</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control" name="filter-group">
                                <option value="0">Filter by Group</option>
                                <option value="1">Customers</option>
                                <option value="2">Vendors</option>
                                <option value="3">Distributors</option>
                                <option value="4">Employees</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <select class="form-control" name="filter-status">
                                <option value="0">Filter by Status</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Suspended</option>
                                <option value="4">Online</option>
                                <option value="5">Offline</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-body p-0">
                    <div class="table-responsive scroller scroller-horizontal">
                        <table class="table table-vertical-align" style=" min-width: 600px ">
                            <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Registered</th>
                                <th>Purchases</th>
                                <th>Total Spent</th>
                                <th class="text-right">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $i => $item)
                                <tr>
                                    <td><img src="{{asset('assets/images/customers/'.$item->image)}}" width="50" height="50" alt=""></td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{date("d/m/Y",strtotime($item->created_at))}}</td>
                                    <td>{{$item->purchases}}</td>
                                    <td>{{$item->totalSpent}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle btn-success btn-sm" data-toggle="dropdown"><span>Active</span>
                                            </button>
                                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Contact</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Active</a><a class="dropdown-item" href="#">Suspend</a><a class="dropdown-item" href="#">Remove</a>
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
