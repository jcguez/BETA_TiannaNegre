<?php 
require_once 'conexion.php';
session_start();
// Cabecera para poder retornar un JSON
header('Content-Type: application/json');
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
define('UPLOAD_DIR', 'img/Vinos/');
// define('UPLOAD_DIR_PROC', 'img/Aceite/Procesos/');
// // Guardar imágenes PNG
// function saveImagePNG($base64img, $fileName){
// 	$base64img = str_replace('data:image/png;base64,', '', $base64img);
// 	$data = base64_decode($base64img);
// 	$file = UPLOAD_DIR . $fileName . '.png';
// 	file_put_contents($file, $data);
// }
// Guardar imágenes JPEG
function saveImage($base64img, $fileName){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = UPLOAD_DIR . $fileName . '.jpg';
	file_put_contents($file, $data);
}
// Guardar imágenes JPEG
// function saveImageP($base64img, $fileName){
// 	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
// 	$data = base64_decode($base64img);
// 	$file = UPLOAD_DIR_PROC . $fileName . '.jpg';
// 	file_put_contents($file, $data);
// }
$result = array();
$error_flag = 0;
if ( !empty($_POST) ) {
	// Sección 1 HEADER
	// limpiar el header anterior
	$strClr1 = "SELECT * FROM header_vinos LIMIT 1";
	$qryClr1 = mysqli_query($conexion, $strClr1);
	while ( $rowClr1 = mysqli_fetch_array($qryClr1) ) {
		if ( $rowClr1['img'] != "FondoTN.jpg" ) {
			unlink(UPLOAD_DIR.$rowClr1['img']);
		}
	}
	// agregar el nuevo header
	$name1 = "header_vinos_".date("Y-m-d_H-i-s");
	$strSec1 = "UPDATE header_vinos SET img = '".$name1.".jpg' WHERE id = 1";
	$qrySec1 = mysqli_query($conexion, $strSec1);
	saveImage($_POST['sec1']['img'], $name1);
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