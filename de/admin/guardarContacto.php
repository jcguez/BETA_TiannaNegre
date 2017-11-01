<?php 
// ******************** TODO: List *************************
// 					1.- Limpiar servidor
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
define('UPLOAD_DIR', 'img/Contacto/');
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
	$dom = $_POST['dom'];
	$tel = $_POST['tel'];
	$mail = $_POST['mail'];
	$fb = $_POST['fb'];
	$tw = $_POST['tw'];
	$gp = $_POST['gp'];
	$be = $_POST['be'];
	$it = $_POST['it'];
	$img_header = $_POST['img_header'];

	// Consulta para actualizar la introducción
	$strIntro = "UPDATE introduccion_visitanos SET titulo='".$_POST['intro']['titulo']."', subtitulo='".$_POST['intro']['subtitulo']."', descripcion='".$_POST['intro']['descripcion']."', titulo_1='".$_POST['intro']['titulo_1']."', desc_1='".$_POST['intro']['desc_1']."', titulo_2='".$_POST['intro']['titulo_2']."', desc_2='".$_POST['intro']['desc_2']."'  ";
	$qryIntro = mysqli_query($conexion, $strIntro);

	$nameImg1 = "img_intro_1_".date("Y-m-d_H-i-s");
	if ( $_POST['intro']['img_1'] != "data:image/jpeg;base64," ) {
		$strIntro = "UPDATE introduccion_visitanos SET img_1='".$nameImg1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strIntro);
		saveImage($_POST['intro']['img_1'], $nameImg1);
	}

	$nameImg2 = "img_intro_2_".date("Y-m-d_H-i-s");
	if ( $_POST['intro']['img_2'] != "data:image/jpeg;base64," ) {
		$strIntro = "UPDATE introduccion_visitanos SET img_2='".$nameImg2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strIntro);
		saveImage($_POST['intro']['img_2'], $nameImg2);
	}

	// Consulta para actualizar las catas
	$strCata = "UPDATE catas_visitanos SET titulo='".$_POST['catas']['titulo']."', subtitulo='".$_POST['catas']['subtitulo']."', descripcion='".$_POST['catas']['descripcion']."', titulo_1='".$_POST['catas']['titulo_1']."', desc_1='".$_POST['catas']['desc_1']."', titulo_2='".$_POST['catas']['titulo_2']."', desc_2='".$_POST['catas']['desc_2']."', titulo_3='".$_POST['catas']['titulo_3']."', desc_3='".$_POST['catas']['desc_3']."' ";
	$qryIntro = mysqli_query($conexion, $strCata);

	$nameImgCata1 = "img_catas_1_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_1'] != "data:image/jpeg;base64," ) {
		$strCata = "UPDATE catas_visitanos SET img_1='".$nameImgCata1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_1'], $nameImgCata1);
	}

	$nameImgCata2 = "img_catas_2_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_2'] != "data:image/jpeg;base64," ) {
		$strCata = "UPDATE catas_visitanos SET img_2='".$nameImgCata2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_2'], $nameImgCata2);
	}

	$nameImgCata3 = "img_catas_3_".date("Y-m-d_H-i-s");
	if ( $_POST['catas']['img_3'] != "data:image/jpeg;base64," ) {
		$strCata = "UPDATE catas_visitanos SET img_3='".$nameImgCata3.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strCata);
		saveImage($_POST['catas']['img_3'], $nameImgCata3);
	}

	// Consulta para actualizar las reservaciones
	$strRes = "UPDATE reservaciones_visitanos SET titulo='".$_POST['reservaciones']['titulo']."', subtitulo='".$_POST['reservaciones']['subtitulo']."', descripcion='".$_POST['reservaciones']['descripcion']."', titulo_1='".$_POST['reservaciones']['titulo_1']."', desc_1='".$_POST['reservaciones']['desc_1']."', titulo_2='".$_POST['reservaciones']['titulo_2']."', desc_2='".$_POST['reservaciones']['desc_2']."'  ";
	$qryIntro = mysqli_query($conexion, $strRes);

	$nameImgRes1 = "img_reserva_1_".date("Y-m-d_H-i-s");
	if ( $_POST['reservaciones']['img_1'] != "data:image/jpeg;base64," ) {
		$strRes = "UPDATE reservaciones_visitanos SET img_1='".$nameImgRes1.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strRes);
		saveImage($_POST['reservaciones']['img_1'], $nameImgRes1);
	}

	$nameImgRes2 = "img_reserva_2_".date("Y-m-d_H-i-s");
	if ( $_POST['reservaciones']['img_2'] != "data:image/jpeg;base64," ) {
		$strRes = "UPDATE reservaciones_visitanos SET img_2='".$nameImgRes2.".jpg' ";
		$qryIntro = mysqli_query($conexion, $strRes);
		saveImage($_POST['reservaciones']['img_2'], $nameImgRes2);
	}

	// Código para limpiar la anterior imágen de fondo del header
	$strClr0 = "SELECT * FROM header_contacto LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	$rowClr0 = mysqli_fetch_array($qryClr0);
	@unlink(UPLOAD_DIR.$rowClr0['img']);

	$nombreImg = "headerBack".date("Y-m-d_H-i-s");
	$strImg = "UPDATE header_contacto SET img = '".$nombreImg.".jpg' WHERE id = 1 ";
	$qryImg = mysqli_query($conexion, $strImg);
	saveImage($img_header, $nombreImg);

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