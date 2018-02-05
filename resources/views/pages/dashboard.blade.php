@extends('layouts.template')

@section('content')

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Dashboard</h1>

    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <!--Tiles - Bright Version-->
        <!--===================================================-->
        <div class="row">
            <div class="col-sm-6 col-lg-3">

                <!--Registered User-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel media pad-all">
                    <div class="media-left">
                        <span class="icon-wrap icon-wrap-sm icon-circle bg-success">
                        <i class="fa fa-user fa-2x"></i>
                        </span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">13</p>
                        <p class="text-muted mar-no">Active Ninjas</p>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            </div>
            <div class="col-sm-6 col-lg-3">

                <!--New Order-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel media pad-all">
                    <div class="media-left">
                        <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
                        <i class="fa fa-shopping-cart fa-2x"></i>
                        </span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">7</p>
                        <p class="text-muted mar-no">Your Cryptos</p>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            </div>
            <div class="col-sm-6 col-lg-3">

                <!--Comments-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel media pad-all">
                    <div class="media-left">
                        <span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                        <i class="fa fa-comment fa-2x"></i>
                        </span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">4</p>
                        <p class="text-muted mar-no">Channels</p>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            </div>
            <div class="col-sm-6 col-lg-3">

                <!--Sales-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel media pad-all">
                    <div class="media-left">
									<span class="icon-wrap icon-wrap-sm icon-circle bg-danger">
									<i class="fa fa-dollar fa-2x"></i>
									</span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">U$ 1.000.000</p>
                        <p class="text-muted mar-no">MarketCap</p>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            </div>
        </div>
        <!--===================================================-->
        <!--End Tiles - Bright Version-->

        <div class="row">
            <div class="col-lg-7">

                <!--User table-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>" data-html="true" title=""></a>
                        </div>
                        <h3 class="panel-title">Portfolio</h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th style="width:4ex">ID</th>
                                    <th>Name</th>
                                    <th>Initial</th>
                                    <th>Current Amount</th>
                                    <th>Current Value</th>
                                    <th class="text-center">Profit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#" class="btn-link">LTC</a></td>
                                    <td>Litecoin</td>
                                    <td>0.1 BTC</td>
                                    <td class="text-center">0.05 BTC</td>
                                    <td class="text-center"><span class="label label-table label-success">U$ 12.320</span></td>
                                    <td class="text-right">
                                        <span class="label label-table label-success">32%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn-link">ETH</a></td>
                                    <td>Ethereum</td>
                                    <td>0.1 BTC</td>
                                    <td class="text-center">0.05 BTC</td>
                                    <td class="text-center"><span class="label label-table label-success">U$ 5.800</span></td>
                                    <td class="text-right">
                                        <span class="label label-table label-success">41%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn-link">XRP</a></td>
                                    <td>Ripple</td>
                                    <td>0.1 BTC</td>
                                    <td class="text-center">0.05 BTC</td>
                                    <td class="text-center"><span class="label label-table label-danger">U$ 1.320</span></td>
                                    <td class="text-right">
                                        <span class="label label-table label-success">2%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn-link">SUB</a></td>
                                    <td>Substratum</td>
                                    <td>0.1 BTC</td>
                                    <td class="text-center">0.05 BTC</td>
                                    <td class="text-center"><span class="label label-table label-success">U$ 420</span></td>
                                    <td class="text-right">
                                        <span class="label label-table label-success">19%</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user table-->

            </div>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">

                        <!--Tile with progress bar (Comments)-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel panel-mint panel-colorful">
                            <div class="pad-all media">
                                <div class="media-left">
												<span class="icon-wrap icon-wrap-xs">
													<i class="fa fa-dollar fa-3x"></i>
												</span>
                                </div>
                                <div class="media-body">
                                    <p class="h3 text-thin media-heading">U$ 52.000</p>
                                    <small class="text-uppercase">Initial Investment</small>
                                </div>
                            </div>

                            <div class="progress progress-xs progress-dark-base mar-no">
                                <div role="progressbar" aria-valuenow="45.9" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width: 45.9%"></div>
                            </div>

                            <div class="pad-all text-right">
                                <small><span class="text-semibold"><i class="fa fa-unlock-alt fa-fw"></i> BTC</span> initial reference</small>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Tile with progress bar (Comments)-->

                    </div>
                    <div class="col-sm-6 col-lg-6">

                        <!--Tile with progress bar (New Orders)-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel panel-purple panel-colorful">
                            <div class="pad-all media">
                                <div class="media-left">
												<span class="icon-wrap icon-wrap-xs">
													<i class="fa fa-line-chart fa-fw fa-3x"></i>
												</span>
                                </div>
                                <div class="media-body">
                                    <p class="h3 text-thin media-heading">U$ 63.235</p>
                                    <small class="text-uppercase">Current Networth</small>
                                </div>
                            </div>

                            <div class="progress progress-xs progress-dark-base mar-no">
                                <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width: 75%"></div>
                            </div>

                            <div class="pad-all text-right">
                                <small><span class="text-semibold"><i class="fa fa-shopping-cart fa-fw"></i> ETH</span> current reference</small>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--Tile with progress bar (New Orders)-->

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->


@endsection