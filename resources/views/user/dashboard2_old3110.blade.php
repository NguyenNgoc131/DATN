<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Admin, Dashboard, Bootstrap" />
    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
    <title>Thông báo mời thầu</title>

    <link rel="stylesheet" href="../libs/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
    <!-- build:css ../assets/css/app.min.css -->
    <link rel="stylesheet" href="../libs/bower/animate.css/animate.min.css">
    <link rel="stylesheet" href="../libs/bower/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="../libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/core.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/dashboard2.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    <script src="../libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="menubar-top menubar-light theme-primary">
    <!--============= start main area -->

    <!-- APP NAVBAR ==========-->
    <nav id="app-navbar" class="navbar navbar-inverse navbar-fixed-top primary">

        <!-- navbar header -->
        <div class="navbar-header">
            <button type="button" id="menubar-toggle-btn"
                class="navbar-toggle visible-xs-inline-block navbar-toggle-left hamburger hamburger--collapse js-hamburger">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>

            <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse"
                data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="zmdi zmdi-hc-lg zmdi-more"></span>
            </button>

            <button type="button" class="navbar-toggle navbar-toggle-right collapsed" data-toggle="collapse"
                data-target="#navbar-search" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="zmdi zmdi-hc-lg zmdi-search"></span>
            </button>

            <label class="navbar-brand">
                <span class="brand-icon"><i class="fa fa-gg"></i></span>
                <span class="brand-name">Hotline: 0879.888.186 - 0879.888.986</span>
            </label>
        </div><!-- .navbar-header -->

        <div class="navbar-container container-fluid">
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-toolbar navbar-toolbar-left navbar-left">
                    <li class="hidden-float hidden-menubar-top">
                        <a href="javascript:void(0)" role="button" id="menubar-fold-btn"
                            class="hamburger hamburger--arrowalt is-active js-hamburger">
                            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                        </a>
                    </li>
                    <li>
                        <h5 class="page-title hidden-menubar-top">Dashboard</h5>
                    </li>
                </ul>

                <ul class="nav navbar-toolbar navbar-toolbar-right navbar-right">
                    {{-- <li class="nav-item dropdown hidden-float">
                        <a href="javascript:void(0)" data-toggle="collapse" data-target="#navbar-search"
                            aria-expanded="false">
                            <i class="zmdi zmdi-hc-lg zmdi-search"></i>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"><i
                                class="zmdi zmdi-hc-lg zmdi-notifications"></i></a>
                        <div class="media-group dropdown-menu animated flipInY">
                            <a href="javascript:void(0)" class="media-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar avatar-xs avatar-circle">
                                            <img src="../assets/images/221.jpg" alt="">
                                            <i class="status status-online"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">John Doe</h5>
                                        <small class="media-meta">Active now</small>
                                    </div>
                                </div>
                            </a><!-- .media-group-item -->

                            <a href="javascript:void(0)" class="media-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar avatar-xs avatar-circle">
                                            <img src="../assets/images/205.jpg" alt="">
                                            <i class="status status-offline"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">John Doe</h5>
                                        <small class="media-meta">2 hours ago</small>
                                    </div>
                                </div>
                            </a><!-- .media-group-item -->

                            <a href="javascript:void(0)" class="media-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar avatar-xs avatar-circle">
                                            <img src="../assets/images/207.jpg" alt="">
                                            <i class="status status-away"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">Sara Smith</h5>
                                        <small class="media-meta">idle 5 min ago</small>
                                    </div>
                                </div>
                            </a><!-- .media-group-item -->

                            <a href="javascript:void(0)" class="media-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar avatar-xs avatar-circle">
                                            <img src="../assets/images/211.jpg" alt="">
                                            <i class="status status-away"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="media-heading">Donia Dyab</h5>
                                        <small class="media-meta">idle 5 min ago</small>
                                    </div>
                                </div>
                            </a><!-- .media-group-item -->
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"><i
                                class="zmdi zmdi-hc-lg zmdi-settings"></i></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="javascript:void(0)"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>My
                                    Profile</a></li>
                            <li><a href="javascript:void(0)"><i
                                        class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>Balance</a></li>
                            <li><a href="javascript:void(0)"><i
                                        class="zmdi m-r-md zmdi-hc-lg zmdi-phone-msg"></i>Connection<span
                                        class="label label-primary">3</span></a></li>
                            <li><a href="javascript:void(0)"><i
                                        class="zmdi m-r-md zmdi-hc-lg zmdi-info"></i>privacy</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0)" class="side-panel-toggle" data-toggle="class"
                            data-target="#side-panel" data-class="open" role="button"><i
                                class="zmdi zmdi-hc-lg zmdi-apps"></i></a>
                    </li> --}}

                    <li class="dropdown">
                        <a href="{{ route('topbar.login') }}" class="side-panel-toggle" data-toggle="class"
                            data-target="#side-panel" data-class="open" role="button"><i class="fa fa-user-plus"> Đăng
                                nhập</i></a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('topbar.signup') }}" class="side-panel-toggle" data-toggle="class"
                            data-target="#side-panel" data-class="open" role="button"><i class="fa fa-sign-in"> Đăng
                                ký</i></a>
                    </li>
                </ul>
            </div>
        </div><!-- navbar-container -->
    </nav>
    <!--========== END app navbar -->

    <!-- APP ASIDE ==========-->
    <aside id="menubar" class="menubar light">
        <div class="app-user">
            <div class="media">
                <div class="media-left">
                    <div class="avatar avatar-md avatar-circle">
                        <a href="javascript:void(0)"><img class="img-responsive" src="../assets/images/221.jpg"
                                alt="avatar" /></a>
                    </div><!-- .avatar -->
                </div>
                <div class="media-body">
                    <div class="foldable">
                        <h5><a href="javascript:void(0)" class="username">John Doe</a></h5>
                        <ul>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <small>Web Developer</small>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu animated flipInY">
                                    <li>
                                        <a class="text-color" href="{{ route('topbar.index') }}">
                                            <span class="m-r-xs"><i class="fa fa-home"></i></span>
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-color" href="{{ route('topbar.profile') }}">
                                            <span class="m-r-xs"><i class="fa fa-user"></i></span>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-color" href="settings.html">
                                            <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a class="text-color" href="logout.html">
                                            <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                                            <span>Home</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!-- .media-body -->
            </div><!-- .media -->
        </div><!-- .app-user -->

        <div class="menubar-scroll">
            <div class="menubar-scroll-inner">
                <ul class="app-menu">
                    <li class="has-submenu">
                        <a href="{{ route('topbar.dashboard2') }}" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                            <span class="menu-text">Trang Chủ</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        {{-- <ul class="submenu">
                            <li><a href="{{ route('topbar.index') }}"><span class="menu-text">Dashboard 1</span></a>
                            </li>
                            <li><a href="{{ route('topbar.dashboard2') }}"><span class="menu-text">Dashboard
                                        2</span></a></li>
                            <li><a href="dashboard.3.html"><span class="menu-text">Dashboard 3</span></a></li>
                        </ul> --}}
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-layers zmdi-hc-lg"></i>
                            <span class="menu-text">Layouts</span>
                            <span class="label label-warning menu-label">2</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="../default/index.html"><span class="menu-text">Default</span></a></li>
                            <li><a href="../topbar/index.html"><span class="menu-text">Topbar</span></a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-puzzle-piece zmdi-hc-lg"></i>
                            <span class="menu-text">UI Kit</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="buttons.html"><span class="menu-text">Buttons</span></a></li>
                            <li><a href="{{ route('topbar.alerts') }}"><span class="menu-text">Alerts</span></a></li>
                            <li><a href="panels.html"><span class="menu-text">Panels</span></a></li>
                            <li><a href="{{ route('topbar.lists') }}"><span class="menu-text">Lists</span></a></li>
                            <li><a href="icons.html"><span class="menu-text">Icons</span></a></li>
                            <li><a href="media.html"><span class="menu-text">Media</span></a></li>
                            <li><a href="widgets.html"><span class="menu-text">Widgets</span></a></li>
                            <li><a href="tabs.html"><span class="menu-text">Tabs &amp; Accordions</span></a></li>
                            <li><a href="progress.html"><span class="menu-text">Progress</span></a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-inbox zmdi-hc-lg"></i>
                            <span class="menu-text">Mail Box</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{ route('topbar.inbox') }}">
                                    <span class="menu-text">Inbox</span>
                                    <span class="label label-primary menu-label">12</span>
                                </a>
                            </li>
                            <li><a href="{{ route('topbar.compose') }}"><span class="menu-text">Compose</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="search.web.html">
                            <i class="menu-icon zmdi zmdi-search zmdi-hc-lg"></i>
                            <span class="menu-text">Search</span>
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-pages zmdi-hc-lg"></i>
                            <span class="menu-text">Pages</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('topbar.profile') }}"><span class="menu-text">Profile</span></a>
                            </li>
                            <li><a href="price.html"><span class="menu-text">Prices</span></a></li>
                            <li><a href="{{ route('topbar.invoice') }}"><span class="menu-text">Invoice</span></a>
                            </li>
                            <li><a href="gallery.1.html"><span class="menu-text">Gallery</span></a></li>
                            <li><a href="gallery.2.html"><span class="menu-text">Gallery 2</span></a></li>
                            <li><a href="support.html"><span class="menu-text">FAQ</span></a></li>
                            <li class="has-submenu">
                                <a href="javascript:void(0)" class="submenu-toggle">
                                    <i class="menu-icon zmdi zmdi-plus zmdi-hc-lg"></i>
                                    <span class="menu-text">Misc Pages</span>
                                    <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                                </a>
                                <ul class="submenu">
                                    <li><a href="{{ route('topbar.login') }}"><span
                                                class="menu-text">Login</span></a>
                                    </li>
                                    <li><a href="signup.html"><span class="menu-text">Sign Up</span></a></li>
                                    <li><a href="password-forget.html"><span class="menu-text">Reset
                                                Password</span></a></li>
                                    <li><a href="unlock.html"><span class="menu-text">Unlock Screen</span></a></li>
                                    <li><a href="404.html"><span class="menu-text">404 Error</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-check zmdi-hc-lg"></i>
                            <span class="menu-text">Forms</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="form.layouts.html"><span class="menu-text">Form Layouts</span></a></li>
                            <li><a href="form.elements.html"><span class="menu-text">Form Elements</span></a></li>
                            <li><a href="form.custom.html"><span class="menu-text">Customized Elements</span></a></li>
                            <li><a href="form.plugins.html"><span class="menu-text">Form Plugins</span></a></li>
                            <li><a href="file-upload.html"><span class="menu-text">File Upload</span></a></li>
                            <li><a href="form.datetime.html"><span class="menu-text">DateTime Pickers</span></a></li>
                            <li><a href="editors.html"><span class="menu-text">Editors</span></a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-storage zmdi-hc-lg"></i>
                            <span class="menu-text">Tables</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="tables.basic.html"><span class="menu-text">Basic Tables</span></a></li>
                            <li><a href="{{ route('topbar.datatables') }}"><span
                                        class="menu-text">DataTables</span></a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-chart zmdi-hc-lg"></i>
                            <span class="menu-text">Charts</span>
                            <span class="label label-success menu-label">7</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="charts.flot.html"><span class="menu-text">Flot Charts</span></a></li>
                            <li><a href="echarts.bar.html"><span class="menu-text">Bar echarts</span></a></li>
                            <li><a href="echarts.pie.html"><span class="menu-text">Pie echarts</span></a></li>
                            <li><a href="echarts.line.html"><span class="menu-text">Line echarts</span></a></li>
                            <li><a href="echarts.map.html"><span class="menu-text">Map echarts</span></a></li>
                            <li><a href="echarts.scatter.html"><span class="menu-text">Scatter echarts</span></a></li>
                            <li><a href="echarts.custom.html"><span class="menu-text">Custom echarts</span></a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-pin zmdi-hc-lg"></i>
                            <span class="menu-text">Maps</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="map-google.html"><span class="menu-text">Google Maps</span></a></li>
                            <li><a href="map-vector.html"><span class="menu-text">Vector Maps</span></a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0)" class="submenu-toggle">
                            <i class="menu-icon zmdi zmdi-apps zmdi-hc-lg"></i>
                            <span class="menu-text">Apps</span>
                            <span class="label label-info menu-label">2</span>
                            <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('topbar.calendar') }}"><span class="menu-text">Calendar</span></a>
                            </li>
                            <li><a href="{{ route('topbar.contacts') }}"><span class="menu-text">Contacts</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-separator">
                        <hr>
                    </li>

                    <li>
                        <a href="{{ route('topbar.documentation') }}">
                            <i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg"></i>
                            <span class="menu-text">Documentation</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
                            <span class="menu-text">Settings</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon zmdi zmdi-language-javascript zmdi-hc-lg"></i>
                            <span class="menu-text">Angular Version</span>
                        </a>
                    </li>
                </ul><!-- .app-menu -->
            </div><!-- .menubar-scroll-inner -->
        </div><!-- .menubar-scroll -->
    </aside>
    <!--========== END app aside -->

    <!-- navbar search -->
    <div id="navbar-search" class="navbar-search collapse">
        <div class="navbar-search-inner">
            <form action="#">
                <span class="search-icon"><i class="fa fa-search"></i></span>
                <input class="search-field" type="search" placeholder="search..." />
            </form>
            <button type="button" class="search-close" data-toggle="collapse" data-target="#navbar-search"
                aria-expanded="false">
                <i class="fa fa-close"></i>
            </button>
        </div>
        <div class="navbar-search-backdrop" data-toggle="collapse" data-target="#navbar-search"
            aria-expanded="false"></div>
    </div><!-- .navbar-search -->

    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    {{-- Donut Chart --}}
                    <div class="col-md-6">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Donut Chart</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div data-plugin="plot"
                                    data-options="
                                    [
                                        { label: 'Windows 7', data: 48.77, color: 'rgb(11, 98, 164)' },
                                        { label: 'Windows xp', data: 27.69, color: 'rgb(57, 128, 181)' },
                                        { label: 'Windows 8', data: 6.41, color: 'rgb(103, 157, 198)' },
                                        { label: 'windows 8.1', data: 4.89, color: '#ffa000' },
                                        { label: 'Mac OS X', data: 3.75, color: '#e64a19' },
                                        { label: 'Windows Vista', data: 2.99, color: '#4caf50' },
                                        { label: 'Linux', data: 1.49, color: '#edf0f5' },
                                        { label: 'Others', data: 4.01, color: '#303f9f' }
                                    ],
                                    {
                                        series: {
                                            pie: { show: true, innerRadius: .5 }
                                        },
                                        legend: { show: true },
                                        grid: { hoverable: true },
                                        tooltip: {
                                            show: true,
                                            content: '%s %p.0%',
                                            defaultTheme: true
                                        }
                                    }"
                                    style="height: 300px;width: 100%;">
                                </div>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->


                    {{-- Map --}}
                    <div class="col-md-6 col-sm-6">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Vietnam Map</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div id="africa-map" data-plugin="vectorMap"
                                    data-options="
							{
								map: 'africa_mill',
								backgroundColor: '#ffffff',
								regionsSelectable: true,
								regionStyle: {
									initial: { fill: '#3498db', 'fill-opacity': 1, stroke: 'none', 'stroke-width': 0, 'stroke-opacity': 1 },
									hover: { 'fill-opacity': 0.8, cursor: 'pointer' },
									selected: { fill: '#2980b9' },
								}
							}"
                                    style="width: 100%; height: 300px;">
                                </div>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                    {{-- <div class="col-md-5">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Records</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body row">
                                <div class="col-xs-4">
                                    <div class="text-center p-h-md" style="border-right: 2px solid #eee">
                                        <h2 class="fz-xl fw-400 m-0" data-plugin="counterUp">26</h2>
                                    </div>
                                </div><!-- END column -->
                                <div class="col-xs-4">
                                    <div class="text-center p-h-md" style="border-right: 2px solid #eee">
                                        <h2 class="fz-xl fw-400 m-0" data-plugin="counterUp">75</h2>
                                    </div>
                                </div><!-- END column -->
                                <div class="col-xs-4">
                                    <div class="text-center p-h-md">
                                        <h2 class="fz-xl fw-400 m-0" data-plugin="counterUp">32</h2>
                                    </div>
                                </div><!-- END column -->
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->

                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Connect Point</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="icon icon-circle m-0 m-r-md b-0 primary text-white"
                                            style="width: 90px; height: 90px; line-height: 90px;">
                                            <i class="fa fa-2x fa-internet-explorer"></i>
                                        </div>
                                    </div>
                                    <div class="media-body p-b-md p-t-xs">
                                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Nesciunt quaerat repellendus est, voluptate cupiditate, iusto!</p>
                                    </div>
                                </div><!-- .media -->
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column --> --}}
                </div><!-- .row -->

                <div class="row">
                    {{-- <div class="col-md-6 col-sm-6">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Streams</h4>
                            </header>
                            <hr class="widget-separator" />
                            <div class="widget-body">
                                <div class="streamline m-l-lg">
                                    <div class="sl-item p-b-md">
                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive" src="../assets/images/221.jpg"
                                                alt="avatar" />
                                        </div><!-- .avatar -->
                                        <div class="sl-content m-l-xl">
                                            <h5 class="m-t-0"><a href="javascript:void(0)"
                                                    class="m-r-xs theme-color">John Doe</a><small
                                                    class="text-muted fz-sm">last month</small></h5>
                                            <p>John has just started working on the project</p>
                                        </div>
                                    </div><!-- .sl-item -->

                                    <div class="sl-item p-b-md">
                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive" src="../assets/images/214.jpg"
                                                alt="avatar" />
                                        </div><!-- .avatar -->
                                        <div class="sl-content m-l-xl">
                                            <h5 class="m-t-0"><a href="javascript:void(0)"
                                                    class="m-r-xs theme-color">Jane Doe</a><small
                                                    class="text-muted fz-sm">last month</small></h5>
                                            <p>Jane sent you invitation to attend the party</p>
                                        </div>
                                    </div><!-- .sl-item -->

                                    <div class="sl-item p-b-md">
                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive" src="../assets/images/217.jpg"
                                                alt="avatar" />
                                        </div><!-- .avatar -->
                                        <div class="sl-content m-l-xl">
                                            <h5 class="m-t-0"><a href="javascript:void(0)"
                                                    class="m-r-xs theme-color">Sally Mala</a><small
                                                    class="text-muted fz-sm">last month</small></h5>
                                            <p>Sally added you to her circles</p>
                                        </div>
                                    </div><!-- .sl-item -->

                                    <div class="sl-item p-b-md">
                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive" src="../assets/images/211.jpg"
                                                alt="avatar" />
                                        </div><!-- .avatar -->
                                        <div class="sl-content m-l-xl">
                                            <h5 class="m-t-0"><a href="javascript:void(0)"
                                                    class="m-r-xs theme-color">Sara Adams</a><small
                                                    class="text-muted fz-sm">last month</small></h5>
                                            <p>Sara has finished her task</p>
                                        </div>
                                    </div><!-- .sl-item -->
                                    <div class="sl-item p-b-md">
                                        <div class="sl-avatar avatar avatar-sm avatar-circle">
                                            <img class="img-responsive" src="../assets/images/214.jpg"
                                                alt="avatar" />
                                        </div><!-- .avatar -->
                                        <div class="sl-content m-l-xl">
                                            <h5 class="m-t-0"><a href="javascript:void(0)"
                                                    class="m-r-xs theme-color">Sandy Doe</a><small
                                                    class="text-muted fz-sm">last month</small></h5>
                                            <p>Sara has finished her task</p>
                                        </div>
                                    </div><!-- .sl-item -->
                                </div><!-- .streamline -->
                            </div>
                        </div><!-- .widget -->
                    </div><!-- END column --> --}}

                    {{-- Chart 1 --}}
                    <div class="col-md-12">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Stacked Bars</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div data-plugin="chart"
                                    data-options="{
                              tooltip : {
                                  trigger: 'axis',
                                  axisPointer : {
                                      type : 'shadow'
                                  }
                              },
                              legend: {
                                  data:['Interview', 'Marketing','Advertising','Video Ads','search engine','Baidu','Google','Ask','Other']
                              },
                              grid: {
                                  left: '3%',
                                  right: '4%',
                                  bottom: '3%',
                                  containLabel: true
                              },
                              xAxis : [
                                  {
                                      type : 'category',
                                      data: ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']
                                  }
                              ],
                              yAxis : [
                                  {
                                      type : 'value'
                                  }
                              ],
                              series : [
                                  {
                                      name:'Interview',
                                      type:'bar',
                                      data:[320, 332, 301, 334, 390, 330, 320]
                                  },
                                  {
                                      name:'Marketing',
                                      type:'bar',
                                      stack: 'advertising',
                                      data:[120, 132, 101, 134, 90, 230, 210]
                                  },
                                  {
                                      name:'ads',
                                      type:'bar',
                                      stack: 'advertising',
                                      data:[220, 182, 191, 234, 290, 330, 310]
                                  },
                                  {
                                      name:'Video Ads',
                                      type:'bar',
                                      stack: 'advertising',
                                      data:[150, 232, 201, 154, 190, 330, 410]
                                  },
                                  {
                                      name:'search engine',
                                      type:'bar',
                                      data:[862, 1018, 964, 1026, 1679, 1600, 1570],
                                      markLine : {
                                          lineStyle: {
                                              normal: {
                                                  type: 'dashed'
                                              }
                                          },
                                          data : [
                                              [{type : 'min'}, {type : 'max'}]
                                          ]
                                      }
                                  },
                                  {
                                      name:'Baidu',
                                      type:'bar',
                                      barWidth : 5,
                                      stack: 'search engine',
                                      data:[620, 732, 701, 734, 1090, 1130, 1120]
                                  },
                                  {
                                      name:'Google',
                                      type:'bar',
                                      stack: 'search engine',
                                      data:[120, 132, 101, 134, 290, 230, 220]
                                  },
                                  {
                                      name:'Ask',
                                      type:'bar',
                                      stack: 'search engine',
                                      data:[60, 72, 71, 74, 190, 130, 110]
                                  },
                                  {
                                      name:'Other',
                                      type:'bar',
                                      stack: 'search engine',
                                      data:[62, 82, 91, 84, 109, 110, 120]
                                  }
                              ]
                            }"
                                    style="height:450px">
                                </div>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->

                </div><!-- .row-->


                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Thông Báo Mời Thầu</h4>
                                <div class="search-table">
                                    <!-- Thanh tìm kiếm -->
                                    <div class="search-bar">
                                        <input type="text" id="searchInput" placeholder="Tìm kiếm...">
                                        <button id="searchButton">Tìm</button>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        Hiển thị:
                                        <select id="pageSizeSelect">
                                            <option value="10" @if ($pageSize == 10) selected @endif>10
                                            </option>
                                            <option value="20" @if ($pageSize == 20) selected @endif>20
                                            </option>
                                            <option value="50" @if ($pageSize == 50) selected @endif>50
                                            </option>
                                            <option value="100" @if ($pageSize == 100) selected @endif>
                                                100
                                            </option>
                                        </select>
                                        dòng trên mỗi trang
                                    </div>
                                </div>

                            </header>
                            <hr class="widget-separator" />
                            <div class="widget-body">
                                <div class="table-responsive">

                                    <table class="table no-cellborder custom-table">
                                        <thead>
                                            <tr>
                                                <th>Mã TBMT</th>
                                                <th>Tên gói thầu</th>
                                                <th>Lĩnh vực</th>
                                                <th>Trạng thái</th>
                                                <th>Tỉnh thành</th>
                                                <th>Giá gói thầu</th>
                                                <th>Thời gian thực hiện</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td class="text-info">{{ $item['MaTBMT'] }}</td>
                                                    <td>{{ $item['TenGoiThau'] }}</td>
                                                    <td>{{ $item['LinhVuc'] }}</td>
                                                    <td><span class="label label-info">{{ $item['TrangThai'] }}</span>
                                                    </td>
                                                    <td>{{ $item['TinhThanh'] }}</td>
                                                    <td>{{ $item['GiaGoiThau'] }}</td>
                                                    <td>{{ $item['ThoiGianThucHien'] }}</td>
                                                    <td><a href="{{ $item['Link'] }}">Xem chi tiết</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <center>
                                        <div class="d-flex justify-content-between">
                                            <!-- Liên kết trở về trang đầu tiên -->
                                            @if ($data->currentPage() > 1)
                                                <a href="{{ $data->url(1) }}">Trang đầu</a>
                                            @endif

                                            <!-- Hiển thị danh sách các trang 2, 3, ... -->
                                            @if ($data->lastPage() > 1)
                                                <ul class="pagination">
                                                    @for ($i = max(1, $data->currentPage() - 2); $i <= min($data->currentPage() + 2, $data->lastPage()); $i++)
                                                        @if ($data->currentPage() == $i)
                                                            <li class="page-item active"><span
                                                                    class="page-link">{{ $i }}</span></li>
                                                        @else
                                                            <li class="page-item"><a class="page-link"
                                                                    href="{{ $data->url($i) }}">{{ $i }}</a>
                                                            </li>
                                                        @endif
                                                    @endfor
                                                </ul>
                                            @endif

                                            <!-- Liên kết tới trang cuối cùng -->
                                            @if ($data->currentPage() < $data->lastPage())
                                                <a href="{{ $data->url($data->lastPage()) }}">Trang cuối</a>
                                            @endif
                                        </div>
                                    </center>
                                    <script>
                                        var pageSizeFromSession = {{ session('pageSize', 10) }};
                                    </script>
                                </div>
                            </div>
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div><!-- .row-->
            </section><!-- .app-content -->
        </div><!-- .wrap -->
        <!-- APP FOOTER -->
        <div class="wrap p-t-0">
            <footer class="app-footer">
                <div class="clearfix">
                    <ul class="footer-menu pull-right">
                        <li><a href="javascript:void(0)">Careers</a></li>
                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        <li><a href="javascript:void(0)">Feedback <i class="fa fa-angle-up m-l-md"></i></a></li>
                    </ul>
                    <div class="copyright pull-left">Copyright RaThemes 2016 &copy;</div>
                </div>
            </footer>
        </div>
        <!-- /#app-footer -->
    </main>
    <!--========== END app main -->

    <!-- APP CUSTOMIZER -->
    <div id="app-customizer" class="app-customizer">
        <a href="javascript:void(0)" class="app-customizer-toggle theme-color" hidden = "hidden" data-toggle="class"
            data-class="open" data-active="false" data-target="#app-customizer">
            <i class="fa fa-gear"></i>
        </a>
        <div class="customizer-tabs">
            <!-- tabs list -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#menubar-customizer"
                        aria-controls="menubar-customizer" role="tab" data-toggle="tab">Menubar</a></li>
                <li role="presentation"><a href="#navbar-customizer" aria-controls="navbar-customizer"
                        role="tab" data-toggle="tab">Navbar</a></li>
            </ul><!-- .nav-tabs -->

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active fade" id="menubar-customizer">
                    <div class="hidden-menubar-top hidden-float">
                        <div class="m-b-0">
                            <label for="menubar-fold-switch">Fold Menubar</label>
                            <div class="pull-right">
                                <input id="menubar-fold-switch" type="checkbox" data-switchery data-size="small" />
                            </div>
                        </div>
                        <hr class="m-h-md">
                    </div>
                    <div class="radio radio-default m-b-md">
                        <input type="radio" id="menubar-light-theme" name="menubar-theme"
                            data-toggle="menubar-theme" data-theme="light">
                        <label for="menubar-light-theme">Light</label>
                    </div>

                    <div class="radio radio-inverse m-b-md">
                        <input type="radio" id="menubar-dark-theme" name="menubar-theme"
                            data-toggle="menubar-theme" data-theme="dark">
                        <label for="menubar-dark-theme">Dark</label>
                    </div>
                </div><!-- .tab-pane -->
                <div role="tabpanel" class="tab-pane fade" id="navbar-customizer">
                    <!-- This Section is populated Automatically By javascript -->
                </div><!-- .tab-pane -->
            </div>
        </div><!-- .customizer-taps -->
        <hr class="m-0">
        <div class="customizer-reset">
            <button id="customizer-reset-btn" class="btn btn-block btn-outline btn-primary">Reset</button>
            <a href="https://themeforest.net/item/infinity-responsive-web-app-kit/16230780"
                class="m-t-sm btn btn-block btn-danger">Buy Now</a>
        </div>
    </div><!-- #app-customizer -->

    <!-- SIDE PANEL -->
    <div id="side-panel" class="side-panel">
        <div class="panel-header">
            <h4 class="panel-title">Friends</h4>
        </div>
        <div class="scrollable-container">
            <div class="media-group">
                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/221.jpg" alt="">
                                <i class="status status-online"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">John Doe</h5>
                            <small class="media-meta">active now</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/205.jpg" alt="">
                                <i class="status status-online"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">John Doe</h5>
                            <small class="media-meta">active now</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/206.jpg" alt="">
                                <i class="status status-online"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Adam Kiti</h5>
                            <small class="media-meta">active now</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/207.jpg" alt="">
                                <i class="status status-away"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Jane Doe</h5>
                            <small class="media-meta">away</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/208.jpg" alt="">
                                <i class="status status-away"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Sara Adams</h5>
                            <small class="media-meta">away</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/209.jpg" alt="">
                                <i class="status status-away"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Smith Doe</h5>
                            <small class="media-meta">away</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/219.jpg" alt="">
                                <i class="status status-away"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Dana Dyab</h5>
                            <small class="media-meta">away</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/210.jpg" alt="">
                                <i class="status status-offline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Jeffry Way</h5>
                            <small class="media-meta">2 hours ago</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/211.jpg" alt="">
                                <i class="status status-offline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Jane Doe</h5>
                            <small class="media-meta">5 hours ago</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/212.jpg" alt="">
                                <i class="status status-offline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Adam Khoury</h5>
                            <small class="media-meta">22 minutes ago</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/207.jpg" alt="">
                                <i class="status status-offline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Sara Smith</h5>
                            <small class="media-meta">2 days ago</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->

                <a href="javascript:void(0)" class="media-group-item">
                    <div class="media">
                        <div class="media-left">
                            <div class="avatar avatar-xs avatar-circle">
                                <img src="../assets/images/211.jpg" alt="">
                                <i class="status status-offline"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading">Donia Dyab</h5>
                            <small class="media-meta">3 days ago</small>
                        </div>
                    </div>
                </a><!-- .media-group-item -->
            </div>
        </div><!-- .scrollable-container -->
    </div><!-- /#side-panel -->

    <!-- build:js ../assets/js/core.min.js -->
    <script src="../libs/bower/jquery/dist/jquery.js"></script>
    <script src="../libs/bower/jquery-ui/jquery-ui.min.js"></script>
    <script src="../libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="../libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
    <script src="../libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../libs/bower/PACE/pace.min.js"></script>
    <!-- endbuild -->

    <!-- build:js ../assets/js/app.min.js -->
    <script src="../assets/js/library.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/app.js"></script>
    <!-- endbuild -->
    <script src="../libs/bower/moment/moment.js"></script>
    <script src="../libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../assets/js/fullcalendar.js"></script>
    <script src="../assets/js/table.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fuse.js@6.4.6"></script>
</body>

</html>
