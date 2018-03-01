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

                        @if (Auth::check())
                            <p class="text-2x mar-no text-thin">{{ $user->criptos->count() }}</p>
                        @else
                            <p class="text-2x mar-no text-thin">0</p>
                        @endif
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
                        @if (Auth::check() )
                            <p class="text-2x mar-no text-thin">U$ {{ number_format($user->balance, 2, ',', '.') }}</p>
                        @else
                            <p class="text-2x mar-no text-thin">U$ 0</p>
                        @endif
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

                <div class="tab-base">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#noticias-tab" data-toggle="tab">Últimas Notícias <span class="label label-purple">{{ $news->count() }}</span></a>
                        </li>
                    </ul>

                    <!-- Tabs Content -->
                    <div class="tab-content">

                        <!-- DEFAULT SEARCH LAYOUT -->
                        <!--===================================================-->
                        <div class="tab-pane fade active in" id="noticias-tab">
                            <ul class="list-group bord-no">
                                @foreach($news as $post)
                                    <li class="list-group-item mar-ver media">
                                        <div class="pull-left">
                                            <img class="img" style="width: 180px;" alt="{{ $post->title }}" src="{{ asset('storage/' .$post->image) }}">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a class="h4 btn-link" href="{{ route('posts.show', ['slug' => $post->slug ]) }}">{{ $post->title }}</a>
                                            </div>
                                            <a class="btn-link text-success box-inline" href="{{ url('posts' , $post->slug) }}">{{ url('posts' , $post->slug) }}</a>
                                            <p>{!! substr($post->excerpt,0, 170) !!}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--===================================================-->
                    </div>
                </div>

            </div>
            <div class="col-lg-5">
                <div class="panel middle">
                    <div class="media-left pad-all">
                        <i class="fa fa-check-circle fa-3x"></i>
                    </div>

                    @if (Auth::check() && $user->last_activated_plan)
                        <div class="media-body">
                            <p class="text-2x mar-no text-thin text-mint">CriptoNinja Autenticado</p>
                            <p class="text-muted mar-no">{{ $user->plans->first()->title }}</p>
                        </div>
                    @else
                        <div class="media-body">
                            <p class="text-2x mar-no text-thin text-mint">Visitante</p>
                            <p class="text-muted mar-no"><a href="{{ route('plans.index') }}">Torne-se um CriptoNinja</a></p>
                        </div>
                    @endif
                </div>

                <div class="row">

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
                                    <p class="text-lg">Beta</p>
                                    <div class="progress progress-sm">
                                        <div role="progressbar" style="width: 90%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" class="progress-bar progress-bar-success">
                                            <span class="sr-only">90%</span>
                                        </div>
                                    </div>
                                    <small class="text-muted">90% Completed</small>
                                </div>

                                <hr>
                                <h4>Calma!</h4>
                                <p class="text-muted"> O CriptoNinjas está só começando!</p>
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

            @if (Auth::check())
                var welcome_user = 'Bem vindo, {{ Auth::user()->name }}!';
            @else
                var welcome_user = 'Bem vindo, visitante!';
            @endif

            $.niftyNoty({
                type: 'dark',
                title: welcome_user,
                message: 'Este sistema está em fase BETA.<br>' +
                'Muitas coisas podem estar faltando ou quebradas.<br>' +
                'Por favor avise-nos caso encontre algo errado!<br>' +
                'criptoninjas@gmail.com',
                container: 'floating',
                timer: 5500
            });
            clearTimeout(fvisit);
        }, 4000);
    </script>

    @endsection