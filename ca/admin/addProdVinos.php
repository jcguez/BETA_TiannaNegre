<?php 
require_once 'conexion.php';
session_start();
// Cabecera para poder retornar un JSON 
header('Content-Type: application/json');
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');

$result = array();
$error_flag = 0;
if ( !empty($_POST) ) {
		$result['html'] = '<div class="cont-prod row">
          					<hr>
          					<div class="form-group col-md-12 col-sm-12" style="overflow: hidden; position: relative;">
          						<div class="cont-del">
									<i class="del-icon ion-ios-close-outline"></i>
								</div>
							    <label for="">Nombre</label>
							    <input type="text" class="form-control nom-prod" placeholder="Vino Especial" value="">
							    <label for="">Categoría</label>
							    <select name="" id="" class="form-control cat-prod">';
							    	// Consulta para obtener la categoría del producto
							    	$strProdCat = "SELECT * FROM categorias ORDER BY orden ASC";
							    	$qryProdCat = mysqli_query($conexion, $strProdCat);
							    	while ( $rowProdCat = mysqli_fetch_array($qryProdCat) ) {
							    		$result['html'] .= '<option value="'.$rowProdCat['id'].'" '.$current.'>'.$rowProdCat['nombre'].'</option>';
							    	}
							    $result['html'] .= '</select>
							    <label for="">Imagen</label>
							    <img class="img-responsive center-block img-in img-prod" src="" alt="Imagen del producto">
							    <input class="in-file" type="file" accept="image/png">
							</div>
          				</div>';
} else {
	$error_flag++;
	$result['detalles'] = "Problemas al enviar la información.";
}
if ( $error_flag == 0 ) {
	$result['estatus'] = "success";
	echo json_encode($result);
} else {
	$result['estatus'] = "fail";
	echo json_encode($result);
}

 ?>