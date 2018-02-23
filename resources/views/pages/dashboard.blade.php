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
                        <p class="text-2x mar-no text-thin">{{ $users->count() }}</p>
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
                        <p class="text-2x mar-no text-thin">{{ $user->criptos->count() }}</p>
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
                        <i class="fa fa-cloud-download-alt fa-2x"></i>
                        </span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">{{ $criptos->count() }}</p>
                        <p class="text-muted mar-no">Criptos mapped</p>
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
									<i class="fa fa-dollar-sign fa-2x"></i>
									</span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">U$ {{ number_format($user->balance, 2, ',', '.') }}</p>
                        <p class="text-muted mar-no">Your balance</p>
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
                            <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="#"
                               data-original-title="<h4 class='text-thin'>Info</h4><p style='width:150px'>Este painel mostrará seu portfolio de criptomoedas.</p><p>Para configurá-lo vá em Settings, no topo à direita." data-html="true" title=""></a>
                        </div>
                        <h3 class="panel-title">Portfolio</h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            @if (!$user->criptos || $user->criptos->count() <= 0)
                                <div class="alert alert-warning fade in">
                                    <button class="close" data-dismiss="alert"><span>×</span></button>
                                    <strong>Ops!</strong> Você ainda não configurou sua conta, ou não possui criptomoedas.
                                </div>
                                <div class="alert alert-info fade in">
                                    <button class="close" data-dismiss="alert"><span>×</span></button>
                                    <strong>Configure</strong> sua conta clicando no seu nome no topo e depois em <b>Settings</b>.
                                </div>
                            @else
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th style="width:4ex">ID</th>
                                        <th>Name</th>
                                        <th>Initial</th>
                                        <th>Current Amount</th>
                                        <th>Current Price</th>
                                        <th>Current Value</th>
                                        <th class="text-center">Profit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user->criptos as $cripto)
                                            <tr>
                                                <td><a href="#" class="btn-link">{{ $cripto->id }}</a></td>
                                                <td>{{ $cripto->name }}</td>
                                                <td></td>
                                                <td class="text-center">{{ number_format($cripto->wallet->amount, 6, ',', '.') }} {{ $cripto->code }}</td>
                                                <td class="text-center">U$ {{ number_format($cripto->price, 2, ',', '.') }} </td>
                                                <td class="text-center">
                                                    <span class="label label-table label-success">U$ {{ number_format($cripto->price * $cripto->wallet->amount, 2, ',', '.') }}</span>
                                                </td>
                                                <td class="text-right">
                                                    {{--<span class="label label-table label-success">32%</span>--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif

                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user table-->

            </div>
            <div class="col-lg-5">
                <div class="panel middle">
                    <div class="media-left pad-all">
                        <i class="fa fa-check-circle fa-3x"></i>
                    </div>

                    @if ($user->last_activated_plan)
                        <div class="media-body">
                            <p class="text-2x mar-no text-thin text-mint">CriptoNinja Autenticado</p>
                            <p class="text-muted mar-no">{{ $user->plans->first()->title }}</p>
                        </div>
                    @else
                        <div class="media-body">
                            <p class="text-2x mar-no text-thin text-mint">Visitante</p>
                            <p class="text-muted mar-no"><a href="{{ route('plans.index') }}">Vire um CriptoNinja</a></p>
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-sm-6 col-lg-6">

                        <!--Tile with progress bar (Comments)-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <div class="panel panel-purple panel-colorful">
                            <div class="pad-all media">
                                <div class="media-left">
												<span class="icon-wrap icon-wrap-xs">
													<i class="fa fa-dollar-sign fa-3x"></i>
												</span>
                                </div>
                                <div class="media-body">
                                    <p class="h3 text-thin media-heading">U$ 0</p>
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
                        <div class="panel panel-mint panel-colorful">
                            <div class="pad-all media">
                                <div class="media-left">
												<span class="icon-wrap icon-wrap-xs">
													<i class="fa fa-chart-line fa-fw fa-3x"></i>
												</span>
                                </div>
                                <div class="media-body">
                                    <p class="h3 text-thin media-heading">U$ {{ number_format($user->balance, 2, ',', '.') }}</p>
                                    <small class="text-uppercase">Current Networth</small>
                                </div>
                            </div>

                            <div class="progress progress-xs progress-dark-base mar-no">
                                <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width: 75%"></div>
                            </div>

                            <div class="pad-all text-right">
                                <small><span class="text-semibold"><i class="fa fa-shopping-cart fa-fw"></i> USD</span> based criptos only</small>
                            </div>
                        </div>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--Tile with progress bar (New Orders)-->

                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <button data-dismiss="panel" class="btn btn-default">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                        <h3 class="panel-title">Notas do Desenvolvedor</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6 text-center">

                                <img src="{{ asset('img/omg.jpg') }}" width="260px">
                            </div>
                            <div class="col-sm-6">
                                <div class="pad-ver">
                                    <p class="text-lg">Alpha Progress</p>
                                    <div class="progress progress-sm">
                                        <div role="progressbar" style="width: 75%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-purple">
                                            <span class="sr-only">75%</span>
                                        </div>
                                    </div>
                                    <small class="text-muted">75% Completed</small>
                                </div>
                                <div class="pad-ver">
                                    <p class="text-lg">Beta Progress</p>
                                    <div class="progress progress-sm">
                                        <div role="progressbar" style="width: 15%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-success">
                                            <span class="sr-only">15%</span>
                                        </div>
                                    </div>
                                    <small class="text-muted">15% Completed</small>
                                </div>

                                <hr>
                                <p class="text-muted">Calma! O CriptoNinjas está só começando.</p>
                                <p class="text-muted">Várias ferramentas estão sendo construídas para você otimizar cada vez mais sua gestão no mercado de cripto.</p>
                                <p class="text-muted">Em breve abriremos um quadro com as features que estão em desenvolvimento,
                                    permitindo também os usuários votarem naquelas que acham mais relevantes a serem construídas!</p>
                                <small class="text-muted"><em>Last Update : {{ \Illuminate\Support\Carbon::now() }}</em></small>
                            </div>
                        </div>
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

@section('footer')
    <script>
        // WELCOME NOTIFICATIONS
        // =================================================================
        // Require Admin Core Javascript
        // =================================================================
        var fvisit  = setTimeout(function(){
            $.niftyNoty({
                type: 'dark',
                title: 'Bem vindo, {{ Auth::user()->name }}!',
                message: 'Este sistema está em fase BETA.<br>' +
                'Muitas coisas podem estar faltando ou quebradas.<br>' +
                'Por favor comunique-nos caso veja algo errado.',
                container: 'floating',
                timer: 5500
            });
            clearTimeout(fvisit);
        }, 4000);
    </script>

    @endsection