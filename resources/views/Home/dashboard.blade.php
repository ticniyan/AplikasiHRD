@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="content-area p-y-1">
            <div class="container-fluid">
                <div class="row row-md">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 m-b-2">
                            <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase m-b-1">Orders</h6>
                                <h1 class="m-b-1">1,325</h1>
                                <span class="tag tag-danger m-r-0-5">+17%</span>
                                <span class="text-muted font-90">from previous period</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 m-b-2">
                            <div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase m-b-1">Revenue</h6>
                                <h1 class="m-b-1">$ 47,855</h1>
                                <i class="fa fa-caret-up text-success m-r-0-5"></i><span>12,350</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 m-b-2">
                            <div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase m-b-1">Products</h6>
                                <h1 class="m-b-1">6,800</h1>
                                <span class="tag tag-primary m-r-0-5">+125</span>
                                <span class="text-muted font-90">arraving today</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box box-block bg-white tile tile-1 m-b-2">
                            <div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
                            <div class="t-content">
                                <h6 class="text-uppercase m-b-1">Sold</h6>
                                <h1 class="m-b-1">1,682</h1>
                                <div id="sparkline1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection