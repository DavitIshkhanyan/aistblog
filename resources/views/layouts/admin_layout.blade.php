<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-Panel - @yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/admin_assets/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/admin_assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/admin_assets/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/admin_assets/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/admin_assets/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/admin_assets/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/admin_assets/global_assets/js/main/jquery.min.js"></script>
    <script src="/admin_assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/admin_assets/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="/admin_assets/global_assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/admin_assets/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="/admin_assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="/admin_assets/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="/admin_assets/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="/admin_assets/global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="/admin_assets/global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="/admin_assets/assets/js/app.js"></script>
    <script src="/admin_assets/global_assets/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-light navbar-static">

    <!-- Header with logos -->
    <div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
        <div class="navbar-brand navbar-brand-md">
            <a href="/admin" class="d-inline-block">
                <img src="/admin_assets/global_assets/images/logo_light.png" alt="">
            </a>
        </div>

        <div class="navbar-brand navbar-brand-xs">
            <a href="/admin" class="d-inline-block">
                <img src="/admin_assets/global_assets/images/logo_icon_light.png" alt="">
            </a>
        </div>
    </div>
    <!-- /header with logos -->


    <!-- Mobile controls -->
    <div class="d-flex flex-1 d-md-none">
        <div class="navbar-brand mr-auto">
            <a href="/admin" class="d-inline-block">
                <img src="/admin_assets/global_assets/images/logo_dark.png" alt="">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>

        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>
    <!-- /mobile controls -->


    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-people"></i>
                    <span class="d-md-none ml-2">Users</span>
                    <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                </a>

                <div class="dropdown-menu dropdown-content wmin-md-300">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Users online</span>
                        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                    <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Will Brason</a>
                                    <span class="d-block text-muted font-size-sm">Marketing manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
                                    <span class="d-block text-muted font-size-sm">Project manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
                                    <span class="d-block text-muted font-size-sm">Business developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
                                    <span class="d-block text-muted font-size-sm">UX expert</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-grey mr-auto">All users</a>
                        <a href="#" class="text-grey"><i class="icon-gear"></i></a>
                    </div>
                </div>
            </li>
        </ul>

        <span class="badge bg-pink-400 badge-pill ml-md-3 mr-md-auto">16 orders</span>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="/admin_assets/global_assets/images/lang/gb.png" class="img-flag mr-2" alt="">
                    English
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item english active"><img src="/admin_assets/global_assets/images/lang/gb.png" class="img-flag" alt=""> English</a>
                    <a href="#" class="dropdown-item ukrainian"><img src="/admin_assets/global_assets/images/lang/ua.png" class="img-flag" alt=""> Українська</a>
                    <a href="#" class="dropdown-item deutsch"><img src="/admin_assets/global_assets/images/lang/de.png" class="img-flag" alt=""> Deutsch</a>
                    <a href="#" class="dropdown-item espana"><img src="/admin_assets/global_assets/images/lang/es.png" class="img-flag" alt=""> España</a>
                    <a href="#" class="dropdown-item russian"><img src="/admin_assets/global_assets/images/lang/ru.png" class="img-flag" alt=""> Русский</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="d-md-none ml-2">Messages</span>
                    <span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Messages</span>
                        <a href="#" class="text-default"><i class="icon-compose"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">James Alexander</span>
                                            <span class="text-muted float-right font-size-sm">04:58</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">Margo Baker</span>
                                            <span class="text-muted float-right font-size-sm">12:16</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">That was something he was unable to do because...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">Jeremy Victorino</span>
                                            <span class="text-muted float-right font-size-sm">22:48</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">Beatrix Diaz</span>
                                            <span class="text-muted float-right font-size-sm">Tue</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">Richard Vango</span>
                                            <span class="text-muted float-right font-size-sm">Mon</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-grey mr-auto">All messages</a>
                        <div>
                            <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-cog3"></i></a>
                        </div>
                    </div>
                </div>
            </li>

