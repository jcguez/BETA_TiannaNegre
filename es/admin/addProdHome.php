<?php 
require_once 'conexion.php';
session_start();

// Cabecera para poder retornar un JSON
header('Content-Type: application/json');

// // NUNCA incluir esta línea en con los servidores de españa
// // ini_set('display_errors', 1); // NUNCA incluir esta línea en con los servidores de españa
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
// define('UPLOAD_DIR', 'img/rejilla/');
// // Guardar imágenes PNG
// function saveImage($base64img, $fileName){
// 	$base64img = str_replace('data:image/png;base64,', '', $base64img);
// 	$data = base64_decode($base64img);
// 	$file = UPLOAD_DIR . $fileName . '.png';
// 	file_put_contents($file, $data);
// }
// // Guardar imágenes JPEG
// function saveImage($base64img, $fileName){
// 	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
// 	$data = base64_decode($base64img);
// 	$file = UPLOAD_DIR . $fileName . '.jpg';
// 	file_put_contents($file, $data);
// }

$result = array();
$error_flag = 0;

if ( !empty($_POST) ) {
	if ( !empty($_POST['key']) ) { 
		$result['html'] = '<div class="prod-item col-md-3" style="position: relative;">
							<div class="cont-del">
								<i class="del-icon ion-ios-close-outline"></i>
							</div>
							<label for="">Seleccione un producto</label>
							<img src="" alt="" class="img-responsive center-block" style="max-height: 200px;">
							<select name="" id="" class="sel-prod">';
								// Consulta para obtener todos los productos
								$strSld = "SELECT * FROM productos ORDER BY orden ASC";
								$qrySld = mysqli_query($conexion, $strSld);
								while ( $rowSld = mysqli_fetch_array($qrySld) ) {
									$current = '';
									if ( $rowSld['id'] == $rowSldF['id_prod'] ) {
										$current = ' selected ';
									}
									$result['html'] .= '<option value="'.$rowSld['id'].'" '.$current.'>'.$rowSld['nombre'].'</option>';
								}
							$result['html'] .= '</select>
						</div>';
	} else {
		$error_flag++;
		$result['detalles'] = "Problemas recibir la información.";
	}

} else {
	$error_flag++;
	$result['detalles'] = "Problemas al enviar la información.";
}

if ( $error_flag == 0 ) {
	$result['estatus'] = "success";
	echo json_encode($result);
} else {
	$result['estatus'] = "fail 1:".mysqli_error($conexion)." - ";
	echo json_encode($result);

}


 ?>