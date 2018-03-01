<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">Navigation</li>

                        <!--Menu list item-->
                        <li class="active-link">
                            <a href="{{ route('home') }}">
                                <i class="fa fa-home"></i>
                                <span class="menu-title">
                                    <strong>Home</strong>
                                </span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li class="">
                            <a href="{{ route('dashboard') }}">
                                <i class="fa fa-tachometer-alt"></i>
                                <span class="menu-title">
                                    <strong>Dashboard</strong>
                                </span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li class="">
                            <a href="{{ route('posts.index') }}">
                                <i class="fa fa-newspaper"></i>
                                <span class="menu-title">
                                    <strong>Notícias</strong>
                                </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('posts.index') }}#videos-tab">
                                <i class="fa fa-video"></i>
                                <span class="menu-title">
                                    <strong>Vídeos</strong>
                                </span>
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('plans.index') }}">
                                <i class="far fa-clipboard"></i>
                                <span class="menu-title">
                                    <strong>Planos</strong>
                                </span>
                            </a>
                        </li>


{{--

                        <!--Menu list item-->
                        <li class="active-link">
                            <a href="{{ route('plans.index') }}">
                                <i class="fa fa-bullhorn"></i>
                                <span class="menu-title">
                                    <strong>Plans</strong>
                                </span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span class="menu-title">
                                    <strong>Users</strong>
                                </span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="{{ route('users.index') }}">List</a></li>
                                <li><a href="{{ route('users.create') }}">Create</a></li>

                            </ul>
                        </li>
--}}

                    </ul>

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->