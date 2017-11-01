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
	<!-- Primer Owl Carousel -->
	<!-- <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="owl-carousel/owl.theme.css"> -->
	<link rel="stylesheet" href="owl-carousel2.0/dist/assets/owl.carousel.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Material Floating Button -->
	<link rel="stylesheet" href="dist/mfb.css">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<style>
		.container-full-img > *, .container-full-img > * > * { max-height: 400px; }
		.titulo-desc-aceite{ margin-top: 20px; }
		.titulo-desc-aceite:first-child{ margin-top: 0px; }
		.strong-h4{ display: block; margin-top: 25px; margin-bottom: 25px; text-align: center; font-size: 14px; font-weight: 600; }
		.cont-del-img{ position: absolute; right: 5px; top: 5px; }
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
					<a data-toggle="modal" href="#modalImgProd" data-mfb-label="Agregar Imágenes" class="mfb-component__button--child">
						<i class="mfb-component__child-icon ion-images"></i>
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
										<li class="item-menu">
											<a href="bodegas.php">bodega</a>
										</li>
										<li class="item-menu">
											<a href="vinos.php">los vinos</a>
										</li>
										<li class="item-menu current">
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
			// // Consulta para obtener la imagen de fondo
			// $strImgBack = "SELECT * FROM header_aceite LIMIT 1";
			// $qryImgBack = mysqli_query($conexion, $strImgBack);
			// $rowImgBack = mysqli_fetch_array($qryImgBack);

			// $imgE1 = file_get_contents('img/Aceite/'.$rowImgBack['img']);
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
	<!-- Descripción Aceite -->
	<div class="target-blanco">
		<div class="row main-aceite">
			<div class="col-md-8 col-md-offset-2">
				<div class="row container-sep-top">
					<div class="col-md-8 item-row-lft">
						<div class="owl-carousel owl-theme">
							<?php 
							// Consulta para obtener las imágenes del aceite
							$strImg = "SELECT * FROM detalles_aceite_img ORDER BY orden ASC";
							$qryImg = mysqli_query($conexion, $strImg);
							while ( $rowImg = mysqli_fetch_array($qryImg) ) {
								$imgE1 = file_get_contents('img/Aceite/'.$rowImg['img']);
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
								$imgE1 = file_get_contents('img/Aceite/'.$rowAct['img']);
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
					<div class="col-md-4 item-row-rgt">
						<div class="contenedor-desc-aceite">
							<!-- <h3 class="strong titulo-desc-aceite">Aceite de la denominació <br>D'origen Mallorca</h3>
							<p class="parrafo-desc-aceite">El Aceite de Oliva Virgen Extra Tianna Negre ha sido elaborado únicamente con olivas procedentes de nuestras fincas: Es Pinaret ubicada en el término municipal de Binissalem con unos 800 olivos de la variedad arbequina y Son Nadal ubicada en el término de Puigpunyent con más de 200 olivos centenarios.</p>
							
							<h3 class="strong titulo-desc-aceite">Elaboración</h3>
							<p class="parrafo-desc-aceite">Las olivas seleccionadas son molturadas en frío para mantener así intactas todas sus características analíticas y organolépticas. Sin filtrar.</p>
							
							<h3 class="strong titulo-desc-aceite">Cata</h3>
							<p class="parrafo-desc-aceite">Limpio y brillante de color verde amarillento. Muy afrutado e intenso con matices de almendra verde y aromas herbáceos. Fino en boca con suaves recuerdos almendrados.</p>

							<h3 class="strong titulo-desc-aceite">Grado de acidez:</h3>
							<p class="parrafo-desc-aceite">0,1º de ácido Índice peróxidos: 7 meq O2/kg</p>

							<h3 class="strong titulo-desc-aceite">Presentación</h3>
							<p class="parrafo-desc-aceite">Botella de 250 ml. – cajas de 20 ud - vertical – medidas caja 30,5*16,5*21,5 (a*b*h)  <br>Botella de 500 ml. – cajas de 12 ud – vertical – medidas caja 22,5*20,0*26,5 (a*b*h)  Garrafa Plástico de 3 L. – cajas de 4 ud – vertical – medidas caja 26,0*27,0*36,0 (a*b*h)</p> -->

							<form>
								<?php 
								// Consultas para obtener los detalles del aceite
								$strAceite = "SELECT * FROM detalles_aceite LIMIT 1";
								$qryAceite = mysqli_query($conexion, $strAceite);
								$rowAceite = mysqli_fetch_array($qryAceite);
								 ?>
								<input id="sec3-ttl1" type="text" class="in-full strong titulo-desc-aceite" placeholder="Título aceite" value="<?php echo $rowAceite['titulo1'] ?>">
								<textarea name="" id="sec3-txt1" class="txt-full" rows="8" placeholder="Descripción aceite"><?php echo $rowAceite['texto1'] ?></textarea>

								<input id="sec3-ttl2" type="text" class="in-full strong titulo-desc-aceite" placeholder="Título aceite" value="<?php echo $rowAceite['titulo2'] ?>">
								<textarea name="" id="sec3-txt2" class="txt-full" rows="8" placeholder="Descripción aceite"><?php echo $rowAceite['texto2'] ?></textarea>

								<input id="sec3-ttl3" type="text" class="in-full strong titulo-desc-aceite" placeholder="Título aceite" value="<?php echo $rowAceite['titulo3'] ?>">
								<textarea name="" id="sec3-txt3" class="txt-full" rows="8" placeholder="Descripción aceite"><?php echo $rowAceite['texto3'] ?></textarea>

								<input id="sec3-ttl4" type="text" class="in-full strong titulo-desc-aceite" placeholder="Título aceite" value="<?php echo $rowAceite['titulo4'] ?>">
								<textarea name="" id="sec3-txt4" class="txt-full" rows="8" placeholder="Descripción aceite"><?php echo $rowAceite['titulo4'] ?></textarea>

								<input id="sec3-ttl5" type="text" class="in-full strong titulo-desc-aceite" placeholder="Título aceite" value="<?php echo $rowAceite['titulo5'] ?>">
								<textarea name="" id="sec3-txt5" class="txt-full" rows="8" placeholder="Descripción aceite"><?php echo $rowAceite['texto5'] ?></textarea>

							</form>

							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Título compartido -->
	<div class="contenedor-ovalo">
		<div class="ovalo-blanco">
			<p>El proceso</p>
		</div>
	</div>
	<!-- Procesos Aceite -->
	<div class="target-blanco">
		<div class="row procesos-aceite">
			<div class="col-md-8 col-md-offset-2">
				<div id="sec4-proc" class="row item-row">
					<?php 
					// Consulta para obtener los procesos del aceite
					$strProc = "SELECT * FROM procesos_aceite ORDER BY orden ASC LIMIT 4";
					$qryProc = mysqli_query($conexion, $strProc);
					while ( $rowProc = mysqli_fetch_array($qryProc) ) {
						$imgE1 = file_get_contents('img/Aceite/Procesos/'.$rowProc['img']);
			    		$imgData1 = base64_encode($imgE1);
			    		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
						 ?>
						<div class="col-md-3 item-proc-aceite" style="overflow: hidden;">
							<img src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="" class="img-responsive img-proc">
							<input class="in-file" type="file" accept="image/jpg, image/jpeg">
							<!-- <h4 class="strong"><?php echo $rowProc['nombre'] ?></h4> -->
							<input class="in-full strong-h4 nom-proc" type="text" placeholder="Nombre proceso" value="<?php echo $rowProc['nombre'] ?>">
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<!-- <div class="target-negro">
		<div id="footer-contacto" class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-4">
						<h3 id="copy-footer">2016 ® Celler Tianna Negre</h3>
						<div class="icons-social-footer">
							<span class="fa fa-facebook"></span>
							<span class="fa fa-twitter"></span>
							<span class="fa fa-google-plus"></span>
							<span class="fa fa-behance"></span>
							<span class="fa fa-instagram"></span>
						</div>
					</div>
					<div class="col-md-4 col-footer">
						<h5 class="title-footer-menu">Menú del sitio</h5>
						<div class="row">
							<div class="col-md-6">
								<ul class="menu-footer">
									<li>inicio</li>
									<li>bodegas</li>
									<li>los vinos</li>
									<li>aceite</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="menu-footer">
									<li>ubicación &<br>contacto</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-footer">
						<h5 class="title-footer-menu">Contacto</h5>
						<div class="row">
							<div class="col-md-12">
								<ul class="menu-footer">
									<li>Camí des Mitjans. (Parcel.la 67)</li>
									<li>07350 Binissalem. Mallorca. Esp</li>
									<li>teléfono: +123 0056 3210</li>
									<li>email: info@business.com</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- Copy -->
	<div class="target-muy-negro">
		<div id="derechos">
			<p>© 2016 Celler Bodega Tianna Negre</p>
		</div>
	</div>
	<!-- Modales -->
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
          					$strHead = "SELECT * FROM header_aceite LIMIT 1";
          					$qryHead = mysqli_query($conexion, $strHead);
          					$rowHead = mysqli_fetch_array($qryHead);

          					$imgE1 = file_get_contents('img/Aceite/'.$rowHead['img']);
				    		$imgData1 = base64_encode($imgE1);
				    		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
          					 ?>
							<div class="form-group">
							    <label for="">Imagen</label>
							    <img id="sec1-img" class="img-responsive img-in" src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="Imagen del Header">
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
	<!-- Modal para agregar Imagenes -->
  	<div id="modalImgProd" class="modal fade" role="dialog">
	    <div class="modal-dialog">
      		<!-- Modal content-->
      		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">Agregar Imagen</h4>
        		</div>
        		<div class="modal-body">
          			<p>Sección para agregar imágenes del producto.</p>
          			<div id="images-modal">
						<?php 
						$contImg = 0;
						$strImg = "SELECT * FROM detalles_aceite_img ORDER BY orden ASC ";
						$qryImg = mysqli_query($conexion, $strImg);
						while ( $rowImg = mysqli_fetch_array($qryImg) ) {
							$imgE = file_get_contents('img/Aceite/'.$rowImg['img']);
				    		$imgData = base64_encode($imgE);
				    		$imgData = str_replace('dataimage/jpegbase64', '', $imgData);
							 ?>
	          				<div class="cont-img">
	          					<hr>
								<div class="form-group">
									<?php 
									if ( $contImg != 0 ) {
										 ?>
										<div class="cont-del-img">
									    	<i class="del-icon ion-ios-close-outline"></i>
									    </div>
										<?php
									}
									 ?>
								    <label for="">Imagen</label>
								    <img class="img-responsive img-in" src="data:image/jpeg;base64,<?php echo $imgData ?>" alt="Imagen del producto">
								    <input class="in-file" type="file" accept="image/jpg, image/jpeg">
								</div>
	          				</div>
	          				<?php 
	          				$contImg++;
						}
	          			 ?>
          			</div>
        		</div>
        		<div class="modal-footer">
        			<button id="btn-add-img" type="button" class="btn btn-primary" style="display: inline-block; float: left;">Agregar Imagen</button>
          			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        		</div>
      		</div>
    	</div>
  	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- Primer OWL carousel -->
	<!-- <script src="owl-carousel/owl.carousel.js"></script> -->
	<script src="owl-carousel2.0/dist/owl.carousel.js"></script>
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
		function activaDelImg() {
			$(".cont-del").click(function () {
  				$(this).parent().remove();
  			});

  			$(".cont-del-img").click(function () {
  				$(this).parent().parent().remove();
  			});
		}
		function resetListeners() {
			activaInputFilePreview();
	    	activaDelImg();
		}
	    $(document).ready(function() {
	    	// Inicia los listeners
	    	resetListeners();
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
	    	// $("#owl-demo-nov").owlCarousel({
		   	//    autoPlay: 3000, //Set AutoPlay to 3 seconds
		   	//    items : 6,
		   	//    itemsDesktopSmall : [979,6]
		  	// });
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
		  	$("#btn-add-img").click(function () {
		  		$("#images-modal").append('<div class="cont-img">'+
				          					'<hr>'+
											'<div class="form-group">'+
												'<div class="cont-del-img">'+
											    	'<i class="del-icon ion-ios-close-outline"></i>'+
											    '</div>'+
											    '<label for="">Imagen</label>'+
											    '<img class="img-responsive img-in" src="" alt="Imagen del producto">'+
											    '<input class="in-file" type="file" accept="image/jpg, image/jpeg">'+
											'</div>'+
				          				'</div>');
		  		// Inicia los listeners
	    		resetListeners();
		  	});
		  	$("#btn-act-pagina").click(function () {
		  		var sec1 = { img: $("#sec1-img").attr("src") };				// Imagen Header
		  		var sec2 = { items: [] };									// Imagenes del aceite
		  		var sec3 = {												// Decripción del aceite
  					ttl1: $("#sec3-ttl1").val(),
  					txt1: $("#sec3-txt1").val(),
  					ttl2: $("#sec3-ttl2").val(),
  					txt2: $("#sec3-txt2").val(),
  					ttl3: $("#sec3-ttl3").val(),
  					txt3: $("#sec3-txt3").val(),
  					ttl4: $("#sec3-ttl4").val(),
  					txt4: $("#sec3-txt4").val(),
  					ttl5: $("#sec3-ttl5").val(),
  					txt5: $("#sec3-txt5").val()
  				};
		  		var sec4 = { items: [] };									// Procesos del aceite
		  		// Poblado Header
		  		console.log(sec1);

		  		// Poblado imágenes del aceite
		  		var numSec2 = $("#images-modal").find(".cont-img").length;
		  		for (var i = 0; i < numSec2; i++) {
		  			var current = $("#images-modal").find(".cont-img")[i];
		  			var img = $(current).find("img").attr("src");
		  			sec2.items.push({ img: img, orden: i });
		  		}
		  		console.log(sec2);

		  		// Poblado descripción aceite
		  		console.log(sec3);

		  		// Poblado procesos de Aceite
		  		var numSec4 = $("#sec4-proc").find(".item-proc-aceite").length;
		  		for (var i = 0; i < numSec4; i++) {
		  			var current = $("#sec4-proc").find(".item-proc-aceite")[i];
		  			var img = $(current).find(".img-proc").attr("src");
		  			var nombre = $(current).find(".nom-proc").val();
		  			sec4.items.push({ img: img, nombre: nombre });
		  		}
		  		console.log(sec4);

		  		$.ajax({
		  			url: "guardarAceite.php",
		  			type: "POST",
		  			dataType: "json",
		  			data: { 
		  				sec1: sec1,
		  				sec2: sec2,
		  				sec3: sec3,
		  				sec4: sec4
		  			},
		  			success: function (datos) {
		  				console.log(datos);
		  				window.location.href = "aceite.php";
		  			},
		  			error: function (p1, p2, p3) {
		  				console.log(p3);
		  				alert("Ocurrió un error al procesar la información.");
		  			}
		  		});
		  	});
	    });
	</script>
</body>
</html>