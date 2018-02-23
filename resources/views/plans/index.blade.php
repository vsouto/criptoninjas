@extends('layouts.template')

@section('content')
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Planos</h1>

        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

            <div class="row">
                <div class="col-lg-8">

                    @foreach( $plans as $plan)
                        <div class="panel">
                            <div class="panel-bg-cover" style="    max-height: 302px !important;">
                                <img class="img-responsive" src="{{ asset('img/' . strtolower($plan->word). '.jpg') }}" alt="Image">
                            </div>
                            <div class="panel-media">
                                <img src="{{ asset('img/avatar/'. strtolower($plan->word).'.png') }}" class="panel-media-img img-circle img-border-light" alt="Profile Picture">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h3 class="panel-media-heading">{{ $plan->title }}</h3>
                                        <a href="#" class="btn-link">{{ $plan->word }}</a>
                                        <p class="text-muted mar-btm">{{ $plan->short }}</p>
                                    </div>
                                    <div class="col-lg-5 text-lg-right">
                                        {!! getUserPlanButton($user, $plan->id) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <h4>{{ $plan->title }}</h4>
                                {{ $plan->description }}
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-control">
                                <button data-dismiss="panel" class="btn btn-default">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                            <h3 class="panel-title">Seu plano</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                @if ($user->last_activated_plan)
                                    <div class="col-sm-6 text-center">
                                        <i class="far fa-address-card fa-5x"></i>
                                        <p class="text-lg">{{ $plan->title }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="pad-ver">
                                            <p class="text-lg">{{ $plan->title }}</p>
                                            <div class="progress progress-sm">
                                                <div role="progressbar" style="width: {{ $days_passed_percentage }}%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-purple">
                                                    <span class="sr-only">{{ $days_passed_percentage }}</span>
                                                </div>
                                            </div>
                                            <small class="text-muted">{{ $days_passed_percentage }}% Completed</small>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-sm-6 text-center">
                                        <img src="{{ asset('img/desperate.jpg') }}" width="180px"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="pad-ver">
                                            <h5>Você ainda não tem um plano ativo!</h5>
                                            <small class="text-muted">Mas não se desespere. Selecione ao lado o plano que mais se encaixa com seu perfil, e pague a taxa de gestão apenas em cima dos rendimentos, ao final do período!</small>
                                        </div>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                    <!--Profile Widget-->
                    <!--===================================================-->
                    <div class="panel text-center">
                        <div class="panel-body bg-purple">
                            <img alt="Avatar" class="img-lg img-circle img-border mar-btm" src="{{ asset('img/roadmap.jpg') }}">

                            <h4 class="mar-no">Como funcionam os planos</h4>
                        </div>

                        <div class="pad-all">
                            <p class="text-muted">
                                Para virar um CriptoNinja não é preciso muito.
                                <h4>Requisitos mínimos:</h4>
                                    Investimento inicial mínimo: <b>R$ 500</b>
                                <br>
                                    Idade mínima: <b>16 anos</b>
                                <br>
                                <br>
                            </p>
                            <h5>Veja neste infográfico como funcionam os planos:<br></h5>
                            <br>
                            <p class="text-muted">
                                <img src="{{ asset('img/plans-map.jpg') }}">
                            </p>
                        </div>
                    </div>
                    <!--===================================================-->

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
        $('.select-plan').click(function(){

            var plan_id = $(this).data('plan');

            @if ($user->plans->count() > 0)
                // O ultimo plano do usuario ainda nao terminou
                if ({{ $last_activation_days_passed }} < 30) {
                    $.niftyNoty({
                        type: 'info',
                        icon : 'fa fa-info',
                        message : 'Seu último plano ainda não terminou. Aguarde o término para renovar seu plano!',
                        container : 'floating',
                        timer : 8000
                    });

                    return false;
                }
            @endif

            location.href = '{{ url('plans') }}/' + plan_id;
        });
    </script>
@endsection