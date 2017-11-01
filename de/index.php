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
	<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="owl-carousel/owl.theme.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Meta viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	// Consulta para obtener el video del fondo
	$strVideo = "SELECT * FROM video_inicio LIMIT 1 ";
	$qryVideo = mysqli_query($conexion, $strVideo);
	$rowVideo = mysqli_fetch_array($qryVideo);
	 ?>
	<style>
		.img-video{ display: none; }
		@media screen and ( max-width: 600px ) {
			#carousel {
	   			width: 100% !important;
	    		height: 200px !important;
	  		}
	  		#carousel img {
	    		display: hidden; /* hide images until carousel prepares them */
	    		cursor: pointer; /* not needed if you wrap carousel items in links */
				width: 70% !important;
				height: auto !important;
				margin-left: auto !important;
				margin-right: auto !important;
	  		}
		}
		@media screen and ( max-width: 500px ) {
			.img-video{ display: block; background-image: url(video/<?php echo $rowVideo['enlace'] ?>); background-size: cover; background-position: center center; z-index: 1; }
		}
		#carousel {
   			width: 100%;
    		height: 300px;
  		}
  		#carousel img {
    		display: hidden; /* hide images until carousel prepares them */
    		cursor: pointer; /* not needed if you wrap carousel items in links */
			width: 55%;
			height: auto !important;
			margin-left: auto !important;
			margin-right: auto !important;
  		}
  		#owl-main .owl-wrapper-outer { height: 100%; }
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

	<?php 
	// Switch para definir si va a ser slider o video
	$videoV = '';
	$sliderV = '';
	$videoC = '';
	$sliderC = '';
	$strSwt = "SELECT * FROM switch_header WHERE id = 1 LIMIT 1";
	$qrySwt = mysqli_query($conexion, $strSwt);
	while ( $rowSwt = mysqli_fetch_array($qrySwt) ) {
		switch ($rowSwt['tipo_header']) {
			case 1:			// ************************************ SLIDER ***************************************
				$sliderV = ' style="display: block;" ';
				$videoV = ' style="display: none;" ';
				$sliderC = ' checked="" ';
				 ?>
				<!-- Sección Header SLIDER -->
				<div class="container-video">
					<div class="container-full-img" style="height: 450px;">
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
													<li class="item-menu">
														<a href="bodegas.php">keller</a>
													</li>
													<li class="item-menu">
														<a href="vinos.php">weine</a>
													</li>
													<li class="item-menu">
														<a href="aceite.php">öl</a>
													</li>
													<li class="item-menu">
														<a href="imasd.php">i + d</a>
													</li>
													<li class="item-menu">
														<a href="contacto.php">besuch</a>
													</li>
												</ul>
											</nav> 
										</div>
									</header>
								</div>
							</div>
						</div>
				        <!-- <video id="videoFondo" preload="auto" autoplay="true" loop="loop" muted="muted" width="100%">
				        	<?php 
				        	// // Consulta para obtener el video del fondo
				        	// $strVideo = "SELECT * FROM video_inicio LIMIT 1 ";
				        	// $qryVideo = mysqli_query($conexion, $strVideo);
				        	// $rowVideo = mysqli_fetch_array($qryVideo);
				        	 ?>
				            <source src="../video/<?php // echo $rowVideo['nombre'] ?>" type="video/mp4">
				        </video> -->
				        <div class="capa-black" style=""></div>
				        <div class="capa-slider" style="z-index: -2;">
						    <div id="owl-main" class="owl-carousel owl-theme" style="height: 100%;">
								<?php 
								$strSldHead = "SELECT * FROM slider_principal ORDER BY id ASC ";
								$qrySldHead = mysqli_query($conexion, $strSldHead);
								while ( $rowSldHead = mysqli_fetch_array($qrySldHead) ) {
									$imgE1 = file_get_contents('admin/img/'.$rowSldHead['descripcion']);
			                        $imgData1 = base64_encode($imgE1);
			                        $imgData1 = str_replace('dataimage/jpgbase64', '', $imgData1);
									 ?>
							      	<div class="item">
							      		<img src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="" class="img-responsive" style="width: 100%;">
							      		<!-- <div class="container-carrousel">
							      			<h1><?php // echo $rowSldHead['titulo'] ?></h1>
								      		<p><?php // echo $rowSldHead['descripcion'] ?></p>
							      		</div> -->
							      	</div>
							    <?php 
							    }
							     ?>
						    </div>
				        </div>
					</div>
				</div>
				<?php
				break;

			case 2:			// ************************************ VIDEO ***************************************
				$videoV = ' style="display: block;" ';
				$sliderV = ' style="display: none;" ';
				$videoC = ' checked="" ';
				 ?>
				<!-- Sección Header VIDEO -->
				<div class="container-video">
					<div class="container-full-img" style="height: 450px; overflow: hidden;">
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
													<li class="item-menu">
														<a href="bodegas.php">bodega</a>
													</li>
													<li class="item-menu">
														<a href="vinos.php">los vinos</a>
													</li>
													<li class="item-menu">
														<a href="aceite.php">aceite</a>
													</li>
													<li class="item-menu">
														<a href="imasd.php">i + d</a>
													</li>
													<li class="item-menu">
														<a href="contacto.php">visítenos</a>
													</li>
												</ul>
											</nav> 
										</div>
									</header>
								</div>
							</div>
						</div>
				        <video id="videoFondo" preload="auto" autoplay="true" loop="loop" muted="muted" width="100%">
				        	<?php 
				        	// Consulta para obtener el video del fondo
				        	$strVideo = "SELECT * FROM video_inicio LIMIT 1 ";
				        	$qryVideo = mysqli_query($conexion, $strVideo);
				        	$rowVideo = mysqli_fetch_array($qryVideo);
				        	 ?>
				            <source src="video/<?php echo $rowVideo['nombre'] ?>" type="video/mp4">
				        </video>
				        <div class="capa-black" style="bottom: 0;"></div>
				        <!-- TODO: Agregar la imagen responsive del video -->
					</div>
				</div>
				<?php
				break;
			
			default:
				echo "Ocurrió un error al cargar el header, por favor vuelva a agregar un header al sitio.";
				break;
		}
	}
	 ?>

	<!-- Sección Intro -->
	<div class="target-blanco">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php
				// Consulta para obtener el titulo de la sección Intro
				$strIntro = "SELECT * FROM seccion_video LIMIT 1";
				$qryIntro = mysqli_query($conexion, $strIntro);
				$rowIntro = mysqli_fetch_array($qryIntro);

				 ?>
				<h1 class="header-section"><?php echo $rowIntro['titulo'] ?></h1>
				<div class="container-sep">
					<div class="thin-sep-center"></div>
				</div>
				<div class="row container-sep-top">
					<div class="col-md-6 item-row-lft">
						<p><?php echo $rowIntro['descripcion'] ?></p>
					</div>
					<div class="col-md-6 item-row-rgt">
						<!-- <iframe src="https://player.vimeo.com/video/107805616" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
						<!-- <video width="100%" height="100%" controls="">
				            <source src="video/ARRELS-HD.mp4" type="video/mp4">
				        </video> -->
				        <?php echo $rowIntro['ruta'] ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sección Equipo -->
	<div class="target-gris">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!-- <h1 class="header-section">El equipo</h1>
				<div class="container-sep">
					<div class="thin-sep-center"></div>
				</div> -->
				<div class="row">
					<div class="col-md-6 item-row-lft txt-team">
						<?php
						$strTeam = "SELECT * FROM seccion_equipo LIMIT 3";
						$qryTeam = mysqli_query($conexion, $strTeam);
						while ( $rowTeam = mysqli_fetch_array($qryTeam) ) {
							if ( $rowTeam['id'] == 1 ) {
								$estilos = ' style="display: block;" ';
							} else {
								$estilos = ' style="display: none;" ';
							}

							 ?>
							<div class="desc-team" <?php echo $estilos; ?> data-team="<?php echo $rowTeam['id'] ?>">
								<!-- <input type="text" class="in-full nombre-team" value="<?php // echo $rowTeam['nombre'] ?>"> -->
								<h2><?php echo $rowTeam['nombre'] ?></h2>
								<!-- <textarea name="" id="" class="txt-full texto-team" rows="5" placeholder="Descripción Equipo"><?php // echo $rowTeam['descripcion'] ?></textarea> -->
								<p><?php echo $rowTeam['descripcion'] ?></p>
							</div>
						<?php
						}
						 ?>
						<!-- <h2>Xisca Morey</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam nisi repellat necessitatibus delectus debitis molestiae eum, sed distinctio. Doloremque eligendi non minima totam, distinctio ab veritatis, harum earum sequi necessitatibus.</p> -->
					</div>
					<div class="col-md-6 item-row-rgt">
					<div class="row images-team">
						<?php
							$strTeamImg = "SELECT * FROM seccion_equipo LIMIT 3";
							$qryTeamImg = mysqli_query($conexion, $strTeamImg);
							while ( $rowTeamImg = mysqli_fetch_array($qryTeamImg) ) {
								$imgE1 = file_get_contents('admin/img/Equipo/'.$rowTeamImg['img']);
                                $imgData1 = base64_encode($imgE1);
                                $imgData1 = str_replace('dataimage/jpgbase64', '', $imgData1);

								$imgBack = ' background: url(data:image/jpeg;base64,'.$imgData1.') no-repeat center center; cursor: pointer; ';
								 ?>
								<div class="col-md-4 col-sm-4 col-xs-4 item-circ-team" data-team="<?php echo $rowTeamImg['id'] ?>">
									<div class="container-circle" style="<?php echo $imgBack ?>"></div>
								</div>
							<?php } ?>
						<!-- <div class="col-md-4">
							<div class="container-circle"></div>
						</div>
						<div class="col-md-4">
							<div class="container-circle"></div>
						</div> -->
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sección Tiendas -->
	<div class="target-blanco no-padding-bottom">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row item-row" style="padding-bottom: 20px;">
					<div class="col-md-6">
						<div class="contenedor-tiendas">
							<?php
							// Consulta para obtener los datos de la primera tienda
							$strStore1 = "SELECT * FROM seccion_tiendas ORDER BY id ASC ";
							$qryStore1 = mysqli_query($conexion, $strStore1);
							$rowStore1 = mysqli_fetch_array($qryStore1);
							 ?>
							<h1 class="header-section"><?php echo $rowStore1['nombre'] ?></h1>
							<p><?php echo $rowStore1['descripcion'] ?></p>
						</div>
					</div>
					<div class="col-md-6 borde-izq">
						<div class="contenedor-tiendas">
							<?php
							$rowStore1 = mysqli_fetch_array($qryStore1);
							 ?>
							<h1 class="header-section"><?php echo $rowStore1['nombre'] ?></h1>
							<p><?php echo $rowStore1['descripcion'] ?></p>
						</div>
					</div>
				</div>
				
				<?php 
				// Obtiene los datos del botón
				$strBtn = "SELECT * FROM btn_visitas_catas WHERE id = 1 LIMIT 1";
				$qryBtn = mysqli_query($conexion, $strBtn);
				$rowBtn = mysqli_fetch_array($qryBtn);
				 ?>
				<button style="padding: 10px 30px;color: #000;background-color: #fff;border: 1px solid #000;margin-bottom: 40px;" class="center-block" onclick="window.location.href='<?php echo $rowBtn['link'] ?>'"><?php echo $rowBtn['texto'] ?> <i class="fa fa-angle-right" style="padding-left: 5px;" aria-hidden="true"></i></button>
				
				<div class="row imagenes-slide">
					<div id="carousel" class="col-md-12 contenedor-slider-tiendas">
						<?php
						$strStrImg = "SELECT * FROM seccion_tiendas_img ORDER BY orden ASC ";
						$qryStrImg = mysqli_query($conexion, $strStrImg);
						while ( $rowStrImg = mysqli_fetch_array($qryStrImg) ) {
						 	$imgE = file_get_contents('admin/img/Tiendas/'.$rowStrImg['img']);
	                        $imgData = base64_encode($imgE);
	                        $imgData = str_replace('dataimage/jpegbase64', '', $imgData);
							 ?>
							<img src="data:image/jpeg;base64,<?php echo $imgData ?>" alt="" class="img-responsive">
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sección Banner -->
	<div class="target-negro" style="padding-bottom: 40px;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<?php
					// Consulta para obtener los datos de banner
					$strBan = "SELECT * FROM banner_home LIMIT 1";
					$qryBan = mysqli_query($conexion, $strBan);
					$rowBan = mysqli_fetch_array($qryBan);
					 ?>
					<div class="col-md-9">
						<h3 class="header-turismo"><?php echo $rowBan['slogan'] ?></h3>
					</div>
					<div class="col-md-3">
						<button class="btn-turismo center-block"><?php echo $rowBan['txt_btn'] ?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sección Productos -->
	<div class="target-gris">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?php
				// Consulta para obtener los datos de la sección de productos
				$strProd = "SELECT * FROM seccion_productos LIMIT 1 ";
				$qryProd = mysqli_query($conexion, $strProd);
				$rowProd = mysqli_fetch_array($qryProd);
				 ?>
				<h1 class="header-section"><?php echo $rowProd['titulo'] ?></h1>
				<div class="container-sep">
					<div class="thin-sep-center"></div>
				</div>
				<p class="text-center-target"><?php echo $rowProd['descripcion'] ?></p>
			</div>
		</div>
		<div class="row">
			<div id="owl-vinos" class="owl-carousel owl-theme">
				<?php
				$strSldProd = "SELECT * FROM seccion_productos_slider ORDER BY orden ASC ";
				$qrySldProd = mysqli_query($conexion, $strSldProd);
				while ( $rowSldProd = mysqli_fetch_array($qrySldProd) ) {

                    $strProdu = "SELECT * FROM productos WHERE id = ".$rowSldProd['id_prod'];
                    $qryProdu = mysqli_query($conexion, $strProdu);
                    $rowProdu = mysqli_fetch_array($qryProdu);

                    $imgE = file_get_contents('admin/img/Vinos/'.$rowProdu['img']);
                    $imgData = base64_encode($imgE);
                    $imgData = str_replace('dataimage/pngbase64', '', $imgData);
				 ?>
		  			<div class="item item-vinos" onclick="javascript:location.href='detalle-vinos.php?vino=<?php echo $rowSldProd['id'] ?>'">
	  					<div class="contenedor-item-vino">
		  					<img src="data:image/png;base64,<?php echo $imgData ?>" alt="" class="img-responsive center-block">
		  				</div>
		  				<div class="nombre-item-vino">
		  					<p><?php echo $rowProdu['nombre'] ?></p>
	  					</div>
		  			</div>
		  		<?php } ?>
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
						<h5 class="title-footer-menu">Site Menu</h5>
						<div class="row">
							<div class="col-md-6">
								<ul class="menu-footer">
									<li><a href="index.php">einleitung</a></li>
									<li><a href="bodegas.php">keller</a></li>
									<li><a href="vinos.php">weine</a></li>
									<li><a href="aceite.php">öl</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="menu-footer">
									<li><a href="imasd.php">i + d</a></li>
									<li><a href="contacto.php">besuch</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-footer col-xs-6">
						<h5 class="title-footer-menu">Kontakt</h5>
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
	<script src="js/jquery.waterwheelCarousel.js"></script>
	<script src="js/bootstrap.js"></script>

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
	
	<script src="owl-carousel/owl.carousel.js"></script>
	<script>
	    $(document).ready(function() {

	    	$("#carousel").waterwheelCarousel({
		      	flankingItems: 3,
          		autoPlay: 4000,
          		forcedImageWidth: 450,
          		forcedImageHeight: 315,
          		separation: 300,
          		orientation:'horizontal'
		    });

	    	$("#owl-main").owlCarousel({
		      	slideSpeed : 300,
		      	paginationSpeed : 400,
		      	singleItem:true,
		      	autoPlay: 6000,
		  	});

	    	var owl = $("#owl-vinos");
  			owl.owlCarousel({
      			itemsCustom : [
        			[0, 2],
        			[450, 2],
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

 		  	$(".item-vinos").hover(
 		  		function (e) {
		  			var current = $(this);
		  			$(current).css("background-color", "#ffffff");
		  			$(current).find("img").css("opacity", "1");
		  			$(current).find(".nombre-item-vino").slideDown();
		  		},
		  		function (f) {
		  			var current = $(this);
		  			$(current).css("background-color", "#F7F9FA");
		  			$(current).find("img").css("opacity", ".5");
		  			$(current).find(".nombre-item-vino").slideUp();
		  		}
		  	);
		  	$(".item-circ-team").click(function () {
		  		var curItem = $(this).attr("data-team");
		  		console.log(curItem);
		  		$(".desc-team").hide();
		  		$(".txt-team").find('[data-team='+curItem+']').fadeIn();
		  	});
	    });
	</script>
</body>
</html>
