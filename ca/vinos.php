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
											<a href="bodegas.php">celler</a>
										</li>
										<li class="item-menu current">
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
			// $strHead = "SELECT * FROM header_vinos LIMIT 1";
			// $qryHead = mysqli_query($conexion, $strHead);
			// $rowHead = mysqli_fetch_array($qryHead);

			// $imgE1 = file_get_contents('admin/img/Vinos/'.$rowHead['img']);
			// $imgData1 = base64_encode($imgE1);
			// $imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
			 ?>
	        <!-- <div id="imagenFondoBodegas" class="img-main-aceite img-back" style="background: url(data:image/jpeg;base64,<?php // echo $imgData1 ?>) no-repeat center center fixed; background-size: cover; background-position: center top;">
	        </div>
	        <div class="capa-black" style="bottom: 0px;">
	        	<h1 class="title-yellow">Vinos</h1>
	        </div> -->
		</div>
	</div>
	<!-- Sección Contenido -->
	<div class="target-blanco">
		<div class="row procesos-aceite">
			<div class="col-md-8 col-md-offset-2">
				<div class="titulo-vinos">
					<!-- <h4>Ediciones limitadas · Ediciones personalizadas</h4> -->
				</div>

				<?php 
				// Sección para iterar las categorias
				$strCatego = "SELECT * FROM categorias ORDER BY orden ASC";
				$qryCatego = mysqli_query($conexion, $strCatego);
				while ( $rowCatego = mysqli_fetch_array($qryCatego) ) {
					$imgE = file_get_contents('admin/img/Categorias/'.$rowCatego['img']);
		    		$imgData = base64_encode($imgE);
		    		$imgData = str_replace('dataimage/jpegbase64', '', $imgData);
				 ?>

					<div class="row fila-vinos">
						<div class="cover-fila-vinos" style="background-image: url(data:image/jpg;base64,<?php echo $imgData ?>);">
						</div>
						<?php 
						$strProd = "SELECT * FROM productos WHERE categoria = ".$rowCatego['id']." LIMIT 4 ";
						$qryProd = mysqli_query($conexion, $strProd);
						while ( $rowProd = mysqli_fetch_array($qryProd) ) {
							$imgE1 = file_get_contents('admin/img/Vinos/'.$rowProd['img']);
				    		$imgData1 = base64_encode($imgE1);
				    		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
							 ?>
							<div class="col-md-3 item-vino">
								<a href="detalle-vinos.php?vino=<?php echo $rowProd['id'] ?>">
									<div class="contenedor-vino-grilla">
										<div class="cont-vinos-img">
											<img src="data:image/png;base64,<?php echo $imgData1 ?>" alt="">
										</div>
									</div>
									<div class="titulo-vino-grilla">
										<h5 class="strong"><?php echo $rowProd['nombre'] ?></h5>
									</div>
								</a>
							</div>
						<?php 
						}
						 ?>
					</div>
				<?php 
				}
				 ?>
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
	    	$(".cover-fila-vinos").slideDown();
	    	$(".fila-vinos").hover(function (e) {
	    		if ( $(this).find(".cover-fila-vinos").is(":visible") == true ) {
	    			$(this).find(".cover-fila-vinos").slideUp();
	    		} else {
	    			$(".cover-fila-vinos").slideDown();
	    			$(this).find(".cover-fila-vinos").slideDown();
	    		}
	    	});
	    	// Código para evitar el lag en la cortina
	    	$(".item-vino").hover(function (e) {
	    		$(this).parent().siblings().find(".cover-fila-vinos").slideDown();
	    	});
	    });
	</script>
</body>
</html>