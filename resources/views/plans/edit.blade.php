@extends('layouts.template')

@section('content')
        <!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Plans</h1>

    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <!-- Basic Data Tables -->
        <!--===================================================-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Basic Data Tables with responsive plugin</h3>
            </div>
            <div class="panel-body">
                {!! Form::open(array('route' => 'plans.store', 'id' => 'form-team', 'class' => 'form-horizontal')) !!}
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-horizontal">
                        <div class="form-group">
                            {!! Form::label('title', 'T�tulo', array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-md-9">
                                {!! Form::text('title', old('title'), array('class'=>'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Price', array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-md-9">
                                {!! Form::text('price', old('price'), array('class'=>'form-control')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Descri��o', array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-md-9">
                                <textarea class="form-control no-rounded-corner bg-silver text text-black" rows="4" name="description"
                                          placeholder="Descreva os hor�rios de treinos e objetivos do time...">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('duration', 'Dura��o', array('class'=>'col-sm-2 control-label')) !!}
                            <div class="col-md-9">
                                {!! Form::text('duration', old('duration'), array('class'=>'form-control')) !!}
                            </div>
                        </div>
                    </div>

                    <div class="note note-success">
                        <h3>Aten��o</h3>
                        <p>
                            Seu time ser� criado e aparecer� na lista de times.
                        </p>
                        <p>Para incluir jogadores no time, envie o link do perfil do time para que o jogador acesse e solicite a entrada.</p>
                        <p>Em seguida, basta que voc� ou qualquer integrante do time aprove a entrada do jogador.</p>
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