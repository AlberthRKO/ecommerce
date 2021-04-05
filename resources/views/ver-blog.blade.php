<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Nivelgas - Tienda Online</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Nivelgas - Tienda Online">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('pagina/images/icons/favicon.png')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/animate/animate.min.css')}}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/owl-carousel/owl.carousel.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('pagina/css/style.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('pagina/css/responsive.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('pagina/css/estilos.css')}}">
</head>

<body>
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
            <div class="bounce4"></div>
        </div>
    </div>
    <div class="page-wrapper">
        <section class="header-section container">
            <div class="col-md-12 col-12">
                <div class="container top-nav_menu">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a href="/" class="navbar-brand"><img src="{{ asset('pagina/images/sitelogo.png')}}" alt=""></a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="order-md-1 d-flex justify-content-around">
                            <a href="#" class="btn btn-secondary d-none d-lg-block">Pide Presupuesto</a>
                            <a href="login" class="btn btn-primary d-none d-lg-block"><i class="feather icon-user mr-2"></i> Acceder</a>

                        </div>

                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav">

                            </div>
                            <div class="navbar-nav mr-auto">
                                <a href="/" class="nav-item nav-link text-uppercase ">Home</a>
                                <a href="formulario" class="nav-item text-uppercase nav-link">Formulario</a>
                                <a href="shop" class="nav-item text-uppercase nav-link">Tienda</a>
                                <a href="blogger" class="nav-item text-uppercase nav-link">Blog</a>
                                <div class="header-search hs-toggle">
                                    <a href="#" class="search-toggle">
                                        <i class="d-icon-search"></i>
                                    </a>
                                    <form action="#" class="input-wrapper">
                                        <input type="text" class="form-control" name="search" autocomplete="off"
                                            placeholder="Busca tu producto.." required />
                                        <button class="btn btn-search" type="submit">
                                            <i class="d-icon-search"></i>
                                        </button>
                                    </form>
                                </div>

                                <div class="d-md-none">
                                    <div class="d-flex flex-column">

                                        <a href="#" class="btn btn-secondary text-white mb-2 font-weight-bold text-uppercase">Pide Presupuesto</a>
                                        <a href="login" class="btn btn-primary text-white font-weight-bold text-uppercase"><i class="feather icon-user mr-2"></i> Acceder</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </section>
        <!-- End Header -->
        <main class="main">
            
            <div class="page-content ">
                
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-titlee text-center">
                            <p class="post-linkk text-white">{{ $blog->category == '1' ? 'Fotografìa' : 'Noticia' }}</p>
                            <h3>{{$blog->name}}</h3>
                            <p class="post-sort-description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="post-body">
                            <div class="post-img d-flex just">
                                <img class="post-img img-fluid" src="{{ asset('storage').'/'.$blog->image }}">
                            </div>
                            <div class="post-cnt text-center">
                                <h5>asdfd df
                                </h5>
                                <p>{{$blog->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            </div>
            <section id="servicios" class="servicios accordion-style-4 bg-color d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mt-3">
                            <div id="accordion-4-one">
                                <div class="card estiloTarjeta">
                                    <div class="card-header bg-white text-dark pb-4 font-weight-bold"
                                        id="accordion-4-heading-1" data-toggle="collapse"
                                        data-target="#accordion-4-collapse-1" aria-expanded="false"
                                        aria-controls="accordion-4-collapse-1">
                                        Mejora tu hogar
                                    </div>
                                    <div id="accordion-4-collapse-1" class="collapse"
                                        aria-labelledby="accordion-4-heading-1" data-parent="#accordion-4-one">
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="footer-link">Inicio</a></li>
                                            <li><a href="#" class="footer-link">Misión</a></li>
                                            <li><a href="#" class="footer-link">Colección</a></li>
                                            <li><a href="#" class="footer-link">Galeria</a></li>
                                            <li><a href="#" class="footer-link">Clientes</a></li>
                                            <li><a href="#" class="footer-link">Precios</a></li>
                                            <li><a href="#" class="footer-link">Contactanos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div id="accordion-4-one">
                                <div class="card estiloTarjeta">
                                    <div class="card-header bg-white text-dark pb-4 font-weight-bold"
                                        id="accordion-4-heading-2" data-toggle="collapse"
                                        data-target="#accordion-4-collapse-2" aria-expanded="false"
                                        aria-controls="accordion-4-collapse-2">
                                        Particulares
                                    </div>
                                    <div id="accordion-4-collapse-2" class="collapse"
                                        aria-labelledby="accordion-4-heading-2" data-parent="#accordion-4-one">
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="footer-link">Inicio</a></li>
                                            <li><a href="#" class="footer-link">Misión</a></li>
                                            <li><a href="#" class="footer-link">Colección</a></li>
                                            <li><a href="#" class="footer-link">Galeria</a></li>
                                            <li><a href="#" class="footer-link">Clientes</a></li>
                                            <li><a href="#" class="footer-link">Precios</a></li>
                                            <li><a href="#" class="footer-link">Contactanos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div id="accordion-4-one">
                                <div class="card estiloTarjeta">
                                    <div class="card-header bg-white text-dark pb-4 font-weight-bold"
                                        id="accordion-4-heading-2" data-toggle="collapse"
                                        data-target="#accordion-4-collapse-2" aria-expanded="false"
                                        aria-controls="accordion-4-collapse-2">
                                        Profesionales
                                    </div>
                                    <div id="accordion-4-collapse-2" class="collapse"
                                        aria-labelledby="accordion-4-heading-2" data-parent="#accordion-4-one">
                                        <ul class="list-unstyled">
                                            <li><a href="#" class="footer-link">Inicio</a></li>
                                            <li><a href="#" class="footer-link">Misión</a></li>
                                            <li><a href="#" class="footer-link">Colección</a></li>
                                            <li><a href="#" class="footer-link">Galeria</a></li>
                                            <li><a href="#" class="footer-link">Clientes</a></li>
                                            <li><a href="#" class="footer-link">Precios</a></li>
                                            <li><a href="#" class="footer-link">Contactanos</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div id="accordion-4-one">
                                <div class="card estiloTarjeta">
                                    <div class="card-header bg-white text-dark pb-4 font-weight-bold"
                                        id="accordion-4-heading-3" data-toggle="collapse"
                                        data-target="#accordion-4-collapse-3" aria-expanded="false"
                                        aria-controls="accordion-4-collapse-3">
                                        Sobre Nivelgas
                                    </div>
                                    <div id="accordion-4-collapse-3" class="collapse"
                                        aria-labelledby="accordion-4-heading-3" data-parent="#accordion-4-one">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="footer-link">Inicio</a></li>
                                                <li><a href="#" class="footer-link">Misión</a></li>
                                                <li><a href="#" class="footer-link">Colección</a></li>
                                                <li><a href="#" class="footer-link">Galeria</a></li>
                                                <li><a href="#" class="footer-link">Clientes</a></li>
                                                <li><a href="#" class="footer-link">Precios</a></li>
                                                <li><a href="#" class="footer-link">Contactanos</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </section>

            <section class="d-none d-lg-block">
                <div class="container">
                    <div class="row estilo bordes">
        
                        <div class="d-none d-lg-block col-lg-3 text-lg-left">
                            <h5 class="font-weight-bold pb-3 text-uppercase">Mejora tu Hogar</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="footer-link">Inicio</a></li>
                                <li><a href="#" class="footer-link">Misión</a></li>
                                <li><a href="#" class="footer-link">Colección</a></li>
                                <li><a href="#" class="footer-link">Galeria</a></li>
                                <li><a href="#" class="footer-link">Clientes</a></li>
                                <li><a href="#" class="footer-link">Precios</a></li>
                                <li><a href="#" class="footer-link">Contactanos</a></li>
                            </ul>
                        </div>
                        <div class="d-none d-lg-block col-lg-3 text-lg-left">
                            <h5 class="font-weight-bold pb-3 text-uppercase">Particulares</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="footer-link">Inicio</a></li>
                                <li><a href="#" class="footer-link">Misión</a></li>
                                <li><a href="#" class="footer-link">Colección</a></li>
                                <li><a href="#" class="footer-link">Galeria</a></li>
                                <li><a href="#" class="footer-link">Clientes</a></li>
                                <li><a href="#" class="footer-link">Precios</a></li>
                                <li><a href="#" class="footer-link">Contactanos</a></li>
                            </ul>
                        </div>
                        <div class="d-none d-lg-block col-lg-3 text-lg-left">
                            <h5 class="font-weight-bold pb-3 text-uppercase">Profesionales</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="footer-link">Inicio</a></li>
                                <li><a href="#" class="footer-link">Misión</a></li>
                                <li><a href="#" class="footer-link">Colección</a></li>
                                <li><a href="#" class="footer-link">Galeria</a></li>
                                <li><a href="#" class="footer-link">Clientes</a></li>
                                <li><a href="#" class="footer-link">Precios</a></li>
                                <li><a href="#" class="footer-link">Contactanos</a></li>
                            </ul>
                        </div>
                        <div class="d-none d-lg-block col-lg-3 text-lg-left">
                            <h5 class="font-weight-bold pb-3 text-uppercase">Sobre Nivelgas</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="footer-link">Inicio</a></li>
                                <li><a href="#" class="footer-link">Misión</a></li>
                                <li><a href="#" class="footer-link">Colección</a></li>
                                <li><a href="#" class="footer-link">Galeria</a></li>
                                <li><a href="#" class="footer-link">Clientes</a></li>
                                <li><a href="#" class="footer-link">Precios</a></li>
                                <li><a href="#" class="footer-link">Contactanos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- End Main -->
        <footer>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="footer-section-style">
                            <p><span class="text-warning">©</span> CopyRight 2009-2021  terminos y condiciones de uso</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src="pagina/images/f1.png">
                    </div>
                </div>
                
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- Sticky Footer -->
    
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-angle-up"></i></a>
    <!-- Plugins JS File -->
    <script src="{{ asset('pagina/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('pagina/vendor/jquery.count-to/jquery.count-to.min.js')}}"></script>
    <script src="{{ asset('pagina/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('pagina/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('pagina/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>