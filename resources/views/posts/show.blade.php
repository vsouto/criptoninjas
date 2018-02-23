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
                        <div class="panel-bg-cover" style="max-height: 392px !important;">
                            <img class="img-responsive" src="{{ asset('storage/' . $post->image) }}" alt="Image" style="margin-top: -6%">
                        </div>
                        <div class="panel-media">
                            <img src="{{ getUserAvatar($post) }}" class="panel-media-img img-circle img-border-light" alt="Profile Picture">
                            <div class="row">
                                <div class="col-lg-7">
                                    <h3 class="panel-media-heading">{{ $post->title }}</h3>

                                    @if ($post->author)
                                        <h5 class="">{{ $post->author->name }}</h5>
                                        <a href="http://www.twitter.com/{{ $post->author->twitter }}" target="_blank" class="btn-link">
                                            {{ '@' . $post->author->twitter }}
                                        </a>
                                    @endif
                                </div>
                                <div class="col-lg-5 text-lg-right">
                                    <button class="btn btn-sm btn-primary" id="follow-user">Follow</button>
                                    <a href="{{ route('posts.index') }}">
                                         <button class="btn btn-sm btn-mint btn-icon fa fa-angle-double-left icon-lg">Back to News</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <h4>{{ $post->title }}</h4>
                            {!! $post->body !!}
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
