<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from d-themes.com/html/donald/product-featured.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 19:33:29 GMT -->
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
	<link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/photoswipe/photoswipe.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('pagina/vendor/photoswipe/default-skin/default-skin.min.css')}}">

	<!-- Main CSS File -->
	<link rel="stylesheet" type="text/css" href="{{ asset('pagina/css/style.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('pagina/css/responsive.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('pagina/css/estilos.css')}}">
	<style>
		.product.shadow-media:hover .product-media {
	box-shadow: none !important;
}
.product-bg-style .product-details {
     padding: 1px; 
}
.productname{
	color: #330909;
	font-size: 12px;
}
	
	.product-price .new-price {
		font-size: 26px;
	}
	.related-product-section .productname {
	 padding-right: 0px !important; 	
	}	
	.related-product-section .product-details {
	position: relative;
	padding-top: 1.8rem;
	padding-bottom: 0px !important;
}
.form-control {
	border: none !important;
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
		<main class="main mt-4">
			<div class="page-content mb-10">
				<div class="container">

					<div class="bootcamb">
						<p class="bootcamp-text text-uppercase"> {{ $producto->category == '1' ? 'Aire' : ($producto->category == '2' ? 'Gas' : 'Calefacción') }} > {{$producto->name}} </p>
					</div>
					<div class="product product-single row mb-4">
						<div class="col-md-6">
							<div class="product-gallery pg-vertical">
								<div class="product-label-group">
									<label class="product-label label-new">new</label>
									<label class="product-label label-sale">27% off</label>
								</div>
								<div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">
									
									<img src="{{ asset('storage').'/'.$producto->image }}" class="img-fluid" alt="">
									
								</div>
								<div class="product-thumbs-wrap">
									<div class="product-thumbs">
										<div class="product-thumb active">
											<img class="img-fluid" src="{{ asset('storage').'/'.$producto->image }}" alt="product thumbnail">
										</div>
										
									</div>
									<button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
									<button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="product-details product-details-style">
								<div class="singel-product-top-link">
									<ul>
										<li class="left-btn-style">ENVÍO GRATIS ONLINE
											</li>
										{{-- <li class="right-btn-style">Comparar</li> --}}
									</ul>
								</div>

								<h1 class="product-name">{{$producto->name}}
								</h1>
								<div class="ratings-container">
									<div>
										<span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										</span>
									</div>
									<a href="#product-tab-reviews" class="link-to-tab rating-reviews">(13) Opinions</a>
								</div>
								<div class="product-price">
									<ins class="new-price">{{$producto->price}} €
									</ins><!-- <del class="old-price">$230.00</del> -->
								</div>
								<div class="btn-ref">
									<p>Ref: {{$producto->id}}</p>
								</div>
								<div class="btn-type-1">
									<p><img src="{{ asset('pagina/images/delivery.png')}}">
									Envío a domicilio</span> GRATIS en 7 días *</p>
								</div>
								{{-- <div class="btn-type-1 btn-type-2">
									<ul>

										<li><span><i class="fas fa-map-marker-alt"></i></span></li>
										<li><p><span>Envío a domicilio </span> GRATIS en 7 días *</p>
									<p><span>Envío a domicilio </span> GRATIS en 7 días *</p></li>
									</ul>
								</div> --}}
								<div class="product-pric-box">
									<div class="row">
										<div class="col-md-6 col-6">
											<input class=" product-qty form-control" value="1" type="number" min="1" max="1000000">											
										</div>
										<div class="col-md-6 col-6">
											<p class="product-pric">{{$producto->price}} €</p>
										</div>
									</div>
								</div>

											
								<div class="product-footer text-center py-3">
									<a href="https://wa.me/59167981983?text=Me%20interesa%20el%20articulo%20{{$producto->name}}%20con%20el%20costo%20de%20{{$producto->price}}" class="btn-1 text-center">Realizar Pedido</a>
									{{-- <p class="btn-2"></p> --}}
								</div>
								<p class="product-short-name mt-2">Hasta 100 días para devolverlo.</p>
								<p class="product-short-desc">Si tu dirección de envío es fuera del territorio nacional peninsular, el plazo de entrega definitivo se concretará durante el proceso de compra. Solo para compras en tienda online antes de las 18h..</p>
							</div>
						</div>
					</div>

					

					{{-- <section class="related-product-section" style="margin-bottom: 30px;margin-top: 30px;">
						<div class="">
							
						<div class="content-title">
						<h2>Quizás te pueda interesar
</h2>
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
									'items': 5,
									'dots': false,
									'nav': true
								}
							}
						}">
							<div class="product">
								<div class="product-bg-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/p/p5.jpg')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">Ahorro de energía</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Caldera de condensación de
											gas propano VAILLANT
											ECOTEC PLUS VMW 306</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">1.499,00€
													</ins>
									</div>
								</div>
							</div>
							</div>
							<div class="product">
								<div class="product-bg-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/p/p5.jpg')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">Ahorro de energía</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Caldera de condensación de
											gas propano VAILLANT
											ECOTEC PLUS VMW 306</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">1.499,00€
													</ins>
									</div>
								</div>
							</div>
							</div>
							<div class="product">
								<div class="product-bg-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/p/p5.jpg')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">Ahorro de energía</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Caldera de condensación de
											gas propano VAILLANT
											ECOTEC PLUS VMW 306</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">1.499,00€
													</ins>
									</div>
								</div>
							</div>
							</div>
							<div class="product">
								<div class="product-bg-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/p/p5.jpg')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">Ahorro de energía</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Caldera de condensación de
											gas propano VAILLANT
											ECOTEC PLUS VMW 306</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">1.499,00€
													</ins>
									</div>
								</div>
							</div>
							</div>
							<div class="product">
								<div class="product-bg-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/p/p5.jpg')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">Ahorro de energía</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Caldera de condensación de
											gas propano VAILLANT
											ECOTEC PLUS VMW 306</a>
									</h3>
									<div class="product-price">
										<ins class="new-price">1.499,00€
													</ins>
									</div>
								</div>
							</div>
							</div>
							
						</section> --}}

						<section style="margin-bottom: 30px;margin-top: 30px;">
								<div class="content-title">
								<h2>DESCRIPCIÓN	</h2>
							</div>
						<div class="container">
							<div class="row">
								<div class="product-description">
									<p>{{ $producto->description}}</p>
								</div>
							</div>
						</div>
					</section>
{{-- 
					<section class="similer-product-section" style="margin-bottom: 30px;margin-top: 30px;">
						<div class="container">
							
						<div class="content-title">
						<h2>Simeler Product</h2>
						</div>
						<div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4"
							data-owl-options="{
							'items': 5,
							'nav': true,
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
									'items': 5,
									'dots': false,
									'nav': true
								}
							}
						}">
							<div class="product">
								<div class="sim-product-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/product-two.png')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">categories</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Women's Fashion Summer Dress</a>
									</h3>
									<div class="sim-product-price">
										<p class="new-price">$89.2</p>
										<p class="old-price">$886786789.2</p>
									</div>
								</div>
							 </div>
							</div>
							<div class="product">
								<div class="sim-product-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/product-two.png')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">categories</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Women's Fashion Summer Dress</a>
									</h3>
									<div class="sim-product-price">
										<p class="new-price">$89.2</p>
										<p class="old-price">$7878789.2</p>
									</div>
								</div>
							 </div>
							</div>
							<div class="product">
								<div class="sim-product-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/product-two.png')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">categories</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Women's Fashion Summer Dress</a>
									</h3>
									<div class="sim-product-price">
										<p class="new-price">$89.2</p>
										<p class="old-price">$887879.2</p>
									</div>
								</div>
							 </div>
							</div>
							<div class="product">
								<div class="sim-product-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/product-two.png')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">categories</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Women's Fashion Summer Dress</a>
									</h3>
									<div class="sim-product-price">
										<p class="new-price">$89.2</p>
										<p class="old-price">$8787879.2</p>
									</div>
								</div>
							 </div>
							</div>
							<div class="product">
								<div class="sim-product-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/product-two.png')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">categories</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Women's Fashion Summer Dress</a>
									</h3>
									<div class="sim-product-price">
										<p class="new-price">$89.2</p>
										<p class="old-price">$845459.2</p>
									</div>
								</div>
							 </div>
							</div>	
							<div class="product">
								<div class="sim-product-style">
									<figure class="product-media">
									<a href="product.html">
										<img class="center" src="{{ asset('pagina/images/product-two.png')}}" alt="product">
									</a>
								</figure>
								<div class="product-details">
									<div class="product-cat">
										<a href="shop-grid-3col.html">categories</a>
									</div>
									<h3 class="productname">
										<a href="product.html">Women's Fashion Summer Dress</a>
									</h3>
									<div class="sim-product-price">
										<p class="new-price">$89.2</p>
										<p class="old-price">$8944545.2</p>
									</div>
								</div>
							 </div>
							</div>
						</section> --}}
		</div>
					<section class="tecnical-section" style="margin-bottom: 30px;margin-top: 30px;">
						<div class="content-title">
							<h2>Ficha tecnical</h2>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="tecnical-box">
									<ul>
										<li style="float: left;">Lorem Ipsum is simply dummy text</li>
										<li style="float: right;padding-right: 15px;">text</li>
									</ul>
								</div>
								<div class="tecnical-box">
									<ul>
										<li style="float: left;">Lorem Ipsum is simply dummy text</li>
										<li style="float: right;padding-right: 15px;">text</li>
									</ul>
								</div>
								<div class="tecnical-box">
									<ul>
										<li style="float: left;">Lorem Ipsum is simply dummy text</li>
										<li style="float: right;padding-right: 15px;">text</li>
									</ul>
								</div>
								<div class="tecnical-box">
									<ul>
										<li style="float: left;">Lorem Ipsum is simply dummy text</li>
										<li style="float: right;padding-right: 15px;">text</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="tecnical-box">
									<ul>
										<li style="float: left;">Lorem Ipsum is simply dummy text</li>
										<li style="float: right;padding-right: 15px;">text</li>
									</ul>
								</div>
								<div class="tecnical-box">
									<ul>
										<li style="float: left;">Lorem Ipsum is simply dummy text</li>
										<li style="float: right;padding-right: 15px;">text</li>
									</ul>
								</div>
								<div class="tecnical-box">
									<ul>
										<li style="float: left;">Lorem Ipsum is simply dummy text</li>
										<li style="float: right;padding-right: 15px;">text</li>
									</ul>
								</div>
								<div class="tecnical-box">
									<ul>
										<li style="float: left;">Lorem Ipsum is simply dummy text</li>
										<li style="float: right;padding-right: 15px;">text</li>
									</ul>
								</div>
							</div>
						</div>
						<a class="" style="color: #93BB72;float: right;margin-right: 50px;font-size: 21px;" href="#">Lorem</a>
					</section>
		<div class="container">

					<section style="margin-bottom: 30px;margin-top: 30px;">
						<div class="content-title">
							<h2>opinion</h2>
						</div>
						<div class="review-star-box-space">
							<div class="review-star-box">
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<img class="img-fluid center" src="{{ asset('storage').'/'.$producto->image }}">
									</div>
									<div class="col-md-4">
										<div class="review-star-reting">
											<p>product name</p>
											<h1>4,6</h1>
											<p><span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></p>
											<p><span> De 13 opinion</span></p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="review-reting-starts">
											<p><span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span><span class="revirew-per">9(92.2%)</span></p>

											<p><span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span><i class="fa fa-star" aria-hidden="true"></i><span class="revirew-per">9(92.2%)</span></p>

											<p><span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><span class="revirew-per">9(92.2%)</span></p>

											<p><span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><span class="revirew-per">9(92.2%)</span></p>

											<p><span><i class="fa fa-star" aria-hidden="true"></i></span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><span class="revirew-per">9(92.2%)</span></p>
										</div>		
									</div>
								</div>
							</div>
						</div>
						</div>
					</section>

					<section>
						<div class="review-section">
							<div class="container">
								<div class="col-md-12">
									<div class="review-box">
										<div class="row">
											<div class="col-md-1 col-2">
												<div class="user-logo text-center">
													<p>M</p>
												</div>
											</div>
											<div class="col-md-11 col-10">
												<div class="user-review">
													<h5>User Name</h5>
													<p class="review-content">Lorem Ipsum is simply dummy <span class="start-style"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span> text of the printing </p>
													<p class="review-long-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
													<p class="review-time">Lorem Ipsum is simply dummy text of the</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

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
	<script src="{{ asset('pagina/vendor/sticky/sticky.min.js')}}"></script>
	<script src="{{ asset('pagina/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{ asset('pagina/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('pagina/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('pagina/vendor/elevatezoom/jquery.elevatezoom.min.js')}}"></script>
	<script src="{{ asset('pagina/vendor/photoswipe/photoswipe.min.js')}}"></script>
	<script src="{{ asset('pagina/vendor/photoswipe/photoswipe-ui-default.min.js')}}"></script>

	<!-- Main JS File -->
	<script src="{{ asset('pagina/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


<!-- Mirrored from d-themes.com/html/donald/product-featured.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 19:33:29 GMT -->
</html>