<?php 
// ******************** TODO: List *************************
// 					1.- Limpiar servidor de manera manual en todos los idiomas (borrar imágenes basura)
// *********************************************************
require_once 'conexion.php';
session_start();
// Cabecera para poder retornar un JSON
header('Content-Type: application/json');
// // NUNCA incluir esta línea en con los servidores de españa
// // ini_set('display_errors', 1); // NUNCA incluir esta línea en con los servidores de españa
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
define('UPLOAD_DIR_ES', 'img/Contacto/');
define('UPLOAD_DIR_EN', '../../en/admin/img/Contacto/');
define('UPLOAD_DIR_DE', '../../de/admin/img/Contacto/');
define('UPLOAD_DIR_CA', '../../ca/admin/img/Contacto/');

// Guardar imágenes JPEG
function saveImage($base64img, $fileName, $directory){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = $directory . $fileName . '.jpg';
	file_put_contents($file, $data);
}

// Function to clean the garbage of the server
function clearServer($table, $fields, $directory){
	global $conexion;
	$strClr = "SELECT ".$fields." FROM ".$table." ";
	$qryClr = mysqli_query($conexion, $strClr);
	while ( $rowClr = mysqli_fetch_array($qryClr) ) {
		@unlink($directory . $rowClr[$fields]);
	}
}

$result = array();
$error_flag = 0;

