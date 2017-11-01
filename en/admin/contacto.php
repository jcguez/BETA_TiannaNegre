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
	<style>
		.container-full-img > *, .container-full-img > * > * { max-height: 400px; }
	</style>
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
				<!-- <li>
					<a id="btn_act_header" data-toggle="modal" href="#modalHeader" data-mfb-label="Actualizar Header" class="mfb-component__button--child">
						<i class="mfb-component__child-icon ion-social-buffer"></i>
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
			<?php 
			// $strHead = "SELECT * FROM header_contacto LIMIT 1";
			// $qryHead = mysqli_query($conexion, $strHead);
			// $rowHead = mysqli_fetch_array($qryHead);

			// $imgE1 = file_get_contents('img/Contacto/'.$rowHead['img']);
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

					$imgE4 = file_get_contents('img/Contacto/'.$rowCatas['img_1']);
                    $imgData4 = base64_encode($imgE4);
                    $imgData4 = str_replace('dataimage/jpgbase64', '', $imgData4);

                    $imgE5 = file_get_contents('img/Contacto/'.$rowCatas['img_2']);
                    $imgData5 = base64_encode($imgE5);
                    $imgData5 = str_replace('dataimage/jpgbase64', '', $imgData5);

                    $imgE6 = file_get_contents('img/Contacto/'.$rowCatas['img_3']);
                    $imgData6 = base64_encode($imgE6);
                    $imgData6 = str_replace('dataimage/jpgbase64', '', $imgData6);
					 ?>
					<div class="tit-sec">
						<input type="text" id="ttl_catas" class="in-full h3" value="<?php echo $rowCatas['titulo'] ?>">
						<input type="text" id="sttl_catas" class="in-full h5" value="<?php echo $rowCatas['subtitulo'] ?>">
					</div>
					<div class="desc-sec no-margin-top">
						<textarea name="" id="desc_catas" class="txt-full" rows="8"><?php echo $rowCatas['descripcion'] ?></textarea>
						<div id="columnas-catas" class="row">
							<div class="col-md-4 col-sm-4 no-padding-left left" style="overflow: hidden;">
								<img id="img_1_catas" src="data:image/jpeg;base64,<?php echo $imgData4 ?>" alt="" class="img-responsive">
								<input class="in-file" type="file" accept="image/jpg, image/jpeg">
								<input id="ttl_1_catas" type="text" class="in-full h4" value="<?php echo $rowCatas['titulo_1'] ?>">
								<textarea name="" id="desc_1_catas" class="txt-full" rows="8"><?php echo $rowCatas['desc_1'] ?></textarea>
							</div>
							<div class="col-md-4 col-sm-4 middle" style="overflow: hidden;">
								<img id="img_2_catas" src="data:image/jpeg;base64,<?php echo $imgData5 ?>" alt="" class="img-responsive">
								<input class="in-file" type="file" accept="image/jpg, image/jpeg">
								<input id="ttl_2_catas" type="text" class="in-full h4" value="<?php echo $rowCatas['titulo_2'] ?>">
								<textarea name="" id="desc_2_catas" class="txt-full" rows="8"><?php echo $rowCatas['desc_2'] ?></textarea>
							</div>
							<div class="col-md-4 col-sm-4 no-padding-right right" style="overflow: hidden;">
								<img id="img_3_catas" src="data:image/jpeg;base64,<?php echo $imgData6 ?>" alt="" class="img-responsive">
								<input class="in-file" type="file" accept="image/jpg, image/jpeg">
								<input id="ttl_3_catas" type="text" class="in-full h4" value="<?php echo $rowCatas['titulo_3'] ?>">
								<textarea name="" id="desc_3_catas" class="txt-full" rows="8"><?php echo $rowCatas['desc_3'] ?></textarea>
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

					$imgE7 = file_get_contents('img/Contacto/'.$rowRes['img_1']);
                    $imgData7 = base64_encode($imgE7);
                    $imgData7 = str_replace('dataimage/jpgbase64', '', $imgData7);

                    $imgE8 = file_get_contents('img/Contacto/'.$rowRes['img_2']);
                    $imgData8 = base64_encode($imgE8);
                    $imgData8 = str_replace('dataimage/jpgbase64', '', $imgData8);

					 ?>
					<div class="tit-sec">
						<input type="text" id="ttl_reserva" class="in-full h3" value="<?php echo $rowRes['titulo'] ?>">
						<input type="text" id="sttl_reserva" class="in-full h5" value="<?php echo $rowRes['subtitulo'] ?>">
					</div>
					<div class="desc-sec no-margin-top">
						<textarea name="" id="desc_reserva" class="txt-full" rows="8"><?php echo $rowRes['descripcion'] ?></textarea>
						<div id="columnas-reservaciones" class="row">
							<div class="col-md-6 col-sm-6 no-padding-left left" style="overflow: hidden;">
								<img id="img_1_reserva" src="data:image/jpeg;base64,<?php echo $imgData7 ?>" alt="" class="img-responsive">
								<input class="in-file" type="file" accept="image/jpg, image/jpeg">
								<input id="ttl_1_reserva" type="text" class="in-full h4" value="<?php echo $rowRes['titulo_1'] ?>">
								<textarea name="" id="desc_1_reserva" class="txt-full" rows="8"><?php echo $rowRes['desc_1'] ?></textarea>
							</div>
							<div class="col-md-6 col-sm-6 no-padding-right right" style="overflow: hidden;">
								<img id="img_2_reserva" src="data:image/jpeg;base64,<?php echo $imgData8 ?>" alt="" class="img-responsive">
								<input class="in-file" type="file" accept="image/jpg, image/jpeg">
								<input type="text" id="ttl_2_reserva" class="in-full h4" value="<?php echo $rowRes['titulo_2'] ?>">
								<textarea name="" id="desc_2_reserva" class="txt-full" rows="8"><?php echo $rowRes['desc_2'] ?></textarea>
							</div>
						</div>
					</div>
					
					<div class="tit-sec">
						<?php 
						// Obtiene los textos del formulario
						$strTxtForm = "SELECT * FROM texto_formulario WHERE id = 1 LIMIT 1";
						$qryTxtForm = mysqli_query($conexion, $strTxtForm);
						$rowTxtForm = mysqli_fetch_array($qryTxtForm);
						 ?>
						<hr style="border-color: #bbb;">
						<input type="text" id="titulo_formulario" class="in-full h3" value="<?php echo $rowTxtForm['titulo'] ?>" placeholder="título formulario">
						<input type="text" id="subtitulo_formulario" class="in-full h5" value="<?php echo $rowTxtForm['subtitulo'] ?>" placeholder="subtitulo formulario">
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

					$imgE1 = file_get_contents('img/Contacto/'.$rowIntro['img_1']);
                    $imgData1 = base64_encode($imgE1);
                    $imgData1 = str_replace('dataimage/jpgbase64', '', $imgData1);

                    $imgE2 = file_get_contents('img/Contacto/'.$rowIntro['img_2']);
                    $imgData2 = base64_encode($imgE2);
                    $imgData2 = str_replace('dataimage/jpgbase64', '', $imgData2);
					 ?>
					<div class="tit-sec">
						<input type="text" id="ttl_visitas" class="in-full h3" value="<?php echo $rowIntro['titulo'] ?>">
						<input type="text" id="sttl_visitas" class="in-full h5" value="<?php echo $rowIntro['subtitulo'] ?>">
					</div>
					<div class="desc-sec no-margin-top">
						<textarea name="" id="desc_visitas" rows="10" class="txt-full"><?php echo $rowIntro['descripcion'] ?></textarea>
						<div id="columnas-visitas" class="row">
							<div class="col-md-6 col-sm-6 no-padding-left left">
								<img id="img_1_visitas" src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="" class="img-responsive">
								<input class="in-file" type="file" accept="image/jpg, image/jpeg">
								<input id="ttl_1_visitas" type="text" class="in-full h4" value="<?php echo $rowIntro['titulo_1'] ?>">
								<textarea name="" id="desc_1_visitas" class="txt-full" rows="8"><?php echo $rowIntro['desc_1'] ?></textarea>
							</div>
							<div class="col-md-6 col-sm-6 no-padding-right right">
								<img id="img_2_visitas" src="data:image/jpeg;base64,<?php echo $imgData2 ?>" alt="" class="img-responsive">
								<input class="in-file" type="file" accept="image/jpg, image/jpeg">
								<input id="ttl_2_visitas" type="text" class="in-full h4" value="<?php echo $rowIntro['titulo_2'] ?>">
								<textarea name="" id="desc_2_visitas" class="txt-full" rows="8"><?php echo $rowIntro['desc_2'] ?></textarea>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	
	<!-- Datos Contacto -->
	<div class="target-aqua">
		<div class="row sec-contacto">
			<div class="col-md-8 col-md-offset-2">
				<div class="cont-form">
					<div class="tit-sec">
						<h3>datos de contacto</h3>
						
						<div class="row">
							<?php 
							// Consultas para mostrar los datos de contacto
							$strTouch = "SELECT * FROM seccion_contacto LIMIT 1 ";
							$qryTouch = mysqli_query($conexion, $strTouch);
							$rowTouch = mysqli_fetch_array($qryTouch);
							 ?>
							<div class="col-md-6 col-sm-6 no-padding-left no-padding-right">
								<label for="">Domiciio</label>
								<input id="val-dom" class="in-full" type="text" placeholder="Av. Siempreviva 823, Col. Bonita" value="<?php echo $rowTouch['domicilio'] ?>">

								<label for="">Teléfono</label>
								<input id="val-tel" class="in-full" type="text" placeholder="11 22 33 44 55" value="<?php echo $rowTouch['telefono'] ?>">

								<label for="">Email</label>
								<input id="val-mail" class="in-full" type="text" placeholder="correo@ejemplo.com" value="<?php echo $rowTouch['email'] ?>">
							</div>
							<div class="col-md-6 col-sm-6 no-padding-left no-padding-right">
								<label for="">Link Facebook</label>
								<input id="val-fb" class="in-full" type="text" placeholder="Facebook" value="<?php echo $rowTouch['fb'] ?>">

								<label for="">Link Twitter</label>
								<input id="val-tw" class="in-full" type="text" placeholder="Twitter" value="<?php echo $rowTouch['tw'] ?>">

								<label for="">Link Google+</label>
								<input id="val-gp" class="in-full" type="text" placeholder="Google+" value="<?php echo $rowTouch['gp'] ?>">

								<label for="">Link Bēhance</label>
								<input id="val-be" class="in-full" type="text" placeholder="Bēhance" value="<?php echo $rowTouch['be'] ?>">

								<label for="">Link Instagram</label>
								<input id="val-it" class="in-full" type="text" placeholder="Instagram" value="<?php echo $rowTouch['it'] ?>">
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Copy -->
	<div class="target-muy-negro">
		<div id="derechos">
			<p>© 2016 Celler Bodega Tianna Negre</p>
		</div>
	</div>
	<!-- Inicio Modales -->
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
          			<div class="header-modal">
          				<div class="cont-header">
          					<?php 
          					$strHead = "SELECT * FROM header_contacto LIMIT 1";
          					$qryHead = mysqli_query($conexion, $strHead);
          					$rowHead = mysqli_fetch_array($qryHead);

          					$imgE1 = file_get_contents('img/Contacto/'.$rowHead['img']);
				    		$imgData1 = base64_encode($imgE1);
				    		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
          					 ?>
							<div class="form-group">
							    <label for="">Imagen</label>
							    <img id="img_header" class="img-responsive img-in" src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="Imagen del Header">
							    <input class="in-file" type="file" accept="image/jpg, image/jpeg">
							</div>
          				</div>

          			</div>

        		</div>
        		<div class="modal-footer">
        			<!-- <button id="btn-add-sld" type="button" class="btn btn-primary" style="display: inline-block; float: left;">Agregar Slider</button> -->
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
	    $(document).ready(function() {
	    	activaInputFilePreview();
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
		  	$("#btn-act-pagina").click(function () {
		  		var dom = $("#val-dom").val();
		  		var tel = $("#val-tel").val();
		  		var mail = $("#val-mail").val();
		  		var fb = $("#val-fb").val();
		  		var tw = $("#val-tw").val();
		  		var gp = $("#val-gp").val();
		  		var be = $("#val-be").val();
		  		var it = $("#val-it").val();
		  		var img_header = $("#img_header").attr("src");

		  		var intro = {
		  			titulo: $("#ttl_visitas").val(),
		  			subtitulo: $("#sttl_visitas").val(),
		  			descripcion: $("#desc_visitas").val(),
		  			titulo_1: $("#ttl_1_visitas").val(),
		  			img_1: $("#img_1_visitas").attr("src"),
		  			desc_1: $("#desc_1_visitas").val(),
		  			titulo_2: $("#ttl_2_visitas").val(),
		  			img_2: $("#img_2_visitas").attr("src"),
		  			desc_2: $("#desc_2_visitas").val()
		  		};
		  		console.log(intro);

		  		var catas = {
		  			titulo: $("#ttl_catas").val(),
		  			subtitulo: $("#sttl_catas").val(),
		  			descripcion: $("#desc_catas").val(),
		  			titulo_1: $("#ttl_1_catas").val(),
		  			img_1: $("#img_1_catas").attr("src"),
		  			desc_1: $("#desc_1_catas").val(),
		  			titulo_2: $("#ttl_2_catas").val(),
		  			img_2: $("#img_2_catas").attr("src"),
		  			desc_2: $("#desc_2_catas").val(),
		  			titulo_3: $("#ttl_3_catas").val(),
		  			img_3: $("#img_3_catas").attr("src"),
		  			desc_3: $("#desc_3_catas").val()
		  		};
		  		console.log(catas);

		  		var reservaciones = {
		  			titulo: $("#ttl_reserva").val(),
		  			subtitulo: $("#sttl_reserva").val(),
		  			descripcion: $("#desc_reserva").val(),
		  			titulo_1: $("#ttl_1_reserva").val(),
		  			img_1: $("#img_1_reserva").attr("src"),
		  			desc_1: $("#desc_1_reserva").val(),
		  			titulo_2: $("#ttl_2_reserva").val(),
		  			img_2: $("#img_2_reserva").attr("src"),
		  			desc_2: $("#desc_2_reserva").val()
		  		};
		  		console.log(reservaciones);

		  		var texto_formulario = {
		  			titulo: $("#titulo_formulario").val(),
		  			subtitulo: $("#subtitulo_formulario").val()
		  		}
		  		console.log(texto_formulario);

		  		$.ajax({
	  				url: "guardarContacto.php",
	  				type: "POST",
	  				dataType: "json",
	  				data: { 
	  					dom: dom, 
	  					tel: tel, 
	  					mail: mail, 
	  					fb: fb, 
	  					tw: tw, 
	  					gp: gp, 
	  					be: be, 
	  					it: it, 
	  					img_header: img_header,
	  					intro: intro,
	  					catas: catas,
	  					reservaciones: reservaciones,
	  					texto_formulario: texto_formulario
	  				},
	  				success: function (datos) {
	  					console.log(datos);
	  					if ( datos.estatus == "success" ) {
		  					alert("Página actualizada correctamente.");
		  					window.location.href = "contacto.php";
		  				} else {
		  					alert("Ha ocurrido un problema al intentar actualizar la información");
		  				}
	  				},
	  				error: function (r1, r2, r3) {
	  					alert("Problemas al actualizar la información.");
	  				}
	  			});
		  	});
	    });
	</script>
</body>
</html>