<?php 
require_once 'conexion.php';
session_start();
// Cabecera para poder retornar un JSON
header('Content-Type: application/json');
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
define('UPLOAD_DIR', 'img/Categorias/');
// Guardar imágenes JPEG
function saveImage($base64img, $fileName){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = UPLOAD_DIR . $fileName . '.jpg';
	file_put_contents($file, $data);
}
$result = array();
$error_flag = 0;
if ( !empty($_POST) ) {
	// Sección 3 Categorías
	// limpiar imágenes de las categorías
	$strClr3 = "SELECT * FROM categorias ORDER BY orden ASC";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		unlink(UPLOAD_DIR.$rowClr3['img']);
		unlink(UPLOAD_DIR.$rowClr3['img_header']);
	}
	// vaciar la tabla de las categorias
	$strTnc3 = "TRUNCATE TABLE categorias";
	$qryTnc3 = mysqli_query($conexion, $strTnc3);
	// agregar  nuevas categorias
	$numSec3 = sizeof($_POST['sec3']['items']);
	for ($i=0; $i < $numSec3; $i++) { 
		$name3 = "categoria_".$i."_".date("Y-m-d_H-i-s");
		$name3_1 = "categoria_head_".$i."_".date("Y-m-d_H-i-s");
		$strSec3 = "INSERT INTO categorias VALUES (NULL, '".$_POST['sec3']['items'][$i]['nombre']."', '".$name3.".jpg', '".$name3_1.".jpg', ".$i.")";
		$qrySec3 = mysqli_query($conexion, $strSec3);
		saveImage($_POST['sec3']['items'][$i]['cortina'], $name3);
		saveImage($_POST['sec3']['items'][$i]['header'], $name3_1);
	}
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