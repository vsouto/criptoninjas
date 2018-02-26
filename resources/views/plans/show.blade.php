@extends('layouts.template')

@section('content')
        <!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-alert"></div>
    <div id="page-content">
        <div class="row">
            <div class="col-lg-8">

                <!--Profile Heading-->
                <!--===================================================-->
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
                        <p class="text">
                            {{ $plan->description }}
                        </p>
                        <br>
                        <p>
                            <b>Taxa de gestão: </b> {{ $plan->price }}%
                        </p>
                        <p>
                            <b>Quantia mínima inicial: </b> R$ 500,00
                        </p>
                        <p>
                            <b>Duração: </b> 30 dias
                        </p>
                    </div>
                </div>
                <!--===================================================-->

            </div>

        </div>
    </div>

</div>
<!--===================================================-->
<!--End page content-->

@endsection

@section('footer')
    <script>
        $('.select-plan').click(function() {

            var plan_id = $(this).data('plan');

            activatePlan(plan_id);

        });

        $('#follow-user').click(function() {

            $.niftyNoty({
                type: 'warning',
                icon : 'fa fa-exclamation',
                message : 'Esta funcionalidade ainda não está pronta!',
                container : 'floating',
                timer : 3200
            });

        });
    </script>
@endsection
