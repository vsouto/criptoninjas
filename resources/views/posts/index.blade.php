@extends('layouts.template')

@section('content')
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
{{--

        <div class="row pad-ver mar-btm bg-trans-dark">
            <form action="http://www.themeon.net/nifty/v2.2/pages-search-results.html" method="post" class="col-xs-12 col-sm-10 col-sm-offset-1 pad-hor">
                <input type="text" class="form-control input-lg" placeholder="Search..">
            </form>
        </div>
--}}

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="pad-btm mar-btm text-center">
                <h2 class="text-thin mar-no">
                    Últimas Notícias
                </h2>
                <p>Informe-se com as últimas notícias, vídeos e análises!</p>
            </div>
            <div class="tab-base">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#noticias-tab" data-toggle="tab">Notícias <span class="label label-purple">{{ $news->count() }}</span></a>
                    </li>
                    <li class="">
                        <a href="#videos-tab" data-toggle="tab">Vídeos <span class="badge badge-primary">{{ $videos->count() }}</span></a>
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
                                        <img class="img" style="width: 150px;" alt="{{ $post->title }}" src="{{ asset('storage/' .$post->image) }}">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <a class="h4 btn-link" href="{{ route('posts.show', ['slug' => $post->slug ]) }}">{{ $post->title }}</a>
                                        </div>
                                        <a class="btn-link text-success box-inline" href="#">http://www.example.com/nifty/admin</a>
                                        <p>{!! substr($post->excerpt,0, 160) !!}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <hr class="hr-wide">

                        <!--Pagination-->
                        <div class="text-right">
                            <ul class="pagination mar-no">
                                <li class="disabled"><a class="fa fa-angle-double-left" href="#"></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><span>...</span></li>
                                <li><a href="#">20</a></li>
                                <li><a class="fa fa-angle-double-right" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--===================================================-->

                    <!-- Videos -->
                    <!--===================================================-->
                    <div class="tab-pane fade" id="videos-tab">
                        <ul class="list-group bord-no">
                            @foreach($videos as $post)
                                <li class="list-group-item mar-ver media">
                                    <div class="pull-left">
                                        <a href="{{ route('posts.show', ['slug' => $post->slug ]) }}">
                                            <img class="img" style="width: 150px;" alt="{{ $post->title }}" src="{{ asset('storage/' .$post->image) }}">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <a class="h4 btn-link" href="{{ route('posts.show', ['slug' => $post->slug ]) }}">{{ $post->title }}</a>
                                        </div>
                                        <a class="btn-link text-success box-inline" href="{{ route('posts.show', ['slug' => $post->slug ]) }}">{{ url('posts', ['slug' => $post->slug ]) }}</a>
                                        <p>{!! substr($post->excerpt,0, 160) !!}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--===================================================-->


                </div>
            </div>

        </div>
        <!--===================================================-->
        <!--End page content-->

    </div>
<!-- end #content -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/plugins/isotope/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/lightbox/js/lightbox-2.6.min.js') }}"></script>
    <script src="{{ asset('assets/js/gallery.demo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
            Gallery.init();
        });
    </script>
@endsection