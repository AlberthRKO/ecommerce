<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Control de productos NIVELGAS">
    <meta name="keywords" content="Template by Alberth Paredes">
    <meta name="author" content="Alberth Paredes">
    <title>NIVELGAS</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-user.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/data-list-view.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

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
                <li class="nav-item mr-auto"><a class="navbar-brand" href="admin.html">
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
                <li class=" nav-item"><a href="home"><i class="feather icon-home"></i><span
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
                <li class=" nav-item active"><a href="productos"><i class="feather icon-layers"></i><span
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
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-thumb-view" class="data-thumb-view-header">
                    
                    <!-- dataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-thumb-view">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>NOMBRE</th>
                                    <th>CATEGORIA</th>
                                    <th>ESTADO</th>
                                    <th>PRECIO</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $productos as $producto )
                                    <tr>
                                        <td>{{ $producto->id }}</td>
                                        <td class="product-img"><img src="{{ asset('storage').'/'.$producto->image }}" alt="Img producto">
                                        </td>
                                        <td class="product-name">{{ $producto->name }}</td>
                                        <td class="product-category">{{ $producto->category == '1' ? 'Aire' : ($producto->category == '2' ? 'Gas' : 'Calefacción') }}</td>
                                        <td>
                                            <div class="chip chip-warning {{ $producto->status == '1' ? 'chip-success' : ($producto->status == '2' ? 'chip-warning' : 'chip-danger')}}">
                                                <div class="chip-body">
                                                    <div class="chip-text">{{ $producto->status == '1' ? 'En Stock' : ($producto->status == '2' ? 'Agotado' : 'Deshabilitado') }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-price">{{ $producto->price }}</td>
                                        <td class="product-action">
                                            <div class="d-flex justify-content-center align-items-center">

                                                <a href="{{ url('/productos/'.$producto->id.'/editProducto')}}"><i class= 'text-primary feather icon-edit'></i></a>
    
                                                {{-- //borrar producto --}}
                                                <form action="{{ url('/productos/'.$producto->id)}}" method="post">
                                                    @csrf
                                                    {{-- cambiamos de metodo post a delete --}}
                                                    {{ method_field('DELETE')}}
                                                    <button type="submit" onclick="return confirm('Borrar?')" class="border-0"><i class= 'users-delete-icon text-danger feather icon-trash-2'></i></button>
                                                    
                                                    
    
                                                </form>
                                            </div>
                                            {{-- <a href='#' data-toggle='modal' data-target="#eliminarProducto"><i class= 'users-delete-icon text-danger feather icon-trash-2'></i></a> --}}

                                                    <!-- Modal -->
                                                    
                                        </td>
                                    </tr>
                                    <div class="modal fade text-left" id="eliminarProducto" tabindex="-1"
                                    role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger white">
                                                    <h5 class="modal-title" id="myModalLabel160">Eliminar
                                                        Producto</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="text-center">¿Estás seguro que desea eliminar el
                                                        producto?</h5>
                                                    
                                                    <button type="button" id="SubForm" class="btn btn-danger btnBorrar">aaa</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                                
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- dataTable ends -->

                    {{-- <div class="modal fade text-left" id="editarProducto" tabindex="-1"
                    role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger white">
                                    <h5 class="modal-title" id="myModalLabel160">Eliminar
                                        Producto</h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    @include('form')
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">Producto</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <form action="{{ url('/productos') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="data-items pb-3">
                                    <div class="data-fields px-2 mt-3">
                                        <div class="row">
                                            <div class="col-sm-12 data-field-col">
                                                <label for="name">Nombre</label>
                                                <input type="text" name="name" class="form-control" id="name">
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="category"> Categoria </label>
                                                <select class="form-control" name="category" id="category">
                                                    <option value="1">Aire</option>
                                                    <option value="2">Gas</option>
                                                    <option value="3">Calefacción</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="status">Estado</label>
                                                <select class="form-control" name="status" id="status">
                                                    <option value="1">En Stock</option>
                                                    <option value="2">Agotado</option>
                                                    <option value="3">Deshabilitado</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="price">Precio</label>
                                                <input type="number" class="form-control" name="price" id="price">
                                            </div>
                                            <div class="col-sm-12 data-field-col data-list-upload">
                                                <input type="file" name="image" id="image">
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="description">Descripción</label>
                                                <textarea name="description" rows="3" class="form-control" id="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                    <div class="add-data-btn">
                                        <button type="submit" class="btn btn-primary">Agregar Producto</button>
                                    </div>
                                    <div class="cancel-data-btn">
                                        <button class="btn btn-outline-danger">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

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
    <script src="app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/ui/data-list-view.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>