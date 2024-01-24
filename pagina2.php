<?php
		session_start();
		if(isset($_SESSION['exit'])){
		    unset($_SESSION['exit']);
		}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <link rel="shortcut icon" href="images/favicon-icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>JDV Restaurante y Banquete</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="css/c-items.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
						<li class="nav-item active"><a class="nav-link" href="pedido.php">Pedido</a></li>
						<li class="nav-item"><a class="nav-link" href="banquet.php">Banquetes</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contactenos</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->


	<div style="padding:70px;">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content-wrap-1">
			    <a href="pedido.php"><i class="fa fa-utensils icon1" style="color: #b13476; border: 2px solid #b13476"></i></a>
					<a href="pedido-1.php"><i class="fa fa-cart-plus icon1" style="color: black; border: 2px solid black"></i></a>
			    <a href="pedido-2.php"><i class="fas fa-user-circle icon1" style="color: black; border: 2px solid black"></i></a>

    	</div>
		</div>
		</div>
	</div>

<?php
	require 'db.php';


	$exec = mysqli_query($conn,"select * from categoria order by name");

?>

  <!-- Products Section -->
    <section class="second-sect">
        <div class="main-section-categ">
            <div class="main-section-container">
                <div class="heading-title text-center">
                    <h1 style="margin-bottom:0px; font-size: 32px; color: #b13476">Elija la categoría de comida</h1>
										<p>Seleccione el menú que prefiera.</p>
				</div>
				
                <div class="products wow fadeInRight">
                    <?php
					    while($r = mysqli_fetch_array($exec)){
					            $cid = $r['cid'];
					           $q = mysqli_query($conn,"select count(name) from menu where tipo=$cid");
					           while($r1 = mysqli_fetch_array($q)){
				    ?>
		                    <div class="item" style="border-radius:10px; border:1px solid #b13476;">
		                        <div class="imgBx">
		                            <img style="max-width: 100%; max-height: 100%;" src="/admin/<?php echo $r['img']; ?>" />
		                        </div>
		                        <div class="cntBx">
		                            <div class="item-title" style="color : #b13476;"><?php echo $r['Nombre']; ?></div>
		                            <div class="description">
		                                <p>Total Items :  <?php echo $r1[0]; ?> </p>
		                            </div>
										<div style="padding-top:15px;">
		                                	<a class="btn btn-lg btn-circle btn-outline-new-white" style="font-size:14px; padding:10px; border-radius:8px;" href="pedido-1.php?cid=<?php echo $r['cid']; ?>">Ordenar</a>
										</div>
		                          </div>
		                    </div>
                        <?php  } } ?>
                </div>
            </div>
					</div>
    </section>


		<div style="padding:50px;" >
		</div>

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
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
							restaurantJDV@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Localizacion</h4>
						<p class="lead">
							JDV Restaurant, RIOBAMBA ECUADOR , CHIMBORAZO, RIOBAMBA.
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
					<h3>Gestionado por</h3>
					<p>
					<img src="./images/logoits.png" height="80px" width="80px" style="border-radius:12px">
					<span style="padding:8px">'Instituto Superior' Riobamba </span>
					</p>
					<ul style="padding:10px">
						<li style="color:white"> Restaurante </li>
						<li style="color:white"> Banquetes </li>
						<li style="color:white"> Reserva de salas para bodas </li>
						<li style="color:white"> Arquitecto y diseño de viviendas </li>

				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">JDV  Restaurant, Lican, Ecudor, Chimborazo, Riobamba</p>
					<p class="lead"><a href="tel:8469000683">84690 00683,</a> &nbsp;<a href="tel:8128141047">81281 41047</a></p>
					<p><a href="mailto:restaurantyajman@gmail.com"> restaurantyajman@gmail.com</a></p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Horas Abiertas</h3>
					<p><span class="text-color">Horario del banquete :</span> 8AM to 11PM</p>
					<p><span class="text-color">Restaurant (Pedido) : </span> 10:30AM - 3:30PM, 7PM - 11PM</p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">Derechos reservados. &copy; 2024 <a href="./index.php">&nbsp;JDV  Restaurant & Banquet</a> <br>Managed By 'Instituto Riobamaba' Group<br>Developed By <a href="https://thewebmate.in" target="_blank">Victor Guaraca</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->


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
