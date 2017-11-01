<?php 
require_once 'conexion.php';
session_start();
if ( !empty( $_SESSION['id_usr'] ) ) {
} else {
	header("location: login.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador ·Tianna Negre·</title>
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
	<!-- Material Floating Button -->
	<link rel="stylesheet" href="dist/mfb.css">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Meta viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- Material Floating Button -->
	<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
		<li class="mfb-component__wrap">
			<a href="#" class="mfb-component__button--main">
				<i class="mfb-component__main-icon--resting ion-plus-round"></i>
				<i class="mfb-component__main-icon--active ion-close-round"></i>
			</a>
			<ul class="mfb-component__list">
				<li>
					<a id="btn_act_header" data-toggle="modal" href="#modalHeader" data-mfb-label="Actualizar Header" class="mfb-component__button--child">
						<i class="mfb-component__child-icon ion-social-buffer"></i>
					</a>
				</li>
				<!-- <li>
					<a id="btn_add_store" data-mfb-label="Agregar Imagen Tienda" class="mfb-component__button--child">
						<i class="mfb-component__child-icon ion-ios-camera"></i>
					</a>
				</li> -->
				<li>
					<a id="btn-act-pagina" data-mfb-label="Actualizar todo" class="mfb-component__button--child">
						<i class="mfb-component__child-icon ion-refresh"></i>
					</a>
				</li>
			</ul>
		</li>
	</ul>
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
													<li class="item-menu">
														<a href="logout.php">salir</a>
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
				        <div class="capa-black"></div>
				        <div class="capa-slider">
						    <div id="owl-main" class="owl-carousel owl-theme" style="height: 100%;">
								<?php 
								$strSldHead = "SELECT * FROM slider_principal ORDER BY id ASC ";
								$qrySldHead = mysqli_query($conexion, $strSldHead);
								while ( $rowSldHead = mysqli_fetch_array($qrySldHead) ) {
									$imgE1 = file_get_contents('img/'.$rowSldHead['descripcion']);
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
													<li class="item-menu">
														<a href="logout.php">salir</a>
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
				            <source src="../video/<?php echo $rowVideo['nombre'] ?>" type="video/mp4">
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
				$strSec1 = "SELECT * FROM seccion_video LIMIT 1 ";
				$qrySec1 = mysqli_query($conexion, $strSec1);
				$rowSec1 = mysqli_fetch_array($qrySec1);
				 ?>
				<!-- <h1 class="header-section">Buscamos que cada vino tenga una<br>historia detrás que contar</h1> -->
				<input id="sec2-h1" type="text" class="in-full header-section" value="<?php echo $rowSec1['titulo'] ?>">
				<div class="container-sep">
					<div class="thin-sep-center"></div>
				</div>
				<div class="row container-sep-top">
					<div class="col-md-6 item-row-lft">
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quidem quae nemo itaque, blanditiis possimus tempore quis unde a recusandae odit aliquid facilis, ab sequi temporibus pariatur odio doloribus assumenda.</p>  -->
						<textarea name="" id="sec2-txt" class="txt-full" rows="10" placeholder="Texto introducción"><?php echo $rowSec1['descripcion'] ?></textarea>
					</div>
					<div class="col-md-6 item-row-rgt">
						<!-- <iframe src="<?php //echo $rowSec1['ruta'] ?>" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
						<!-- <video width="100%" height="100%" controls="">
				            <source src="../video/ARRELS-HD.mp4" type="video/mp4">
				        </video> -->
				        <!-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/g1fxl2MsBmc" frameborder="0" allowfullscreen></iframe> -->
				        <?php echo $rowSec1['ruta'] ?>
				        <textarea name="" id="sec2-link" class="txt-full" rows="4" style="border-width: 1px; border-style: dashed;" placeholder="Código YouTube"><?php echo $rowSec1['ruta'] ?></textarea>
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
					<div id="sec3-txt" class="col-md-6 item-row-lft txt-team">
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
								<input type="text" class="in-full nombre-team" value="<?php echo $rowTeam['nombre'] ?>">
								<textarea name="" id="" class="txt-full texto-team" rows="5" placeholder="Descripción Equipo"><?php echo $rowTeam['descripcion'] ?></textarea>
							</div>
						<?php 
						}
						 ?>
					</div>

					<div class="col-md-6 item-row-rgt">
						<div id="sec3-img" class="row images-team">
							<?php 
							$strTeamImg = "SELECT * FROM seccion_equipo LIMIT 3";
							$qryTeamImg = mysqli_query($conexion, $strTeamImg);
							while ( $rowTeamImg = mysqli_fetch_array($qryTeamImg) ) {
								$imgE1 = file_get_contents('img/Equipo/'.$rowTeamImg['img']);
                                $imgData1 = base64_encode($imgE1);
                                $imgData1 = str_replace('dataimage/jpgbase64', '', $imgData1);

								$imgBack = ' background: url(data:image/jpeg;base64,'.$imgData1.') no-repeat center center; ';
								 ?>
								<div class="img-team col-md-4 item-circ-team" data-team="<?php echo $rowTeamImg['id'] ?>" style="overflow: hidden;">
									<img src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="" class="img-responsive">
									<input type="file" class="in-file" accept="image/jpg, image/jpeg">
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
	<!-- Sección Tiendas -->
	<div class="target-blanco no-padding-bottom">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div id="cont-txt-sec4" class="row item-row">
					<?php 
					$strShop = "SELECT * FROM seccion_tiendas LIMIT 2";
					$qryShop = mysqli_query($conexion, $strShop);
					$numShop = mysqli_num_rows($qryShop);
					// Condición para verificar que sean 2 registros en la tabla
					if ( $numShop == 2 ) {
						while ( $rowShop = mysqli_fetch_array($qryShop) ) {
							switch ($rowShop['id']) {
								case 1:
									 ?>
									<div class="item-tienda col-md-6">
										<div class="contenedor-tiendas">
											<input type="text" class="in-full header-section in-titulo" value="<?php echo $rowShop['nombre'] ?>">
											<textarea name="" id="" rows="6" class="txt-full txt-center in-texto" placeholder="Descripción Tiendas"><?php echo $rowShop['descripcion'] ?></textarea>
										</div>
									</div>
									<?php
									break;

								case 2:
									 ?>
									<div class="item-tienda col-md-6" style="border-left: 1px solid #eee;">
										<div class="contenedor-tiendas">
											<input type="text" class="in-full header-section in-titulo" value="<?php echo $rowShop['nombre'] ?>">
											<textarea name="" id="" rows="6" class="txt-full txt-center in-texto" placeholder="Descripción Tiendas"><?php echo $rowShop['descripcion'] ?></textarea>
										</div>
									</div>
									<?php
									break;
								
								default:
									# code...
									break;
							}
						}
					} else {
						#
					}
					 ?>
				</div>
				
				<?php 
				// Obtiene la info del botón centrado
				$strBtn = "SELECT * FROM btn_visitas_catas ORDER BY id ASC LIMIT 1";
				$qryBtn = mysqli_query($conexion, $strBtn);
				$rowBtn = mysqli_fetch_array($qryBtn);
				 ?>
				<input id="txt-btn-visitas-catas" class="in-full text-center" type="text" placeholder="Texto botón" style="margin-top: 30px; margin-bottom: 15px;" value="<?php echo $rowBtn['texto'] ?>">
				<input id="link-btn-visitas-catas" class="in-full text-center" type="text" placeholder="Link botón" style="margin-top: 15px; margin-bottom: 30px;" value="<?php echo $rowBtn['link'] ?>">

				<div class="row imagenes-slide" style="min-height: 294px; height: auto !important;">
					<div class="col-md-12 contenedor-slider-tiendas">
						<div id="cont-img-sec4" class="row" style="padding-bottom: 50px;">
							<?php 
							// Consutlas para obtener las tiendas
							$strTiendasImg = "SELECT * FROM seccion_tiendas_img ORDER BY orden ASC";
							$qryTiendasImg = mysqli_query($conexion, $strTiendasImg);
							while ( $rowTiendasImg = mysqli_fetch_array($qryTiendasImg) ) {
								$imgE = file_get_contents('img/Tiendas/'.$rowTiendasImg['img']);
                                $imgData = base64_encode($imgE);
                                $imgData = str_replace('dataimage/jpegbase64', '', $imgData);
							 ?>
							 	<div class="item-img-tienda col-md-4" style="overflow: hidden; height: 200px; position: relative;">
							 		<div class="cont-del">
										<i class="del-icon ion-ios-close-outline"></i>
									</div>
									<img src="data:image/jpeg;base64,<?php echo $imgData ?>" alt="Imágenes Tiendas" class="img-responsive">
									<input type="file" class="in-file" accept="image/jpg, image/jpeg">
								</div>
							<?php } ?>
							<!-- <div class="col-md-4" style="overflow: hidden;">
								<img src="" alt="Imágenes Tiendas" class="img-responsive">
								<input type="file" class="in-file">
							</div>
							<div class="col-md-4" style="overflow: hidden;">
								<img src="" alt="Imágenes Tiendas" class="img-responsive">
								<input type="file" class="in-file">
							</div> -->
						</div>
						<button id="btn_add_store" class="btn btn-primary" style="margin-top: 20px; margin-bottom: 40px;">Agregar Imagen</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sección Banner -->
	<div class="target-negro">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div id="cont-sec5" class="row">
					<?php 
					// Sección banner
					$strBan = "SELECT * FROM banner_home LIMIT 1";
					$qryBan = mysqli_query($conexion, $strBan);
					$numBan = mysqli_num_rows($qryBan);
					if ( $numBan == 1 ) {
						while ( $rowBan = mysqli_fetch_array($qryBan) ) {
					 		 ?>
							<div class="col-md-10">
								<!-- <h3 class="header-turismo"><?php echo $rowBan['slogan'] ?></h3> -->
								<input type="text" class="in-full header-turismo slogan" value="<?php echo $rowBan['slogan'] ?>" placeholder="Texto Banner">
							</div>
							<div class="col-md-2">
								<label for="" style="color: #ffffff; font-weight: 400;">Texto Botón</label>
								<input type="text" class="in-full txt-banner" value="<?php echo $rowBan['txt_btn'] ?>"  style="color: #ffffff; font-weight: 100;" placeholder="Conoce más">
								<label for="" style="color: #ffffff; font-weight: 400;">Enlace Botón</label>
								<input type="text" class="in-full link-banner" value="<?php echo $rowBan['link_btn'] ?>" style="color: #ffffff; font-weight: 100;" placeholder="enlace.php">
							</div>
						<?php 
						}
					}
					 ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Sección Productos -->
	<div class="target-gris">
		<div class="row">
			<?php 
			$strProd = "SELECT * FROM seccion_productos LIMIT 1 ";
			$qryProd = mysqli_query($conexion, $strProd);
			$numProd = mysqli_num_rows($qryProd);
			if ( $numProd == 1 ) {
				$rowProd = mysqli_fetch_array($qryProd);
				 ?>
				<div id="cont-sec6-txt" class="col-md-8 col-md-offset-2">
					<input type="text" class="in-full header-section in-titulo" value="<?php echo $rowProd['titulo'] ?>">
					<div class="container-sep">
						<div class="thin-sep-center"></div>
					</div>
					<textarea name="" id="" cols="30" rows="5" class="txt-full txt-center in-texto" placeholder="Descripción sección productos"><?php echo $rowProd['descripcion'] ?></textarea>
				</div>
			<?php
			} else {
				#
			}
			 ?>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div id="cont-sec6-vinos" class="row cont-sld-prod">
					<?php 
					// Consultas para obtener los items del slider
					$strSldF = "SELECT  * FROM seccion_productos_slider ORDER BY orden ASC";
					$qrySldF = mysqli_query($conexion, $strSldF);
					while ( $rowSldF = mysqli_fetch_array($qrySldF) ) {
					 ?>
						<div class="prod-item col-md-3" style="position: relative;">
							<div class="cont-del">
								<i class="del-icon ion-ios-close-outline"></i>
							</div>
							<label for="">Seleccione un producto</label>
							<?php 
							// Consulta para obtener la imagen del producto 
							$strImg = "SELECT * FROM productos WHERE id = ".$rowSldF['id_prod'];
							$qryImg = mysqli_query($conexion, $strImg);
							$rowImg = mysqli_fetch_array($qryImg);

							$imgE = file_get_contents('img/Vinos/'.$rowImg['img']);
	                        $imgData = base64_encode($imgE);
	                        $imgData = str_replace('dataimage/pngbase64', '', $imgData);
							 ?>
							<img src="data:image/png;base64,<?php echo $imgData ?>" alt="" class="img-responsive center-block" style="max-height: 200px;">
							<select name="" id="" class="sel-prod">
								<?php 
								// Consulta para obtener todos los productos
								$strSld = "SELECT * FROM productos ORDER BY orden ASC";
								$qrySld = mysqli_query($conexion, $strSld);
								while ( $rowSld = mysqli_fetch_array($qrySld) ) {
									$current = '';
									if ( $rowSld['id'] == $rowSldF['id_prod'] ) {
										$current = ' selected ';
									}
								 ?>
									<option value="<?php echo $rowSld['id'] ?>" <?php echo $current ?>><?php echo $rowSld['nombre'] ?></option>
								<?php } ?>
							</select>
						</div>
					<?php } ?>
				</div>
				<button id="btn-add-prod" class="btn btn-primary" style="margin-top: 20px;">Agregar Producto</button>
			</div>
		</div>
	</div>
	<div class="target-blanco">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="header-section">Text Slider Top</h2>
				<div id="cont-sld-text" class="row">
					<?php 
					// Obtiene los textos del slider top
					$strTxtSld = "SELECT * FROM text_slider_top ORDER BY orden ASC";
					$qryTxtSld = mysqli_query($conexion, $strTxtSld);
					while ( $rowTxtSld = mysqli_fetch_array($qryTxtSld) ) {
						 ?>
						<div class="col-md-12 item-sld" style="padding: 10px 0;">
							<div class="cont-del">
								<i class="del-icon ion-ios-close-outline"></i>
							</div>
							<input class="in-full" type="text" placeholder="Texto para slider superior de la página" value="<?php echo $rowTxtSld['texto'] ?>">
						</div>
					<?php } ?>

				</div>
				<button id="btn-add-txt-slider" class="btn btn-primary" style="margin-top: 20px;">Agregar Slider</button>
			</div>
		</div>
	</div>
	<!-- Copy -->
	<div class="target-muy-negro">
		<div id="derechos">
			<p>© 2016 Celler Bodega Tianna Negre</p>
		</div>
	</div>
	<!-- Modal para actualizar imagen del header -->
  	<div id="modalHeader" class="modal fade" role="dialog">
	    <div class="modal-dialog">
      		<!-- Modal content-->
      		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">Actualizar Header</h4>
        		</div>
        		<div class="modal-body">
        			<div class="cont-header-type">		<!-- Toogle -->
    					<div class="section">
	        				<h3>Video</h3>
	        				<div class="cont-body" <?php echo $videoV ?>>
	        					<div class="cont-video-header">
		        					<video id="videoFondoMdl" preload="auto" controls="" width="100%">
							        	<?php 
							        	// Consulta para obtener el video del fondo
							        	$strVideo2 = "SELECT * FROM video_inicio LIMIT 1 ";
							        	$qryVideo2 = mysqli_query($conexion, $strVideo2);
							        	$rowVideo2 = mysqli_fetch_array($qryVideo2);

							        	$imgE = file_get_contents('../video/'.$rowVideo2['nombre']);
				                        $imgData = base64_encode($imgE);
				                        $imgData = str_replace('datavideo/mp4base64', '', $imgData);
							        	 ?>
							            <source src="data:video/mp4;base64,<?php echo $imgData ?>" type="video/mp4">
							        </video>
							        <p>Video de fondo (Tamaño máximo: 4 MB)</p>
							        <input id="input-video-back" type="file" accept="video/mp4" class="in-file-video">
		        				</div>
		        				<div class="cont-video-img">
		        					<?php 
		        					$imgE = file_get_contents('../video/'.$rowVideo2['enlace']);
			                        $imgData = base64_encode($imgE);
			                        $imgData = str_replace('dataimage/jpegbase64', '', $imgData);
		        					 ?>
		        					<img id="img-video-responsive" src="data:image/jpeg;base64,<?php echo $imgData ?>" alt="Imagen que aparecerá en vista responsive en lugar del video (Tamaño máximo: 1 MB)" class="img-responsive">
		        					<input type="file" class="in-file" accept="image/jpeg, image/jpg">
		        				</div>
	        				</div>
	        			</div>
    				</div>
    				<div class="cont-header-type">		<!-- Toogle -->
    					<div class="section">
	        				<h3>Slider</h3>
	        				<div id="cont-items-slider" class="cont-body" <?php echo $sliderV ?>>
	        					<div class="slider-modal">
			          				<div id="cont-sec1" class="cont-sld">
			          					<?php 
			          					$strSlider = "SELECT * FROM slider_principal ORDER BY orden ASC";
			          					$qrySlider = mysqli_query($conexion, $strSlider);
			          					while ( $rowSlider = mysqli_fetch_array($qrySlider) ) {
			          						$imgE = file_get_contents('img/'.$rowSlider['descripcion']);
			                                $imgData = base64_encode($imgE);
			                                $imgData = str_replace('dataimage/jpegbase64', '', $imgData);
				          					 ?>
											<div class="form-group">
												<div class="cont-del">
													<i class="del-icon ion-ios-close-outline"></i>
												</div>
												<img src="data:image/jpeg;base64,<?php echo $imgData ?>" alt="Imágenes Slider" class="img-responsive img-sld">
												<input type="file" class="in-file" accept="image/jpeg, image/jpg">
											</div>
										<?php } ?>
			          				</div>
			          			</div>
	        				</div>
	        			</div>
    				</div>
    				<hr>
    				<div class="form-group">
    					<h4>Tipo header</h4>
    					<label for="">
    						<input class="in-tipo-head" type="radio" name="tipo_header" value="2" <?php echo $videoC ?>> Video
    					</label>
    					<label for="">
    						<input class="in-tipo-head" type="radio" name="tipo_header" value="1" <?php echo $sliderC ?>> Slider
    					</label>
    				</div>
        		</div>
        		<div class="modal-footer">
        			<button id="btn-add-sld" type="button" class="btn btn-primary" style="display: inline-block; float: left;">Agregar Slider</button>
          			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        		</div>
      		</div>
    	</div>
  	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="owl-carousel/owl.carousel.js"></script>
	<script>
		function activaInputFilePreview() {
			$(".in-file").change(function() {
				readURL(this);
			});
			$(".in-file-video").change(function () {
				readURLVideo(this);
			})
		}
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        reader.onload = function (e) {
		        	$(input).siblings("img").attr('src', e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		function readURLVideo(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        reader.onload = function (e) {
		        	$(input).siblings("video").find("source").attr('src', e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		function activaDelSld() {
			$(".cont-del").click(function () {
  				$(this).parent().remove();
  			});
		}
		function activaChangeProd() {
			$(".sel-prod").change(function (argument) {
		  		// Esta petición retornará la imagen del producto solicitado
		  		var current = $(this);
		  		var valor = $(this).val();
		  		if ( valor != "" ) {
		  			$.ajax({
		  				url: "chgSpnPord.php",
		  				type: "POST",
		  				dataType: "json",
		  				data: { prod: valor },
		  				success: function (datos) {
		  					console.log(datos);
		  					if ( datos.estatus == "success" ) {
		  						$(current).siblings("img").attr('src', 'data:image/png;base64,'+datos.img);
		  					} else {
		  						alert("Error al procesar la información.");
		  					}
		  				},
		  				error: function (p1, p2, p3) {
		  					alert(p3);
		  				}
		  			});
		  		}
		  	});
		}
		function resetListeners() {
			activaInputFilePreview();
	    	activaDelSld();
	    	activaChangeProd();
		}
	    $(document).ready(function() {
	    	// Funciones de inicialización
	    	resetListeners();
	    	$("#owl-main").owlCarousel({
		      	slideSpeed : 300,
		      	paginationSpeed : 400,
		      	singleItem:true,
		      	autoPlay: 6000,
		      	pagination: false
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
		  	$(".cont-header-type").click(function () {
		  		if ( $(this).find(".cont-body").is(":visible") ) {
		  			// $(this).find(".cont-body").slideToggle();
		  		} else {
		  			// console.log("NO ve");
		  			$(".cont-body").slideUp();
		  			$(this).find(".cont-body").slideToggle();
		  		}
		  	});
		  	$("#btn-add-prod").click(function () {
		  		// Agregar un nuevo producto 
		  		$.ajax({
		  			url: "addProdHome.php",
		  			type: "POST",
		  			dataType: "json",
		  			data: { key: 10247 },
		  			success: function (datos) {
		  				console.log(datos);
		  				if ( datos.estatus == "success" ) {
		  					$(".cont-sld-prod").append(datos.html);
		  					// Agrega los listeners necesarios para los nuevos elementos
				    		resetListeners();
		  				} else {
		  					alert("Ocurrió un error al procesar la operación.");
		  				}
		  			},
		  			error: function (p1, p2, p3) {
		  				console.log("Ha ocurrido un error la procesar la información.");
		  			}
		  		});
		  	});
		  	$("#btn-add-sld").click(function () {
		  		$("#cont-items-slider").show();
		  		$(".cont-sld").append('<div class="form-group">'+
											'<div class="cont-del">'+
												'<i class="del-icon ion-ios-close-outline"></i>'+
											'</div>'+
											'<img src="" alt="Imágenes Slider" class="img-responsive img-sld">'+
											'<input type="file" class="in-file" accept="image/jpeg, image/jpg">'+
										'</div>');
		  		resetListeners();
		  	});
		  	$("#btn_add_store").click(function () {
		  		$("#cont-img-sec4").append('<div class="item-img-tienda col-md-4" style="overflow: hidden; height: 200px; position: relative;">'+
				  								'<div class="cont-del">'+
													'<i class="del-icon ion-ios-close-outline"></i>'+
												'</div>'+
												'<img src="" alt="Imágenes Tiendas" class="img-responsive">'+
												'<input type="file" class="in-file" accept="image/jpg, image/jpeg">'+
											'</div>');
		  		resetListeners();
		  	});
		  	$("#btn-add-txt-slider").click(function () {
		  		$("#cont-sld-text").append('<div class="col-md-12 item-sld" style="padding: 10px 0;">'+
												'<div class="cont-del">'+
													'<i class="del-icon ion-ios-close-outline"></i>'+
												'</div>'+
												'<input class="in-full" type="text" placeholder="Texto para slider superior de la página">'+
											'</div>');
		  		resetListeners();
		  	});

		  	$("#btn-act-pagina").click(function () {
		  		var sec1 = { items: [], video: $("#videoFondoMdl").find("source").attr("src"), video_responsive: $("#img-video-responsive").attr("src"), switch: $("[name='tipo_header']:checked").val() }; 					// Slider Header
		  		var sec2 = { titulo: $("#sec2-h1").val() , texto: $("#sec2-txt").val(), link: $("#sec2-link").val() };	// Sección  Intro
		  		var sec3 = { itemsTexto: [], itemsImg: [] };													// Sección Equipo
		  		var sec4 = { images: [], tiendas: [] };	// Sección tienda
		  		var sec5 = { texto: $("#cont-sec5").find(".slogan").val(), texto_btn: $("#cont-sec5").find(".txt-banner").val() , link_btn: $("#cont-sec5").find(".link-banner").val() };								// Sección Banners
		  		var sec6 = { items: [], titulo: $("#cont-sec6-txt").find(".in-titulo").val(), texto: $("#cont-sec6-txt").find(".in-texto").val() };								// Sección Productos
		  		var sec7 = { items: [] };			// Sección text slider top
		  		var sec8 = { texto: $("#txt-btn-visitas-catas").val() , link: $("#link-btn-visitas-catas").val() };
		  		// Poblado sección 1
		  		var numSec1 = $("#cont-sec1").find(".form-group").length;
		  		for (var i = 0; i < numSec1; i++) {
		  			var current = $("#cont-sec1").find(".form-group")[i];
		  			// var titulo = $(current).find(".in-titulo").val();
		  			var img = $(current).find(".img-sld").attr("src");
		  			sec1.items.push({ img: img, orden: i });
		  		}
		  		console.log(sec1);
		  		console.log(sec2);
		  		// Poblado sección 3
		  		var numSec3_1 = $("#sec3-txt").find(".desc-team").length;
		  		for (var i = 0; i < numSec3_1; i++) {
		  			var current = $("#sec3-txt").find(".desc-team")[i];
		  			var nombre = $(current).find(".nombre-team").val();
		  			var texto = $(current).find(".texto-team").val();
		  			sec3.itemsTexto.push({ nombre: nombre, texto: texto });
		  		}
		  		var numSec3_2 = $("#sec3-img").find(".img-team").length;
		  		for (var i = 0; i < numSec3_2; i++) {
		  			var current = $("#sec3-img").find(".img-team")[i];
		  			var img = $(current).find("img").attr("src");
		  			sec3.itemsImg.push({ img: img });
		  		}
		  		console.log(sec3);
		  		// Poblado sección 4
		  		var numSec4_1 = $("#cont-txt-sec4").find(".item-tienda").length;
		  		for (var i = 0; i < numSec4_1; i++) {
		  			var current = $("#cont-txt-sec4").find(".item-tienda")[i];
		  			var titulo = $(current).find(".in-titulo").val();
		  			var texto = $(current).find(".in-texto").val();
		  			sec4.tiendas.push({ titulo: titulo, texto: texto });
		  		}
		  		var numSec4_2 = $("#cont-img-sec4").find(".item-img-tienda").length;
		  		for (var i = 0; i < numSec4_2; i++) {
		  			var current = $("#cont-img-sec4").find(".item-img-tienda")[i];
		  			var img = $(current).find("img").attr("src");
		  			sec4.images.push({ img: img });
		  		}
		  		console.log(sec4);
		  		console.log(sec5);
		  		// Poblado sección 6
		  		var numSec6 = $("#cont-sec6-vinos").find(".prod-item").length;
		  		for (var i = 0; i < numSec6; i++) {
		  			var current = $("#cont-sec6-vinos").find(".prod-item")[i];
		  			var prod = $(current).find("select").val();
		  			if ( prod != "" ) {
		  				sec6.items.push({ prod: prod, orden: i });
		  			} else {
		  				//
		  			}
		  		}
		  		console.log(sec6);
		  		// Poblado sección 7
		  		var numSec7 = $("#cont-sld-text").find(".item-sld").length;
		  		for (var i = 0; i < numSec7; i++) {
		  			var current = $("#cont-sld-text").find(".item-sld")[i];
		  			var sld = $(current).find("input").val();
		  			console.log(sld);
		  			sec7.items.push({ nombre: sld });
		  		}
		  		console.log(sec7);
		  		console.log(sec8);
		  		// Sección para enviar las variables
		  		$.ajax({
		  			url: "guardarHome.php",
		  			type: "POST",
		  			dataType: "json",
		  			data: {
		  				sec1: sec1,
		  				sec2: sec2,
		  				sec3: sec3,
		  				sec4: sec4,
		  				sec5: sec5,
		  				sec6: sec6,
		  				sec7: sec7,
		  				sec8: sec8
		  			},
		  			success: function (datos) {
		  				console.log(datos);
		  				if ( datos.estatus == "success" ) {
		  					alert("Página actualizada correctamente.");
		  					window.location.href = "index.php";
		  				} else {
		  					alert("Ha ocurrido un problema al intentar actualizar la información");
		  				}
		  			},
		  			error: function (p1, p2, p3) {
		  				console.log(p3);
		  				alert("Ha ocurrido un problema al actualizar la información.");
		  			}
		  		});

		  	});
	    });
	</script>
</body>
</html>