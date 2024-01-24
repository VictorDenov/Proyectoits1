<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>JDV Restaurante y Banquete</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="images/LOGJDV.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">


	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>

<body>
	<header class="">
		<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="pagina2.php">Pedidos</a></li>
						<li class="nav-item"><a class="nav-link" href="banquet.php">Banquetes</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contactenos</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>


	<div id="slides" class="cover-slides">
    <div class="slides-container">
        <div class="slide text-left">
            <img src="images/s1.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenidos a <br> JDV Restaurant</strong></h1>
                        <p class="m-b-40">Premium Restaurante & Servicios de Banquete. <br>
                            ¡Reserve ya su pedido!</p>
                        <p><a class="btn btn-lg btn-outline-secondary" href="#services">Orden Nueva</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide text-left">
            <img src="images/s2.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenido a <br> JDV Restaurant</strong></h1>
                        <p class="m-b-40">Premium Restaurante & Servicios de Banquete. <br>
                            ¡Reserve ya su pedido!</p>
                        <p><a class="btn btn-lg btn-outline-secondary" href="pagina2.php">Orden Nueva</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide text-left">
            <img src="images/s3.png" alt="">
            <div class="container">
                <div class="row" style="color:black;">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenido a <br> JDV Restaurant</strong></h1>
                        <p class="m-b-40">Premium Restaurante & Servicios de Banquete. <br>
                            ¡Reserve ya su pedido!</p>
                        <p><a class="btn btn-lg btn-outline-secondary" href="banquet.php">Orden nueva</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>


	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Bienvenidos <span>JDV RESTAURANT</span></h1>
						<p>JDV Restauarant es un referente en sabor e higiene. Ofrecemos comida de la mejor calidad con servicios de primera.
							También ofrecemos un servicio de comida para llevar. JDV Banquet es el lugar perfecto para todas sus funciones. ¡Ahora reservar su banquete en línea y celebrar la función fuera de línea!</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#services">Reserve un pedido ahora</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" style="padding-left : 130px">
					<img src="images/p2.jpg" alt="" class="img-fluid" height="82%" width="82%">
				</div>
			</div>
		</div>
	</div>

	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						La mejor comida. Mejores Servicios. Mejor Sala de Banquetes.</p>
					<span class="lead">JDV Restaurant & Banquet</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->

	<!-- Start Menu -->
	<div class="menu-box" id="menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu</h2>
						<p>Eche un vistazo a nuestros especiales y deliciosos platos de comida.</p>
					</div>
				</div>
			</div>

			<div class="row inner-menu-box">

				<div class="col-12">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								<?php
								require 'db.php';

								$ex = mysqli_query($conn, "select * from categoria where id_categoria = 1");
								while ($r = mysqli_fetch_array($ex)) {
								?>
									<div class="col-lg-4 col-md-6 special-grid drinks">
										<a href="takeaway.php">
											<div class="gallery-single fix">
												<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
												<div class="why-text">
													<h4><?php echo $r['name'];  ?></h4>
													<h5>
														<?php
														$cid = $r['id_categoria'];
														$q1 = mysqli_query($con, "select * from menu where tipo= $cid");
														while ($r1 = mysqli_fetch_array($q1)) {
															echo $r1['Nombrem'] . "<br>";
														}
														?></h5>
												</div>
											</div>
										</a>
									</div>
								<?php
								}
								?>
								<?php
								require 'db.php';

								$ex = mysqli_query($con, "select * from categoria where id_categoria = 3");
								while ($r = mysqli_fetch_array($ex)) {
								?>
									<div class="col-lg-4 col-md-6 special-grid drinks">
										<a href="takeaway.php">
											<div class="gallery-single fix">
												<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
												<div class="why-text">
													<h4><?php echo $r['name'];  ?></h4>
													<h5>
														<?php
														$cid = $r['id_categoria'];
														$q1 = mysqli_query($con, "select * from menu where tipo= $cid");
														while ($r1 = mysqli_fetch_array($q1)) {
															echo $r1['name'] . "<br>";
														}
														?></h5>
												</div>
											</div>
										</a>
									</div>
								<?php
								}
								?>
								<?php
								require 'db.php';

								$ex = mysqli_query($con, "select * from categoria where id_categoria = 5");
								while ($r = mysqli_fetch_array($ex)) {
								?>
									<div class="col-lg-4 col-md-6 special-grid drinks">
										<a href="takeaway.php">
											<div class="gallery-single fix">
												<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
												<div class="why-text">
													<h4><?php echo $r['name'];  ?></h4>
													<h5>
														<?php
														$cid = $r['cid'];
														$q1 = mysqli_query($con, "select * from menu where type= $cid");
														while ($r1 = mysqli_fetch_array($q1)) {
															echo $r1['name'] . "<br>";
														}
														?></h5>
												</div>
											</div>
										</a>
									</div>
								<?php
								}
								?>
							</div>
							<div class="row">
								<?php
								require 'db.php';

								$ex = mysqli_query($con, "select * from categoria where id_categoria = 7");
								while ($r = mysqli_fetch_array($ex)) {
								?>
									<div class="col-lg-4 col-md-6 special-grid drinks">
										<a href="takeaway.php">
											<div class="gallery-single fix">
												<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
												<div class="why-text">
													<h4><?php echo $r['name'];  ?></h4>
													<h5>
														<?php
														$cid = $r['cid'];
														$q1 = mysqli_query($con, "select * from menu where type= $cid");
														while ($r1 = mysqli_fetch_array($q1)) {
															echo $r1['name'] . "<br>";
														}
														?></h5>
												</div>
											</div>
										</a>
									</div>
								<?php
								}
								?>
								<?php
								require 'db.php';

								$ex = mysqli_query($con, "select * from categoria where id_categoria = 8");
								while ($r = mysqli_fetch_array($ex)) {
								?>
									<div class="col-lg-4 col-md-6 special-grid drinks">
										<a href="takeaway.php">
											<div class="gallery-single fix">
												<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
												<div class="why-text">
													<h4><?php echo $r['name'];  ?></h4>
													<h5>
														<?php
														$cid = $r['cid'];
														$q1 = mysqli_query($con, "select * from menu where type= $cid");
														while ($r1 = mysqli_fetch_array($q1)) {
															echo $r1['name'] . "<br>";
														}
														?></h5>
												</div>
											</div>
										</a>
									</div>
								<?php
								}
								?>
								<?php
								require 'db.php';

								$ex = mysqli_query($con, "select * from categoria where id_categoria = 20");
								while ($r = mysqli_fetch_array($ex)) {
								?>
									<div class="col-lg-4 col-md-6 special-grid drinks">
										<a href="takeaway.php">
											<div class="gallery-single fix">
												<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
												<div class="why-text">
													<h4><?php echo $r['name'];  ?></h4>
													<h5>
														<?php
														$cid = $r['cid'];
														$q1 = mysqli_query($con, "select * from menu where type= $cid");
														while ($r1 = mysqli_fetch_array($q1)) {
															echo $r1['name'] . "<br>";
														}
														?></h5>
												</div>
											</div>
										</a>
									</div>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
	<!-- End Menu -->

	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Galeria</h2>
						<p>Platos y diseños de banquetes de un vistazo.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 style="color:#b13476"> <b><u>Platos de comida </b></u></h2>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-01.jpg">
							<img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-02.jpg">
							<img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-03.jpg">
							<img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 style="color:#b13476"> <b><u>Diseños de banquetes </b></u></h2>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="plan_image/Rs. 10000.jpeg">
							<img class="img-fluid" style="height: 12%;" src="plan_image/Rs. 10000.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="plan_image/Rs. 8000.jpeg">
							<img class="img-fluid" style="height: 12%;" src="plan_image/Rs. 8000.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="plan_image/Rs. 21000.jpeg">
							<img class="img-fluid" src="plan_image/Rs. 21000.jpeg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>


		</div>
	</div>
	<!-- End Gallery -->


	<!-- Start Services -->
	<div id="services">
		<div class="container-fluid p-5" style="background-color:#dcdcdc; border-top:3px solid #b13476; border-bottom:3px solid #b13476;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading-title text-center">
							<h2>Nuestros Servicios </h2>
							<h2 style="color : #b13476">Pedidos para llevar y salón de banquetes</h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 text-center" style="border-right:2px solid black">
						<div class="inner-column" style="text-align: center;">
							<p>Servicio de Pedidos para Llevar disponible en nuestro restaurante. </p>
							<a class="btn btn-lg btn-circle btn-outline-new-white" href="pagina2.php">Orden nueva</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 text-center">
						<div class="inner-column" style="text-align: center;">
							<p>Atractivo Salón de Banquetes para todas sus ceremonias. </p>
							<a class="btn btn-lg btn-circle btn-outline-new-white" href="banquet.php">Reserve ahora</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Services -->

	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Opiniones de los clientes</h2>
						<p>Valiosas reseñas de nuestros valiosos clientes.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Ravindra Patel</strong></h5>
								<!--<h6 class="text-dark m-0">Senior Technician</h6>-->
								<p class="m-0 pt-3">Realmente buenos servicios y buenos platos de comida. De hecho, este es mi restaurante favorito de todos los tiempos.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Jatin Patel</strong></h5>
								<!--<h6 class="text-dark m-0">Business Man</h6>-->
								<p class="m-0 pt-3">La decoración del banquete era muy atractiva. El menú de la comida y otros servicios eran muy apreciables; y a un precio razonable.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Kishan</strong></h5>
								<!--<h6 class="text-dark m-0">Professor</h6>-->
								<p class="m-0 pt-3">JDV Restaurant es nuestro restaurante familiar. Muy buenos platos y sabor. Gestión muy fascinante.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Anterior</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Siguiente</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Telefono</h4>
						<p class="lead">
							84690 00683, &nbsp;
							81281 41047
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							restaurantjvd@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Localización</h4>
						<p class="lead">
							JDV Restaurant, Ecuador, Chimborazo, Riobamba.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<h3>GESTIONADO POR</h3>
					<p>
						<img src="./images/logoits.png" height="80px" width="80px" style="border-radius:12px">
						<span style="padding:8px">'Instituto Superior Riobamba' Instituto </span>
					</p>
					<ul style="padding:10px">
						<li style="color:white"> Restaurante </li>
						<li style="color:white"> Banquetes </li>
						<li style="color:white"> JDV reservas </li>
						<li style="color:white"> Instituto Superior Riobamba </li>

				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Contactos de Informacion</h3>
					<p class="lead">JDV Restaurant, Lican, Riobamba, Calles, cañaris 3800</p>
					<p class="lead"><a href="tel:8469000683">84690 00683,</a> &nbsp;<a href="tel:8128141047">81281 41047</a></p>
					<p><a href="#"> restaurantjdv@gmail.com</a></p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Horario del banquete:</span> 8AM to 7PM</p>
					<p><span class="text-color">Restaurante (Llevar) : </span> 10:30AM - 3:30PM, 7PM - 11PM</p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">Derechos reservados. &copy; 2024 <a href="./index.php">&nbsp;JDV Restaurant & Banquet</a> <br>Managed By 'J The Vision' Group <br>Developed By <a href="https://thewebmate.in" target="_blank">Webmate Web Services</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>

	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>
