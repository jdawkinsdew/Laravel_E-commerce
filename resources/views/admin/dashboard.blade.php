
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
            <div class="row row-30">
                <div class="col-sm-6 col-md-4">
                    <div class="panel">
                        <div class="panel-body py-4 p-xxl-4 py-xxl-5">
                            <h1 class="font-weight-bold">3,253</h1>
                            <h2 class="mt-1 text-uppercase">NEW ORDERS</h2>
                            <div class="progress-multiple-wrap">
                                <div class="h3 font-weight-bold">+5%</div>
                                <div class="h4 text-uppercase">Today</div>
                                <div class="progress">
                                    <div class="progress-bar progress-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar progress-info-darker" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-multiple-wrap">
                                <div class="h3 font-weight-bold">-8%</div>
                                <div class="h4 text-uppercase">1 Week ago</div>
                                <div class="progress">
                                    <div class="progress-bar progress-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar progress-info-lighter" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="panel">
                        <div class="panel-body py-4 p-xxl-4 py-xxl-5">
                            <h1 class="font-weight-bold">42,624</h1>
                            <h2 class="mt-1 text-uppercase">TOTAL SALES GROSS</h2>
                            <div class="progress-multiple-wrap">
                                <div class="h3 font-weight-bold">+10%</div>
                                <div class="h4 text-uppercase">Today</div>
                                <div class="progress">
                                    <div class="progress-bar progress-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar progress-primary-darker" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-multiple-wrap">
                                <div class="h3 font-weight-bold">+4%</div>
                                <div class="h4 text-uppercase">Today</div>
                                <div class="progress">
                                    <div class="progress-bar progress-primary" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar progress-primary-darker" role="progressbar" style="width: 4%" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="panel">
                        <div class="panel-body py-4 p-xxl-4 py-xxl-5">
                            <h1 class="font-weight-bold">54,214</h1>
                            <h2 class="mt-1 text-uppercase">PENDING SHIPMENTS</h2>
                            <div class="progress-multiple-wrap">
                                <div class="h3 font-weight-bold">+4%</div>
                                <div class="h4 text-uppercase">Today</div>
                                <div class="progress">
                                    <div class="progress-bar progress-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar progress-warning-darker" role="progressbar" style="width: 4%" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-multiple-wrap">
                                <div class="h3 font-weight-bold">+12%</div>
                                <div class="h4 text-uppercase">Today</div>
                                <div class="progress">
                                    <div class="progress-bar progress-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar progress-warning-darker" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel admin-panel">
                        <div class="panel-header d-flex align-items-center">
                            <div class="h3 panel-title flex-grow-1">Calendar widget</div>
                            <div class="admin-panel-buttons">
                                <button class="admin-panel-button fa" title="title" data-panel="title"></button>
                                <button class="admin-panel-button fa" title="color" data-panel="color"></button>
                                <button class="admin-panel-button fa" title="collapse" data-panel="collapse"></button>
                                <button class="admin-panel-button fa" title="fullscreen" data-panel="fullscreen"></button>
                                <button class="admin-panel-button fa" title="remove" data-panel="remove"></button>
                            </div>
                            <div class="admin-panel-switch fa-bars"></div>
                        </div>
                        <div class="panel-body">
                            <div class="fullcalendar calendar-widget" data-fullcalendar-header='{"left":"title","center":"","right":"today prev,next"}' data-fullcalendar-event='[{"title":"Sony Meeting","start":"2019-08-06","className":"fc-event-success"},{"title":"Conference","start":"2019-08-14","end":"2019-08-16","className":"fc-event-warning"},{"title":"System Testing","start":"2019-07-26","end":"2019-07-28","className":"fc-event-primary"}]'></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel admin-panel">
                        <div class="panel-header d-flex align-items-center">
                            <div class="h3 panel-title flex-grow-1">Task List Widget</div>
                            <div class="admin-panel-buttons">
                                <button class="admin-panel-button fa" title="title" data-panel="title"></button>
                                <button class="admin-panel-button fa" title="color" data-panel="color"></button>
                                <button class="admin-panel-button fa" title="collapse" data-panel="collapse"></button>
                                <button class="admin-panel-button fa" title="fullscreen" data-panel="fullscreen"></button>
                                <button class="admin-panel-button fa" title="remove" data-panel="remove"></button>
                            </div>
                            <div class="admin-panel-switch fa-bars"></div>
                        </div>
                        <div class="panel-body">
                            <h4 class="list-sortable-title"><span class="pr-2 fa-bell"></span><span>Current Tasks</span></h4>
                            <ul class="list-sortable list-sortable-bordered sortable sortable-current" data-connect-group=".sortable-completed">
                                <li class="list-sortable-item-primary">
                                    <div class="custom-control custom-checkbox custom-check">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck1"/>
                                        <label class="custom-control-label" for="taskCheck1">Add new servers to design board
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                                <li class="list-sortable-item-secondary">
                                    <div class="custom-control custom-checkbox custom-check">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck2"/>
                                        <label class="custom-control-label" for="taskCheck2">Finish building prototype for Sony
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                                <li class="list-sortable-item-success">
                                    <div class="custom-control custom-checkbox custom-check">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck3"/>
                                        <label class="custom-control-label" for="taskCheck3">Order new building supplies for Microsoft
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                            </ul>
                            <h4 class="list-sortable-title"><span class="pr-2 fa-check"></span><span>Completed Tasks</span></h4>
                            <ul class="list-sortable list-sortable-bordered sortable sortable-completed" data-connect-group=".sortable-current">
                                <li class="list-sortable-item-warning">
                                    <div class="custom-control custom-checkbox custom-check">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck4" checked=""/>
                                        <label class="custom-control-label" for="taskCheck4">Finish building prototype for Sony
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                                <li class="list-sortable-item-info">
                                    <div class="custom-control custom-checkbox custom-check">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck5" checked=""/>
                                        <label class="custom-control-label" for="taskCheck5">Create documentation for launch
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                                <li class="list-sortable-item-danger">
                                    <div class="custom-control custom-checkbox custom-check">
                                        <input class="custom-control-input" type="checkbox" id="taskCheck6" checked=""/>
                                        <label class="custom-control-label" for="taskCheck6">Order new building supplies for Microsoft
                                        </label>
                                    </div>
                                    <div class="sortable-drag"></div>
                                </li>
                            </ul>
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

@endsection
