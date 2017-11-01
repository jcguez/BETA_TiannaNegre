<?php 
require_once 'conexion.php';
session_start();
// Cabecera para poder retornar un JSON
header('Content-Type: application/json');
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
define('UPLOAD_DIR_ES', 'img/ImasD/');
define('UPLOAD_DIR_EN', '../../en/admin/img/ImasD/');
define('UPLOAD_DIR_DE', '../../de/admin/img/ImasD/');
define('UPLOAD_DIR_CA', '../../ca/admin/img/ImasD/');

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
	// Eliminar el header anterior
	$strClr0 = "SELECT * FROM header_imasd LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	while ( $rowClr0 = mysqli_fetch_array($qryClr0) ) {
		unlink(UPLOAD_DIR_ES.$rowClr0['img']);
	}
	// Actualiza Header
	$nameH = "head_imasd_".date("Y-m-d_H-i-s");
	$strHeader = "UPDATE header_imasd SET img = '".$nameH.".jpg' WHERE id = 1 ";
	$qryHeader = mysqli_query($conexion, $strHeader);
	saveImage($_POST['head']['img'], $nameH, UPLOAD_DIR_ES);
	// Actualiza la sección 1 de imasd
	$titulo = $_POST['sec1']['titulo'];
	$subtitulo = $_POST['sec1']['subtitulo'];
	$txt_izq = $_POST['sec1']['txt_izq'];
	$txt_der = $_POST['sec1']['txt_der'];
	// Consulta para procesar la información
	$strSec1 = "UPDATE sec_1_imasd SET titulo = '".$titulo."', subtitulo = '".$subtitulo."', parrafo1 = '".$txt_izq."', parrafo2 = '".$txt_der."'  WHERE id = 1 ";
	$qrySec1 = mysqli_query($conexion, $strSec1);

	// Actualiza la sección 2 de imasd
	// Limpieza Previa
	$strClr2 = "SELECT * FROM sld_2_imasd ";
	$qryClr2 = mysqli_query($conexion, $strClr2);
	while ( $rowClr2 = mysqli_fetch_array($qryClr2) ) {
		if ( unlink(UPLOAD_DIR_ES.$rowClr2['img']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.2";
		}
	}
	$strTnc = "TRUNCATE TABLE sld_2_imasd";
	$qryTnc = mysqli_query($conexion, $strTnc);
	// Titulos
	$titulo2 = $_POST['sec2']['titulo'];
	$subtitulo2 = $_POST['sec2']['subtitulo'];
	$strHead2 = "UPDATE sec_2_imasd SET titulo = '".$titulo2."', subtitulo = '".$subtitulo2."' WHERE id = 1 ";
	$qryHead2 = mysqli_query($conexion, $strHead2);
	// Imágenes Slider
	$numSec2 = sizeof($_POST['sec2']['items']);
	for ($i=0; $i < $numSec2; $i++) { 
		$name = "sld_imasd_".$i."_".date("Y-m-d_H-i-s");
		$strSec2 = "INSERT INTO sld_2_imasd VALUES ( NULL, 'Imagen imasd', '".$name.".jpg', ".$i." )";
		$qrySec2 = mysqli_query($conexion, $strSec2);
		saveImage($_POST['sec2']['items'][$i]['img'], $name, UPLOAD_DIR_ES);
	}
	// Actualiza la sección 3 de imasd
	$strClr3 = "SELECT * FROM sec_3_imasd LIMIT 1";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		if ( unlink(UPLOAD_DIR_ES.$rowClr3['img_1']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.3";
		}
		if ( unlink(UPLOAD_DIR_ES.$rowClr3['img_2']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.4";
		}
		if ( unlink(UPLOAD_DIR_ES.$rowClr3['img_3']) ) {
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
	$strSec3 = "UPDATE sec_3_imasd SET titulo = '".$_POST['sec3']['titulo']."', subtitulo = '".$_POST['sec3']['subtitulo']."', img_1 = '".$name1.".jpg', ttl_1 = '".$_POST['sec3']['items'][0]['titulo']."', txt_1 = '".$_POST['sec3']['items'][0]['texto']."', img_2 = '".$name2.".jpg', ttl_2 = '".$_POST['sec3']['items'][1]['titulo']."', txt_2 = '".$_POST['sec3']['items'][1]['texto']."', img_3 = '".$name3.".jpg', ttl_3 = '".$_POST['sec3']['items'][2]['titulo']."', txt_3 = '".$_POST['sec3']['items'][2]['texto']."' WHERE id = 1 ";
	$qrySec3 = mysqli_query($conexion, $strSec3);
	saveImage($_POST['sec3']['items'][0]['img'], $name1, UPLOAD_DIR_ES);
	saveImage($_POST['sec3']['items'][1]['img'], $name2, UPLOAD_DIR_ES);
	saveImage($_POST['sec3']['items'][2]['img'], $name3, UPLOAD_DIR_ES);

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

	// Eliminar el header anterior
	$strClr0 = "SELECT * FROM header_imasd LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	while ( $rowClr0 = mysqli_fetch_array($qryClr0) ) {
		unlink(UPLOAD_DIR_EN . $rowClr0['img']);
	}
	// Actualiza Header
	$nameH = "head_imasd_".date("Y-m-d_H-i-s");
	$strHeader = "UPDATE header_imasd SET img = '".$nameH.".jpg' WHERE id = 1 ";
	$qryHeader = mysqli_query($conexion, $strHeader);
	saveImage($_POST['head']['img'], $nameH, UPLOAD_DIR_EN);

	// Actualiza la sección 2 de imasd
	// Limpieza Previa
	$strClr2 = "SELECT * FROM sld_2_imasd ";
	$qryClr2 = mysqli_query($conexion, $strClr2);
	while ( $rowClr2 = mysqli_fetch_array($qryClr2) ) {
		if ( unlink(UPLOAD_DIR_EN.$rowClr2['img']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.2";
		}
	}
	$strTnc = "TRUNCATE TABLE sld_2_imasd";
	$qryTnc = mysqli_query($conexion, $strTnc);
	// Imágenes Slider
	$numSec2 = sizeof($_POST['sec2']['items']);
	for ($i=0; $i < $numSec2; $i++) { 
		$name = "sld_imasd_".$i."_".date("Y-m-d_H-i-s");
		$strSec2 = "INSERT INTO sld_2_imasd VALUES ( NULL, 'Imagen imasd', '".$name.".jpg', ".$i." )";
		$qrySec2 = mysqli_query($conexion, $strSec2);
		saveImage($_POST['sec2']['items'][$i]['img'], $name, UPLOAD_DIR_EN);
	}
	// Actualiza la sección 3 de imasd
	$strClr3 = "SELECT * FROM sec_3_imasd LIMIT 1";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		if ( unlink(UPLOAD_DIR_EN.$rowClr3['img_1']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.3";
		}
		if ( unlink(UPLOAD_DIR_EN.$rowClr3['img_2']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.4";
		}
		if ( unlink(UPLOAD_DIR_EN.$rowClr3['img_3']) ) {
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
	$strSec3 = "UPDATE sec_3_imasd SET img_1 = '".$name1.".jpg', img_2 = '".$name2.".jpg', img_3 = '".$name3.".jpg' WHERE id = 1 ";
	$qrySec3 = mysqli_query($conexion, $strSec3);
	saveImage($_POST['sec3']['items'][0]['img'], $name1, UPLOAD_DIR_EN);
	saveImage($_POST['sec3']['items'][1]['img'], $name2, UPLOAD_DIR_EN);
	saveImage($_POST['sec3']['items'][2]['img'], $name3, UPLOAD_DIR_EN);

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

	// Eliminar el header anterior
	$strClr0 = "SELECT * FROM header_imasd LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	while ( $rowClr0 = mysqli_fetch_array($qryClr0) ) {
		unlink(UPLOAD_DIR_DE . $rowClr0['img']);
	}
	// Actualiza Header
	$nameH = "head_imasd_".date("Y-m-d_H-i-s");
	$strHeader = "UPDATE header_imasd SET img = '".$nameH.".jpg' WHERE id = 1 ";
	$qryHeader = mysqli_query($conexion, $strHeader);
	saveImage($_POST['head']['img'], $nameH, UPLOAD_DIR_DE);

	// Actualiza la sección 2 de imasd
	// Limpieza Previa
	$strClr2 = "SELECT * FROM sld_2_imasd ";
	$qryClr2 = mysqli_query($conexion, $strClr2);
	while ( $rowClr2 = mysqli_fetch_array($qryClr2) ) {
		if ( unlink(UPLOAD_DIR_DE.$rowClr2['img']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.2";
		}
	}
	$strTnc = "TRUNCATE TABLE sld_2_imasd";
	$qryTnc = mysqli_query($conexion, $strTnc);
	// Imágenes Slider
	$numSec2 = sizeof($_POST['sec2']['items']);
	for ($i=0; $i < $numSec2; $i++) { 
		$name = "sld_imasd_".$i."_".date("Y-m-d_H-i-s");
		$strSec2 = "INSERT INTO sld_2_imasd VALUES ( NULL, 'Imagen imasd', '".$name.".jpg', ".$i." )";
		$qrySec2 = mysqli_query($conexion, $strSec2);
		saveImage($_POST['sec2']['items'][$i]['img'], $name, UPLOAD_DIR_DE);
	}
	// Actualiza la sección 3 de imasd
	$strClr3 = "SELECT * FROM sec_3_imasd LIMIT 1";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		if ( unlink(UPLOAD_DIR_DE.$rowClr3['img_1']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.3";
		}
		if ( unlink(UPLOAD_DIR_DE.$rowClr3['img_2']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.4";
		}
		if ( unlink(UPLOAD_DIR_DE.$rowClr3['img_3']) ) {
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
	$strSec3 = "UPDATE sec_3_imasd SET img_1 = '".$name1.".jpg', img_2 = '".$name2.".jpg', img_3 = '".$name3.".jpg' WHERE id = 1 ";
	$qrySec3 = mysqli_query($conexion, $strSec3);
	saveImage($_POST['sec3']['items'][0]['img'], $name1, UPLOAD_DIR_DE);
	saveImage($_POST['sec3']['items'][1]['img'], $name2, UPLOAD_DIR_DE);
	saveImage($_POST['sec3']['items'][2]['img'], $name3, UPLOAD_DIR_DE);

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

	// Eliminar el header anterior
	$strClr0 = "SELECT * FROM header_imasd LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	while ( $rowClr0 = mysqli_fetch_array($qryClr0) ) {
		unlink(UPLOAD_DIR_CA . $rowClr0['img']);
	}
	// Actualiza Header
	$nameH = "head_imasd_".date("Y-m-d_H-i-s");
	$strHeader = "UPDATE header_imasd SET img = '".$nameH.".jpg' WHERE id = 1 ";
	$qryHeader = mysqli_query($conexion, $strHeader);
	saveImage($_POST['head']['img'], $nameH, UPLOAD_DIR_CA);

	// Actualiza la sección 2 de imasd
	// Limpieza Previa
	$strClr2 = "SELECT * FROM sld_2_imasd ";
	$qryClr2 = mysqli_query($conexion, $strClr2);
	while ( $rowClr2 = mysqli_fetch_array($qryClr2) ) {
		if ( unlink(UPLOAD_DIR_CA.$rowClr2['img']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.2";
		}
	}
	$strTnc = "TRUNCATE TABLE sld_2_imasd";
	$qryTnc = mysqli_query($conexion, $strTnc);
	// Imágenes Slider
	$numSec2 = sizeof($_POST['sec2']['items']);
	for ($i=0; $i < $numSec2; $i++) { 
		$name = "sld_imasd_".$i."_".date("Y-m-d_H-i-s");
		$strSec2 = "INSERT INTO sld_2_imasd VALUES ( NULL, 'Imagen imasd', '".$name.".jpg', ".$i." )";
		$qrySec2 = mysqli_query($conexion, $strSec2);
		saveImage($_POST['sec2']['items'][$i]['img'], $name, UPLOAD_DIR_CA);
	}
	// Actualiza la sección 3 de imasd
	$strClr3 = "SELECT * FROM sec_3_imasd LIMIT 1";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		if ( unlink(UPLOAD_DIR_CA.$rowClr3['img_1']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.3";
		}
		if ( unlink(UPLOAD_DIR_CA.$rowClr3['img_2']) ) {
			#
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas al limpiar la información.4";
		}
		if ( unlink(UPLOAD_DIR_CA.$rowClr3['img_3']) ) {
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
	$strSec3 = "UPDATE sec_3_imasd SET img_1 = '".$name1.".jpg', img_2 = '".$name2.".jpg', img_3 = '".$name3.".jpg' WHERE id = 1 ";
	$qrySec3 = mysqli_query($conexion, $strSec3);
	saveImage($_POST['sec3']['items'][0]['img'], $name1, UPLOAD_DIR_CA);
	saveImage($_POST['sec3']['items'][1]['img'], $name2, UPLOAD_DIR_CA);
	saveImage($_POST['sec3']['items'][2]['img'], $name3, UPLOAD_DIR_CA);

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