if ( !empty($_POST) ) {
	$dom = $_POST['dom'];
	$tel = $_POST['tel'];
	$mail = $_POST['mail'];
	$fb = $_POST['fb'];
	$tw = $_POST['tw'];
	$gp = $_POST['gp'];
	$be = $_POST['be'];
	$it = $_POST['it'];
	$img_header = $_POST['img_header'];

	// ******************************************************************************* { Sección español } *******************************************************************************
	// Consulta para actualizar la introducción
	$strIntro = "UPDATE introduccion_visitanos SET titulo='".$_POST['intro']['titulo']."', subtitulo='".$_POST['intro']['subtitulo']."', descripcion='".$_POST['intro']['descripcion']."', titulo_1='".$_POST['intro']['titulo_1']."', desc_1='".$_POST['intro']['desc_1']."', titulo_2='".$_POST['intro']['titulo_2']."', desc_2='".$_POST['intro']['desc_2']."'  ";
	$qryIntro = mysqli_query($conexion, $strIntro);

	$nameImg1 = "img_intro_1_".date("Y-m-d_H-i-s");
	if ( $_POST['intro']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('introduccion_visitanos', 'img_1', UPLOAD_DIR_ES);

		$strIntro = "UPDATE introduccion_visitanos SET img_1='".$nameImg1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strIntro);
		saveImage($_POST['intro']['img_1'], $nameImg1, UPLOAD_DIR_ES);
	}

	$nameImg2 = "img_intro_2_".date("Y-m-d_H-i-s");
	if ( $_POST['intro']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('introduccion_visitanos', 'img_2', UPLOAD_DIR_ES);

		$strIntro = "UPDATE introduccion_visitanos SET img_2='".$nameImg2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strIntro);
		saveImage($_POST['intro']['img_2'], $nameImg2, UPLOAD_DIR_ES);
	}

	// Consulta para actualizar las catas
	$strCata = "UPDATE catas_visitanos SET titulo='".$_POST['catas']['titulo']."', subtitulo='".$_POST['catas']['subtitulo']."', descripcion='".$_POST['catas']['descripcion']."', titulo_1='".$_POST['catas']['titulo_1']."', desc_1='".$_POST['catas']['desc_1']."', titulo_2='".$_POST['catas']['titulo_2']."', desc_2='".$_POST['catas']['desc_2']."', titulo_3='".$_POST['catas']['titulo_3']."', desc_3='".$_POST['catas']['desc_3']."' ";
	$qryIntro = mysqli_query($conexion, $strCata);

	$nameImgCata1 = "img_catas_1_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_1', UPLOAD_DIR_ES);

		$strCata = "UPDATE catas_visitanos SET img_1='".$nameImgCata1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_1'], $nameImgCata1, UPLOAD_DIR_ES);
	}

	$nameImgCata2 = "img_catas_2_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_2', UPLOAD_DIR_ES);

		$strCata = "UPDATE catas_visitanos SET img_2='".$nameImgCata2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_2'], $nameImgCata2, UPLOAD_DIR_ES);
	}

	$nameImgCata3 = "img_catas_3_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_3'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_3', UPLOAD_DIR_ES);

		$strCata = "UPDATE catas_visitanos SET img_3='".$nameImgCata3.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_3'], $nameImgCata3, UPLOAD_DIR_ES);
	}

	// Consulta para actualizar las reservaciones
	$strRes = "UPDATE reservaciones_visitanos SET titulo='".$_POST['reservaciones']['titulo']."', subtitulo='".$_POST['reservaciones']['subtitulo']."', descripcion='".$_POST['reservaciones']['descripcion']."', titulo_1='".$_POST['reservaciones']['titulo_1']."', desc_1='".$_POST['reservaciones']['desc_1']."', titulo_2='".$_POST['reservaciones']['titulo_2']."', desc_2='".$_POST['reservaciones']['desc_2']."'  ";
	$qryIntro = mysqli_query($conexion, $strRes);

	$nameImgRes1 = "img_reserva_1_".date("Y-m-d_H-i-s");
	if ( $_POST['reservaciones']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('reservaciones_visitanos', 'img_1', UPLOAD_DIR_ES);

		$strRes = "UPDATE reservaciones_visitanos SET img_1='".$nameImgRes1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strRes);
		saveImage($_POST['reservaciones']['img_1'], $nameImgRes1, UPLOAD_DIR_ES);
	}

	$nameImgRes2 = "img_reserva_2_".date("Y-m-d_H-i-s");
	if ( $_POST['reservaciones']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('reservaciones_visitanos', 'img_2', UPLOAD_DIR_ES);

		$strRes = "UPDATE reservaciones_visitanos SET img_2='".$nameImgRes2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strRes);
		saveImage($_POST['reservaciones']['img_2'], $nameImgRes2, UPLOAD_DIR_ES);
	}

	// Código para limpiar la anterior imágen de fondo del header
	$strClr0 = "SELECT * FROM header_contacto LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	$rowClr0 = mysqli_fetch_array($qryClr0);
	@unlink(UPLOAD_DIR_ES.$rowClr0['img']);

	$nombreImg = "headerBack".date("Y-m-d_H-i-s");
	$strImg = "UPDATE header_contacto SET img = '".$nombreImg.".jpg' WHERE id = 1 ";
	$qryImg = mysqli_query($conexion, $strImg);
	saveImage($img_header, $nombreImg, UPLOAD_DIR_ES);

	$strUpd = "UPDATE seccion_contacto SET domicilio = '".$dom."', telefono = '".$tel."', email = '".$mail."', fb = '".$fb."', tw = '".$tw."', gp = '".$gp."', be = '".$be."', it = '".$it."' WHERE id = 1 ";
	$qryUpd = mysqli_query($conexion, $strUpd);
	if ( $qryUpd ) {
		# code...
	} else {
		$error_flag++;
		$result['detalles'] = "Problemas al actualizar la información.";
	}

	// Código para los textos del formulario
	$strTxtForm = "UPDATE texto_formulario SET titulo = '".$_POST['texto_formulario']['titulo']."', subtitulo = '".$_POST['texto_formulario']['subtitulo']."' WHERE id = 1";
	$qryTxtForm = mysqli_query($conexion, $strTxtForm);

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
	// Consulta para actualizar la introducción
	$strIntro = "UPDATE introduccion_visitanos SET titulo='".$_POST['intro']['titulo']."', subtitulo='".$_POST['intro']['subtitulo']."', descripcion='".$_POST['intro']['descripcion']."', titulo_1='".$_POST['intro']['titulo_1']."', desc_1='".$_POST['intro']['desc_1']."', titulo_2='".$_POST['intro']['titulo_2']."', desc_2='".$_POST['intro']['desc_2']."'  ";
	$qryIntro = mysqli_query($conexion, $strIntro);

	$nameImg1 = "img_intro_1_".date("Y-m-d_H-i-s");
	if ( $_POST['intro']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('introduccion_visitanos', 'img_1', UPLOAD_DIR_EN);

		$strIntro = "UPDATE introduccion_visitanos SET img_1='".$nameImg1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strIntro);
		saveImage($_POST['intro']['img_1'], $nameImg1, UPLOAD_DIR_EN);
	}

	$nameImg2 = "img_intro_2_".date("Y-m-d_H-i-s");
	if ( $_POST['intro']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('introduccion_visitanos', 'img_2', UPLOAD_DIR_EN);

		$strIntro = "UPDATE introduccion_visitanos SET img_2='".$nameImg2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strIntro);
		saveImage($_POST['intro']['img_2'], $nameImg2, UPLOAD_DIR_EN);
	}

	// Consulta para actualizar las catas
	$strCata = "UPDATE catas_visitanos SET titulo='".$_POST['catas']['titulo']."', subtitulo='".$_POST['catas']['subtitulo']."', descripcion='".$_POST['catas']['descripcion']."', titulo_1='".$_POST['catas']['titulo_1']."', desc_1='".$_POST['catas']['desc_1']."', titulo_2='".$_POST['catas']['titulo_2']."', desc_2='".$_POST['catas']['desc_2']."', titulo_3='".$_POST['catas']['titulo_3']."', desc_3='".$_POST['catas']['desc_3']."' ";
	$qryIntro = mysqli_query($conexion, $strCata);

	$nameImgCata1 = "img_catas_1_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_1', UPLOAD_DIR_EN);

		$strCata = "UPDATE catas_visitanos SET img_1='".$nameImgCata1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_1'], $nameImgCata1, UPLOAD_DIR_EN);
	}

	$nameImgCata2 = "img_catas_2_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_2', UPLOAD_DIR_EN);

		$strCata = "UPDATE catas_visitanos SET img_2='".$nameImgCata2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_2'], $nameImgCata2, UPLOAD_DIR_EN);
	}

	$nameImgCata3 = "img_catas_3_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_3'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_3', UPLOAD_DIR_EN);

		$strCata = "UPDATE catas_visitanos SET img_3='".$nameImgCata3.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_3'], $nameImgCata3, UPLOAD_DIR_EN);
	}

	// Consulta para actualizar las reservaciones
	$strRes = "UPDATE reservaciones_visitanos SET titulo='".$_POST['reservaciones']['titulo']."', subtitulo='".$_POST['reservaciones']['subtitulo']."', descripcion='".$_POST['reservaciones']['descripcion']."', titulo_1='".$_POST['reservaciones']['titulo_1']."', desc_1='".$_POST['reservaciones']['desc_1']."', titulo_2='".$_POST['reservaciones']['titulo_2']."', desc_2='".$_POST['reservaciones']['desc_2']."'  ";
	$qryIntro = mysqli_query($conexion, $strRes);

	$nameImgRes1 = "img_reserva_1_".date("Y-m-d_H-i-s");
	if ( $_POST['reservaciones']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('reservaciones_visitanos', 'img_1', UPLOAD_DIR_EN);

		$strRes = "UPDATE reservaciones_visitanos SET img_1='".$nameImgRes1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strRes);
		saveImage($_POST['reservaciones']['img_1'], $nameImgRes1, UPLOAD_DIR_EN);
	}

	$nameImgRes2 = "img_reserva_2_".date("Y-m-d_H-i-s");
	if ( $_POST['reservaciones']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('reservaciones_visitanos', 'img_2', UPLOAD_DIR_EN);

		$strRes = "UPDATE reservaciones_visitanos SET img_2='".$nameImgRes2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strRes);
		saveImage($_POST['reservaciones']['img_2'], $nameImgRes2, UPLOAD_DIR_EN);
	}

	// Código para limpiar la anterior imágen de fondo del header
	$strClr0 = "SELECT * FROM header_contacto LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	$rowClr0 = mysqli_fetch_array($qryClr0);
	@unlink(UPLOAD_DIR_EN . $rowClr0['img']);

	$nombreImg = "headerBack".date("Y-m-d_H-i-s");
	$strImg = "UPDATE header_contacto SET img = '".$nombreImg.".jpg' WHERE id = 1 ";
	$qryImg = mysqli_query($conexion, $strImg);
	saveImage($img_header, $nombreImg, UPLOAD_DIR_EN);

	$strUpd = "UPDATE seccion_contacto SET domicilio = '".$dom."', telefono = '".$tel."', email = '".$mail."', fb = '".$fb."', tw = '".$tw."', gp = '".$gp."', be = '".$be."', it = '".$it."' WHERE id = 1 ";
	$qryUpd = mysqli_query($conexion, $strUpd);
	if ( $qryUpd ) {
		# code...
	} else {
		$error_flag++;
		$result['detalles'] = "Problemas al actualizar la información.";
	}

	// Código para los textos del formulario
	$strTxtForm = "UPDATE texto_formulario SET titulo = '".$_POST['texto_formulario']['titulo']."', subtitulo = '".$_POST['texto_formulario']['subtitulo']."' WHERE id = 1";
	$qryTxtForm = mysqli_query($conexion, $strTxtForm);

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
	// Consulta para actualizar la introducción
	$strIntro = "UPDATE introduccion_visitanos SET titulo='".$_POST['intro']['titulo']."', subtitulo='".$_POST['intro']['subtitulo']."', descripcion='".$_POST['intro']['descripcion']."', titulo_1='".$_POST['intro']['titulo_1']."', desc_1='".$_POST['intro']['desc_1']."', titulo_2='".$_POST['intro']['titulo_2']."', desc_2='".$_POST['intro']['desc_2']."'  ";
	$qryIntro = mysqli_query($conexion, $strIntro);

	$nameImg1 = "img_intro_1_".date("Y-m-d_H-i-s");
	if ( $_POST['intro']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('introduccion_visitanos', 'img_1', UPLOAD_DIR_DE);

		$strIntro = "UPDATE introduccion_visitanos SET img_1='".$nameImg1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strIntro);
		saveImage($_POST['intro']['img_1'], $nameImg1, UPLOAD_DIR_DE);
	}

	$nameImg2 = "img_intro_2_".date("Y-m-d_H-i-s");
	if ( $_POST['intro']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('introduccion_visitanos', 'img_2', UPLOAD_DIR_DE);

		$strIntro = "UPDATE introduccion_visitanos SET img_2='".$nameImg2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strIntro);
		saveImage($_POST['intro']['img_2'], $nameImg2, UPLOAD_DIR_DE);
	}

	// Consulta para actualizar las catas
	$strCata = "UPDATE catas_visitanos SET titulo='".$_POST['catas']['titulo']."', subtitulo='".$_POST['catas']['subtitulo']."', descripcion='".$_POST['catas']['descripcion']."', titulo_1='".$_POST['catas']['titulo_1']."', desc_1='".$_POST['catas']['desc_1']."', titulo_2='".$_POST['catas']['titulo_2']."', desc_2='".$_POST['catas']['desc_2']."', titulo_3='".$_POST['catas']['titulo_3']."', desc_3='".$_POST['catas']['desc_3']."' ";
	$qryIntro = mysqli_query($conexion, $strCata);

	$nameImgCata1 = "img_catas_1_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_1', UPLOAD_DIR_DE);

		$strCata = "UPDATE catas_visitanos SET img_1='".$nameImgCata1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_1'], $nameImgCata1, UPLOAD_DIR_DE);
	}

	$nameImgCata2 = "img_catas_2_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_2', UPLOAD_DIR_DE);

		$strCata = "UPDATE catas_visitanos SET img_2='".$nameImgCata2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_2'], $nameImgCata2, UPLOAD_DIR_DE);
	}

	$nameImgCata3 = "img_catas_3_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_3'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_3', UPLOAD_DIR_DE);

		$strCata = "UPDATE catas_visitanos SET img_3='".$nameImgCata3.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_3'], $nameImgCata3, UPLOAD_DIR_DE);
	}

	// Consulta para actualizar las reservaciones
	$strRes = "UPDATE reservaciones_visitanos SET titulo='".$_POST['reservaciones']['titulo']."', subtitulo='".$_POST['reservaciones']['subtitulo']."', descripcion='".$_POST['reservaciones']['descripcion']."', titulo_1='".$_POST['reservaciones']['titulo_1']."', desc_1='".$_POST['reservaciones']['desc_1']."', titulo_2='".$_POST['reservaciones']['titulo_2']."', desc_2='".$_POST['reservaciones']['desc_2']."'  ";
	$qryIntro = mysqli_query($conexion, $strRes);

	$nameImgRes1 = "img_reserva_1_".date("Y-m-d_H-i-s");
	if ( $_POST['reservaciones']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('reservaciones_visitanos', 'img_1', UPLOAD_DIR_DE);

		$strRes = "UPDATE reservaciones_visitanos SET img_1='".$nameImgRes1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strRes);
		saveImage($_POST['reservaciones']['img_1'], $nameImgRes1, UPLOAD_DIR_DE);
	}

	$nameImgRes2 = "img_reserva_2_".date("Y-m-d_H-i-s");
	if ( $_POST['reservaciones']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('reservaciones_visitanos', 'img_2', UPLOAD_DIR_DE);

		$strRes = "UPDATE reservaciones_visitanos SET img_2='".$nameImgRes2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strRes);
		saveImage($_POST['reservaciones']['img_2'], $nameImgRes2, UPLOAD_DIR_DE);
	}

	// Código para limpiar la anterior imágen de fondo del header
	$strClr0 = "SELECT * FROM header_contacto LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	$rowClr0 = mysqli_fetch_array($qryClr0);
	@unlink(UPLOAD_DIR_DE . $rowClr0['img']);

	$nombreImg = "headerBack".date("Y-m-d_H-i-s");
	$strImg = "UPDATE header_contacto SET img = '".$nombreImg.".jpg' WHERE id = 1 ";
	$qryImg = mysqli_query($conexion, $strImg);
	saveImage($img_header, $nombreImg, UPLOAD_DIR_DE);

	$strUpd = "UPDATE seccion_contacto SET domicilio = '".$dom."', telefono = '".$tel."', email = '".$mail."', fb = '".$fb."', tw = '".$tw."', gp = '".$gp."', be = '".$be."', it = '".$it."' WHERE id = 1 ";
	$qryUpd = mysqli_query($conexion, $strUpd);
	if ( $qryUpd ) {
		# code...
	} else {
		$error_flag++;
		$result['detalles'] = "Problemas al actualizar la información.";
	}

	// Código para los textos del formulario
	$strTxtForm = "UPDATE texto_formulario SET titulo = '".$_POST['texto_formulario']['titulo']."', subtitulo = '".$_POST['texto_formulario']['subtitulo']."' WHERE id = 1";
	$qryTxtForm = mysqli_query($conexion, $strTxtForm);

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
	// Consulta para actualizar la introducción
	$strIntro = "UPDATE introduccion_visitanos SET titulo='".$_POST['intro']['titulo']."', subtitulo='".$_POST['intro']['subtitulo']."', descripcion='".$_POST['intro']['descripcion']."', titulo_1='".$_POST['intro']['titulo_1']."', desc_1='".$_POST['intro']['desc_1']."', titulo_2='".$_POST['intro']['titulo_2']."', desc_2='".$_POST['intro']['desc_2']."'  ";
	$qryIntro = mysqli_query($conexion, $strIntro);

	$nameImg1 = "img_intro_1_".date("Y-m-d_H-i-s");
	if ( $_POST['intro']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('introduccion_visitanos', 'img_1', UPLOAD_DIR_CA);

		$strIntro = "UPDATE introduccion_visitanos SET img_1='".$nameImg1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strIntro);
		saveImage($_POST['intro']['img_1'], $nameImg1, UPLOAD_DIR_CA);
	}

	$nameImg2 = "img_intro_2_".date("Y-m-d_H-i-s");
	if ( $_POST['intro']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('introduccion_visitanos', 'img_2', UPLOAD_DIR_CA);

		$strIntro = "UPDATE introduccion_visitanos SET img_2='".$nameImg2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strIntro);
		saveImage($_POST['intro']['img_2'], $nameImg2, UPLOAD_DIR_CA);
	}

	// Consulta para actualizar las catas
	$strCata = "UPDATE catas_visitanos SET titulo='".$_POST['catas']['titulo']."', subtitulo='".$_POST['catas']['subtitulo']."', descripcion='".$_POST['catas']['descripcion']."', titulo_1='".$_POST['catas']['titulo_1']."', desc_1='".$_POST['catas']['desc_1']."', titulo_2='".$_POST['catas']['titulo_2']."', desc_2='".$_POST['catas']['desc_2']."', titulo_3='".$_POST['catas']['titulo_3']."', desc_3='".$_POST['catas']['desc_3']."' ";
	$qryIntro = mysqli_query($conexion, $strCata);

	$nameImgCata1 = "img_catas_1_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_1', UPLOAD_DIR_CA);

		$strCata = "UPDATE catas_visitanos SET img_1='".$nameImgCata1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_1'], $nameImgCata1, UPLOAD_DIR_CA);
	}

	$nameImgCata2 = "img_catas_2_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_2', UPLOAD_DIR_CA);

		$strCata = "UPDATE catas_visitanos SET img_2='".$nameImgCata2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_2'], $nameImgCata2, UPLOAD_DIR_CA);
	}

	$nameImgCata3 = "img_catas_3_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_3'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('catas_visitanos', 'img_3', UPLOAD_DIR_CA);

		$strCata = "UPDATE catas_visitanos SET img_3='".$nameImgCata3.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_3'], $nameImgCata3, UPLOAD_DIR_CA);
	}

	// Consulta para actualizar las reservaciones
	$strRes = "UPDATE reservaciones_visitanos SET titulo='".$_POST['reservaciones']['titulo']."', subtitulo='".$_POST['reservaciones']['subtitulo']."', descripcion='".$_POST['reservaciones']['descripcion']."', titulo_1='".$_POST['reservaciones']['titulo_1']."', desc_1='".$_POST['reservaciones']['desc_1']."', titulo_2='".$_POST['reservaciones']['titulo_2']."', desc_2='".$_POST['reservaciones']['desc_2']."'  ";
	$qryIntro = mysqli_query($conexion, $strRes);

	$nameImgRes1 = "img_reserva_1_".date("Y-m-d_H-i-s");
	if ( $_POST['reservaciones']['img_1'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('reservaciones_visitanos', 'img_1', UPLOAD_DIR_CA);

		$strRes = "UPDATE reservaciones_visitanos SET img_1='".$nameImgRes1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strRes);
		saveImage($_POST['reservaciones']['img_1'], $nameImgRes1, UPLOAD_DIR_CA);
	}

	$nameImgRes2 = "img_reserva_2_".date("Y-m-d_H-i-s");
	if ( $_POST['reservaciones']['img_2'] != "data:image/jpeg;base64," ) {
		// Función para limpiar el servidor
		clearServer('reservaciones_visitanos', 'img_2', UPLOAD_DIR_CA);

		$strRes = "UPDATE reservaciones_visitanos SET img_2='".$nameImgRes2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strRes);
		saveImage($_POST['reservaciones']['img_2'], $nameImgRes2, UPLOAD_DIR_CA);
	}

	// Código para limpiar la anterior imágen de fondo del header
	$strClr0 = "SELECT * FROM header_contacto LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	$rowClr0 = mysqli_fetch_array($qryClr0);
	@unlink(UPLOAD_DIR_CA . $rowClr0['img']);

	$nombreImg = "headerBack".date("Y-m-d_H-i-s");
	$strImg = "UPDATE header_contacto SET img = '".$nombreImg.".jpg' WHERE id = 1 ";
	$qryImg = mysqli_query($conexion, $strImg);
	saveImage($img_header, $nombreImg, UPLOAD_DIR_CA);

	$strUpd = "UPDATE seccion_contacto SET domicilio = '".$dom."', telefono = '".$tel."', email = '".$mail."', fb = '".$fb."', tw = '".$tw."', gp = '".$gp."', be = '".$be."', it = '".$it."' WHERE id = 1 ";
	$qryUpd = mysqli_query($conexion, $strUpd);
	if ( $qryUpd ) {
		# code...
	} else {
		$error_flag++;
		$result['detalles'] = "Problemas al actualizar la información.";
	}

	// Código para los textos del formulario
	$strTxtForm = "UPDATE texto_formulario SET titulo = '".$_POST['texto_formulario']['titulo']."', subtitulo = '".$_POST['texto_formulario']['subtitulo']."' WHERE id = 1";
	$qryTxtForm = mysqli_query($conexion, $strTxtForm);

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
	$result['estatus'] = "fail 1:".mysqli_error($conexion)." - ";
	echo json_encode($result);

}


 ?>