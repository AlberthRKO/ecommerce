<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Control de consumo de agua NIVELGAS">
    <meta name="keywords" content="Template by Alberth Paredes">
    <meta name="author" content="Alberth Paredes">
    <title>Nivelgas - Tienda Online</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/tether.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/shepherd-theme-default.css"> -->
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/tour/tour.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark bg-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <p class="h3 my-auto text-white">NIVELGAS</p>


                    </div>
                    <ul class="nav navbar-nav float-right my-auto">

                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                    class="ficon feather icon-maximize"></i></a></li>
                        <!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                    class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                                    data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li> -->

                        <li class="dropdown dropdown-user nav-item my-auto pt-1 pt-lg-0"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ Auth::user()->name }}</span><span class="user-status">Desarrollador Web</span></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i class="feather icon-power"></i>
                                    Salir</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="home">
                        <div class=""><img src="app-assets/images/logo.png" alt="" class="img-fluid mt-0" width="40">
                        </div>
                        <h2 class="brand-text mb-0">NIVELGAS</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>



        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item active"><a href="home"><i class="feather icon-home"></i><span
                            class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>

                {{-- <li class=" navigation-header"><span>Modulo Usuarios</span>
                </li>

                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                            data-i18n="User">Usuarios</span></a>
                    <ul class="menu-content">
                        <li><a href="registroUser.html"><i class="feather icon-disc"></i><span class="menu-item"
                                    data-i18n="registroUser">Registrar Usuario</span></a>
                        </li>
                        <li><a href="listUser.html"><i class="feather icon-disc"></i><span class="menu-item"
                                    data-i18n="ListUser">Listar Usuarios</span></a>
                        </li>
                    </ul>
                </li> --}}

                <li class=" navigation-header"><span>Modulo Productos</span>
                </li>
                <li class=" nav-item "><a href="productos"><i class="feather icon-layers"></i><span
                            class="menu-title" data-i18n="productos">Productos</span></a>
                </li>
                <li class=" navigation-header"><span>Modulo Blog</span>
                </li>
                <li class=" nav-item"><a href="blog"><i class="feather icon-file-text"></i><span
                            class="menu-title" data-i18n="productos">Blog</span></a>
                </li>

                

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <section>
                    <div class="row align-items-center">
                        

                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-header d-flex flex-column align-items-start pb-2">
                                            <div class="avatar bg-rgba-primary p-50 m-0">
                                                <div class="avatar-content">
                                                    <i class="feather icon-users text-primary font-medium-5"></i>
                                                </div>
                                            </div>
                                            <h2 class="text-bold-700 mt-1 mb-25">48</h2>
                                            <p class="mb-0">N° de Usuarios</p>
                                        </div>
                                        <!-- <div class="card-content">
                                            <img src="app-assets/images/multas.svg" alt="">
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-header d-flex flex-column align-items-start pb-2">
                                            <div class="avatar bg-rgba-warning p-50 m-0">
                                                <div class="avatar-content">
                                                    <i class="feather icon-layers text-warning font-medium-5"></i>
                                                </div>
                                            </div>
                                            <h2 class="text-bold-700 mt-1 mb-25">45</h2>
                                            <p class="mb-0">N° de Productos</p>
                                        </div>
                                        <!-- <div class="card-content">
                                            <div id="orders-received-chart"></div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-header d-flex flex-column align-items-start pb-2">
                                            <div class="avatar bg-rgba-info p-50 m-0">
                                                <div class="avatar-content">
                                                    <i class="feather icon-dollar-sign text-info font-medium-5"></i>
                                                </div>
                                            </div>
                                            <h2 class="text-bold-700 mt-1 mb-25">16</h2>
                                            <p class="mb-0">Cantidad de Ingresos</p>
                                        </div>
                                        <!-- <div class="card-content">
                                            <div id="orders-received-chart"></div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-header d-flex flex-column align-items-start pb-2">
                                            <div class="avatar bg-rgba-info p-50 m-0">
                                                <div class="avatar-content">
                                                    <i class="feather icon-dollar-sign text-dark font-medium-5"></i>
                                                </div>
                                            </div>
                                            <h2 class="text-bold-700 mt-1 mb-25">15</h2>
                                            <p class="mb-0">Cantidad de Capital</p>
                                        </div>
                                        <!-- <div class="card-content">
                                            <div id="orders-received-chart"></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>



                </section>



            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span
                class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                    class="text-bold-800 grey darken-2" href="#" target="_blank">Nivelgas - RHTC,</a>Todos los
                derechos reservados</span><span class="float-md-right d-none d-md-block">NIVELGAS<i
                    class="feather icon-droplet pink"></i></span>
            <!-- <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="feather icon-arrow-up"></i></button> -->
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/tether.min.js"></script>
    <!-- <script src="app-assets/vendors/js/extensions/shepherd.min.js"></script> -->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>