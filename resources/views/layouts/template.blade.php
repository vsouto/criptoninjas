<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CriptoNinja') }}</title>

    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('assets/css/nifty.min.css') }}" rel="stylesheet"/>

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>

    <!--Animate.css [ OPTIONAL ]-->
    <link href="{{ asset('assets/plugins/animate-css/animate.min.css') }}" rel="stylesheet"/>
{{--
    <!--Morris.js [ OPTIONAL ]-->
    <link href="{{ asset('assets/plugins/morris-js/morris.min.css') }}" rel="stylesheet"/>--}}

    <!--Switchery [ OPTIONAL ]-->
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>

    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet"/>

    <!--Demo script [ DEMONSTRATION ]-->
    <link href="{{ asset('assets/css/demo/nifty-demo.min.css') }}" rel="stylesheet"/>

    <!--SCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="{{ asset('assets/plugins/pace/pace.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
<div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">

            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <img src="{{ asset('img/criptoninja-white.png') }}" alt="Cripto Ninja" class="brand-icon">
                    <div class="brand-title">
                        <span class="brand-text">Cripto Ninja</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->


            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links pull-left">

                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#">
                            <i class="fa fa-navicon fa-lg"></i>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->


                    <!--Messages Dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="fa fa-envelope fa-lg"></i>
                            <span class="badge badge-header badge-warning">9</span>
                        </a>

                        <!--Message dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md with-arrow">
                            <div class="pad-all bord-btm">
                                <p class="text-lg text-muted text-thin mar-no">You have 3 messages.</p>
                            </div>
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{ asset('assets/img/av2.png') }}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Andy sent you a message</div>
                                                    <small class="text-muted">15 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{ asset('assets/img/av4.png') }}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Lucy sent you a message</div>
                                                    <small class="text-muted">30 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{ asset('assets/img/av3.png') }}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Jackson sent you a message</div>
                                                    <small class="text-muted">40 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{ asset('assets/img/av6.png') }}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Donna sent you a message</div>
                                                    <small class="text-muted">5 hours ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{ asset('assets/img/av4.png') }}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Lucy sent you a message</div>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
                                                    <img src="{{ asset('assets/img/av3.png') }}" alt="Profile Picture" class="img-circle img-sm">
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Jackson sent you a message</div>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--Dropdown footer-->
                            <div class="pad-all bord-top">
                                <a href="#" class="btn-link text-dark box-block">
                                    <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End message dropdown-->




                    <!--Notification dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="fa fa-bell fa-lg"></i>
                            <span class="badge badge-header badge-danger">5</span>
                        </a>

                        <!--Notification dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md with-arrow">
                            <div class="pad-all bord-btm">
                                <p class="text-lg text-muted text-thin mar-no">You have 3 messages.</p>
                            </div>
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <p class="pull-left">Database Repair</p>
                                                    <p class="pull-right">70%</p>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div style="width: 70%;" class="progress-bar">
                                                        <span class="sr-only">70% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <p class="pull-left">Upgrade Progress</p>
                                                    <p class="pull-right">10%</p>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                                        <span class="sr-only">10% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
														<span class="icon-wrap icon-circle bg-primary">
															<i class="fa fa-comment fa-lg"></i>
														</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">New comments waiting approval</div>
                                                    <small class="text-muted">15 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <span class="badge badge-success pull-right">90%</span>
                                                <div class="media-left">
														<span class="icon-wrap icon-circle bg-danger">
															<i class="fa fa-hdd-o fa-lg"></i>
														</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">HDD is full</div>
                                                    <small class="text-muted">50 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
														<span class="icon-wrap bg-info">
															<i class="fa fa-file-word-o fa-lg"></i>
														</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Write a news article</div>
                                                    <small class="text-muted">Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <span class="label label-danger pull-right">New</span>
                                                <div class="media-left">
														<span class="icon-wrap bg-purple">
															<i class="fa fa-comment fa-lg"></i>
														</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">Comment Sorting</div>
                                                    <small class="text-muted">Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>

                                        <!-- Dropdown list-->
                                        <li>
                                            <a href="#" class="media">
                                                <div class="media-left">
														<span class="icon-wrap bg-success">
															<i class="fa fa-user fa-lg"></i>
														</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="text-nowrap">New User Registered</div>
                                                    <small class="text-muted">4 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--Dropdown footer-->
                            <div class="pad-all bord-top">
                                <a href="#" class="btn-link text-dark box-block">
                                    <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End notifications dropdown-->



                    <!--Mega dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="mega-dropdown">
                        <a href="#" class="mega-dropdown-toggle">
                            <i class="fa fa-th-large fa-lg"></i>
                        </a>
                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class="clearfix">
                                <div class="col-sm-12 col-md-3">

                                    <!--Mega menu widget-->
                                    <div class="text-center bg-purple pad-all">
                                        <h3 class="text-thin mar-no">Weekend shopping</h3>
                                        <div class="pad-ver box-inline">
												<span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
													<i class="fa fa-shopping-cart fa-4x"></i>
												</span>
                                        </div>
                                        <p class="pad-btm">
                                            Members get <span class="text-lg text-bold">50%</span> more points. Lorem ipsum dolor sit amet!
                                        </p>
                                        <a href="#" class="btn btn-purple">Learn More...</a>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-md-3">

                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header">Pages</li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Search Result</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Sreen Lock</a></li>
                                        <li><a href="#" class="disabled">Disabled</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Icons</li>
                                        <li><a href="#"><span class="pull-right badge badge-purple">479</span> Font Awesome</a></li>
                                        <li><a href="#">Skycons</a></li>
                                    </ul>

                                </div>
                                <div class="col-sm-4 col-md-3">

                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header">Mailbox</li>
                                        <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
                                        <li><a href="#">Read Message</a></li>
                                        <li><a href="#">Compose</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Featured</li>
                                        <li><a href="#">Smart navigation</a></li>
                                        <li><a href="#"><span class="pull-right badge badge-success">6</span>Exclusive plugins</a></li>
                                        <li><a href="#">Lot of themes</a></li>
                                        <li><a href="#">Transition effects</a></li>
                                    </ul>

                                </div>
                                <div class="col-sm-4 col-md-3">

                                    <!--Mega menu list-->
                                    <ul class="list-unstyled">
                                        <li class="dropdown-header">Components</li>
                                        <li><a href="#">Tables</a></li>
                                        <li><a href="#">Charts</a></li>
                                        <li><a href="#">Forms</a></li>
                                        <li class="divider"></li>
                                        <li>
                                            <form role="form" class="form">
                                                <div class="form-group">
                                                    <label class="dropdown-header" for="demo-megamenu-input">Newsletter</label>
                                                    <input id="demo-megamenu-input" type="email" placeholder="Enter email" class="form-control">
                                                </div>
                                                <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End mega dropdown-->

                </ul>
                <ul class="nav navbar-top-links pull-right">

                    <!--Language selector-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
								<span class="lang-selected">
									<img class="lang-flag" src="{{ asset('assets/img/flags/united-kingdom.png') }}" alt="English">
									<span class="lang-id">EN</span>
									<span class="lang-name">English</span>
								</span>
                        </a>

                        <!--Language selector menu-->
                        <ul class="head-list dropdown-menu with-arrow">
                            <li>
                                <!--English-->
                                <a href="#" class="active">
                                    <img class="lang-flag" src="{{ asset('assets/img/flags/united-kingdom.png') }}" alt="English">
                                    <span class="lang-id">EN</span>
                                    <span class="lang-name">English</span>
                                </a>
                            </li>
                            <li>
                                <!--France-->
                                <a href="#">
                                    <img class="lang-flag" src="{{ asset('assets/img/flags/france.png') }}" alt="France">
                                    <span class="lang-id">FR</span>
                                    <span class="lang-name">Fran&ccedil;ais</span>
                                </a>
                            </li>
                            <li>
                                <!--Germany-->
                                <a href="#">
                                    <img class="lang-flag" src="{{ asset('assets/img/flags/germany.png') }}" alt="Germany">
                                    <span class="lang-id">DE</span>
                                    <span class="lang-name">Deutsch</span>
                                </a>
                            </li>
                            <li>
                                <!--Italy-->
                                <a href="#">
                                    <img class="lang-flag" src="{{ asset('assets/img/flags/italy.png') }}" alt="Italy">
                                    <span class="lang-id">IT</span>
                                    <span class="lang-name">Italiano</span>
                                </a>
                            </li>
                            <li>
                                <!--Spain-->
                                <a href="#">
                                    <img class="lang-flag" src="{{ asset('assets/img/flags/spain.png') }}" alt="Spain">
                                    <span class="lang-id">ES</span>
                                    <span class="lang-name">Espa&ntilde;ol</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End language selector-->

                    <!--User dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li id="dropdown-user" class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
								<span class="pull-right">
									<img class="img-circle img-user media-object" src="{{ asset('assets/img/av1.png') }}" alt="Profile Picture">
								</span>
                            <div class="username hidden-xs">{{ $user->name }}</div>
                        </a>


                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

                            <!-- Dropdown heading  -->
                            <div class="pad-all bord-btm">
                                <p class="text-lg text-muted text-thin mar-btm">Plan: Trial</p>
                                <div class="progress progress-sm">
                                    <div class="progress-bar" style="width: 15%;">
                                        <span class="sr-only">15%</span>
                                    </div>
                                </div>
                            </div>


                            <!-- User dropdown menu -->
                            <ul class="head-list">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user fa-fw fa-lg"></i> Profile
                                    </a>
                                </li>{{--
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">9</span>
                                        <i class="fa fa-envelope fa-fw fa-lg"></i> Messages
                                    </a>
                                </li>--}}
                                <li>
                                    <a href="#" id="user-settings">
                                        <span class="label label-success pull-right">New</span>
                                        <i class="fa fa-gear fa-fw fa-lg"></i> Settings
                                    </a>
                                </li>{{--
                                <li>
                                    <a href="#">
                                        <i class="fa fa-question-circle fa-fw fa-lg"></i> Help
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-lock fa-fw fa-lg"></i> Lock screen
                                    </a>
                                </li>--}}
                            </ul>

                            <!-- Dropdown footer -->
                            <div class="pad-all text-right">
                                <a href="pages-login.html" class="btn btn-primary">
                                    <i class="fa fa-sign-out fa-fw"></i> Logout
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->

                </ul>
            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->

        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

        @yield('content')

        @include('elements.navigation')

        @include('elements.aside')

    </div>

    @include('elements.footer')

    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->

