<?php 
require_once 'conexion.php';
session_start();
// Cabecera para poder retornar un JSON
header('Content-Type: application/json');
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
define('UPLOAD_DIR', 'img/Vinos/');
// Guardar imágenes PNG
function saveImagePNG($base64img, $fileName){
	$base64img = str_replace('data:image/png;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = UPLOAD_DIR . $fileName . '.png';
	file_put_contents($file, $data);
}
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
	// Sección 2 Productos
	// limpiar imágnes de
	$strClr2 = "SELECT * FROM productos ORDER BY orden ASC";
	$qryClr2 = mysqli_query($conexion, $strClr2);
	while ( $rowClr2 = mysqli_fetch_array($qryClr2) ) {
		unlink(UPLOAD_DIR.$rowClr2['img']);
	}
	// limpiar la tabla
	$strTnc2 = "TRUNCATE TABLE productos";
	$qryTnc2 = mysqli_query($conexion, $strTnc2);
	// agregar productos
	$numSec2 = sizeof($_POST['sec2']['items']);
	for ($i=0; $i < $numSec2; $i++) { 
		$name2 = 'prod_'.$i."_".date("Y-m-d_H-i-s");
		$strSec2 = "INSERT INTO productos VALUES ( NULL, '".$_POST['sec2']['items'][$i]['nombre']."', ".$_POST['sec2']['items'][$i]['categoria'].", '".$name2.".png', ".$i.")";
		$qrySec2 = mysqli_query($conexion, $strSec2);
		saveImagePNG($_POST['sec2']['items'][$i]['img'], $name2);
	}
} else {
	$error_flag++;
	$result['detalles'] = "Problemas al enviar la información.";
}
if ( $error_flag == 0 ) {
	$result['estatus'] = "success";
	// $result['sec1_detalles'] = $strSec1;
	// $result['sec2_detalles'] = $strSec2;
	$result['sec3_detalles'] = $strSec3;
	// $result['sec4_detalles'] = $strSec4;
	// $result['detalles3'] = $_POST['sec4']['images'][0]['img'];
	echo json_encode($result);
} else {
	$result['estatus'] = "fail";
	echo json_encode($result);
}

 ?>