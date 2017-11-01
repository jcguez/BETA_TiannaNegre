<?php 
require_once 'conexion.php';
session_start();

// Cabecera para poder retornar un JSON
header('Content-Type: application/json');

error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
define('UPLOAD_DIR', 'img/Bodegas/');
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

$result = array();
$error_flag = 0;

if ( !empty($_POST) ) {
	// Eliminar el header anterior
	$strClr0 = "SELECT * FROM header_bodegas LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	while ( $rowClr0 = mysqli_fetch_array($qryClr0) ) {
		// unlink(UPLOAD_DIR.$rowClr0['img']);
		// if ( unlink(UPLOAD_DIR.$rowClr0['img']) ) {
		// 	#
		// } else {
		// 	$error_flag++;
		// 	$result['detalles'] = "Problemas al limpiar la información.1";
		// }
		// if ( unlink(UPLOAD_DIR.$rowClr0['img']) ) {
		// 	#
		// } else {
		// 	$error_flag++;
		// 	$result['detalles'] = "Problemas al limpiar la información.2";
		// }
		unlink(UPLOAD_DIR.$rowClr0['img']);
	}
	// Actualiza Header
	$nameH = "head_bodegas_".date("Y-m-d_H-i-s");
	$strHeader = "UPDATE header_bodegas SET img = '".$nameH.".jpg' WHERE id = 1 ";
	$qryHeader = mysqli_query($conexion, $strHeader);
	saveImage($_POST['head']['img'], $nameH);
	// Actualiza la sección 1 de bodegas
	$titulo = $_POST['sec1']['titulo'];
	$subtitulo = $_POST['sec1']['subtitulo'];
	$txt_izq = $_POST['sec1']['txt_izq'];
	$txt_der = $_POST['sec1']['txt_der'];
	// Consulta para procesar la información
	$strSec1 = "UPDATE sec_1_bodegas SET titulo = '".$titulo."', subtitulo = '".$subtitulo."', parrafo1 = '".$txt_izq."', parrafo2 = '".$txt_der."'  WHERE id = 1 ";
	$qrySec1 = mysqli_query($conexion, $strSec1);
	// if ( $qrySec1 ) {
	// 	# code...
	// } else {
	// 	$error_flag++;
	// 	$result['detalles'] = "Error al actualizar parte de la información.";
	// }

	// Actualiza la sección 2 de bodegas
	// Limpieza Previa
	$strClr2 = "SELECT * FROM sld_2_bodegas ";
	$qryClr2 = mysqli_query($conexion, $strClr2);
	while ( $rowClr2 = mysqli_fetch_array($qryClr2) ) {
		if ( unlink(UPLOAD_DIR.$rowClr2['img']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.2";
		}
	}
	$strTnc = "TRUNCATE TABLE sld_2_bodegas";
	$qryTnc = mysqli_query($conexion, $strTnc);
	// Titulos
	$titulo2 = $_POST['sec2']['titulo'];
	$subtitulo2 = $_POST['sec2']['subtitulo'];
	$strHead2 = "UPDATE sec_2_bodegas SET titulo = '".$titulo2."', subtitulo = '".$subtitulo2."' WHERE id = 1 ";
	$qryHead2 = mysqli_query($conexion, $strHead2);
	// Imágenes Slider
	$numSec2 = sizeof($_POST['sec2']['items']);
	for ($i=0; $i < $numSec2; $i++) { 
		$name = "sld_bodegas_".$i."_".date("Y-m-d_H-i-s");
		$strSec2 = "INSERT INTO sld_2_bodegas VALUES ( NULL, 'Imagen bodegas', '".$name.".jpg', ".$i." )";
		$qrySec2 = mysqli_query($conexion, $strSec2);
		saveImage($_POST['sec2']['items'][$i]['img'], $name);
	}
	// Actualiza la sección 3 de bodegas
	$strClr3 = "SELECT * FROM sec_3_bodegas LIMIT 1";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		if ( unlink(UPLOAD_DIR.$rowClr3['img_1']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.3";
		}
		if ( unlink(UPLOAD_DIR.$rowClr3['img_2']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.4";
		}
		if ( unlink(UPLOAD_DIR.$rowClr3['img_3']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.5";
		}
	}
	$name1 = "sec3_img_1_".date("Y-m-d_H-i-s");
	$name2 = "sec3_img_2_".date("Y-m-d_H-i-s");
	$name3 = "sec3_img_3_".date("Y-m-d_H-i-s");
	// Datos Sección 3
	$strSec3 = "UPDATE sec_3_bodegas SET titulo = '".$_POST['sec3']['titulo']."', subtitulo = '".$_POST['sec3']['subtitulo']."', img_1 = '".$name1.".jpg', ttl_1 = '".$_POST['sec3']['items'][0]['titulo']."', txt_1 = '".$_POST['sec3']['items'][0]['texto']."', img_2 = '".$name2.".jpg', ttl_2 = '".$_POST['sec3']['items'][1]['titulo']."', txt_2 = '".$_POST['sec3']['items'][1]['texto']."', img_3 = '".$name3.".jpg', ttl_3 = '".$_POST['sec3']['items'][2]['titulo']."', txt_3 = '".$_POST['sec3']['items'][2]['texto']."' WHERE id = 1 ";
	$qrySec3 = mysqli_query($conexion, $strSec3);
	saveImage($_POST['sec3']['items'][0]['img'], $name1);
	saveImage($_POST['sec3']['items'][1]['img'], $name2);
	saveImage($_POST['sec3']['items'][2]['img'], $name3);
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