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
	<link rel="icon" type="image/png" href="pagina/images/icons/favicon.png">

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
	<link rel="stylesheet" type="text/css" href="pagina/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="pagina/vendor/animate/animate.min.css">

	<!-- Plugins CSS File -->
	<link rel="stylesheet" type="text/css" href="pagina/vendor/magnific-popup/magnific-popup.min.css">
	<link rel="stylesheet" type="text/css" href="pagina/vendor/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="pagina/vendor/nouislider/nouislider.min.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" type="text/css" href="pagina/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="pagina/css/responsive.css">

	<style>

		.product-cat a:hover {
			color: #fff !important;
		}
		.product.shadow-media {
			background: #fff !important;
		}
		.product-cat a {
			background: #DE2131 !important;
			color: #fff !important;
			padding: 5px 7px;
			font-size: 12px;
			display: block;
			text-align: center;
		}
		.shop-page-reting{
			color: #FFC601 !important;
		}
		.product-price {
			font-size: 21px;
		}
		.rating-reviews{
			color: #000 !important;
		}
		/* .product img {
			height: 200px;
			width: 126px;
		} */
		.last-content-details h3{
			font-size: 24px;
		}
/*.first-product-style .product img {
    height: auto !important;
    width: 70% !important;
    }*/
    .product.shadow-media {
    	box-shadow: 0px 0px 17px -2px rgba(184,177,177,0.75);
    	-webkit-box-shadow: 0px 0px 17px -2px rgba(184,177,177,0.75);
    	-moz-box-shadow: 0px 0px 17px -2px rgba(184,177,177,0.75);
    	padding: 14px;
    	margin-top: 5px;
    }
    .first-product-style {
    	padding-top: 78px !important;
    	padding-bottom: 0px !important;
    }
    .filter-actions, .toolbox, .toolbox-left, .toolbox-right, .toolbox-item, .toolbox-item-full {
    	display: block !important;
    }
    .toolbox {
    	background-color: transparent; 
    }
    .sidebar-content {
    	background-color: transparent; 
    }
    .sidebar-toggle-remain.sidebar .toggle-remain::before {
    	background-color: transparent;
    }
    .product-wrap {
    	margin-bottom: 1rem;

    }
