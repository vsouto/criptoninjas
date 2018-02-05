@extends('layouts.template')

@section('content')
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Users</h1>

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
                    <div class="table-responsive">
                        {!! $grid->render() !!}
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