<?php 
require_once 'conexion.php';
session_start();
if ( !empty($_SESSION['id_usr']) && !empty($_GET['vino']) ) {
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
	<!-- bxSlider CSS file -->
	<link href="bxSlider/jquery.bxslider.css" rel="stylesheet"/>
	<style>
		.container-full-img > *, .container-full-img > * > * { max-height: 400px; }
		/*INICIO Estilos bxSlider*/
		.bx-wrapper .bx-pager { bottom: -230px; position: absolute; z-index: 20; }
	  	.bx-wrapper .bx-pager a { border: solid #ccc 1px; display: block; margin: 0 5px; padding: 3px; }
	  	.bx-wrapper .bx-pager a:hover,
	  	.bx-wrapper .bx-pager a.active { border: solid #5280DD 1px; }
	  	.bx-wrapper { margin-bottom: 250px; }
	  	/*FIN Estilos bxSlider*/
	  	.owl-controls, .owl-pagination{ display: none; }
	  	.txt-full{ margin-top: 10px; }
	</style>
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
					<a id="btn_act_header" data-toggle="modal" href="#modalImgProd" data-mfb-label="Agregar imágenes del producto" class="mfb-component__button--child">
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
			// // Sección para cambiar el fondo del header según la categoría del producto
			// $strHead = "SELECT * FROM categorias WHERE id = ".$rowVino['categoria'];
			// $qryHead = mysqli_query($conexion, $strHead);
			// $rowHead = mysqli_fetch_array($qryHead);

			// $imgE1 = file_get_contents('img/Categorias/'.$rowHead['img_header']);
			// $imgData1 = base64_encode($imgE1);
			// $imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);
			 ?>
	        <!-- <div id="imagenFondoBodegas" class="img-main-aceite img-back" style="background: url(data:image/jpeg;base64,<?php // echo $imgData1 ?>) no-repeat center center fixed; background-size: cover; background-position: center top;">
	        </div>
	        <div class="capa-black" style="bottom: 0px;">
	        	<h1 class="title-yellow"><?php // echo $rowVino['nombre'] ?></h1>
	        </div> -->
		</div>
	</div>
	<!-- Detalles vinos -->
	<div class="target-blanco">
		<div class="row main-aceite">
			<div class="col-md-8 col-md-offset-2">
				<div class="row container-sep-top">
					<div class="col-md-8 item-row-lft">
				        <div class="owl-carousel owl-theme">
				        	<?php 
				        	// Consulta para obtener todas las imágenes del producto
				        	$strDet = "SELECT * FROM detalles_vino_img WHERE id_prod = ".$rowVino['id']." ORDER BY orden ASC ";
				        	$qryDet = mysqli_query($conexion, $strDet);
				        	while ( $rowDet = mysqli_fetch_array($qryDet) ) {
				        		$imgE1 = file_get_contents('img/Vinos/Detalles/'.$rowDet['img']);
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
				        <hr>
				        <div class="row">
					        <?php 
					        // Código para los HASH de navegación
					        $strHash = "SELECT * FROM detalles_vino_img WHERE id_prod = ".$rowVino['id']." ORDER BY orden ASC ";
					        $qryHash = mysqli_query($conexion, $strHash);
					        while ( $rowHash = mysqli_fetch_array($qryHash) ) {
					        	$imgE2 = file_get_contents('img/Vinos/Detalles/'.$rowHash['img']);
					    		$imgData2 = base64_encode($imgE2);
					    		$imgData2 = str_replace('dataimage/jpegbase64', '', $imgData2);
					         ?>
					        	<a class="button secondary url col-md-3 col-sm-3 no-padding-left no-padding-right" href="#det-<?php echo $rowHash['id'] ?>">
					        		<img class="img-responsive" src="data:image/jpeg;base64,<?php echo $imgData2 ?>" alt="">
					        	</a>
					        <?php 
					        }
					         ?>
				        </div>

					</div>
					<div class="col-md-4 item-row-rgt">

						<form>
							<div class="contenedor-desc-aceite">
								<?php 
								// Consulta para obtener los detalles del vino
								$strVinoD = "SELECT * FROM detalles_vino WHERE id_prod = ".$rowVino['id']." LIMIT 1 ";
								$qryVinoD = mysqli_query($conexion, $strVinoD);
								$numVinoD = mysqli_num_rows($qryVinoD);
								$rowVinoD = mysqli_fetch_array($qryVinoD);
								 ?>
								<h3 class="strong titulo-desc-aceite">VARIEDADES DE UVA</h3>
								<textarea id="det-variedades" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['variedades'] ?></textarea>

								<h3 class="strong titulo-desc-aceite">VENDIMIA</h3>
								<textarea id="det-vendimia" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['vendimia'] ?></textarea>
								
								<h3 class="strong titulo-desc-aceite">ELABORACION</h3>
								<textarea id="det-elaboracion" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['elaboracion'] ?></textarea>
								
								<h3 class="strong titulo-desc-aceite">CRIANZA</h3>
								<textarea id="det-crianza" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['crianza'] ?></textarea>
								
								<h3 class="strong titulo-desc-aceite">NOTA DE CATA</h3>
								<textarea id="det-nota_cata" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['nota_cata'] ?></textarea>

								<h3 class="strong titulo-desc-aceite">PRODUCCIÓN</h3>
								<textarea id="det-produccion" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['produccion'] ?></textarea>
								
								<h3 class="strong titulo-desc-aceite">GRADO ALCOHÓLICO</h3>
								<textarea id="det-grado_alcoholico" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['grado_alcoholico'] ?></textarea>
								
								<h3 class="strong titulo-desc-aceite">ÁREA DE PRODUCCIÓN</h3>
								<textarea id="det-area_produccion" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['area_produccion'] ?></textarea>
								
								<h3 class="strong titulo-desc-aceite">TEMPERATURA DE SERVICIO</h3>
								<textarea id="det-temperatura" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['temperatura'] ?></textarea>

								<h3 class="strong titulo-desc-aceite">NOTA DE MARIDAJE</h3>
								<textarea id="det-nota_maridaje" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['nota_maridaje'] ?></textarea>
								
								<h3 class="strong titulo-desc-aceite">PRESENTACIONES</h3>
								<textarea id="det-presentaciones" class="txt-full" name="" rows="4" placeholder="Detalles"><?php echo $rowVinoD['presentaciones'] ?></textarea>

								<hr>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="contenedor-ovalo">
		<div class="ovalo-blanco">
			<p>Otros productos</p>
		</div>
	</div> -->
	<!-- <div class="target-blanco">
		<div class="row procesos-aceite">
			<div class="col-md-8 col-md-offset-2">
				<div class="row item-row">
					<div class="col-md-3 item-proc-aceite">
						<div class="cont-img-vino">
							<img src="img/Vinos/velorose.png" alt="" class="img-responsive">
						</div>
						<h4 class="strong">Vélorosé</h4>
					</div>
					<div class="col-md-3 item-proc-aceite">
						<div class="cont-img-vino">
							<img src="img/Vinos/el_columpio_negre.png" alt="" class="img-responsive">
						</div>
						<h4 class="strong">Vélorosé</h4>
					</div>
					<div class="col-md-3 item-proc-aceite">
						<div class="cont-img-vino">
							<img src="img/Vinos/el_columpio_rosat.png" alt="" class="img-responsive">
						</div>
						<h4 class="strong">Vélorosé</h4>
					</div>
					<div class="col-md-3 item-proc-aceite">
						<div class="cont-img-vino">
							<img src="img/Vinos/botellatiannenegre.png" alt="" class="img-responsive">
						</div>
						<h4 class="strong">Vélorosé</h4>
					</div>
				</div>

			</div>
		</div>
	</div> -->
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
          			<div id="sec1-cont" class="images-modal">
						<?php 
						$contImg = 0;
						$strImg = "SELECT * FROM detalles_vino_img WHERE id_prod = ".$rowVino['id']." ORDER BY orden ASC ";
						$qryImg = mysqli_query($conexion, $strImg);
						while ( $rowImg = mysqli_fetch_array($qryImg) ) {
							$imgE = file_get_contents('img/Vinos/Detalles/'.$rowImg['img']);
				    		$imgData = base64_encode($imgE);
				    		$imgData = str_replace('dataimage/jpegbase64', '', $imgData);
							 ?>
	          				<div class="cont-img">
	          					<hr>
								<div class="form-group">
									<?php 
									if ( $contImg != 0 ) {
										 ?>
										<div class="cont-del">
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
	<!-- bxSlider Javascript file -->
	<script src="bxSlider/jquery.bxslider.js"></script>
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
  				$(this).parent().parent().remove();
  			});
		}
		function resetListeners() {
			activaInputFilePreview();
	    	activaDelImg();
		}
	    $(document).ready(function() {
	    	// Inialización de los eventos de la funciones
	    	// activaInputFilePreview();
	    	// activaDelImg();
	    	resetListeners();
	    	$('.bxslider').bxSlider({
			  	buildPager: function(slideIndex){
			    	switch(slideIndex){
			      		case 0:
			        		return '<img src="img/Slider/slideMin1V1.png">';
			      		case 1:
			        		return '<img src="img/Slider/slideMin2V1.png">';
			      		case 2:
			        		return '<img src="img/Slider/slideMin2V1.png">';
			    	}
			  	}
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
  			$("#btn-add-img").click(function (argument) {
  				$(".images-modal").append('<div class="cont-img">'+
				          					'<hr>'+
											'<div class="form-group">'+
												'<div class="cont-del">'+
											    	'<i class="del-icon ion-ios-close-outline"></i>'+
											    '</div>'+
											    '<label for="">Imagen</label>'+
											    '<img class="img-responsive img-in" src="" alt="Imagen del producto">'+
											    '<input class="in-file" type="file" accept="image/jpg, image/jpeg">'+
											'</div>'+
				          				'</div>');
  				resetListeners();
  			});
  			$("#btn-act-pagina").click(function () {
  				var sec1 = { items: [], prod: <?php echo $id_vino ?> };			// Imágenes producto
  				var sec2 = { 
  					variedades: $("#det-variedades").val(),
  					vendimia: $("#det-vendimia").val(),
  					elaboracion: $("#det-elaboracion").val(),
  					crianza: $("#det-crianza").val(),
  					nota_cata: $("#det-nota_cata").val(),
  					produccion: $("#det-produccion").val(),
  					grado_alcoholico: $("#det-grado_alcoholico").val(),
  					area_produccion: $("#det-area_produccion").val(),
  					temperatura: $("#det-temperatura").val(),
  					nota_maridaje: $("#det-nota_maridaje").val(),
  					presentaciones: $("#det-presentaciones").val(),
  					prod: <?php echo $id_vino ?>
  				};
  				// Poblado sección 1
  				var numSec1 = $("#sec1-cont").find(".cont-img").length;
  				for (var i = 0; i < numSec1; i++) {
  					var current = $("#sec1-cont").find(".cont-img")[i];
  					var img = $(current).find(".img-in").attr("src");
  					sec1.items.push({ img: img, orden: i });
  				}
  				console.log(sec1);
  				// Poblado sección 2
  				console.log(sec2);
  				$.ajax({
  					url: "guardarVinosDet.php",
  					type: "POST",
  					dataType: "json",
  					data: { sec1: sec1, sec2: sec2 },
  					success: function (datos) {
  						console.log(datos);
  						if ( datos.estatus = "success" ) {
  							alert("Vino actualizado correctamente.");
  							window.location.href = "detalle-vinos.php?vino=<?php echo $id_vino ?>";
  						} else {
  							alert("Problemas al actualizar el vino.");
  						}
  					},
  					error: function (p1, p2, p3) {
  						console.log(p3);
  					}
  				});
  			});
	    });
	</script>
</body>
</html>