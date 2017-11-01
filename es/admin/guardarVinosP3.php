<?php 
require_once 'conexion.php';
session_start();
// Cabecera para poder retornar un JSON
header('Content-Type: application/json');
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
define('UPLOAD_DIR_ES', 'img/Categorias/');
define('UPLOAD_DIR_EN', '../../en/admin/img/Categorias/');
define('UPLOAD_DIR_DE', '../../de/admin/img/Categorias/');
define('UPLOAD_DIR_CA', '../../ca/admin/img/Categorias/');
// Guardar imágenes JPEG
function saveImage($base64img, $fileName, $directory){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = $directory . $fileName . '.jpg';
	file_put_contents($file, $data);
}
$result = array();
$error_flag = 0;
if ( !empty($_POST) ) {
	// ******************************************************************************* { Sección español } *******************************************************************************
	// Sección 3 Categorías
	// limpiar imágenes de las categorías
	$strClr3 = "SELECT * FROM categorias ORDER BY orden ASC";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		unlink(UPLOAD_DIR_ES . $rowClr3['img']);
		unlink(UPLOAD_DIR_ES . $rowClr3['img_header']);
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
		saveImage($_POST['sec3']['items'][$i]['cortina'], $name3, UPLOAD_DIR_ES);
		saveImage($_POST['sec3']['items'][$i]['header'], $name3_1, UPLOAD_DIR_ES);
	}
	mysqli_close($conexion);

	// ******************************************************************************* { Sección inglés } *******************************************************************************
	$host_name  = "localhost";
	$database   = "admin_tianna_en";
	$user_name  = "gemmagarcia_en";
	$password   = "z0a6Gq1^";

	// $host_name  = "localhost";
 //    $database   = "admin_tianna_en";
 //    $user_name  = "root";
 //    $password   = "root";

    $conexion = mysqli_connect($host_name, $user_name, $password, $database) or die("No se pudo conectar con la BD");
    $cotejamiento = mysqli_set_charset($conexion, "utf8");

	// Sección 3 Categorías
	// limpiar imágenes de las categorías
	$strClr3 = "SELECT * FROM categorias ORDER BY orden ASC";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		unlink(UPLOAD_DIR_EN . $rowClr3['img']);
		unlink(UPLOAD_DIR_EN . $rowClr3['img_header']);
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
		saveImage($_POST['sec3']['items'][$i]['cortina'], $name3, UPLOAD_DIR_EN);
		saveImage($_POST['sec3']['items'][$i]['header'], $name3_1, UPLOAD_DIR_EN);
	}
	mysqli_close($conexion);

	// ******************************************************************************* { Sección alemán } *******************************************************************************
	$host_name  = "localhost";
	$database   = "admin_tianna_de";
	$user_name  = "gemmagarcia_de";
	$password   = "z0a6Gq1^";

	// $host_name  = "localhost";
 //    $database   = "admin_tianna_de";
 //    $user_name  = "root";
 //    $password   = "root";

    $conexion = mysqli_connect($host_name, $user_name, $password, $database) or die("No se pudo conectar con la BD");
    $cotejamiento = mysqli_set_charset($conexion, "utf8");

	// Sección 3 Categorías
	// limpiar imágenes de las categorías
	$strClr3 = "SELECT * FROM categorias ORDER BY orden ASC";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		unlink(UPLOAD_DIR_DE . $rowClr3['img']);
		unlink(UPLOAD_DIR_DE . $rowClr3['img_header']);
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
		saveImage($_POST['sec3']['items'][$i]['cortina'], $name3, UPLOAD_DIR_DE);
		saveImage($_POST['sec3']['items'][$i]['header'], $name3_1, UPLOAD_DIR_DE);
	}
	mysqli_close($conexion);

	// ******************************************************************************* { Sección catalán } *******************************************************************************
	$host_name  = "localhost";
	$database   = "admin_tianna_ca";
	$user_name  = "gemmagarcia_ca";
	$password   = "z0a6Gq1^";

	// $host_name  = "localhost";
 //    $database   = "admin_tianna_ca";
 //    $user_name  = "root";
 //    $password   = "root";

    $conexion = mysqli_connect($host_name, $user_name, $password, $database) or die("No se pudo conectar con la BD");
    $cotejamiento = mysqli_set_charset($conexion, "utf8");

	// Sección 3 Categorías
	// limpiar imágenes de las categorías
	$strClr3 = "SELECT * FROM categorias ORDER BY orden ASC";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		unlink(UPLOAD_DIR_CA . $rowClr3['img']);
		unlink(UPLOAD_DIR_CA . $rowClr3['img_header']);
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
		saveImage($_POST['sec3']['items'][$i]['cortina'], $name3, UPLOAD_DIR_CA);
		saveImage($_POST['sec3']['items'][$i]['header'], $name3_1, UPLOAD_DIR_CA);
	}
	mysqli_close($conexion);

	// ******************************************************************************* { Reconexión } *******************************************************************************
	$host_name  = "localhost";
	$database   = "admin_tianna_es";
	$user_name  = "gemmagarcia_es";
	$password   = "z0a6Gq1^";

	// $host_name  = "localhost";
 //    $database   = "admin_tianna_es";
 //    $user_name  = "root";
 //    $password   = "root";

    $conexion = mysqli_connect($host_name, $user_name, $password, $database) or die("No se pudo conectar con la BD");
    $cotejamiento = mysqli_set_charset($conexion, "utf8");

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