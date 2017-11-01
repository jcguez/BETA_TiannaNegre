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
	<style>
		.container-full-img > *, .container-full-img > * > * {
			max-height: 400px;
		}
		.cont-catego{
			background-color: #fff;
			padding: 5px 0;
		}
	</style>
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
						<i class="mfb-component__child-icon ion-images"></i>
					</a>
				</li>
				<li>
					<a id="btn_add_prod" data-toggle="modal" href="#modalProd" data-mfb-label="Agregar Producto" class="mfb-component__button--child">
						<i class="mfb-component__child-icon ion-wineglass"></i>
					</a>
				</li>
				<li>
					<a id="btn_add_catego" data-toggle="modal" href="#modalCatego" data-mfb-label="Agregar Categoría" class="mfb-component__button--child">
						<i class="mfb-component__child-icon ion-filing"></i>
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
			// $strHead = "SELECT * FROM header_vinos LIMIT 1";
			// $qryHead = mysqli_query($conexion, $strHead);
			// $rowHead = mysqli_fetch_array($qryHead);

			// $imgE1 = file_get_contents('img/Vinos/'.$rowHead['img']);
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
	<!-- Sección Vinos --> 
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
					$imgE = file_get_contents('img/Categorias/'.$rowCatego['img']);
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
							$imgE1 = file_get_contents('img/Vinos/'.$rowProd['img']);
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
          			<div class="vinos-modal">
          				<div class="cont-vino">
          					<?php 
          					$strHead = "SELECT * FROM header_vinos LIMIT 1";
          					$qryHead = mysqli_query($conexion, $strHead);
          					$rowHead = mysqli_fetch_array($qryHead);

          					$imgE1 = file_get_contents('img/Vinos/'.$rowHead['img']);
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
        			<!-- <button type="button" class="btn btn-primary" style="display: inline-block; float: left;">Agregar Producto</button> -->
          			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        		</div>
      		</div>
    	</div>
  	</div>
  	<!-- Modal para agregar productos -->
  	<div id="modalProd" class="modal fade" role="dialog">
	    <div class="modal-dialog">
      		<!-- Modal content-->
      		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">Agregar Productos</h4>
        		</div>
        		<div class="modal-body">
          			<h3>Productos</h3>
          			<div id="sec2-cont" class="prod-modal">
          				<?php 
          				// Consultas para obtener el listado de productos
          				$strProd = "SELECT * FROM productos ORDER BY orden ASC";
          				$qryProd = mysqli_query($conexion, $strProd);
          				while ( $rowProd = mysqli_fetch_array($qryProd) ) {
          					$imgE1 = file_get_contents('img/Vinos/'.$rowProd['img']);
				    		$imgData1 = base64_encode($imgE1);
          				 ?>
	          				<div class="cont-prod row">
	          					<hr>
	          					<div class="form-group col-md-12 col-sm-12" style="overflow: hidden; position: relative;">
	          						<div class="cont-del">
										<i class="del-icon ion-ios-close-outline"></i>
									</div>
								    <label for="">Nombre</label>
								    <input type="text" class="form-control nom-prod" placeholder="Vino Especial" value="<?php echo $rowProd['nombre'] ?>">
								    <label for="">Categoría</label>
								    <select name="" id="" class="form-control cat-prod">
								    	<?php 
								    	// Consulta para obtener la categoría del producto
								    	$strProdCat = "SELECT * FROM categorias ORDER BY orden ASC";
								    	$qryProdCat = mysqli_query($conexion, $strProdCat);
								    	while ( $rowProdCat = mysqli_fetch_array($qryProdCat) ) {
								    		$current = '';
								    		if ( $rowProdCat['id'] == $rowProd['categoria'] ) {
								    			$current = ' selected ';
								    		}
								    	 ?>
								    		<option value="<?php echo $rowProdCat['id'] ?>" <?php echo $current ?>><?php echo $rowProdCat['nombre'] ?></option>
								    	<?php } ?>
								    </select>
								    <label for="">Imagen</label>
								    <img class="img-responsive center-block img-in img-prod" src="data:image/png;base64,<?php echo $imgData1 ?>" alt="Imagen del producto">
								    <input class="in-file" type="file" accept="image/png">
								</div>
	          				</div>
          				<?php 
          				}
          				 ?>
          			</div>
        		</div>
        		<div class="modal-footer">
        			<button id="btn-add-prod" type="button" class="btn btn-primary" style="display: inline-block; float: left;">Agregar Producto</button>
          			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        		</div>
      		</div>
    	</div>
  	</div>
  	<!-- Modal para agregar categorías -->
  	<div id="modalCatego" class="modal fade" role="dialog">
	    <div class="modal-dialog">
      		<!-- Modal content-->
      		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">Agregar Categorías</h4>
        		</div>
        		<div class="modal-body">
          			<p>Sección para agregar categorías.</p>
          			<div id="sec3-cont" class="categos-modal">
          				<?php 
          				// Consultas para obtener todas las categorías de los vinos
          				$strCat = "SELECT * FROM categorias ORDER BY orden ASC";
          				$qryCat = mysqli_query($conexion, $strCat);
          				while ( $rowCat = mysqli_fetch_array($qryCat) ) {
          					$imgE1 = file_get_contents('img/Categorias/'.$rowCat['img']);
				    		$imgData1 = base64_encode($imgE1);
				    		$imgData1 = str_replace('dataimage/jpegbase64', '', $imgData1);

				    		$imgE2 = file_get_contents('img/Categorias/'.$rowCat['img_header']);
				    		$imgData2 = base64_encode($imgE2);
				    		$imgData2 = str_replace('dataimage/jpegbase64', '', $imgData2);
          					 ?>
							<div class="cont-catego">
	          				 	<h4 class="titulo-categoria" style="cursor: pointer;"><i class="ion-arrow-move"></i> <?php echo $rowCat['nombre'] ?></h4>
		          				<div class="catego-vino" style="display: none;">
		          					<div class="cont-del" style="z-index: 5;">
										<i class="del-icon ion-ios-close-outline"></i>
									</div>
		          					<div class="form-group">
									    <label for="">Nombre</label>
									    <input type="text" class="form-control nom-catego" placeholder="Categoría Especial" value="<?php echo $rowCat['nombre'] ?>">
									</div>
									<div class="form-group">
									    <label for="">Imagen Cortina (Dimensiones 810px x 250px)</label>
									    <img class="img-responsive img-in cort-catego" src="data:image/jpeg;base64,<?php echo $imgData1 ?>" alt="Imagen del producto">
									    <input class="in-file" type="file" accept="image/jpg, image/jpeg">
									</div>
									<div class="form-group">
									    <label for="">Imagen Header (Si no agrega ninguna se usará una imagen por defecto)</label>
									    <img class="img-responsive img-in header-catego" src="data:image/jpeg;base64,<?php echo $imgData2 ?>" alt="Imagen del producto">
									    <input class="in-file" type="file" accept="image/jpg, image/jpeg">
									</div>
									<hr>
		          				</div>
		          			</div>
	          			<?php 
	          			}
	          			 ?>

          			</div>
        		</div>
        		<div class="modal-footer">
        			<button id="btn-add-catego" type="button" class="btn btn-primary" style="display: inline-block; float: left;">Agregar Categoría</button>
          			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        		</div>
      		</div>
    	</div>
  	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="owl-carousel/owl.carousel.js"></script>
	<!-- jQuery UI -->
	<script src="../../js/jquery-ui.js"></script>

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
		}
		function activaDelSld() {
			$(".cont-del").click(function () {
  				$(this).parent().parent().remove();
  			});
		}
		function toggleCategory() {
    		// Script para el toggle de las categorías
    		$(".titulo-categoria").unbind("click");		// Remueve el evento click para evitar duplicados
    		$(".titulo-categoria").click(function (e) {
    			$(this).next().slideToggle();
    			e.preventDefault();
    			e.stopPropagation();
    		});
    	}
		function resetListeners() {
			activaInputFilePreview();
	    	activaDelSld();
		}

	    $(document).ready(function() {
	    	// Inialización de los eventos de la funciones
	    	resetListeners();
	    	toggleCategory();
	    	// Baja la cortina de los vinos
	    	$(".cover-fila-vinos").slideDown();
	    	// Código para ocultar / mostrar cortina
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
	    	$("#btn-add-catego").click(function () {
	    		$(".categos-modal").append('<div class="cont-catego">'+
	    										'<h4 class="titulo-categoria" style="cursor: pointer;"><i class="ion-arrow-move"></i>Nueva Categoría</h4>'+
						    					'<div class="catego-vino">'+
						    						'<div class="cont-del" style="z-index: 5;">'+
														'<i class="del-icon ion-ios-close-outline"></i>'+
													'</div>'+
						          					'<hr>'+
						          					'<div class="form-group">'+
													    '<label for="">Nombre</label>'+
													    '<input type="text" class="form-control nom-catego" placeholder="Categoría Especial">'+
													'</div>'+
													'<div class="form-group">'+
													    '<label for="">Imagen Cortina (Dimensiones 810px x 250px)</label>'+
													    '<img class="img-responsive img-in cort-catego" src="" alt="Imagen del producto">'+
													    '<input class="in-file" type="file" accept="image/jpg, image/jpeg">'+
													'</div>'+
													'<div class="form-group">'+
													    '<label for="">Imagen Header (Si no agrega ninguna se usará una imagen por defecto)</label>'+
													    '<img class="img-responsive img-in header-catego" src="" alt="Imagen del producto">'+
													    '<input class="in-file" type="file" accept="image/jpg, image/jpeg">'+
													'</div>'+
						          				'</div>'+
						          			'</div>');
	    		resetListeners();
	    		toggleCategory();
	    	});
	    	$("#btn-add-prod").click(function () {
			   	$.ajax({
			   		url: "addProdVinos.php",
			   		type: "POST",
			   		dataType: "json",
			   		data: { ip: "3213484923784" },
			   		success: function (datos) {
			   			console.log(datos);
			   			if ( datos.estatus == 'success' ) {
			   				$(".prod-modal").append(datos.html);
			   				resetListeners();
			   			} else {
			   				alert("Problemas al agregar producto, por favor inténtelo más tarde.");
			   			}
			   		},
			   		error: function (p1, p2, p3) {
			   			console.log(p3);
			   		}
			   	});
	    	});
	    	$("#btn-act-pagina").click(function () {
	    		var sec1 = { img: $("#sec1-img").attr("src") };		// Header
	    		var sec2 = { items: [] };							// Productos
	    		var sec3 = { items: [] };							// Categorías
	    		console.log(sec1);
	    		// Poblado Sección 2
	    		var numSec2 = $("#sec2-cont").find(".cont-prod").length;
	    		for (var i = 0; i < numSec2; i++) {
	    			var current = $("#sec2-cont").find(".cont-prod")[i];
	    			var nombre = $(current).find(".nom-prod").val();
	    			var categoria = $(current).find(".cat-prod").val();
	    			var img = $(current).find(".img-prod").attr("src");
	    			sec2.items.push({ nombre: nombre, categoria: categoria, img: img, orden: i });
	    		}
	    		console.log(sec2);
	    		// Poblado sección 3
	    		var numSec3 = $("#sec3-cont").find(".cont-catego").find(".catego-vino").length;
	    		for (var i = 0; i < numSec3; i++) {
	    			var current = $("#sec3-cont").find(".cont-catego").find(".catego-vino")[i];
	    			var nombre = $(current).find(".nom-catego").val();
	    			var cortina = $(current).find(".cort-catego").attr("src");
	    			var header = $(current).find(".header-catego").attr("src");
	    			sec3.items.push({ nombre: nombre, cortina: cortina, header: header });
	    		}
	    		console.log(sec3);
	    		$.when(
	    			$.ajax({
			    		url: "guardarVinosP1.php",
			    		type: "POST",
			    		dataType: "json",
			    		data: { sec1: sec1 },
			    		success: function (datos) {
			    			console.log(datos);
			    		},
			    		error: function (p1, p2, p3) {
			    			console.log(p3);
			    		}
			    	}),

			    	$.ajax({
			    		url: "guardarVinosP2.php",
			    		type: "POST",
			    		dataType: "json",
			    		data: { sec2: sec2 },
			    		success: function (datos) {
			    			console.log(datos);
			    		},
			    		error: function (p1, p2, p3) {
			    			console.log(p3);
			    		}
			    	}),

			    	$.ajax({
			    		url: "guardarVinosP3.php",
			    		type: "POST",
			    		dataType: "json",
			    		data: { sec3: sec3 },
			    		success: function (datos) {
			    			console.log(datos);
			    		},
			    		error: function (p1, p2, p3) {
			    			console.log(p3);
			    		}
			    	})
	    		).done(function (r1, r2, r3) {
	    			console.log(r1);
	    			console.log(r2);
	    			console.log(r2);
	    			if ( r1[1] == "success" && r2[1] == "success" && r3[1] == "success" ) {
	    				alert("Página actualizada correctamente.");
	    				window.location.href = "vinos.php";
	    			} else {
	    				alert("Problemas al actualizar la página.");
	    			}
	    		})
	    		.fail(function () {
	    			alert("Ha ocurrido un problema, por favor vuelva a intentarlo más tarde");
	    		});
	    	});

	    	

    		$( "#sec3-cont" ).sortable();
    		$( "#sec3-cont" ).disableSelection();

    		// TODO: Agregar el código modificado para eliminar categoría
	    });
	</script>
</body>
</html>