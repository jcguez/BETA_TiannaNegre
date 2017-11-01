<?php
require_once 'conexion.php';
if ( !empty($_GET['vino']) ) {
	$id_vino = $_GET['vino'];
	$strVino = "SELECT * FROM productos WHERE id = ".$_GET['vino']." LIMIT 1 ";
	$qryVino = mysqli_query($conexion, $strVino);
	$numVino = mysqli_num_rows($qryVino);
	if ( $numVino == 1 ) {
		$rowVino = mysqli_fetch_array($qryVino);
	} else {
		header("location: vinos.php");
	}
} else {
	header("location: vinos.php");
}
 ?>
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
	<!-- bxSlider CSS file -->
	<link href="bxSlider/jquery.bxslider.css" rel="stylesheet"/>
	<!-- Meta viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.container-full-img > *, .container-full-img > * > * {
			max-height: 400px;
		}
		/*INICIO Estilos bxSlider*/
		.bx-wrapper .bx-pager {
	    	bottom: -230px;
	    	position: absolute;
	    	z-index: 20;
	  	}
	  	.bx-wrapper .bx-pager a {
	    	border: solid #ccc 1px;
	    	display: block;
	    	margin: 0 5px;
	    	padding: 3px;
	  	}
	  	.bx-wrapper .bx-pager a:hover,
	  	.bx-wrapper .bx-pager a.active {
	    	border: solid #5280DD 1px;
	  	}
	  	.bx-wrapper {
	    	margin-bottom: 250px;
	  	}
	  	/*FIN Estilos bxSlider*/
	  	.owl-controls, .owl-pagination{ display: none; }

	  	.owl-carousel .owl-stage {
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
										<li class="item-menu">
											<a href="bodegas.php">bodega</a>
										</li>
										<li class="item-menu current">
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
			<?php
			// // Obtiene la imagen de fondo
			// $strImgHead = "SELECT * FROM categorias WHERE id = ".$rowVino['categoria'];
			// $qryImgHead = mysqli_query($conexion, $strImgHead);
			// $rowImgHead = mysqli_fetch_array($qryImgHead);

			// $imgE1 = file_get_contents('admin/img/Categorias/'.$rowImgHead['img_header']);
   //  		$imgData1 = base64_encode($imgE1);
   //  		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
			 ?>
	        <!-- <div id="imagenFondoBodegas" class="img-main-aceite img-back" style="background: url(data:image/jpeg;base64,<?php // echo $imgData1 ?>) no-repeat center center fixed; background-size: cover;">
	        </div>
	        <div class="capa-black" style="bottom: 0px;">
	        	<h1 class="title-yellow"><?php // echo $rowVino['nombre'] ?></h1>
	        </div> -->
		</div>
	</div>
	<!-- Sección Descripción Videos -->
	<div class="target-blanco">
		<div class="row main-aceite">
			<div class="col-md-8 col-md-offset-2">
				<div class="row container-sep-top">
					<div class="col-md-6 item-row-lft">
						<div id="sld-det-prod" class="owl-carousel">
				        	<?php
				        	// Consulta para obtener todas las imágenes del producto
				        	$strDet = "SELECT * FROM detalles_vino_img WHERE id_prod = ".$rowVino['id']." ORDER BY orden ASC ";
				        	$qryDet = mysqli_query($conexion, $strDet);
				        	while ( $rowDet = mysqli_fetch_array($qryDet) ) {
				        		$imgE1 = file_get_contents('admin/img/Vinos/Detalles/'.$rowDet['img']);
					    		$imgData1 = base64_encode($imgE1);
					    		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
				        	 ?>
					            <div class="item" data-hash="det-<?php echo $rowDet['id'] ?>">
					              	<img class="img-responsive" src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="">
					            </div>
					        <?php
					        }
					         ?>
				        </div>
				        <hr class="hide-responsive">
				        <div class="row thumbnail-slider-wine">
					        <?php
					        // Código para los HASH de navegación
					        $strHash = "SELECT * FROM detalles_vino_img WHERE id_prod = ".$rowVino['id']." ORDER BY orden ASC ";
					        $qryHash = mysqli_query($conexion, $strHash);
					        while ( $rowHash = mysqli_fetch_array($qryHash) ) {
					        	$imgE2 = file_get_contents('admin/img/Vinos/Detalles/'.$rowHash['img']);
					    		$imgData2 = base64_encode($imgE2);
					    		$imgData2 = str_replace('dataimage/jpegbase64', '', $imgData2);
					         ?>
					        	<a class="button secondary url col-md-3 col-sm-3 col-xs-3 no-padding-left" href="#det-<?php echo $rowHash['id'] ?>">
					        		<img class="img-responsive" src="data:image/jpeg;base64,<?php echo $imgData2 ?>" alt="">
					        	</a>
					        <?php
					        }
					         ?>
				        </div>

					</div>
					<div class="col-md-6 item-row-rgt" style="padding-top: 5px;">
						<div class="contenedor-desc-aceite">
							<?php
							// Consulta para obtener los detalles del vino
							$strVinoD = "SELECT * FROM detalles_vino WHERE id_prod = ".$rowVino['id']." LIMIT 1 ";
							$qryVinoD = mysqli_query($conexion, $strVinoD);
							$numVinoD = mysqli_num_rows($qryVinoD);
							$rowVinoD = mysqli_fetch_array($qryVinoD);

							 ?>
							<h1><?php echo $rowVino['nombre'] ?></h1>
							<?php
							if ( $rowVinoD['variedades'] != "" ) {
							 ?>
								<h3 class="strong titulo-desc-aceite">VARIEDADES DE UVA</h3>
								<p class="parrafo-desc-aceite"><?php echo $rowVinoD['variedades'] ?></p>
							<?php
							}
							if ( $rowVinoD['vendimia'] != "" ) {
							 ?>
								<h3 class="strong titulo-desc-aceite">VENDIMIA</h3>
								<p class="parrafo-desc-aceite"><?php echo $rowVinoD['vendimia'] ?></p>
							<?php
							}
							if ( $rowVinoD['elaboracion'] != "" ) {
							 ?>
								<h3 class="strong titulo-desc-aceite">ELABORACION</h3>
								<p class="parrafo-desc-aceite"><?php echo $rowVinoD['elaboracion'] ?></p>
							<?php
							}
							if ( $rowVinoD['crianza'] != "" ) {
							 ?>
								<h3 class="strong titulo-desc-aceite">CRIANZA</h3>
								<p class="parrafo-desc-aceite"><?php echo $rowVinoD['crianza'] ?></p>
							<?php
							}
							 ?>
							<div class="desc-oculto">
								<?php
								if ( $rowVinoD['nota_cata'] != "" ) {
								 ?>
									<h3 class="strong titulo-desc-aceite">NOTA DE CATA</h3>
									<p class="parrafo-desc-aceite"><?php echo $rowVinoD['nota_cata'] ?></p>
								<?php
								}
								if ( $rowVinoD['produccion'] != "" ) {
								 ?>
									<h3 class="strong titulo-desc-aceite">PRODUCCIÓN</h3>
									<p class="parrafo-desc-aceite"><?php echo $rowVinoD['produccion'] ?></p>
								<?php
								}
								if ( $rowVinoD['grado_alcoholico'] != "" ) {
								 ?>
									<h3 class="strong titulo-desc-aceite">GRADO ALCOHÓLICO</h3>
									<p class="parrafo-desc-aceite"><?php echo $rowVinoD['grado_alcoholico'] ?></p>
								<?php
								}
								if ( $rowVinoD['area_produccion'] != "" ) {
								 ?>
									<h3 class="strong titulo-desc-aceite">ÁREA DE PRODUCCIÓN</h3>
									<p class="parrafo-desc-aceite"><?php echo $rowVinoD['area_produccion'] ?></p>
								<?php
								}
								if ( $rowVinoD['temperatura'] != "" ) {
								 ?>
									<h3 class="strong titulo-desc-aceite">TEMPERATURA DE SERVICIO</h3>
									<p class="parrafo-desc-aceite"><?php echo $rowVinoD['temperatura'] ?></p>
								<?php
								}
								if ( $rowVinoD['nota_maridaje'] != "" ) {
								 ?>
									<h3 class="strong titulo-desc-aceite">NOTA DE MARIDAJE</h3>
									<p class="parrafo-desc-aceite"><?php echo $rowVinoD['nota_maridaje'] ?></p>
								<?php
								}
								if ( $rowVinoD['presentaciones'] != "" ) {
								 ?>
									<h3 class="strong titulo-desc-aceite">PRESENTACIONES</h3>
									<p class="parrafo-desc-aceite"><?php echo $rowVinoD['presentaciones'] ?></p>
								<?php } ?>
							</div>
							<a href="" class="link-show-more"><span class="show-more">Ver más</span></a>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="arrows">
			<div class="arrow-left">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
			</div>
			<div class="arrow-right">
				<i class="fa fa-angle-right" aria-hidden="true"></i>
			</div>
		</div> -->
	</div>
	<!-- Sección Título Otros productos -->
	<div class="contenedor-ovalo">
		<div class="ovalo-blanco">
			<p>Otros productos</p>
		</div>
	</div>
	<!-- Sección Contenido Otros productos -->
	<div class="target-blanco">
		<div class="row procesos-aceite">
			<div class="col-md-8 col-md-offset-2">

				<div id="owl-demo" class="owl-carousel owl-theme has-arrows">
				  	<?php
				 	// $slider = array('items' => array() );
					// public function checkRandom($inicio, $fin){
					// 	rand();
					// }
				  	// Consulta para obtener los datos del slider aleatorios

				  	$strProds = "SELECT * FROM productos ORDER BY orden ASC LIMIT 8";
				  	$qryProds = mysqli_query($conexion, $strProds);
				  	$numProds = mysqli_num_rows($qryProds);
				  	while ( $rowProds = mysqli_fetch_array($qryProds) ) {
				  		$imgE3 = file_get_contents('admin/img/Vinos/'.$rowProds['img']);
			    		$imgData3 = base64_encode($imgE3);
			    		$imgData3 = str_replace('dataimage/jpegbase64', '', $imgData3);
				  		 ?>
					  	
					  	<div class="item-vino" onclick="window.location.href='detalle-vinos.php?vino=<?php echo $rowProds['id'] ?>'" style="cursor: pointer;">
							<a href="detalle-vinos.php?vino=<?php echo $rowProds['id'] ?>">
								<div class="contenedor-vino-grilla">
									<div class="cont-vinos-img">
										<img src="data:image/png;base64,<?php echo $imgData3 ?>" alt="" style="width: auto;">
									</div>
								</div>
								<div class="titulo-vino-grilla">
									<h5 class="strong"><?php echo $rowProds['nombre'] ?></h5>
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
						<h5 class="title-footer-menu">Menú del sitio</h5>
						<div class="row">
							<div class="col-md-6">
								<ul class="menu-footer">
									<li><a href="index.php">inicio</a></li>
									<li><a href="bodegas.php">bodegas</a></li>
									<li><a href="vinos.php">los vinos</a></li>
									<li><a href="aceite.php">aceite</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="menu-footer">
									<li><a href="imasd.php">i + d</a></li>
									<li><a href="contacto.php">ubicación &<br>contacto</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-footer col-xs-6">
						<h5 class="title-footer-menu">Contacto</h5>
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
	    	$('#sld-det-prod').owlCarousel({
                items: 1,
                loop: false,
                center: true,
                margin: 10,
                callbacks: true,
                URLhashListener: true,
                autoplayHoverPause: true,
                startPosition: 'URLHash'
            });
			$(".link-show-more").click(function (e) {
				e.preventDefault();
				$(".desc-oculto").slideToggle();
				var texto = $(".show-more").html();
				if (texto == "Ver más") {
					$(".show-more").html("Ver menos");
				} else {
					$(".show-more").html("Ver más");
				}
			});
  			$('#owl-demo').owlCarousel({
			    loop: true,
			    margin: 10,
			    responsiveClass: true,
			    autoplay: true,
			    responsive:{
			        0:{
			            items: 2,
			            nav: false
			        },
			        600:{
			            items: 4,
			            nav: true
			        },
			        1000:{
			            items: 4,
			            nav: true
			        }
			    },
			    navText: ['<i class="fa fa-angle-left" aria-hidden="true" style="font-size: 28px;"></i>', '<i class="fa fa-angle-right" aria-hidden="true" style="font-size: 28px;"></i>']

			});
	    });
	</script>
</body>
</html>