<?php require_once 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>·Tianna Negre·</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
	<!-- Owl Carousel -->
	<!-- <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="owl-carousel/owl.theme.css"> --> 
	<link rel="stylesheet" href="owl-carousel2.0/dist/assets/owl.carousel.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Meta viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.container-full-img > *, .container-full-img > * > * {
			max-height: 400px;
		}
	</style>
</head>
<body>
	<!-- News ticker -->
	<div id="cont-news" style="background-color: #291a17; display: flow-root; color: #fff;">
		<ul class="newsticker" style="height: 20px; overflow: hidden; text-align: center; list-style: none; margin: 12px 0; font-size: 16px;">
			<?php 
			// Obtiene los textos del slider
			$strTxtSld = "SELECT * FROM text_slider_top ORDER BY orden ASC";
			$qryTxtSld = mysqli_query($conexion, $strTxtSld);
			while ( $rowTxtSld = mysqli_fetch_array($qryTxtSld) ) {
				 ?>
		    	<li><?php echo $rowTxtSld['texto'] ?></li>
		    <?php } ?>
		</ul>
	</div>

	<!-- Container for full width video -->
	<div class="container-video container-menu">
		<div class="container-full-img">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<header class="headerFrente">
							<div class="no-padding-top no-padding-bottom">
								<div class="navbar-header">
								 	<button aria-controls="bs-navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-navbar" data-toggle="collapse" type="button">
								 		<span class="sr-only">Menu</span>
								 		<span class="icon-bar"></span>
								 		<span class="icon-bar"></span>
								 		<span class="icon-bar"></span>
								 	</button>
								 	<a href="index.php" class="navbar-brand"><img src="img/logo_tn.png" alt="" class="img-responsive"></a>
								</div>
								<nav style="height: 1px;" aria-expanded="false" class="navbar-collapse collapse" id="bs-navbar">
									<ul class="nav navbar-nav navbar-right">
										<li class="item-menu">
											<a href="bodegas.php">celler</a>
										</li>
										<li class="item-menu">
											<a href="vinos.php">els vins</a>
										</li>
										<li class="item-menu current">
											<a href="aceite.php">oli</a>
										</li>
										<li class="item-menu">
											<a href="imasd.php">i + d</a>
										</li>
										<li class="item-menu">
											<a href="contacto.php">visiteu-nos</a>
										</li>
									</ul>
								</nav>
							</div>
						</header>
					</div>
				</div>
			</div>
	        <?php
			// // Consulta para obtener la imagen de fondo
			// $strImgBack = "SELECT * FROM header_aceite LIMIT 1";
			// $qryImgBack = mysqli_query($conexion, $strImgBack);
			// $rowImgBack = mysqli_fetch_array($qryImgBack);

			// $imgE1 = file_get_contents('admin/img/Aceite/'.$rowImgBack['img']);
   //  		$imgData1 = base64_encode($imgE1);
   //  		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
			 ?>
	        <!-- <div id="imagenFondoBodegas" class="img-main-aceite img-back" style="background: url(data:image/jpeg;base64,<?php // echo $imgData1 ?>) no-repeat center center fixed; background-size: cover; background-position: center top;">
	        </div>
	        <div class="capa-black" style="bottom: 0px;">
	        	<h1 class="title-yellow">Aceite</h1>
	        </div> -->
		</div>
	</div>

	<div class="target-blanco">
		<div class="row main-aceite">
			<div class="col-md-8 col-md-offset-2">
				<div class="row container-sep-top">
					<div class="col-md-8 item-row-lft">
						<!-- <img src="img/aceite1.jpg" alt="" class="img-responsive img-aceite-main">
						<div class="row items-aceites">
							<div class="col-md-3 no-padding-left">
								<img src="img/aceite1.jpg" alt="" class="img-responsive">
							</div>
							<div class="col-md-3 no-padding-left">
								<img src="img/aceite1.jpg" alt="" class="img-responsive">
							</div>
							<div class="col-md-3 no-padding-left">
								<img src="img/aceite1.jpg" alt="" class="img-responsive">
							</div>
						</div> -->

						<div class="owl-carousel owl-theme">
							<?php
							// Consulta para obtener las imágenes del aceite
							$strImg = "SELECT * FROM detalles_aceite_img ORDER BY orden ASC";
							$qryImg = mysqli_query($conexion, $strImg);
							while ( $rowImg = mysqli_fetch_array($qryImg) ) {
								$imgE1 = file_get_contents('admin/img/Aceite/'.$rowImg['img']);
					    		$imgData1 = base64_encode($imgE1);
					    		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
							 ?>
								<div class="item" data-hash="det-<?php echo $rowImg['id'] ?>">
									<img class="img-responsive" src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="">
								</div>
							<?php } ?>
						</div>

						<div class="row items-aceites">
							<?php
							// Consulta para obtener el HASH de navegación
							$strAct = "SELECT * FROM detalles_aceite_img ORDER BY orden ASC";
							$qryAct = mysqli_query($conexion, $strAct);
							while ( $rowAct = mysqli_fetch_array($qryAct) ) {
								$imgE1 = file_get_contents('admin/img/Aceite/'.$rowAct['img']);
					    		$imgData1 = base64_encode($imgE1);
					    		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
							 ?>
								<div class="col-xs-3 col-sm-3 col-md-3 no-padding-left">
									<a href="#det-<?php echo $rowAct['id'] ?>">
										<img src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="" class="img-responsive">
									</a>
								</div>
							<?php } ?>
						</div>

					</div>
					<div class="col-md-4 item-row-rgt" style="padding-top: 5px;">
						<div class="contenedor-desc-aceite">
							<?php
							// Consultas para obtener los detalles del aceite
							$strAceite = "SELECT * FROM detalles_aceite LIMIT 1";
							$qryAceite = mysqli_query($conexion, $strAceite);
							$rowAceite = mysqli_fetch_array($qryAceite);
							 ?>
							<h3 class="strong titulo-desc-aceite"><?php echo $rowAceite['titulo1'] ?></h3>
							<p class="parrafo-desc-aceite"><?php echo $rowAceite['texto1'] ?></p>

							<h3 class="strong titulo-desc-aceite"><?php echo $rowAceite['titulo2'] ?></h3>
							<p class="parrafo-desc-aceite"><?php echo $rowAceite['texto2'] ?></p>

							<h3 class="strong titulo-desc-aceite"><?php echo $rowAceite['titulo3'] ?></h3>
							<p class="parrafo-desc-aceite"><?php echo $rowAceite['texto3'] ?></p>

							<h3 class="strong titulo-desc-aceite"><?php echo $rowAceite['titulo4'] ?></h3>
							<p class="parrafo-desc-aceite">0,1º de ácido Índice peróxidos: 7 meq O2/kg</p>

							<h3 class="strong titulo-desc-aceite"><?php echo $rowAceite['titulo5'] ?></h3>
							<p class="parrafo-desc-aceite"><?php echo $rowAceite['texto5'] ?></p>

							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contenedor-ovalo">
		<div class="ovalo-blanco">
			<p>El proceso</p>
		</div>
	</div>

	<div class="target-blanco">
		<div class="row procesos-aceite">
			<div class="col-md-8 col-md-offset-2">
				<div class="row item-row">
					<?php
					// Consulta para obtener los procesos del aceite
					$strProc = "SELECT * FROM procesos_aceite ORDER BY orden ASC LIMIT 4";
					$qryProc = mysqli_query($conexion, $strProc);
					while ( $rowProc = mysqli_fetch_array($qryProc) ) {
						$imgE1 = file_get_contents('admin/img/Aceite/Procesos/'.$rowProc['img']);
			    		$imgData1 = base64_encode($imgE1);
			    		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
						 ?>
						<div class="col-md-3 item-proc-aceite">
							<img src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="" class="img-responsive">
							<h4 class="strong"><?php echo $rowProc['nombre'] ?></h4>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<div class="target-negro">
		<div id="footer-contacto" class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<?php
					// Consulta para obtener los datos de contacto
					$strCnt = "SELECT * FROM seccion_contacto LIMIT 1";
					$qryCnt = mysqli_query($conexion, $strCnt);
					$rowCnt = mysqli_fetch_array($qryCnt);
					 ?>
					<div class="col-md-4">
						<h3 id="copy-footer">2017 ® Celler Tianna Negre</h3>
						<div class="icons-social-footer">
							<?php
							if ( $rowCnt['fb'] != "" ) {
								 ?>
								<a class="link-footer" href="<?php echo $rowCnt['fb'] ?>"><span class="fa fa-facebook"></span></a>
							<?php
							}
							if ( $rowCnt['tw'] != "" ) {
								 ?>
								<a class="link-footer" href="<?php echo $rowCnt['tw'] ?>"><span class="fa fa-twitter"></span></a>
							<?php
							}
							if ( $rowCnt['gp'] != "" ) {
								 ?>
								<a class="link-footer" href="<?php echo $rowCnt['gp'] ?>"><span class="fa fa-google-plus"></span></a>
							<?php
							}
							if ( $rowCnt['be'] != "" ) {
								 ?>
								<a class="link-footer" href="<?php echo $rowCnt['be'] ?>"><span class="fa fa-behance"></span></a>
							<?php
							}
							if ( $rowCnt['it'] != "" ) {
								 ?>
								<a class="link-footer" href="<?php echo $rowCnt['it'] ?>"><span class="fa fa-instagram"></span></a>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-4 col-footer col-xs-6">
						<h5 class="title-footer-menu">Menú del lloc</h5>
						<div class="row">
							<div class="col-md-6">
								<ul class="menu-footer">
									<li><a href="index.php">inici</a></li>
									<li><a href="bodegas.php">celler</a></li>
									<li><a href="vinos.php">els vins</a></li>
									<li><a href="aceite.php">oli</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="menu-footer">
									<li><a href="imasd.php">i + d</a></li>
									<li><a href="contacto.php">visiteu-nos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-footer col-xs-6">
						<h5 class="title-footer-menu">Contacte</h5>
						<div class="row">
							<div class="col-md-12">
								<ul class="menu-footer">
									<li><?php echo $rowCnt['domicilio'] ?></li>
									<li><?php echo $rowCnt['telefono'] ?></li>
									<li><?php echo $rowCnt['email'] ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="target-muy-negro">
		<div id="derechos">
			<p>© 2017 Celler Tianna Negre</p>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- <script src="owl-carousel/owl.carousel.js"></script> -->
	<script src="owl-carousel2.0/dist/owl.carousel.js"></script>

	<script src="js/jquery.newsTicker.js"></script>
	<script>
		$(document).ready(function () {
			// Inicialización news ticker
		  	$('.newsticker').newsTicker({
		  		row_height: 20,
		  		max_rows: 1,
		  		pauseOnHover: 1
		  	});
		});
	</script>

	<script>
	    $(document).ready(function() {

	    	$("#owl-main").owlCarousel({
		      	slideSpeed : 300,
		      	paginationSpeed : 400,
		      	singleItem:true
		  	});

	    	var owl = $("#owl-vinos");
  			owl.owlCarousel({
      			itemsCustom : [
        			[0, 2],
        			[450, 4],
        			[600, 4],
        			[700, 4],
        			[1000, 4],
        			[1200, 4],
        			[1400, 4],
        			[1600, 4]
      			]
  			});

	      	$("#owl-demo-nov").owlCarousel({
		      	autoPlay: 3000, //Set AutoPlay to 3 seconds
		      	items : 6,
		      	itemsDesktopSmall : [979,6]
		  	});
		  	$('.owl-carousel').owlCarousel({
                items: 1,
                loop: false,
                center: true,
                margin: 10,
                callbacks: true,
                URLhashListener: true,
                autoplayHoverPause: true,
                startPosition: 'URLHash'
            });
	    });
	</script>
</body>
</html>
