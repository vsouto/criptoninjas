<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'CriptoNinja') }}</title>

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>

    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('assets/css/nifty.min.css') }}" rel="stylesheet"/>

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{ asset('assets/plugins/font-awesome/css/fontawesome-all.css') }}" rel="stylesheet"/>

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
                <a href="{{ route('dashboard') }}" class="navbar-brand">
                    <img src="{{ asset('img/criptoninja-white.png') }}" alt="Cripto Ninja" class="brand-icon">
                    <div class="brand-title">
                        <span class="brand-text">CriptoNinja</span>
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
                            <i class="fa fa-bars fa-lg"></i>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->


                </ul>
                <ul class="nav navbar-top-links pull-right">

                    <!--Language selector-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
								<span class="lang-selected">
									<img class="lang-flag" src="{{ asset('assets/img/flags/brazil.png') }}" alt="English">
									<span class="lang-id">PT</span>
									<span class="lang-name">Portuguese</span>
								</span>
                        </a>

                        <!--Language selector menu-->
                        <ul class="head-list dropdown-menu with-arrow">
                            {{--<li>
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
                            </li>--}}
                            <li>
                                <!--Spain-->
                                <a href="#">
                                    <img class="lang-flag" src="{{ asset('assets/img/flags/brazil.png') }}" alt="Spain">
                                    <span class="lang-id">PT</span>
                                    <span class="lang-name">Portuguese</span>
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
                            <div class="username hidden-xs">{{ Auth::user()->name }}</div>
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
                                        <i class="fa fa-wrench fa-fw fa-lg"></i> Settings
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
                                <a href="{{ route('logout') }}" class="btn btn-primary">
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

<!-- Google Analytics -->
@include('elements.analytics')

@include('elements.scripts')

@yield('footer')

</body>

<!-- Mirrored from www.themeon.net/nifty/v2.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:43:58 GMT -->
</html>