{{--            <li class="nav-item dropdown dropdown-user">--}}
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown dropdown-user">
                {{--                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                {{--                        {{ Auth::user()->name }} <span class="caret"></span>--}}
                {{--                    </a>--}}

                {{--                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                {{--                        <a class="dropdown-item" href="{{ route('logout') }}"--}}
                {{--                           onclick="event.preventDefault();--}}
                {{--                                                     document.getElementById('logout-form').submit();">--}}
                {{--                            {{ __('Logout') }}--}}
                {{--                        </a>--}}

                {{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--                            @csrf--}}
                {{--                        </form>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{ Auth::user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-indigo-400 ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="icon-switch2"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div>
                </li>
            @endguest
        </ul>
    </div>
    <!-- /navbar content -->

</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            Navigation
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-user-material">
                <div class="sidebar-user-material-body">
                    <div class="card-body text-center">
                        <a href="#">
                            <img src="/admin_assets/global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                        </a>
                        <h6 class="mb-0 text-white text-shadow-dark">{{ Auth::user()->name }}</h6>
                        <span class="font-size-sm text-white text-shadow-dark">Santa Ana, CA</span>
                    </div>

                    <div class="sidebar-user-material-footer">
                        <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
                    </div>
                </div>

                <div class="collapse" id="user-nav">
                    <ul class="nav nav-sidebar">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-user-plus"></i>
                                <span>My profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-coins"></i>
                                <span>My balance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-comment-discussion"></i>
                                <span>Messages</span>
                                <span class="badge bg-success-400 badge-pill align-self-center ml-auto">58</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-cog5"></i>
                                <span>Account settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="icon-switch2"></i> {{ __('Logout') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="card card-sidebar-mobile">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link active">
                            <i class="icon-home4"></i>
                            <span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">No active orders</span>
								</span>
                        </a>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Posts</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="posts" class="nav-link">All posts</a></li>
                            <li class="nav-item"><a href="admin_posts" class="nav-link">See posts as admin</a></li>
                            @for($i = 0; $i < 4; $i++)
                            <li class="nav-item"><a href="/posts/{{ $posts[$i]->id }}" class="nav-link">Post {{ $i + 1 }}</a></li>
                            @endfor
{{--                            <li class="nav-item"><a href="admin_posts" class="nav-link">See posts as admin</a></li>--}}
{{--                            <li class="nav-item"><a href="../../../../layout_1/LTR/default/full/index.html" class="nav-link">Default layout</a></li>--}}
{{--                            <li class="nav-item"><a href="index.html" class="nav-link active">Layout 2</a></li>--}}
{{--                            <li class="nav-item"><a href="../../../../layout_3/LTR/default/full/index.html" class="nav-link">Layout 3</a></li>--}}
{{--                            <li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Layout 4</a></li>--}}
{{--                            <li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html" class="nav-link">Layout 5</a></li>--}}
{{--                            <li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>--}}
                        </ul>
                    </li>
{{--                    <li class="nav-item nav-item-submenu">--}}
{{--                        <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>--}}

{{--                        <ul class="nav nav-group-sub" data-submenu-title="Themes">--}}
{{--                            <li class="nav-item"><a href="../../../LTR/default/full/index.html" class="nav-link">Default</a></li>--}}
{{--                            <li class="nav-item"><a href="index.html" class="nav-link active">Material</a></li>--}}
{{--                            <li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>--}}
{{--                            <li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item nav-item-submenu">--}}
{{--                        <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>--}}

{{--                        <ul class="nav nav-group-sub" data-submenu-title="Starter kit">--}}
{{--                            <li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>--}}
{{--                            <li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>--}}
{{--                            <li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>--}}
{{--                            <li class="nav-item nav-item-submenu">--}}
{{--                                <a href="#" class="nav-link">2 sidebars</a>--}}
{{--                                <ul class="nav nav-group-sub">--}}
{{--                                    <li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>--}}
{{--                                    <li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item nav-item-submenu">--}}
{{--                                <a href="#" class="nav-link">3 sidebars</a>--}}
{{--                                <ul class="nav nav-group-sub">--}}
{{--                                    <li class="nav-item"><a href="../seed/sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>--}}
{{--                                    <li class="nav-item"><a href="../seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item nav-item-submenu">--}}
{{--                                <a href="#" class="nav-link">Content sidebars</a>--}}
{{--                                <ul class="nav nav-group-sub">--}}
{{--                                    <li class="nav-item"><a href="../seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>--}}
{{--                                    <li class="nav-item"><a href="../seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>--}}
{{--                            <li class="nav-item-divider"></li>--}}
{{--                            <li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>--}}
{{--                            <li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>--}}
{{--                            <li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>--}}
{{--                            <li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>--}}
                    <!-- /main -->
                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
                    <div class="btn-group">
                        <button type="button" class="btn bg-indigo-400" onclick="document.location='/posts/create'"><i class="icon-stack2 mr-2"></i> New Post </button>
                        <button type="button" class="btn bg-indigo-400 dropdown-toggle" data-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">Actions</div>
                            <a href="/posts" class="dropdown-item"><i class="icon-file-eye"></i> View posts</a>
                            <a href="/admin_posts" class="dropdown-item"><i class="icon-file-plus"></i> Edit posts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content pt-0">
            @yield('content')
        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