</style>

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
						<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarCollapse">
							<div class="navbar-nav">

							</div>
							<div class="navbar-nav ml-auto">
								<a href="/" class="nav-item nav-link active">Home</a>
								<a href="formulario.html" class="nav-item nav-link">formulario</a>
								<a href="shop" class="nav-item nav-link">Shop</a>
								<a href="product.html" class="nav-item nav-link" >Product</a>
								<a href="blogger" class="nav-item nav-link" >blog</a>
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
			<main class="main" style="background: #F7F7F7;padding-top: 30px;s">
			<!-- <div class="page-header bg-dark"
				style="background-image: url('pagina/images/shop/page-header-back.jpg'); background-color: #3C63A4;">
				<h3 class="page-subtitle">Categories</h3>
				<h1 class="page-title">Grid 4 Columns</h1>
				<ul class="breadcrumb">
					<li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
					<li><a href="shop.html">Categories</a></li>
					<li>Grid 4 Columns</li>
				</ul>
			</div> -->
			<!-- End PageHeader -->
			<div class="page-content mb-10">
				<div class="container">
					<div class="row main-content-wrap gutter-lg">
						<aside
						class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper">
						<div class="sidebar-overlay">
							<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
						</div>
						<div class="sidebar-content">
							<div class="sticky-sidebar" data-sticky-options="{'top': 10}">
									<!-- <div class="filter-actions">
										<a href="#"
											class="sidebar-toggle-btn toggle-remain btn btn-sm btn-outline btn-primary">Filters<i
												class="d-icon-arrow-left"></i></a>
										<a href="#" class="filter-clean text-primary">Clean All</a>
									</div> -->
									<div class="widget widget-collapsible">
										<h3 class="widget-title">All Categories</h3>
										<ul class="widget-body filter-items search-ul">
											<li><a href="#">Bags</a></li>
											<li><a href="#">Sport Shorts</a></li>
											<li class="with-ul show">
												<a href="#">Clothing</a>
												<ul style="display: block">
													<li><a href="#">Summer sale</a></li>
													<li><a href="#">Shirts</a></li>
													<li><a href="#">Trunks</a></li>
												</ul>
											</li>
											<li><a href="#">Shoes</a></li>
											<li class="with-ul">
												<a href="#">Sweaters</a>
												<ul>
													<li><a href="#">T-Shirts</a></li>
													<li><a href="#">Dress</a></li>
													<li><a href="#">Blouse</a></li>
												</ul>
											</li>
											<li class="with-ul">
												<a href="#">Uncategorized</a>
												<ul>
													<li><a href="#">Trousers</a></li>
													<li><a href="#">Jacket</a></li>
													<li><a href="#">Caps</a></li>
												</ul>
											</li>
											<li class="with-ul">
												<a href="#">Women</a>
												<ul>
													<li><a href="#">Summer sales</a></li>
													<li><a href="#">Shirts</a></li>
													<li><a href="#">Trunks</a></li>
												</ul>
											</li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Price</h3>
										<div class="widget-body">
											<form action="#">
												<div class="filter-price-slider"></div>

												<div class="filter-actions">
													<button type="submit" class="btn btn-sm btn-primary">Filter</button>

													<div class="filter-price-text">Price:
														<span class="filter-price-range"></span>
													</div>
												</div>
											</form><!-- End Filter Price Form -->
										</div>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Size</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Small<span>(2)</span></a></li>
											<li><a href="#">Medium<span>(1)</span></a></li>
											<li><a href="#">Large<span>(9)</span></a></li>
											<li><a href="#">Extra Large<span>(1)</span></a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Color</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Black<span>(2)</span></a></li>
											<li><a href="#">Blue<span>(1)</span></a></li>
											<li><a href="#">Green<span>(9)</span></a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Brands</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Black<span>(2)</span></a></li>
											<li><a href="#">Blue<span>(1)</span></a></li>
											<li><a href="#">Green<span>(9)</span></a></li>
										</ul>
									</div>
									<!-- End Widget Products -->
								</div>
							</div>
						</aside>
						<div class="col-lg-9 main-content">

							{{-- <div class="row">
								<div class="col-md-6">
									<div class="first-product">
										<div class="product-wrap product-wrap-overlay-sty">
											<div class="product shadow-media first-product-style">
												<figure class="">
													<a href="">
														<img class="center" src="pagina/images/pro-items.png" alt="product" width="280" height="315">
													</a>
												</figure>
												<div class="product-details" style="padding-left: 10px !important;padding-top: 80px;">
													<div class="fst-product-cat">
														<a href="shop-grid-3col.html">Envío gratis online</a>
													</div>
													<h3 class="product-name" style="padding-top:22px;font-size: 16px;">
														<a href="product.html">Caldera de condensación de gas natural SAUNIER
														DUVAL Thelia 25</a>
													</h3>
													<div style="padding-top: 10px;" class="">
														<div class="shop-page-reting">
															<span><i class="fa fa-star" aria-hidden="true"></i>
																<i class="fa fa-star" aria-hidden="true"></i>
																<i class="fa fa-star" aria-hidden="true"></i>
																<i class="fa fa-star" aria-hidden="true"></i>
																<i class="fa fa-star" aria-hidden="true"></i><a href="product.html" class="rating-reviews">(6)</a>
															</span>
														</div>

													</div>
													<div class="product-price" style="padding-top: 10px;">
														<ins class="new-price">1.499,00 €</ins>
													</div>
												</div>
											</div>
											<div class="product-wrap-overlay">
												<div class="overlay-p text-center">
													<p class="ov1">
														Lorum epsum is a dummy text lorum
													</p>
													<p class="ov2">
														Lorum epsum is a dummy text lorum
													</p>
													<a class="ov3" href="#">More Information</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="product-wrap product-wrap-overlay-sty">
										<div class="product shadow-media">
											<figure class="">
												<a href="">
													<img class="center" src="pagina/images/pro-items.png" alt="product" width="280" height="315">
												</a>
											</figure>
											<div class="product-details">
												<div class="product-cat">
													<a href="shop-grid-3col.html">Envío gratis online</a>
												</div>
												<h3 class="product-srt-name">
													<a href="product.html">Caldera de condensación 
														de gas natural SAUNIER
													DUVAL Thelia 25</a>
												</h3>
												<div class="">
													<div class="shop-page-reting">
														<span><i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i><a href="product.html" class="rating-reviews">(13)</a>
														</span>
													</div>

												</div>
												<div class="product-price">
													<ins class="new-price">1.499,00 €</ins>
												</div>
											</div>
										</div>

										<div class="product-wrap-overlay">
											<div class="overlay-p text-center">
												<p class="ov1">
													Lorum epsum is a dummy text lorum
												</p>
												<p class="ov2">
													Lorum epsum is a dummy text lorum
												</p>
												<a class="ov3" href="#">More Information</a>
											</div>
										</div>

									</div>
									<div class="product-wrap product-wrap-overlay-sty">
										<div class="product shadow-media">
											<figure class="">
												<a href="">
													<img class="center" src="pagina/images/pro-items.png" alt="product" width="280" height="315">
												</a>
											</figure>
											<div class="product-details">
												<div class="product-cat">
													<a href="shop-grid-3col.html">Envío gratis online</a>
												</div>
												<h3 class="product-srt-name">
													<a href="product.html">Caldera de condensación 
														de gas natural SAUNIER
													DUVAL Thelia 25</a>
												</h3>
												<div class="">
													<div class="shop-page-reting">
														<span><i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i><a href="product.html" class="rating-reviews">(13)</a>
														</span>
													</div>

												</div>
												<div class="product-price">
													<ins class="new-price">1.499,00 €</ins>
												</div>
											</div>
										</div>

										<div class="product-wrap-overlay">
											<div class="overlay-p text-center">
												<p class="ov1">
													Lorum epsum is a dummy text lorum
												</p>
												<p class="ov2">
													Lorum epsum is a dummy text lorum
												</p>
												<a class="ov3" href="#">More Information</a>
											</div>
										</div>

									</div>

									
								</div>
								<div class="col-md-3">
									
									<div class="product-wrap product-wrap-overlay-sty">
										<div class="product shadow-media">
											<figure class="">
												<a href="">
													<img class="center" src="pagina/images/pro-items.png" alt="product" width="280" height="315">
												</a>
											</figure>
											<div class="product-details">
												<div class="product-cat">
													<a href="shop-grid-3col.html">Envío gratis online</a>
												</div>
												<h3 class="product-srt-name">
													<a href="product.html">Caldera de condensación 
														de gas natural SAUNIER
													DUVAL Thelia 25</a>
												</h3>
												<div class="">
													<div class="shop-page-reting">
														<span><i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i><a href="product.html" class="rating-reviews">(13)</a>
														</span>
													</div>

												</div>
												<div class="product-price">
													<ins class="new-price">1.499,00 €</ins>
												</div>
											</div>
										</div>

										<div class="product-wrap-overlay">
											<div class="overlay-p text-center">
												<p class="ov1">
													Lorum epsum is a dummy text lorum
												</p>
												<p class="ov2">
													Lorum epsum is a dummy text lorum
												</p>
												<a class="ov3" href="#">More Information</a>
											</div>
										</div>

									</div>
									<div class="product-wrap product-wrap-overlay-sty">
										<div class="product shadow-media">
											<figure class="">
												<a href="">
													<img class="center" src="pagina/images/pro-items.png" alt="product" width="280" height="315">
												</a>
											</figure>
											<div class="product-details">
												<div class="product-cat">
													<a href="shop-grid-3col.html">Envío gratis online</a>
												</div>
												<h3 class="product-srt-name">
													<a href="product.html">Caldera de condensación 
														de gas natural SAUNIER
													DUVAL Thelia 25</a>
												</h3>
												<div class="">
													<div class="shop-page-reting">
														<span><i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i><a href="product.html" class="rating-reviews">(13)</a>
														</span>
													</div>

												</div>
												<div class="product-price">
													<ins class="new-price">1.499,00 €</ins>
												</div>
											</div>
										</div>

										<div class="product-wrap-overlay">
											<div class="overlay-p text-center">
												<p class="ov1">
													Lorum epsum is a dummy text lorum
												</p>
												<p class="ov2">
													Lorum epsum is a dummy text lorum
												</p>
												<a class="ov3" href="#">More Information</a>
											</div>
										</div>

									</div>
								</div>
							</div> --}}
							<div class="row cols-sm-3 cols-md-4 product-wrapper">

								@foreach ($productos as $producto)
									<div class="product-wrap product-wrap-overlay-sty">
										<div class="product shadow-media">
											<img src="{{ asset('storage').'/'.$producto->image }}" class="img-fluid" alt="">
											<div class="product-details">
												<div class="product-cat">
													<a href="shop-grid-3col.html">Envío gratis online</a>
												</div>
												<h3 class="product-srt-name mb-0">
													<a href="product.html">{{$producto->name}}</a>
												</h3>
												<span class="badge badge-pill badge-primary mb-2">{{ $producto->category == '1' ? 'Aire' : ($producto->category == '2' ? 'Gas' : 'Calefacción') }}</span>
												<div class="">
													<div class="shop-page-reting">
														<span><i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i>
															<i class="fa fa-star" aria-hidden="true"></i><a href="product.html" class="rating-reviews">(13)</a>
														</span>
													</div>
													
												</div>
												<div class="product-price">
													<ins class="new-price">{{ $producto->price }} €</ins>
												</div>
											</div>
										</div>

										<div class="product-wrap-overlay">
											<div class="overlay-p text-center">
												<p class="ov1">
													{{$producto->name}}
												</p>
												{{-- <p class="ov2">
													{{$producto->description}}
												</p> --}}
												<a class="ov3" href="{{ url('/shop/'.$producto->id.'/ver-producto')}}">Más Información</a>
											</div>
										</div>

									</div>
								@endforeach

								

								
							</div>
							<nav class="toolbox toolbox-pagination">
								<ul class="pagination">
									<li class="page-item"><a  href="#">1</a></li>
									<li class="page-item"><a  href="#">2</a></li>
									<li class="page-item"><a  href="#">3</a></li>
									<li class="page-item"><a  href="#">4</a></li>
									<li class="page-item"><a  href="#">5</a></li>
									<li class="page-item"><a  href="#">6</a></li>
									<li class="page-item"><a  href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>

								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="cont-box" style="background: #fff;margin-top: 25px;padding: 10px 100px;">
						<h4>Cómo elegir calderas de gas</h4>
						<p>En LEROY MERLIN dispones de calderas de las mejores marcas y para todo tipo de combustible: gas natural, gasóleo, butano o propano. Incluso las hay aptas para instalaciones solares o que
						funcionan con pellets. Aprende cómo elegir calderas y ahorra en calefacción y agua caliente con los modelos más eficientes. Escógelo online o en tu tienda.</p>
					</div>
				</div>
				<div class="container-fluid">
					<div class="last-content">
						<div class="row">
							<div class="col-md-4">
								<div class="last-content-box">
									<div class="row">
										<div class="col-md-2">
											<img src="pagina/images/sp/sp1.png">
										</div>
										<div class="col-md-10">
											<div class="last-content-details">
												<h3>Lorum epsum</h3>
												<p>101 Products</p>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="last-content-box">
									<div class="row">
										<div class="col-md-2">
											<img src="pagina/images/sp/sp2.png">
										</div>
										<div class="col-md-10">
											<div class="last-content-details">
												<h3>Lorum epsum</h3>
												<p>101 Products</p>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="last-content-box">
									<div class="row">
										<div class="col-md-2">
											<img src="pagina/images/sp/sp3.png">
										</div>
										<div class="col-md-10">
											<div class="last-content-details">
												<h3>Lorum epsum</h3>
												<p>101 Products</p>
											</div>
										</div>
									</div>
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
								<a href="#"><p>Lorem ipsum</p></a>
								<a href="#"><p>Lorem ipsum</p></a>
								<a href="#"><p>Lorem ipsum</p></a>
								<a href="#"><p>Lorem ipsum</p></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="last-section text-center">
								<p class="footer-title">Lorem ipsum dolor</p>
								<a href="#"><p>Lorem ipsum</p></a>
								<a href="#"><p>Lorem ipsum</p></a>
								<a href="#"><p>Lorem ipsum</p></a>
								<a href="#"><p>Lorem ipsum</p></a>
								<a href=""><span class="footer-btn-style"><i class="fa fa-plus-circle" aria-hidden="true"></i>Lorem ipsum dolor</span></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="last-section text-center">
								<p class="footer-title">Lorem ipsum dolor</p>
								<a href="#"><p>Lorem ipsum</p></a>
								<a href="#"><p>Lorem ipsum</p></a>
								<a href="#"><p>Lorem ipsum</p></a>
								<a href=""><span class="footer-btn-style"><i class="fa fa-plus-circle" aria-hidden="true"></i>Lorem ipsum dolor</span></a>
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
	<script src="pagina/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="pagina/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
	<script src="pagina/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="pagina/vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="pagina/vendor/nouislider/nouislider.min.js"></script>
	<!-- Main JS File -->
	<script src="pagina/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>