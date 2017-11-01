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
	<style>
		.container-full-img > *, .container-full-img > * > * {
			max-height: 400px;
		}

		@media screen and ( max-width: 768px ) {
			#columnas-visitas > .col-md-6, #columnas-catas > .col-md-4, #columnas-reservaciones > .col-md-6, #col-aparta{ padding-left: 0; padding-right: 0; padding-bottom: 30px; }
		}

		/*@media screen and ( max-width:  ) {
		}*/
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
										<li class="item-menu">
											<a href="vinos.php">los vinos</a>
										</li>
										<li class="item-menu">
											<a href="aceite.php">aceite</a>
										</li>
										<li class="item-menu">
											<a href="imasd.php">i + d</a>
										</li>
										<li class="item-menu current">
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
			// $strHead = "SELECT * FROM header_contacto LIMIT 1";
			// $qryHead = mysqli_query($conexion, $strHead);
			// $rowHead = mysqli_fetch_array($qryHead);

			// $imgE1 = file_get_contents('admin/img/Contacto/'.$rowHead['img']);
   //  		$imgData1 = base64_encode($imgE1);
   //  		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
			 ?>
	        <!-- <div id="imagenFondoBodegas" class="img-main-aceite img-back" style="background: url(data:image/jpeg;base64,<?php // echo $imgData1 ?>) no-repeat center center fixed; background-size: cover; background-position: center top;">
	        </div>
	        <div class="capa-black" style="bottom: 0px;">
	        	<h1 class="title-yellow">Contacto</h1>
	        </div> -->
		</div>
	</div>

	<!-- Sección Catas -->
	<div class="target-blanco">
		<div class="container-fluid no-padding-left no-padding-right">
			<div class="row sec-3-bodegas">
				<div class="col-md-8 col-md-offset-2">
					<?php 
					// Consulta para obtener los datos de las catas
					$strCatas = "SELECT * FROM catas_visitanos LIMIT 1";
					$qryCatas = mysqli_query($conexion, $strCatas);
					$rowCatas = mysqli_fetch_array($qryCatas);

					$imgE4 = file_get_contents('admin/img/Contacto/'.$rowCatas['img_1']);
                    $imgData4 = base64_encode($imgE4);
                    $imgData4 = str_replace('dataimage/jpgbase64', '', $imgData4);

                    $imgE5 = file_get_contents('admin/img/Contacto/'.$rowCatas['img_2']);
                    $imgData5 = base64_encode($imgE5);
                    $imgData5 = str_replace('dataimage/jpgbase64', '', $imgData5);

                    $imgE6 = file_get_contents('admin/img/Contacto/'.$rowCatas['img_3']);
                    $imgData6 = base64_encode($imgE6);
                    $imgData6 = str_replace('dataimage/jpgbase64', '', $imgData6);
					 ?>
					<div class="tit-sec">
						<h3><?php echo $rowCatas['titulo'] ?></h3>
						<h5><?php echo $rowCatas['subtitulo'] ?></h5>
					</div>
					<div class="desc-sec no-margin-top">
						<!-- <p>También podrás ver, según la época del año, la entrada de la uva vendimiada, la fermentación del vino, los trasiegos en la sala de crianza, el embotellado, etc.</p>
						<p>Disfruta de esta experiencia única e inolvidable y déjate seducir por las sensaciones más auténticas del vino.</p> -->
						<?php echo $rowCatas['descripcion'] ?>
						<p class="texto-desc-sec">¡Ven y descubre el mundo del vino!</p>
						<div id="columnas-catas" class="row">
							<div class="col-md-4 col-sm-4 no-padding-left left">
								<?php 
								if ( $imgData4 != 'data:image/jpeg;base64,' ) {
									 ?>
									<img src="data:image/jpeg;base64,<?php echo $imgData4 ?>" alt="" class="img-responsive">
								<?php } ?>
								<h4 class="tit-thin"><b><?php echo $rowCatas['titulo_1'] ?></b></h4>
								<!-- <p>17.00 €/pp  - Dirigida a un mínimo de 5 personas y un máximo de 20 personas.</p>
								<p>Comprende una cata comentada de 3 vinos y degustación de nuestro aceite de oliva virgen Tianna, queso mahonés y sobrasada casera con pan pagés.</p>
								<p>La duración de la cata es de unos 45-60 minutos.</p> -->
								<?php echo $rowCatas['desc_1'] ?>
							</div>
							<div class="col-md-4 col-sm-4 middle">
								<?php 
								if ( $imgData5 != 'data:image/jpeg;base64,' ) {
									 ?>
									<img src="data:image/jpeg;base64,<?php echo $imgData5 ?>" alt="" class="img-responsive">
								<?php } ?>
								<h4 class="tit-thin"><b><?php echo $rowCatas['titulo_2'] ?></b></h4>
								<!-- <p>30.00 €/pp– Dirigida a un mínimo de 5 personas y un máximo de 20 personas.</p>
								<p>Comprende una cata comentada de 5 vinos acompañada de tapas mallorquinas: queso mahonés, pan pagés y aceite de oliva virgen Tianna, coca de verduras, empanadas de pollo y cebolla, sobrasada casera y ensaimada.</p>
								<p>La duración de la visita y cata es de unas 2 horas.</p> -->
								<?php echo $rowCatas['desc_2'] ?>
							</div>
							<div class="col-md-4 col-sm-4 no-padding-right right">
								<?php 
								if ( $imgData6 != 'data:image/jpeg;base64,' ) {
									 ?>
									<img src="data:image/jpeg;base64,<?php echo $imgData6 ?>" alt="" class="img-responsive">
								<?php } ?>
								<h4 class="tit-thin"><b><?php echo $rowCatas['titulo_3'] ?></b></h4>
								<!-- <p>40.00 €/pp – Dirigida a un mínimo de 5 personas y un máximo de 20 personas.</p>
								<p>Comprende un aperitivo de bienvenida con Vermut Muntaner y una cata comentada de 6 vinos acompañada de tapas mallorquinas: degustación de nuestro aceite virgen Tianna con pan pagés, queso mahonés, coca de verduras, empanadas de pollo y cebolla, sobrasada casera, frito malloquín y ensaimada con albaricoques. </p>
								<p>La duración de la visita y cata es de unas 3 horas.</p> -->
								<?php echo $rowCatas['desc_3'] ?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Sección Reservaciones -->
	<div class="target-gris">
		<div class="container-fluid no-padding-left no-padding-right">
			<div class="row sec-3-bodegas">
				<div class="col-md-8 col-md-offset-2">
					<?php 
					// Consulta para obtener las reservaciones
					$strRes = "SELECT * FROM reservaciones_visitanos LIMIT 1";
					$qryRes = mysqli_query($conexion, $strRes);
					$rowRes = mysqli_fetch_array($qryRes);

					$imgE7 = file_get_contents('admin/img/Contacto/'.$rowRes['img_1']);
                    $imgData7 = base64_encode($imgE7);
                    $imgData7 = str_replace('dataimage/jpgbase64', '', $imgData7);

                    $imgE8 = file_get_contents('admin/img/Contacto/'.$rowRes['img_2']);
                    $imgData8 = base64_encode($imgE8);
                    $imgData8 = str_replace('dataimage/jpgbase64', '', $imgData8);
					 ?>
					<div class="col-md-8 no-padding-left">
						<div class="tit-sec">
							<h3><?php echo $rowRes['titulo'] ?></h3>
							<h5><?php echo $rowRes['subtitulo'] ?></h5>
						</div>
						<div class="desc-sec no-margin-top">
							<!-- <p>También podrás ver, según la época del año, la entrada de la uva vendimiada, la fermentación del vino, los trasiegos en la sala de crianza, el embotellado, etc.</p>
							<p>Disfruta de esta experiencia única e inolvidable y déjate seducir por las sensaciones más auténticas del vino.</p>
							<p class="texto-desc-sec">¡Ven y descubre el mundo del vino!</p> -->
							<?php echo $rowRes['descripcion'] ?>
							<div id="columnas-reservaciones" class="row">
								<div class="col-md-6 col-sm-6 no-padding-left left">
									<?php 
									if ( $imgData7 != 'data:image/jpeg;base64,' ) {
										 ?>
										<img src="data:image/jpeg;base64,<?php echo $imgData7 ?>" alt="" class="img-responsive">
									<?php } ?>
									<h4 class="tit-thin"><b><?php echo $rowRes['titulo_1'] ?></b></h4>
									<!-- <p>Llama al +34 971 886 826 / 661 224 109, de 09:00 a 16:00 horas.</p>
									<p>Manda un email a info@tiannanegre.com y nosotros nos pondremos en contacto contigo para formalizar la reserva.</p> -->
									<?php echo $rowRes['desc_1'] ?>
								</div>
								<div class="col-md-6 col-sm-6 no-padding-right right">
									<?php 
									if ( $imgData8 != 'data:image/jpeg;base64,' ) {
										 ?>
										<img src="data:image/jpeg;base64,<?php echo $imgData8 ?>" alt="" class="img-responsive">
									<?php } ?>
									<h4 class="tit-thin"><b><?php echo $rowRes['titulo_2'] ?></b></h4>
									<!-- <p>Las visitas al Celler Tianna Negre son de lunes a viernes de 10:00h a 16:00h.</p>
									<p>Imprescindible reserva previa para cualquier fecha y horario.</p> -->
									<?php echo $rowRes['desc_2'] ?>
								</div>
							</div>
						</div>
					</div>
					<div id="col-aparta" class="col-md-4 no-padding-right">
						<div class="tit-sec">
							<?php 
							// Obtiene los textos del formulario
							$strTxtForm = "SELECT * FROM texto_formulario WHERE id = 1 LIMIT 1";
							$qryTxtForm = mysqli_query($conexion, $strTxtForm);
							$rowTxtForm = mysqli_fetch_array($qryTxtForm);
							 ?>
							<h3><?php echo $rowTxtForm['titulo'] ?></h3>
							<h5><?php echo $rowTxtForm['subtitulo'] ?></h5>
							<form class="form-contacto" role="form">
							  	<div class="form-group">
								    <label>nombre</label>
							    	<input type="text" class="form-in" placeholder="nombre completo" required="">
							  	</div>
							  	<div class="form-group">
								    <label>correo</label>
							    	<input type="email" class="form-in" placeholder="email@ejemplo.com" required="">
							  	</div>
							  	<div class="form-group">
								    <label>teléfono</label>
							    	<input type="text" class="form-in" placeholder="(lada) 12 34 56 78" required="">
							  	</div>
							  	<div class="form-group">
								    <label>mensaje</label>
							    	<!-- <input type="text" class="form-in" placeholder="Introduce tu email"> -->
							    	<textarea class="form-txt" name="" rows="4" placeholder="Quiero hacer una visita el día..." required=""></textarea>
							  	</div>
							  	<button type="submit" class="btn btn-default btn-enviar">enviar</button>
							</form>

						</div>
					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- Sección Visitas -->
	<div class="target-blanco">
		<div class="container-fluid no-padding-left no-padding-right">
			<div class="row sec-3-bodegas">
				<div class="col-md-8 col-md-offset-2">
					<?php
					// Consultas para obtener los datos de la introducción
					$strIntro = "SELECT * FROM introduccion_visitanos LIMIT 1";
					$qryIntro = mysqli_query($conexion, $strIntro);
					$rowIntro = mysqli_fetch_array($qryIntro);

					$imgE1 = file_get_contents('admin/img/Contacto/'.$rowIntro['img_1']);
                    $imgData1 = base64_encode($imgE1);
                    $imgData1 = str_replace('dataimage/jpgbase64', '', $imgData1);

                    $imgE2 = file_get_contents('admin/img/Contacto/'.$rowIntro['img_2']);
                    $imgData2 = base64_encode($imgE2);
                    $imgData2 = str_replace('dataimage/jpgbase64', '', $imgData2);
					 ?>
					<div class="tit-sec">
						<h3><?php echo $rowIntro['titulo'] ?></h3>
						<h5><?php echo $rowIntro['subtitulo'] ?></h5>
					</div>
					<div class="desc-sec no-margin-top">
						<?php echo $rowIntro['descripcion'] ?>
						<div id="columnas-visitas" class="row">
							<div class="col-md-6 col-sm-6 no-padding-left left">
								<img src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="" class="img-responsive">
								<h4 class="tit-thin"><?php echo $rowIntro['titulo_1'] ?></h4>
								<p><?php echo $rowIntro['desc_1'] ?></p>
							</div>
							<div class="col-md-6 col-sm-6 no-padding-right right">
								<img src="data:image/jpeg;base64,<?php echo $imgData2 ?>" alt="" class="img-responsive">
								<h4 class="tit-thin"><?php echo $rowIntro['titulo_2'] ?></h4>
								<p><?php echo $rowIntro['desc_2'] ?></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<!-- Formulario de contacto -->
	<!-- <div class="target-aqua">
		<div class="row sec-contacto">
			<div class="col-md-8 col-md-offset-2">
				<div class="cont-form">
					<div class="tit-sec">
						<h3>formulario</h3>
						<h5>de contacto</h5>

						<form class="form-contacto" role="form">
						  	<div class="form-group">
							    <label>nombre</label>
						    	<input type="text" class="form-in" placeholder="nombre completo" required="">
						  	</div>
						  	<div class="form-group">
							    <label>correo</label>
						    	<input type="email" class="form-in" placeholder="email@ejemplo.com" required="">
						  	</div>
						  	<div class="form-group">
							    <label>teléfono</label>
						    	<input type="text" class="form-in" placeholder="(lada) 12 34 56 78" required="">
						  	</div>
						  	<div class="form-group">
							    <label>asunto</label>
						    	<input type="text" class="form-in" placeholder="solicitud de información" required="">
						  	</div>
						  	<div class="form-group">
							    <label>mensaje</label>
						    	<textarea class="form-txt" name="" rows="4" placeholder="quiero saber sobre..." required=""></textarea>
						  	</div>
						  	<button type="submit" class="btn btn-default btn-enviar">enviar</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="target-maps">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d185135.4819219568!2d2.9866867236762045!3d39.71311679742229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297b8766606c129%3A0xb7eb9bff02d2ecc0!2sMallorca!5e0!3m2!1ses!2smx!4v1474643327205" style="border:0" allowfullscreen="" frameborder="0"></iframe>
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
	<script src="owl-carousel/owl.carousel.js"></script>
	
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
	    });
	</script>
</body>
</html>
