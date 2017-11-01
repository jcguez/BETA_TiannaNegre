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

	// // Sección 2 IMÁGENES ACEITE
	// // limpiar imágenes anteriores
	// $strClr2 = "SELECT * FROM detalles_aceite_img ORDER BY orden ASC";
	// $qryClr2 = mysqli_query($conexion, $strClr2);
	// while ( $rowClr2 = mysqli_fetch_array($qryClr2) ) {
	// 	unlink(UPLOAD_DIR.$rowClr2['img']);
	// }
	// $strTnc2 = "TRUNCATE TABLE detalles_aceite_img";
	// $qryTnc2 = mysqli_query($conexion, $strTnc2);
	// // agregar las nuevas imágenes
	// $numSec2 = sizeof($_POST['sec2']['items']);
	// for ($i=0; $i < $numSec2; $i++) { 
	// 	$name2 = "img_act_".$i."_".date("Y-m-d_H-i-s");
	// 	$strSec2 = "INSERT INTO detalles_aceite_img VALUES (NULL, 1, '".$name2.".jpg', ".$i.")";
	// 	$qrySec2 = mysqli_query($conexion, $strSec2);
	// 	saveImage($_POST['sec2']['items'][$i]['img'],$name2);
	// }

	// // Sección 3 DETALLES ACEITE
	// $strSec3 = "UPDATE detalles_aceite SET titulo1 = '".addslashes($_POST['sec3']['ttl1'])."', texto1 = '".addslashes($_POST['sec3']['txt1'])."', ";
	// $strSec3 .= " titulo2 = '".addslashes($_POST['sec3']['ttl2'])."', texto2 = '".addslashes($_POST['sec3']['txt2'])."', ";
	// $strSec3 .= " titulo3 = '".addslashes($_POST['sec3']['ttl3'])."', texto3 = '".addslashes($_POST['sec3']['txt3'])."', ";
	// $strSec3 .= " titulo4 = '".addslashes($_POST['sec3']['ttl4'])."', texto4 = '".addslashes($_POST['sec3']['txt4'])."', ";
	// $strSec3 .= " titulo5 = '".addslashes($_POST['sec3']['ttl5'])."', texto5 = '".addslashes($_POST['sec3']['txt5'])."' WHERE id = 1 ";
	// $qrySec3 = mysqli_query($conexion, $strSec3);

	// // Sección 4 PROCESOS ACEITE
	// // limpiar imágenes anteriores
	// $strClr4 = "SELECT * FROM procesos_aceite ORDER BY orden ASC ";
	// $qryClr4 = mysqli_query($conexion, $strClr4);
	// while ( $rowClr4 = mysqli_fetch_array($qryClr4) ) {
	// 	unlink(UPLOAD_DIR_PROC.$rowClr4['img']);
	// }
	// $strTnc4 = "TRUNCATE TABLE procesos_aceite";
	// $qryTnc4 = mysqli_query($conexion, $strTnc4);
	// // agregar imágenes nuevas 
	// $numSec4 = sizeof($_POST['sec4']['items']);
	// for ($i=0; $i < $numSec4; $i++) { 
	// 	$name4 = "aceite_proc_".$i."_".date("Y-m-d_H-i-s");
	// 	$strSec4 = "INSERT INTO procesos_aceite VALUES (NULL, '".$_POST['sec4']['items'][$i]['nombre']."', '".$name4.".jpg', ".$i.") ";
	// 	$qrySec4 = mysqli_query($conexion, $strSec4);
	// 	saveImageP($_POST['sec4']['items'][$i]['img'], $name4);
	// }
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