<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Donald - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Donald - Bootstrap eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('pagina/images/icons/favicon.png')}}">

    <script>
        WebFontConfig = {
            google: { families: ['Open+Sans:400,600,700', 'Poppins:400,500,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/animate/animate.min.css')}}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/owl-carousel/owl.carousel.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('pagina/css/style.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('pagina/css/responsive.css')}}">
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
                            <nav class="navbar navbar-expand-md navbar-light">
                                <a href="index.html" class="navbar-brand"><img src="{{ asset('pagina/images/sitelogo.png')}}" alt=""></a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                        
                                <div class="collapse navbar-collapse" id="navbarCollapse">
                                    <div class="navbar-nav">
                                        
                                    </div>
                                    <div class="navbar-nav ml-auto">
                                        <a href="index.html" class="nav-item nav-link active">Home</a>
                                        <a href="formulario.html" class="nav-item nav-link">formulario</a>
                                        <a href="shop.html" class="nav-item nav-link">Shop</a>
                                        <a href="product.html" class="nav-item nav-link" >Product</a>
                                        <a href="blogview.html" class="nav-item nav-link" >blog</a>
                                        <div class="header-search hs-toggle">
                                            <a href="#" class="search-toggle">
                                                <i class="d-icon-search"></i>
                                            </a>
                                            <form action="#" class="input-wrapper">
                                                <input type="text" class="form-control" name="search" autocomplete="off"
                                                    placeholder="Search your keyword..." required />
                                                <button class="btn btn-search" type="submit">
                                                    <i class="d-icon-search"></i>
                                                </button>
                                            </form>
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
                            <p class="post-linkk">{{ $blog->category == '1' ? 'Fotografìa' : 'Noticia' }}</p>
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
            <section class="footer-white-style">
                <div class="container" class="footer-style">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="last-section text-center">
                                <p class="footer-title">Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="last-section text-center">
                                <p class="footer-title">Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <span class="footer-btn-style"><i class="fa fa-plus-circle" aria-hidden="true"></i>Lorem ipsum dolor</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="last-section text-center">
                                <p class="footer-title">Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <p>Lorem ipsum dolor</p>
                                <span class="footer-btn-style"><i class="fa fa-plus-circle" aria-hidden="true"></i>Lorem ipsum dolor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- End Main -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-section-style">
                            <p> <span>Copy Right 2009-2020 </span> terms & conditions privacy policy</p>
                        </div>
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