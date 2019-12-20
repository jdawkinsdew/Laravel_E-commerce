<div class="rd-navbar-wrap">
    <nav class="rd-navbar">
        <div class="rd-navbar-panel">
            <div class="rd-navbar-panel-cell">
                <button class="btn btn-navbar-panel rd-navbar-sidebar-toggle" data-navigation-switch="data-navigation-switch"><span class="fa-bars"></span></button>
            </div>
            <div class="rd-navbar-panel-cell rd-navbar-panel-cell-fullscreen">
                <button class="btn btn-navbar-panel" data-fullscreen="html"><span class="fa-arrows-alt"></span></button>
            </div>
            <div class="rd-navbar-panel-cell rd-navbar-panel-cell-search">
                <div class="rd-navbar-sidebar-search">
                    <input class="form-control" type="text" placeholder="Search"/>
                </div>
            </div>
            <div class="rd-navbar-panel-center"></div>
            <div class="rd-navbar-panel-cell">
                <button class="btn btn-navbar-panel" data-multi-switch='{"targets":"#subpanel-notifications","scope":"#subpanel-notifications","isolate":"[data-multi-switch]"}'><span class="fa-bell"></span><span class="badge badge-warning">2</span></button>
                <div class="rd-navbar-subpanel" id="subpanel-notifications">
                    <div class="panel">
                        <div class="panel-header">
                            <h3 class="panel-title"><span class="panel-icon fa-bell"></span><span>Notifications</span></h3>
                        </div>
                        <div class="panel-body p-2 scroller scroller-vertical">
                            <div class="group-5">
                                <div class="alert alert-dismissible alert-primary alert-sm" role="alert"><span class="alert-icon fa-telegram"></span><span>Message</span>
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                </div>
                                <div class="alert alert-dismissible alert-warning alert-sm" role="alert"><span class="alert-icon fa-warning"></span><span>Warning</span>
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                </div>
                                <div class="alert alert-dismissible alert-danger alert-sm" role="alert"><span class="alert-icon fa-remove"></span><span>Error</span>
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                </div>
                                <div class="alert alert-dismissible alert-success alert-sm" role="alert"><span class="alert-icon fa-thumbs-up"></span><span>Success</span>
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="fa-close" aria-hidden="true"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer p-2"><a class="btn btn-primary btn-sm" href="alerts.html">See more</a></div>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-panel-cell">
                <button class="btn btn-navbar-panel dropdown-toggle" data-toggle="dropdown"><span class="fa-flag"></span></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <img class="pr-1" src="{{asset('assets/images/image-07-14x11.jpg')}}" width="14" height="11" alt=""/><span>France</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <img class="pr-1" src="{{asset('assets/images/image-08-14x11.jpg')}}" width="14" height="11" alt=""/><span>Germany</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <img class="pr-1" src="{{asset('assets/images/image-10-14x11.jpg')}}" width="14" height="11" alt=""/><span>Turkey</span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <img class="pr-1" src="{{asset('assets/images/image-11-14x11.jpg')}}" width="14" height="11" alt=""/><span>USA</span>
                    </a>
                </div>
            </div>
            <div class="rd-navbar-panel-cell rd-navbar-panel-cell-user">
                <div class="btn btn-navbar-panel" data-multi-switch='{"targets":"#subpanel-user","scope":"#subpanel-user","isolate":"[data-multi-switch]"}'>
                    <div class="media align-items-center"><img class="rounded-circle" src="{{asset('assets/images/users/user-03-50x50.jpg')}}" width="30" height="30" alt=""/>
                        <div class="media-body ml-2">
                            <p>Wu Jin</p>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-subpanel" id="subpanel-user">
                    <div class="panel">
                        <div class="panel-header">
                            <div class="group-5 d-flex flex-wrap align-items-center"><img class="rounded mr-2" src="{{asset('assets/images/users/user-03-50x50.jpg')}}" width="50" height="50" alt=""/>
                                <h3 class="panel-title">Wu Jin</h3>
                            </div>
                        </div>
                        <div class="panel-body p-0 scroller scroller-vertical">
                            <div class="list-group"><a class="list-group-item rounded-0" href="#">
                                    <div class="media align-items-center">
                                        <div class="pr-2"><span class="fa-user"></span></div>
                                        <div class="media-body">
                                            <h5>My Profile</h5>
                                        </div>
                                    </div></a><a class="list-group-item rounded-0" href="#">
                                    <div class="media align-items-center">
                                        <div class="pr-2"><span class="fa-envelope-o"></span></div>
                                        <div class="media-body">
                                            <h5>My Messages</h5>
                                        </div>
                                        <div class="badge badge-warning">12</div>
                                    </div></a><a class="list-group-item rounded-0" href="#">
                                    <div class="media align-items-center">
                                        <div class="pr-2"><span class="fa-rocket"></span></div>
                                        <div class="media-body">
                                            <h5>My Activities</h5>
                                        </div>
                                    </div></a><a class="list-group-item rounded-0" href="#">
                                    <div class="media align-items-center">
                                        <div class="pr-2"><span class="fa-desktop"></span></div>
                                        <div class="media-body">
                                            <h5>My Tasks</h5>
                                        </div>
                                        <div class="badge badge-success">05</div>
                                    </div></a><a class="list-group-item rounded-0" href="#">
                                    <div class="media align-items-center">
                                        <div class="pr-2"><span class="fa-line-chart"></span></div>
                                        <div class="media-body">
                                            <h5>Billing</h5>
                                        </div>
                                    </div></a></div>
                        </div>
                        <div class="panel-footer p-2">
                            <div class="d-flex align-items-center justify-content-between"><a class="btn btn-danger btn-sm" href="#">Sing Out</a><a class="btn btn-sm btn-light" href="#">Upgrade Plan</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-panel-cell">
                <button class="btn btn-navbar-panel" data-multi-switch='{"targets":".sidebar","scope":".sidebar","isolate":"[data-multi-switch]"}'><span class="fa-sliders"></span></button>
            </div>
        </div>
        <div class="rd-navbar-sidebar scroller scroller-vertical">
            <div class="rd-navbar-sidebar-panel">
                <div>
                    <div class="group-15">
                        <div class="rd-navbar-brand"><a class="desktop-brand" href="{{route('admin.dashboard')}}"><img src="{{asset('assets/images/logo-1-white-217x38.png')}}" alt=""/></a><a class="mobile-brand" href="index.html"><img src="{{asset('assets/images/logo-1-black-217x38.png')}}" alt=""/></a></div>
                        <div class="rd-navbar-sidebar-search">
                            <input class="form-control" type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
                <button class="btn rd-navbar-sidebar-toggle" data-navigation-switch="data-navigation-switch"><span class="fa-bars"></span></button>
            </div>
            <ul class="rd-navbar-nav">
                <li class="rd-navbar-nav-item">
                    <div class="rd-navbar-title"><span class="rd-navbar-title-icon"><span class="fa-ellipsis-h"></span></span><span class="rd-navbar-title-text">Menu</span></div>
                </li>
                <li class="rd-navbar-nav-item active"><a class="rd-navbar-link" href="{{route('admin.dashboard')}}"><span class="rd-navbar-icon fa-home"></span><span class="rd-navbar-link-text">Dashboard</span></a>
                </li>
                <li class="rd-navbar-nav-item">
                    <div class="rd-navbar-title"><span class="rd-navbar-title-icon"><span class="fa-ellipsis-h"></span></span><span class="rd-navbar-title-text">My Shop</span></div>
                </li>
                <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="{{route('admin.products')}}"><span class="rd-navbar-icon fa-tags"></span><span class="rd-navbar-link-text">Products</span></a>
                </li>
                <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="{{route('admin.orders')}}"><span class="rd-navbar-icon fa-shopping-cart"></span><span class="rd-navbar-link-text">Orders</span></a>
                </li>
                <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="{{route('admin.customers')}}"><span class="rd-navbar-icon fa-shopping-cart"></span><span class="rd-navbar-link-text">Customers</span></a>
                </li>

                <li class="rd-navbar-nav-item">
                    <div class="rd-navbar-title"><span class="rd-navbar-title-icon"><span class="fa-ellipsis-h"></span></span><span class="rd-navbar-title-text">News</span></div>
                </li>
                <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="{{route('admin.news')}}"><span class="rd-navbar-icon fa-newspaper-o"></span><span class="rd-navbar-link-text">News</span></a>
                </li>

                <li class="rd-navbar-nav-item">
                    <div class="rd-navbar-title"><span class="rd-navbar-title-icon"><span class="fa-ellipsis-h"></span></span><span class="rd-navbar-title-text">Setting</span></div>
                </li>
                <li class="rd-navbar-nav-item"><a class="rd-navbar-link" href="{{route('admin.setting')}}"><span class="rd-navbar-icon fa-cogs"></span><span class="rd-navbar-link-text">Setting</span></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