</div>
<!--===================================================-->
<!-- END OF CONTAINER -->


<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{{ asset('assets/js/jquery-2.1.1.min.js') }}"></script>

<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!--Fast Click [ OPTIONAL ]-->
<script src="{{ asset('assets/plugins/fast-click/fastclick.min.js') }}"></script>

<!--Nifty Admin [ RECOMMENDED ]-->
<script src="{{ asset('assets/js/nifty.min.js') }}"></script>
{{--
<!--Morris.js [ OPTIONAL ]-->
<script src="{{ asset('assets/plugins/morris-js/morris.min.js') }}"></script>
<script src="{{ asset('assets/plugins/morris-js/raphael-js/raphael.min.js') }}"></script>--}}

<!--Sparkline [ OPTIONAL ]-->
<script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!--Skycons [ OPTIONAL ]-->
<script src="{{ asset('assets/plugins/skycons/skycons.min.js') }}"></script>


<!--Switchery [ OPTIONAL ]-->
<script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>


<!--Bootstrap Select [ OPTIONAL ]-->
<script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>


<!--Demo script [ DEMONSTRATION ]-->
<script src="{{ asset('assets/js/demo/nifty-demo.min.js') }}"></script>


<!--Specify page [ SAMPLE ]-->
<script src="{{ asset('assets/js/demo/dashboard.js') }}"></script>

<!--Bootbox Modals [ OPTIONAL ]-->
<script src="{{ asset('assets/plugins/bootbox/bootbox.min.js') }}"></script>

@include('elements.scripts')

</body>

<!-- Mirrored from www.themeon.net/nifty/v2.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:43:58 GMT -->
</html>
