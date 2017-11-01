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
	<link rel="stylesheet" href="owl-carousel2.0/dist/assets/owl.carousel.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Meta viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@media screen and ( max-width: 780px ) {
			#columnas > .col-md-4{ padding-bottom: 40px; }
		}
		.has-arrows > .owl-nav{
			z-index: -20;
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
					<div class="col-md-8 col-md-offset-2" style="padding: 0;">
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
										<li class="item-menu current">
											<a href="bodegas.php">celler</a>
										</li>
										<li class="item-menu">
											<a href="vinos.php">els vins</a>
										</li>
										<li class="item-menu">
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
	  //       $strHead = "SELECT * FROM header_bodegas LIMIT 1";
			// $qryHead = mysqli_query($conexion, $strHead);
			// $rowHead = mysqli_fetch_array($qryHead);

			// $imgE1 = file_get_contents('admin/img/Bodegas/'.$rowHead['img']);
			// $imgData1 = base64_encode($imgE1);
			// $imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
			 ?>
	        <!-- <div id="imagenFondoBodegas" class="img-main-aceite img-back" style="background: url(data:image/jpeg;base64,<?php // echo $imgData1 ?>) no-repeat center center fixed; background-size: cover; background-position: center top;">
	        </div>
	        <div class="capa-black" style="bottom: 0px;">
	        	<h1 class="title-yellow">Bodega</h1>
	        </div> -->
		</div>
	</div>
	<!-- Sección Intro -->
	<div class="target-blanco">
		<div class="container-fluid">
			<div class="row sec-1-bodegas">
				<div class="col-md-8 col-md-offset-2 no-padding-left no-padding-right">
					<?php
					$strSec = "SELECT * FROM sec_1_bodegas LIMIT 1";
					$qrySec = mysqli_query($conexion, $strSec);
					$numSec = mysqli_num_rows($qrySec);
					if ( $numSec == 1 ) {
						$rowSec = mysqli_fetch_array($qrySec);
						 ?>
						<div class="tit-sec">
							<h3><?php echo $rowSec['titulo'] ?></h3>
							<h5><?php echo $rowSec['subtitulo'] ?></h5>
						</div>
						<div class="desc-sec">
							<div class="row">
								<div class="col-md-6 col-sm-6 no-padding-left left">
									<p><?php echo $rowSec['parrafo1'] ?></p>
								</div>
								<div class="col-md-6 col-sm-6 no-padding-right right">
									<p><?php echo $rowSec['parrafo2'] ?></p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Sección Columnas -->
	<div class="target-aqua">
		<div class="container-fluid">
			<div class="row sec-3-bodegas">
				<div class="col-md-8 col-md-offset-2 no-padding-left no-padding-right">
					<?php
					$strSec3 = "SELECT * FROM sec_3_bodegas LIMIT 1";
					$qrySec3 = mysqli_query($conexion, $strSec3);
					$numSec3 = mysqli_num_rows($qrySec3);
					if ( $numSec3 == 1 ) {
						$rowSec3 = mysqli_fetch_array($qrySec3);

						$imgE1 = file_get_contents('admin/img/Bodegas/'.$rowSec3['img_1']);
                        $imgData1 = base64_encode($imgE1);
                        $imgData1 = str_replace('dataimage/jpgbase64', '', $imgData1);

                        $imgE2 = file_get_contents('admin/img/Bodegas/'.$rowSec3['img_2']);
                        $imgData2 = base64_encode($imgE2);
                        $imgData2 = str_replace('dataimage/jpgbase64', '', $imgData2);

                        $imgE3 = file_get_contents('admin/img/Bodegas/'.$rowSec3['img_3']);
                        $imgData3 = base64_encode($imgE3);
                        $imgData3 = str_replace('dataimage/jpgbase64', '', $imgData3);
					} else {
						# code
					}
					 ?>
					<div class="tit-sec">
						<h3><?php echo $rowSec3['titulo'] ?></h3>
						<h5><?php echo $rowSec3['subtitulo'] ?></h5>
					</div>
					<div class="desc-sec">
						<div id="columnas" class="row">
							<div class="col-md-4 col-sm-4 no-padding-left left">
								<img src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="" class="img-responsive">
								<h4 class="tit-thin"><?php echo $rowSec3['ttl_1'] ?></h4>
								<p><?php echo $rowSec3['txt_1'] ?></p>
							</div>
							<div class="col-md-4 col-sm-4 middle">
								<img src="data:image/jpeg;base64,<?php echo $imgData2 ?>" alt="" class="img-responsive">
								<h4 class="tit-thin"><?php echo $rowSec3['ttl_2'] ?></h4>
								<p><?php echo $rowSec3['txt_2'] ?></p>
							</div>
							<div class="col-md-4 col-sm-4 no-padding-right right">
								<img src="data:image/jpeg;base64,<?php echo $imgData3 ?>" alt="" class="img-responsive">
								<h4 class="tit-thin"><?php echo $rowSec3['ttl_3'] ?></h4>
								<p><?php echo $rowSec3['txt_3'] ?></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Sección Galería -->
	<div class="target-blanco">
		<div class="container-fluid">
			<div class="row sec-2-bodegas">
				<div class="col-md-8 col-md-offset-2 no-padding-left no-padding-right">
					<div class="tit-sec">
						<?php
						$strSec2 = "SELECT * FROM sec_2_bodegas LIMIT 1";
						$qrySec2 = mysqli_query($conexion, $strSec2);
						$numSec2 = mysqli_num_rows($qrySec2);
						if ( $numSec2 == 1 ) {
							$rowSec2 = mysqli_fetch_array($qrySec2);
							 ?>
							<h3><?php echo $rowSec2['titulo'] ?></h3>
							<h5><?php echo $rowSec2['subtitulo'] ?></h5>
						<?php } ?>
					</div>
					<div class="desc-sec">
						<div id="galeria" class="owl-carousel has-arrows">
							<?php
							$strSec2I = "SELECT * FROM sld_2_bodegas";
							$qrySec2I = mysqli_query($conexion, $strSec2I);
							while ( $rowSec2I = mysqli_fetch_array($qrySec2I) ) {
								$imgE1 = file_get_contents('admin/img/Bodegas/'.$rowSec2I['img']);
                                $imgData1 = base64_encode($imgE1);
                                $imgData1 = str_replace('dataimage/jpgbase64', '', $imgData1);
								 ?>
								<div class="cont-slide">
									<img class="img-responsive" src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="">
								</div>
							<?php } ?>
						</div>
					</div>

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

	<!-- Inicio ventanas modales -->
	<!-- Modal -->
  	<div class="modal fade" id="modalGallery" role="dialog">
	    <div class="modal-dialog">
      		<!-- Modal content-->
      		<div class="modal-content" style="border-radius: 0;">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">galería</h4>
        		</div>
        		<div class="modal-body" style="padding: 0 30px;">
          			<div id="galeria_modal" class="owl-carousel has-arrows">
						<?php
						$strSec2I = "SELECT * FROM sld_2_bodegas";
						$qrySec2I = mysqli_query($conexion, $strSec2I);
						while ( $rowSec2I = mysqli_fetch_array($qrySec2I) ) {
							$imgE1 = file_get_contents('admin/img/Bodegas/'.$rowSec2I['img']);
                            $imgData1 = base64_encode($imgE1);
                            $imgData1 = str_replace('dataimage/jpgbase64', '', $imgData1);
							 ?>
							<div class="cont-slide">
								<img class="img-responsive center-block" src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="">
							</div>
						<?php } ?>
					</div>
        		</div>
        		<div class="modal-footer">
          			<button type="button" class="btn btn-default" data-dismiss="modal" style="border-radius: 0;">cerrar</button>
        		</div>
      		</div>
    	</div>
  	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
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

	    	// Old carrousel

	    	$("#galeria").owlCarousel({
	    		autoPlay: true,
		      	autoplayHoverPause: true,
		      	items: 4,
		      	margin: 10,
		      	nav: true,
		      	navText: ['<i class="fa fa-angle-left" aria-hidden="true" style="font-size: 28px;"></i>', '<i class="fa fa-angle-right" aria-hidden="true" style="font-size: 28px;"></i>']
		  	});

		  	$("#galeria_modal").owlCarousel({
		  		autoPlay: true,
		      	items: 1,
		      	autoPlay: true,
		      	nav: true,
		      	navText: ['<i class="fa fa-angle-left" aria-hidden="true" style="font-size: 28px;"></i>', '<i class="fa fa-angle-right" aria-hidden="true" style="font-size: 28px;"></i>']
		  	});

		  	// New carrousel


		  	$("#galeria").find(".owl-stage-outer").find(".owl-stage").find(".owl-item").click(function () {
	    		console.log("click slider");
	    		$("#modalGallery").modal();
	    	});
	    });
	</script>
</body>
</html>
