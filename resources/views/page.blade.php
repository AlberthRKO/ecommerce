<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Demo - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Demo - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="pagina/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: ['Open+Sans:300,400,600,700', 'Poppins:400,500,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="pagina/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="pagina/vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="pagina/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="pagina/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="pagina/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="pagina/vendor/photoswipe/default-skin/default-skin.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="pagina/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="pagina/css/responsive.css">

    <style>
        .product-bg-style {
            border-radius: 20px;
        }

        .related-product-section .product-bg-style img {
            height: 230px !important;
            width: 148px !important;
        }

        .product-bg-style img {
            height: 240px !important;
            width: 148px !important;
        }

        .product-bg-style {
            margin: 30px;
            padding: 30px 20px 10px 20px;
            background: #fff;
            box-shadow: 0px 0px 10px 0px rgba(138, 132, 132, 0.75);
            -webkit-box-shadow: 0px 0px 10px 0px rgba(138, 132, 132, 0.75);
            -moz-box-shadow: 0px 0px 10px 0px rgba(138, 132, 132, 0.75);
        }
    </style>
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
                        <a href="/" class="navbar-brand"><img src="pagina/images/sitelogo.png" alt=""></a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav">

                            </div>
                            <div class="navbar-nav ml-auto">
                                <a href="/" class="nav-item nav-link active">Home</a>
                                <a href="formulario.html" class="nav-item nav-link">formulario</a>
                                <a href="shop" class="nav-item nav-link">Shop</a>
                                <a href="product.html" class="nav-item nav-link">Product</a>
                                <a href="blogger" class="nav-item nav-link">blog</a>
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
        <main class="main mt-2">

            <section class="banner">
                <img class="shape5" src="pagina/images/shape/v1.png">
                <img class="shape6" src="pagina/images/shape/h1.png">
                <img class="shape1" src="pagina/images/shape/shape1.png">
                <img class="shape2" src="pagina/images/shape/shape2.png">
                <img class="shape3" src="pagina/images/shape/shape3.png">
                <img class="shape4" src="pagina/images/shape/shape4.png">


                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3">
                            <div class="">
                                <div class="banner-product">
                                    <div class="product">
                                        <div class="product-bg-style">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img class="center" src="pagina/images/p/p2.png" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="productname" style="color: #4C48CC;">
                                                    <a href="product.html">Lorem ipsum
                                                        dolor sit amet,
                                                        consectetuer...</a>
                                                </h3>
                                                <div class="product-price" style="font-size: 30px;margin-bottom: 0px;">
                                                    <ins class="new-price">499,00 €</ins>
                                                </div>
                                                <p style="margin-bottom: 0px;color:#4C48CC;font-size:18px; ">Lorem Ipsum
                                                </p>
                                                <div class="">
                                                    <div class="shop-page-reting" style="color: #FFCE00;">
                                                        <span><i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i><a
                                                                href="product.html" class="rating-reviews">(6)</a>
                                                        </span>
                                                    </div>

                                                </div>
                                                <p
                                                    style="margin-bottom: 0px;font-weight: 600; color:#5F5A6A;font-size: 15px; ">
                                                    Free Shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <div class="banner-product">
                                    <div class="product">
                                        <div class="product-bg-style">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img class="center" src="pagina/images/p/p5.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="productname" style="color: #4C48CC;">
                                                    <a href="product.html">Lorem ipsum
                                                        dolor sit amet,
                                                        consectetuer...</a>
                                                </h3>
                                                <div class="product-price" style="font-size: 30px;margin-bottom: 0px;">
                                                    <ins class="new-price">499,00 €</ins>
                                                </div>
                                                <p style="margin-bottom: 0px;color:#4C48CC;font-size:18px; ">Lorem Ipsum
                                                </p>
                                                <div class="">
                                                    <div class="shop-page-reting" style="color: #FFCE00;">
                                                        <span><i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i><a
                                                                href="product.html" class="rating-reviews">(6)</a>
                                                        </span>
                                                    </div>

                                                </div>
                                                <p
                                                    style="margin-bottom: 0px;font-weight: 600; color:#5F5A6A;font-size: 15px; ">
                                                    Free Shipping</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex align-items-center ">
                            <div class="banner-text">
                                <h2>Lorum epsum dolor sit amet, consectetuer</h2>
                                <p>Lorem ipsum dolor sit amet,<br> consectetuer adipiscing elit. Aenean </p>
                                <a class="banner-btn-style" href="#">lorem ipsum</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="moda-inteligent-section" style="background: #F8F8F8;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="moda-inteligent-left">
                                <h2>Moda
                                    <br>
                                    Intelligenta
                                </h2>
                                <span style="font-weight: 400;">Lorem ipsum dolor sit amet, consectetur</span>
                                <p>Lorem ipsum dolor sit amet, <span class="moda-inteligent-left-span">consectetur
                                        adipisicing</span> elit, sed do eiusmod</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="moda-inteligent-right">
                                <div class="moda-inteligent-top">
                                    <img class="center" src="pagina/images/s/s1.jpg">
                                    <img class="center" src="pagina/images/s/s3.jpg">
                                    <img class="center" src="pagina/images/s/s4.jpg">
                                    <img class="center" src="pagina/images/s/s5.jpg">
                                    <img class="center" src="pagina/images/s/s6.jpg">
                                </div>
                                <div class="moda-inteligent-top">
                                    <img class="center" src="pagina/images/s/s2.jpg">
                                    <img class="center" src="pagina/images/s/s7.jpg">
                                    <img class="center" src="pagina/images/s/s8.jpg">
                                    <img class="center" src="pagina/images/s/s9.jpg">
                                    <img class="center" src="pagina/images/s/s10.jpg">
                                </div>
                                <p> Lorem Ipsum has been the industry's</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="img-up-section container">
                <div class="img-up-style">
                    <div class="img-up-title text-center">
                        <h2>¿Cómo lo hacemos?</h2>
                        <p> Hacemos moda de un modo distinto</p>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="img-up-content text-center">
                                <img class="center" src="pagina/images/assest.png">
                                <h3>En la producción</h3>
                                <p>Hecha en España y Portugal, con técnicas limpias y
                                    sostenibles, a través de 14 proveedores y más de 500
                                    operarios y técnicos, reduciendo el CO2 derivado del
                                    transporte.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="img-up-content text-center">
                                <img class="center" src="pagina/images/png1.png">
                                <h3>Durante su uso</h3>
                                <p>Tras años de i+D conseguimos reducir el uso de
                                    agua, detergentes y electricidad. Nuestras
                                    prendas y su tecnología están diseñados para
                                    durar.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="img-up-content text-center">
                                <img class="center" src="pagina/images/asses4.png">
                                <h3>Al terminar su vida útil</h3>
                                <p>Son 100% reciclables. Puedes mándanosla para
                                    reciclarla cuando ya no la uses. El mismo proveedor que
                                    hace nuestro hilo le dará una segunda vida.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="img-banner-section container">
                <div class="img-banner-box">

                </div>
            </section>

            <section class="mt-3 pt-10 pb-10 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }">
                <div class="container">
                    <div class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
                        data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 20,
                            'loop': true,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 4
                                },
                                '1200': {
                                    'items': 4
                                }
                            }
                        }">
                        <figure>
                            <img src="pagina/images/g/g3.png" alt="brand" width="180" height="100" />
                            <p>"Consumo de moda más sostenible"</p>
                        </figure>
                        <figure>
                            <img src="pagina/images/g/g1.png" alt="brand" width="180" height="100" />
                            <p>"Tecnología puntera de laboratorio"</p>
                        </figure>
                        <figure>
                            <img src="pagina/images/g/g5.png" alt="brand" width="180" height="100" />
                            <p>"Prendas de ingeniería para vestir"</p>
                        </figure>
                        <figure>
                            <img src="pagina/images/g/g4.png" alt="brand" width="180" height="100" />
                            <p>"Ha llegado para quedarse"</p>
                        </figure>
                        <figure>
                            <img src="pagina/images/g/g5.png" alt="brand" width="180" height="100" />
                            <p>"Lorem Ipsum has been the industry's"</p>
                        </figure>
                        <figure>
                            <img src="pagina/images/g/g1.png" alt="brand" width="180" height="100" />
                            <p>"Lorem Ipsum has been the industry's"</p>
                        </figure>
                    </div>
                </div>
            </section>
            <div class="container">
                <section class="related-product-section midel-style" style="margin-bottom: 30px;margin-top: 30px;">
                    <div class="">

                        <div class="content-title">
                        </div>
                        <div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4"
                            data-owl-options="{
                            'items': 5,
                            'nav': false,
                            'loop': false,
                            'dots': false,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '768': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 4,
                                    'dots': false,
                                    'nav': true
                                }
                            }
                        }">
                            <div class="product">
                                <div class="product-bg-style">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img class="center" src="pagina/images/p/p1.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="productname" style="color: #4C48CC;">
                                            <a href="product.html">Caldera de condensación de gas propano ..
                                            </a>
                                        </h3>
                                        <div class="product-price" style="font-size: 25px;margin-bottom: 0px;">
                                            <ins class="new-price">499,00 €</ins>
                                        </div>
                                        <p style="margin-bottom: 0px;color:#4C48CC;font-size: 17px;">Lorum epsum</p>
                                        <div class="">
                                            <div class="shop-page-reting" style="color: #FFCE00;">
                                                <span><i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i><a href="product.html"
                                                        class="rating-reviews">(37)</a>
                                                </span>
                                            </div>

                                        </div>
                                        <p
                                            style="margin-bottom: 0px;font-weight: 600; color:#5F5A6A;font-size: 17px;  ">
                                            Free Shipping</p>
                                    </div>
                                </div>
                            </div>

                            <div class="product">
                                <div class="product-bg-style">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img class="center" src="pagina/images/p/p4.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="productname" style="color: #4C48CC;">
                                            <a href="product.html">Caldera de condensación de gas propano ..
                                            </a>
                                        </h3>
                                        <div class="product-price" style="font-size: 25px;margin-bottom: 0px;">
                                            <ins class="new-price">499,00 €</ins>
                                        </div>
                                        <p style="margin-bottom: 0px;color:#4C48CC;font-size: 17px;">Lorum epsum</p>
                                        <div class="">
                                            <div class="shop-page-reting" style="color: #FFCE00;">
                                                <span><i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i><a href="product.html"
                                                        class="rating-reviews">(37)</a>
                                                </span>
                                            </div>

                                        </div>
                                        <p
                                            style="margin-bottom: 0px;font-weight: 600; color:#5F5A6A;font-size: 17px;  ">
                                            Free Shipping</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product-bg-style">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img class="center" src="pagina/images/p/p5.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="productname" style="color: #4C48CC;">
                                            <a href="product.html">Caldera de condensación de gas propano ..
                                            </a>
                                        </h3>
                                        <div class="product-price" style="font-size: 25px;margin-bottom: 0px;">
                                            <ins class="new-price">499,00 €</ins>
                                        </div>
                                        <p style="margin-bottom: 0px;color:#4C48CC;font-size: 17px;">Lorum epsum</p>
                                        <div class="">
                                            <div class="shop-page-reting" style="color: #FFCE00;">
                                                <span><i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i><a href="product.html"
                                                        class="rating-reviews">(37)</a>
                                                </span>
                                            </div>

                                        </div>
                                        <p
                                            style="margin-bottom: 0px;font-weight: 600; color:#5F5A6A;font-size: 17px;  ">
                                            Free Shipping</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="product-bg-style">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img class="center" src="pagina/images/p/p1.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="productname" style="color: #4C48CC;">
                                            <a href="product.html">Caldera de condensación de gas propano ..
                                            </a>
                                        </h3>
                                        <div class="product-price" style="font-size: 25px;margin-bottom: 0px;">
                                            <ins class="new-price">499,00 €</ins>
                                        </div>
                                        <p style="margin-bottom: 0px;color:#4C48CC;font-size: 17px;">Lorum epsum</p>
                                        <div class="">
                                            <div class="shop-page-reting" style="color: #FFCE00;">
                                                <span><i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i><a href="product.html"
                                                        class="rating-reviews">(37)</a>
                                                </span>
                                            </div>

                                        </div>
                                        <p
                                            style="margin-bottom: 0px;font-weight: 600; color:#5F5A6A;font-size: 17px;  ">
                                            Free Shipping</p>
                                    </div>
                                </div>
                            </div>

                </section>
            </div>


            <section class="container" style="padding: 0px 30px;">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="top-fotter-section-left" style="padding: 0px 0px 60px 50px;">
                            <h2 style="color: #56595B;">lorem Ipsum</h2>
                            <p style="font-weight: 500;color: #56595B;font-size: 22px;line-height: 25px;">Lorem ipsum
                                dolor sit amet, <span style="color: #56595A;font-weight: 600;">consectetur
                                    adipisicing</span> </p>
                            <p style="font-weight: 300;color: #56595B;line-height: 25px;">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusamet, consectetur adipisicing elit, sed do
                                eiusamet, consectetur adipisicing elit, sed do eiusamet, consectetur adipisicing elit,
                                sed do eius</p>

                            <div class="per-style-div">
                                <p class="per-style">Lorem ipsum <span>98%</span> </p>
                                <p style="font-size: 13px;">lorem ipsum</p>
                                <p class="per-style-btn">lorem ipsum</p>
                                <p>lorem ipsum</p>
                                <div class="per-style-btn-two-bg">
                                    <p class="per-style-btn-two">lorem ipsum</p>
                                </div>
                            </div>

                            <div class="per-style-div">
                                <p class="per-style">Lorem ipsum <span style="">98%</span> </p>
                                <p>lorem ipsum</p>
                                <p class="per-style-btn">lorem ipsum</p>
                                <p>lorem ipsum</p>
                                <div class="per-style-btn-two-bg">
                                    <p class="per-style-btn-two">lorem ipsum</p>
                                </div>
                            </div>
                            <p class="style-four">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="top-fotter-section-right top-fotter-section-right-banner">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="f-item text-center">
                                        <img class="center" src="pagina/images/icons/i1.png">
                                        <p>10 millones de litros de agua
                                            son 4 piscinas olímpicas</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="f-item text-center">
                                        <img class="center" src="pagina/images/icons/i2.png">
                                        <p>10 millones de litros de agua
                                            son 4 piscinas olímpicas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="testi-monial" style="background: #F5F7FA;padding: 15px 0px;">
                <div class="container-fluid">
                    <div class="text-center normal-heading">
                        <h1>lorem Ipsum</h1>
                    </div>
                    <section class="related-product-section" style="margin-bottom: 30px;margin-top: 30px;">
                        <div class="">
                            <div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4"
                                data-owl-options="{
                            'items': 5,
                            'nav': false,
                            'loop': false,
                            'dots': false,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 5
                                },
                                '992': {
                                    'items': 7,
                                    'dots': false,
                                    'nav': true
                                }
                            }
                        }">
                                <div class="product review">
                                    <div class="review-box-style">
                                        <div class="home-review-star-box">
                                            <span><img src="pagina/images/stars.png"> <span class="star-img-text">ace 12
                                                    hour</span></span>
                                        </div>
                                        <p class="review-box-style-1">lorem Ipsum</p>
                                        <p class="review-box-style-2">lorem Ipsum</p>
                                        <p class="review-box-style-3">lorem Ipsum</p>

                                    </div>
                                </div>
                                <div class="product review">
                                    <div class="review-box-style">
                                        <div class="home-review-star-box">
                                            <span><img src="pagina/images/stars.png"> <span class="star-img-text">ace 12
                                                    hour</span></span>
                                        </div>
                                        <p class="review-box-style-1">lorem Ipsum</p>
                                        <p class="review-box-style-2">lorem Ipsum</p>
                                        <p class="review-box-style-3">lorem Ipsum</p>

                                    </div>
                                </div>
                                <div class="product review">
                                    <div class="review-box-style">
                                        <div class="home-review-star-box">
                                            <span><img src="pagina/images/stars.png"> <span class="star-img-text">ace 12
                                                    hour</span></span>
                                        </div>
                                        <p class="review-box-style-1">lorem Ipsum</p>
                                        <p class="review-box-style-2">lorem Ipsum</p>
                                        <p class="review-box-style-3">lorem Ipsum</p>

                                    </div>
                                </div>
                                <div class="product review">
                                    <div class="review-box-style">
                                        <div class="home-review-star-box">
                                            <span><img src="pagina/images/stars.png"> <span class="star-img-text">ace 12
                                                    hour</span></span>
                                        </div>
                                        <p class="review-box-style-1">lorem Ipsum</p>
                                        <p class="review-box-style-2">lorem Ipsum</p>
                                        <p class="review-box-style-3">lorem Ipsum</p>

                                    </div>
                                </div>
                                <div class="product review">
                                    <div class="review-box-style">
                                        <div class="home-review-star-box">
                                            <span><img src="pagina/images/stars.png"> <span class="star-img-text">ace 12
                                                    hour</span></span>
                                        </div>
                                        <p class="review-box-style-1">lorem Ipsum</p>
                                        <p class="review-box-style-2">lorem Ipsum</p>
                                        <p class="review-box-style-3">lorem Ipsum</p>

                                    </div>
                                </div>
                                <div class="product review">
                                    <div class="review-box-style">
                                        <div class="home-review-star-box">
                                            <span><img src="pagina/images/stars.png"> <span class="star-img-text">ace 12
                                                    hour</span></span>
                                        </div>
                                        <p class="review-box-style-1">lorem Ipsum</p>
                                        <p class="review-box-style-2">lorem Ipsum</p>
                                        <p class="review-box-style-3">lorem Ipsum</p>

                                    </div>
                                </div>
                                <div class="product review">
                                    <div class="review-box-style">
                                        <div class="home-review-star-box">
                                            <span><img src="pagina/images/stars.png"> <span class="star-img-text">ace 12
                                                    hour</span></span>
                                        </div>
                                        <p class="review-box-style-1">lorem Ipsum</p>
                                        <p class="review-box-style-2">lorem Ipsum</p>
                                        <p class="review-box-style-3">lorem Ipsum</p>

                                    </div>
                                </div>

                    </section>
                </div>
            </section>

            <section class="container" style="padding: 30px 30px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-fotter-section-left">
                            <h2>Lorum Epsum</h2>
                            <p class="top-fotter-section-left-fp">dummy text of the printing and type <span
                                    style="font-weight: 600;">setting industry. Lorem </span> </p>
                            <p class="top-fotter-section-left-sp">Lorem Ipsum is simply dummy orem Ipsum is simply dummy
                            </p>
                            <p class="top-fotter-section-left-p">Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-fotter-section-metion">
                            <img class="center" src="pagina/images/home-copy.png">
                            <div class="machine-a">
                                <p>Lorem Ipsum is simply
                                    dummy text of Lorem Ipsum
                                    Lorem Ipsum has been the i
                                    <span>ndustry's Lorem Ipsum</span>
                                    standard dummy text ever
                                </p>
                            </div>
                            <div class="machine-b">
                                <p>Lorem Ipsum is simply
                                    dummy text of Lorem Ipsum
                                    Lorem Ipsum has been the i
                                    <span>ndustry's Lorem Ipsum</span>
                                    standard dummy text ever
                                </p>
                            </div>
                            <div class="machine-c">
                                <p>Lorem Ipsum is simply
                                    dummy text of Lorem Ipsum
                                    Lorem Ipsum has been the i
                                    <span>ndustry's Lorem Ipsum</span>
                                    standard dummy text ever
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="footer-white-style">
                <div class="container" class="footer-style">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="last-section text-center">
                                <p class="footer-title">Lorem ipsum dolor</p>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="last-section text-center">
                                <p class="footer-title">Lorem ipsum dolor</p>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                                <a href="#"><span class="footer-btn-style"><i class="fa fa-plus-circle"
                                            aria-hidden="true"></i>Lorem ipsum dolor</span></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="last-section text-center">
                                <p class="footer-title">Lorem ipsum dolor</p>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                                <a href="#">
                                    <p>Lorem ipsum</p>
                                </a>
                                <a href="#"><span class="footer-btn-style"><i class="fa fa-plus-circle"
                                            aria-hidden="true"></i>Lorem ipsum dolor</span></a>
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
                <div class="footer-img">
                    <img src="pagina/images/f1.png">
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <!-- Sticky Footer -->

    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-angle-up"></i></a>


    <!-- Plugins JS File -->
    <script src="pagina/vendor/jquery/jquery.min.js"></script>
    <script src="pagina/vendor/sticky/sticky.min.js"></script>
    <script src="pagina/vendor/pagina/imagesloaded/pagina/imagesloaded.pkgd.min.js"></script>
    <script src="pagina/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="pagina/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="pagina/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="pagina/vendor/photoswipe/photoswipe.min.js"></script>
    <script src="pagina/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <!-- Main JS File -->
    <script src="pagina/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>