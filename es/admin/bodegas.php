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
										<li class="item-menu current">
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
			<?php 
			// $strHead = "SELECT * FROM header_bodegas LIMIT 1";
			// $qryHead = mysqli_query($conexion, $strHead);
			// $rowHead = mysqli_fetch_array($qryHead);

			// $imgE1 = file_get_contents('img/Bodegas/'.$rowHead['img']);
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
	<!-- Sección introducción -->
	<div class="target-blanco">
		<div class="container-fluid">
			<div class="row sec-1-bodegas">
				<div class="col-md-8 col-md-offset-2">
					<?php 
					$strSec = "SELECT * FROM sec_1_bodegas LIMIT 1";
					$qrySec = mysqli_query($conexion, $strSec);
					$numSec = mysqli_num_rows($qrySec);
					if ( $numSec == 1 ) {
						$rowSec = mysqli_fetch_array($qrySec);
						 ?>
						<div class="tit-sec">
							<input id="titulo-sec1" type="text" class="in-full in-head-sec" value="<?php echo $rowSec['titulo'] ?>" placeholder="Título introducción">
							<input id="subtitulo-sec1" type="text" class="in-full in-subh-sec" value="<?php echo $rowSec['subtitulo'] ?>" placeholder="Subtitulo introducción">
						</div>
						<div class="desc-sec">
							<div class="row">
								<div class="col-md-6 col-sm-6 no-padding-left left">
									<textarea name="" id="txt_izq1" class="txt-full" cols="30" rows="10" placeholder="Texto lateral izquierdo"><?php echo $rowSec['parrafo1'] ?></textarea>
								</div>
								<div class="col-md-6 col-sm-6 no-padding-right right">
									<textarea name="" id="txt_der1" class="txt-full" cols="30" rows="10" placeholder="Texto lateral derecho"><?php echo $rowSec['parrafo2'] ?></textarea>
								</div>
							</div>
						</div>
					<?php
					}
					 ?>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Sección Visitanos -->
	<div class="target-aqua">
		<div class="container-fluid">
			<div class="row sec-3-bodegas">
				<div class="col-md-8 col-md-offset-2">
					<?php 
					$strSec3 = "SELECT * FROM sec_3_bodegas LIMIT 1";
					$qrySec3 = mysqli_query($conexion, $strSec3);
					$numSec3 = mysqli_num_rows($qrySec3);
					if ( $numSec3 == 1 ) {
						$rowSec3 = mysqli_fetch_array($qrySec3);

						$imgE1 = file_get_contents('img/Bodegas/'.$rowSec3['img_1']);
                        $imgData1 = base64_encode($imgE1);
                        $imgData1 = str_replace('dataimage/jpgbase64', '', $imgData1);

                        $imgE2 = file_get_contents('img/Bodegas/'.$rowSec3['img_2']);
                        $imgData2 = base64_encode($imgE2);
                        $imgData2 = str_replace('dataimage/jpgbase64', '', $imgData2);

                        $imgE3 = file_get_contents('img/Bodegas/'.$rowSec3['img_3']);
                        $imgData3 = base64_encode($imgE3);
                        $imgData3 = str_replace('dataimage/jpgbase64', '', $imgData3);
					} else {
						# code
					}
					 ?>
					<div class="tit-sec">
						<input id="titulo-sec3" type="text" class="in-full in-head-sec" value="<?php echo $rowSec3['titulo'] ?>" placeholder="Título Visítanos">
						<input id="subtitulo-sec3" type="text" class="in-full in-subh-sec" value="<?php echo $rowSec3['subtitulo'] ?>" placeholder="Subtitulo Visítanos">
					</div>
					<div class="desc-sec">
						<div id="items-sec3" class="row">
							<div class="item col-md-4 col-sm-4 no-padding-left left">
								<div class="cont-img" style="overflow: hidden; height: 135px;">
									<img src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="" class="img-responsive">
									<input type="file" class="in-file" accept="image/jpg, image/jpeg">
								</div>
								<input type="text" class="in-full in-heads-sec titulo" value="<?php echo $rowSec3['ttl_1'] ?>" placeholder="Título columna">
								<textarea name="" id="" rows="15" class="txt-full texto" placeholder="Subtitulo columna"><?php echo $rowSec3['txt_1'] ?></textarea>
							</div>
							<div class="item col-md-4 col-sm-4 middle">
								<div class="cont-img" style="overflow: hidden; height: 135px;">
									<img src="data:image/jpeg;base64,<?php echo $imgData2 ?>" alt="" class="img-responsive">
									<input type="file" class="in-file" accept="image/jpg, image/jpeg">
								</div>
								<input type="text" class="in-full in-heads-sec titulo" value="<?php echo $rowSec3['ttl_2'] ?>" placeholder="Título columna">
								<textarea name="" id="" rows="15" class="txt-full texto" placeholder="Subtitulo columna"><?php echo $rowSec3['txt_2'] ?></textarea>
							</div>
							<div class="item col-md-4 col-sm-4 no-padding-right right">
								<div class="cont-img" style="overflow: hidden; height: 135px;">
									<img src="data:image/jpeg;base64,<?php echo $imgData3 ?>" alt="" class="img-responsive">
									<input type="file" class="in-file" accept="image/jpg, image/jpeg">
								</div>
								<input type="text" class="in-full in-heads-sec titulo" value="<?php echo $rowSec3['ttl_3'] ?>" placeholder="Título columna">
								<textarea name="" id="" rows="15" class="txt-full texto" placeholder="Subtitulo columna"><?php echo $rowSec3['txt_3'] ?></textarea>
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
				<div class="col-md-8 col-md-offset-2">
					<div class="tit-sec">
						<?php 
						$strSec2 = "SELECT * FROM sec_2_bodegas LIMIT 1";
						$qrySec2 = mysqli_query($conexion, $strSec2);
						$numSec2 = mysqli_num_rows($qrySec2);
						if ( $numSec2 == 1 ) {
							$rowSec2 = mysqli_fetch_array($qrySec2);
							 ?>
							<input id="titulo-sec2" type="text" class="in-full in-head-sec" value="<?php echo $rowSec2['titulo'] ?>" placeholder="Título galería">
							<input id="subtitulo-sec2" type="text" class="in-full in-subh-sec" value="<?php echo $rowSec2['subtitulo'] ?>" placeholder="Subtitulo galería">
						<?php
						} else {
							# 
						}
						 ?>
					</div>
					<div class="desc-sec">
						<div id="galeria" class="row">
							<?php 
							$strSec2I = "SELECT * FROM sld_2_bodegas";
							$qrySec2I = mysqli_query($conexion, $strSec2I);
							while ( $rowSec2I = mysqli_fetch_array($qrySec2I) ) {
								$imgE1 = file_get_contents('img/Bodegas/'.$rowSec2I['img']);
                                $imgData1 = base64_encode($imgE1);
                                $imgData1 = str_replace('dataimage/jpgbase64', '', $imgData1);
								 ?>
								<div class="cont-slide col-md-3 col-sm-3" style="overflow: hidden;">
									<div class="cont-del">
										<i class="del-icon ion-ios-close-outline"></i>
									</div>
									<img class="img-responsive" src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="">
									<input type="file" accept="image/jpg, image/jpeg" class="in-file">
								</div>
							<?php
							}
							 ?>
						</div>
						<button id="btn-add-sld" class="btn btn-primary" style="margin-top: 20px;">Agregar Imagen</button>
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
          					$strHead = "SELECT * FROM header_bodegas LIMIT 1";
          					$qryHead = mysqli_query($conexion, $strHead);
          					$rowHead = mysqli_fetch_array($qryHead);

          					$imgE1 = file_get_contents('img/Bodegas/'.$rowHead['img']);
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
		function activaDelSld() {
			$(".cont-del").click(function () {
  				$(this).parent().remove();
  			});
		}
		function resetListeners() {
			activaInputFilePreview();
	    	activaDelSld();
		}
	    $(document).ready(function() {
	    	resetListeners();
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
		  	$("#btn-add-sld").click(function () {
		  		$("#galeria").append('<div class="cont-slide col-md-3 col-sm-3" style="overflow: hidden;">'+
										'<div class="cont-del">'+
											'<i class="del-icon ion-ios-close-outline"></i>'+
										'</div>'+
										'<img class="img-responsive" src="" alt="">'+
										'<input type="file" accept="image/jpg, image/jpeg" class="in-file">'+
									'</div>');
		  		resetListeners();
		  	});
		  	$("#btn-act-pagina").click(function () {
		  		var head = { img: $("#img_header").attr("src") };
		  		var sec1 = { txt_izq: $("#txt_izq1").val() , txt_der: $("#txt_der1").val() , titulo: $("#titulo-sec1").val() , subtitulo: $("#subtitulo-sec1").val() };
		  		var sec2 = { items: [], titulo: $("#titulo-sec2").val() , subtitulo: $("#subtitulo-sec2").val() };
		  		var sec3 = { items: [], titulo: $("#titulo-sec3").val() , subtitulo: $("#subtitulo-sec3").val() };
		  		console.log(sec1);
		  		// Poblado de sec2
		  		var num2 = $("#galeria").find(".cont-slide").length;
		  		for (var i = 0; i < num2; i++) {
		  			var current = $("#galeria").find(".cont-slide")[i];
		  			var img = $(current).find("img").attr("src");
		  			sec2.items.push({ img: img, orden: i });
		  		}
		  		console.log(sec2);
		  		// Poblado de sec3
		  		var num3 = $("#items-sec3").find(".item ").length;
		  		for (var i = 0; i < num3; i++) {
		  			var current = $("#items-sec3").find(".item ")[i];
		  			var img = $(current).find("img").attr("src");
		  			var titulo = $(current).find(".titulo").val();
		  			var texto = $(current).find(".texto").val();
		  			sec3.items.push({ img: img, titulo: titulo, texto: texto });
		  		}
		  		console.log(sec3);
		  		$.ajax({
		  			url: "guardarBodegas.php",
		  			type: "POST",
		  			dataType: "json",
		  			data: { 
		  				sec1: sec1, 
		  				sec2: sec2, 
		  				sec3: sec3, 
		  				head: head
		  			},
		  			success: function (datos) {
		  				console.log(datos);
		  				if ( datos.estatus == "success" ) {
		  					alert("Página actualizada correctamente.");
		  					window.location.href = "bodegas.php";
		  				} else {
		  					alert("Ha ocurrido un problema al intentar actualizar la información");
		  				}
		  			},
		  			error: function (p1, p2, p3) {
		  				alert("Ha ocurrido un erro al procesar la información.");
		  			}
		  		});

		  	});
	    });
	</script>
</body>
</html>