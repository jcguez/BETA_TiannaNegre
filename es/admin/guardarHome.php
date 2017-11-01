<?php 
// TODO LIST: 
// * 1.- Agregar funciones para limpiar la base de datos.
// * 2.- Agregar funciones para subir archivos.
// * 3.- Cerrar conexiones de db.
// * 4.- Agragar las constantes para las rutas de los archivos.
// * 5.- Verificar si es necesario reescribir las funciones para la subida de archivos.
require_once 'conexion.php';
session_start();
@ini_set( 'upload_max_size' , '22M' );
@ini_set( 'post_max_size', '23M');
@ini_set( 'memory_limit', '25M' );
// Cabecera para poder retornar un JSON
header('Content-Type: application/json');
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// Ruta para guardar los archivos ES
define('UPLOAD_DIR_ES', 'img/Equipo/');
define('UPLOAD_DIR_T_ES', 'img/Tiendas/');
define('UPLOAD_DIR_VIDEO_ES', '../video/');
define('UPLOAD_DIR_SLIDE_ES', 'img/');
// Ruta para guardar los archivos EN
define('UPLOAD_DIR_EN', '../../en/admin/img/Equipo/');
define('UPLOAD_DIR_T_EN', '../../en/admin/img/Tiendas/');
define('UPLOAD_DIR_VIDEO_EN', '../../en/video/');
define('UPLOAD_DIR_SLIDE_EN', '../../en/admin/img/');
// Ruta para guardar los archivos DE
define('UPLOAD_DIR_DE', '../../de/admin/img/Equipo/');
define('UPLOAD_DIR_T_DE', '../../de/admin/img/Tiendas/');
define('UPLOAD_DIR_VIDEO_DE', '../../de/video/');
define('UPLOAD_DIR_SLIDE_DE', '../../de/admin/img/');
// Ruta para guardar los archivos CA
define('UPLOAD_DIR_CA', '../../ca/admin/img/Equipo/');
define('UPLOAD_DIR_T_CA', '../../ca/admin/img/Tiendas/');
define('UPLOAD_DIR_VIDEO_CA', '../../ca/video/');
define('UPLOAD_DIR_SLIDE_CA', '../../ca/admin/img/');
// // Guardar imágenes PNG
// function saveImagePNG($base64img, $fileName){
// 	$base64img = str_replace('data:image/png;base64,', '', $base64img);
// 	$data = base64_decode($base64img);
// 	$file = UPLOAD_DIR . $fileName . '.png';
// 	file_put_contents($file, $data);
// }
// Guardar imágenes JPEG SLIDER
function saveImageSld($base64img, $fileName, $directory){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = $directory . $fileName . '.jpg';
	file_put_contents($file, $data);
}
// Guardar imágenes JPEG
function saveImage($base64img, $fileName, $directory){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = $directory . $fileName . '.jpg';
	file_put_contents($file, $data);
}
// TIENDA Guardar imágenes JPEG 
function saveImageT($base64img, $fileName, $directory){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = $directory . $fileName . '.jpg';
	file_put_contents($file, $data);
}
// Guardar Video Header 
function saveVideo($base64img, $fileName, $directory){
	$base64img = str_replace('data:video/mp4;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = $directory . $fileName . '.mp4';
	file_put_contents($file, $data);
}
// Guardar Imagen Video
function saveVideoImg($base64img, $fileName, $directory){
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
	// ******************************************************************************* { Sección español } *******************************************************************************
	// Sección 1
	// Borra video anterior
	$strClr0 = "SELECT * FROM video_inicio LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	$rowClr0 = mysqli_fetch_array($qryClr0);
	// Elimina anterior video
	unlink(UPLOAD_DIR_VIDEO_ES.$rowClr0['nombre']);
	// Elimina anterior imagen del video para versión responsive
	unlink(UPLOAD_DIR_VIDEO_ES.$rowClr0['enlace']);
	// Actualiza video nuevo e imagen responsive
	$nombreVideo = "videoHomeBack".date("Y-m-d_H-i-s");
	$nombreImg = "imagenVideo".date("Y-m-d_H-i-s");
	$strVideo = "UPDATE video_inicio SET nombre = '".$nombreVideo.".mp4', enlace = '".$nombreImg.".jpg' ";
	$qryVideo = mysqli_query($conexion, $strVideo);
	saveVideo($_POST['sec1']['video'], $nombreVideo, UPLOAD_DIR_VIDEO_ES);
	saveVideoImg($_POST['sec1']['video_responsive'], $nombreImg, UPLOAD_DIR_VIDEO_ES);
	// limpiar anterior Slider
	$strClr1 = "TRUNCATE TABLE slider_principal";
	$qryClr1 = mysqli_query($conexion, $strClr1);
	// agrega nuevos items
	$numSec1 = sizeof($_POST['sec1']['items']);
	for ($i=0; $i < $numSec1; $i++) { 
		$nameSld = "img_slide_".$i."_".date("Y-m-d_H-i-s");
		$strSld = "INSERT INTO slider_principal VALUES (NULL, '- -', '".$nameSld.".jpg', ".$i.") ";
		$qrySld = mysqli_query($conexion, $strSld);

		saveImageSld($_POST['sec1']['items'][$i]['img'], $nameSld, UPLOAD_DIR_SLIDE_ES);
	}
	// Actualiza switch
	$strSwt = "UPDATE switch_header SET tipo_header = ".$_POST['sec1']['switch'];
	$qrySwt = mysqli_query($conexion, $strSwt);

	// Sección 2
	$_POST['sec2']['link'] = str_replace("560", "100%", $_POST['sec2']['link']);
	$strSec2 = "UPDATE seccion_video SET titulo = '".$_POST['sec2']['titulo']."', descripcion = '".$_POST['sec2']['texto']."', ruta = '".$_POST['sec2']['link']."' WHERE id = 1";
	$qrySec2 = mysqli_query($conexion, $strSec2);

	// Sección 3
	// se usa el valor de 3 porque sólo hay 3 integrantes en el equipo
	$strClr3 = "SELECT * FROM seccion_equipo ORDER BY id ASC ";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		unlink(UPLOAD_DIR_ES.$rowClr3['img']);
	}
	for ($i=0; $i < 3; $i++) { 
		$name3 = "img_equipo_".$i."_".date("Y-m-d_H-i-s");
		$strSec3 = "UPDATE seccion_equipo SET nombre = '".$_POST['sec3']['itemsTexto'][$i]['nombre']."', img = '".$name3.".jpg', descripcion = '".$_POST['sec3']['itemsTexto'][$i]['texto']."' WHERE id = ".($i+1);
		$qrySec3 = mysqli_query($conexion, $strSec3);
		saveImage($_POST['sec3']['itemsImg'][$i]['img'], $name3, UPLOAD_DIR_ES);
	}

	// Sección 4
	// limpiar textos tiendas
	$strClr4_1 = "TRUNCATE TABLE seccion_tiendas";
	$qryClr4_1 = mysqli_query($conexion, $strClr4_1);
	// textos tiendas
	$numSec4_1 = sizeof($_POST['sec4']['tiendas']);
	for ($i=0; $i < $numSec4_1; $i++) { 
		$strTxt4 = "INSERT INTO seccion_tiendas VALUES (NULL, '".$_POST['sec4']['tiendas'][$i]['titulo']."', '".$_POST['sec4']['tiendas'][$i]['texto']."') ";
		$qryTxt4 = mysqli_query($conexion, $strTxt4);
	}
	// limpiar imágenes de tiendas del servidor
	clearServer('seccion_tiendas_img', 'img', UPLOAD_DIR_T_ES);
	// limpiar imágenes de tiendas
	$strClr4_2 = "TRUNCATE TABLE seccion_tiendas_img ";
	$qryClr4_2 = mysqli_query($conexion, $strClr4_2);
	// imágenes tiendas
	$numSec4_2 = sizeof($_POST['sec4']['images']);
	for ($i=0; $i < $numSec4_2; $i++) { 
		$name4 = "img_tiendas_".$i;
		$strImg4 = "INSERT INTO seccion_tiendas_img VALUES (NULL, 'Imagen Bodegas', '".$name4.".jpg', ".$i.")";
		$qryImg4 = mysqli_query($conexion, $strImg4);
		saveImageT($_POST['sec4']['images'][$i]['img'], $name4, UPLOAD_DIR_T_ES);
	}

	// Sección 5
	$strSec5 = "UPDATE banner_home SET slogan = '".$_POST['sec5']['texto']."', txt_btn = '".$_POST['sec5']['texto_btn']."', link_btn = '".$_POST['sec5']['link_btn']."' WHERE id = 1";
	$qrySec5 = mysqli_query($conexion, $strSec5);

	// Sección 6
	// se actualizan los titulos de la seccion
	$strSec6_1 = "UPDATE seccion_productos SET titulo = '".$_POST['sec6']['titulo']."', descripcion = '".$_POST['sec6']['texto']."' WHERE id = 1";
	$qrySec6_1 = mysqli_query($conexion, $strSec6_1);
	// limpia la tabla de los productos
	$strClr6 = "TRUNCATE TABLE seccion_productos_slider";
	$qryClr6 = mysqli_query($conexion, $strClr6);
	// agrega los nuevos productos al slider
	$numSec6 = sizeof($_POST['sec6']['items']);
	for ($i=0; $i < $numSec6; $i++) { 
		$strProd = "INSERT INTO seccion_productos_slider VALUES (NULL, ".$_POST['sec6']['items'][$i]['prod'].", ".$_POST['sec6']['items'][$i]['orden'].") ";
		$qryProd = mysqli_query($conexion, $strProd);
	}

	// Sección 7
	// Limpia la tabla del slider txt
	$strClr7 = "TRUNCATE TABLE text_slider_top";
	$qryClr7 = mysqli_query($conexion, $strClr7);
	// Agrega nuevos slider
	$numSec7 = sizeof($_POST['sec7']['items']);
	for ($i=0; $i < $numSec7; $i++) { 
		$strTxtSld = "INSERT INTO text_slider_top VALUES (NULL, '".$_POST['sec7']['items'][$i]['nombre']."', ".$i.")";
		$qryTxtSld = mysqli_query($conexion, $strTxtSld);
	}

	// Sección 8 (botón visitanos)
	$strBtn = "UPDATE btn_visitas_catas SET texto = '".$_POST['sec8']['texto']."', link = '".$_POST['sec8']['link']."' WHERE id = 1 ";
	$qryBtn = mysqli_query($conexion, $strBtn);

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

	// Sección 1
	// Borra video anterior
	$strClr0 = "SELECT * FROM video_inicio LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	$rowClr0 = mysqli_fetch_array($qryClr0);
	// Elimina anterior video
	unlink(UPLOAD_DIR_VIDEO_EN.$rowClr0['nombre']);
	// Elimina anterior imagen del video para versión responsive
	unlink(UPLOAD_DIR_VIDEO_EN.$rowClr0['enlace']);
	// Actualiza video nuevo e imagen responsive
	$nombreVideo = "videoHomeBack".date("Y-m-d_H-i-s");
	$nombreImg = "imagenVideo".date("Y-m-d_H-i-s");
	$strVideo = "UPDATE video_inicio SET nombre = '".$nombreVideo.".mp4', enlace = '".$nombreImg.".jpg' ";
	$qryVideo = mysqli_query($conexion, $strVideo);
	saveVideo($_POST['sec1']['video'], $nombreVideo, UPLOAD_DIR_VIDEO_EN);
	saveVideoImg($_POST['sec1']['video_responsive'], $nombreImg, UPLOAD_DIR_VIDEO_EN);
	// limpiar anterior Slider
	$strClr1 = "TRUNCATE TABLE slider_principal";
	$qryClr1 = mysqli_query($conexion, $strClr1);
	// agrega nuevos items
	$numSec1 = sizeof($_POST['sec1']['items']);
	for ($i=0; $i < $numSec1; $i++) { 
		$nameSld = "img_slide_".$i."_".date("Y-m-d_H-i-s");
		$strSld = "INSERT INTO slider_principal VALUES (NULL, '- -', '".$nameSld.".jpg', ".$i.") ";
		$qrySld = mysqli_query($conexion, $strSld);

		saveImageSld($_POST['sec1']['items'][$i]['img'], $nameSld, UPLOAD_DIR_SLIDE_EN);
	}
	// Actualiza switch
	$strSwt = "UPDATE switch_header SET tipo_header = ".$_POST['sec1']['switch'];
	$qrySwt = mysqli_query($conexion, $strSwt);

	// Sección 3
	// se usa el valor de 3 porque sólo hay 3 integrantes en el equipo
	$strClr3 = "SELECT * FROM seccion_equipo ORDER BY id ASC ";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		unlink(UPLOAD_DIR_EN.$rowClr3['img']);
	}
	for ($i=0; $i < 3; $i++) { 
		$name3 = "img_equipo_".$i."_".date("Y-m-d_H-i-s");
		$strSec3 = "UPDATE seccion_equipo SET img = '".$name3.".jpg' WHERE id = ".($i+1);
		$qrySec3 = mysqli_query($conexion, $strSec3);
		saveImage($_POST['sec3']['itemsImg'][$i]['img'], $name3, UPLOAD_DIR_EN);
	}

	// Sección 4
	// limpiar imágenes de tiendas del servidor
	clearServer('seccion_tiendas_img', 'img', UPLOAD_DIR_T_EN);
	// limpiar imágenes de tiendas
	$strClr4_2 = "TRUNCATE TABLE seccion_tiendas_img ";
	$qryClr4_2 = mysqli_query($conexion, $strClr4_2);
	// imágenes tiendas
	$numSec4_2 = sizeof($_POST['sec4']['images']);
	for ($i=0; $i < $numSec4_2; $i++) { 
		$name4 = "img_tiendas_".$i;
		$strImg4 = "INSERT INTO seccion_tiendas_img VALUES (NULL, 'Imagen Bodegas Tianna Negre', '".$name4.".jpg', ".$i.")";
		$qryImg4 = mysqli_query($conexion, $strImg4);
		saveImageT($_POST['sec4']['images'][$i]['img'], $name4, UPLOAD_DIR_T_EN);
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

	// Sección 1
	// Borra video anterior
	$strClr0 = "SELECT * FROM video_inicio LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	$rowClr0 = mysqli_fetch_array($qryClr0);
	// Elimina anterior video
	unlink(UPLOAD_DIR_VIDEO_DE.$rowClr0['nombre']);
	// Elimina anterior imagen del video para versión responsive
	unlink(UPLOAD_DIR_VIDEO_DE.$rowClr0['enlace']);
	// Actualiza video nuevo e imagen responsive
	$nombreVideo = "videoHomeBack".date("Y-m-d_H-i-s");
	$nombreImg = "imagenVideo".date("Y-m-d_H-i-s");
	$strVideo = "UPDATE video_inicio SET nombre = '".$nombreVideo.".mp4', enlace = '".$nombreImg.".jpg' ";
	$qryVideo = mysqli_query($conexion, $strVideo);
	saveVideo($_POST['sec1']['video'], $nombreVideo, UPLOAD_DIR_VIDEO_DE);
	saveVideoImg($_POST['sec1']['video_responsive'], $nombreImg, UPLOAD_DIR_VIDEO_DE);
	// limpiar anterior Slider
	$strClr1 = "TRUNCATE TABLE slider_principal";
	$qryClr1 = mysqli_query($conexion, $strClr1);
	// agrega nuevos items
	$numSec1 = sizeof($_POST['sec1']['items']);
	for ($i=0; $i < $numSec1; $i++) { 
		$nameSld = "img_slide_".$i."_".date("Y-m-d_H-i-s");
		$strSld = "INSERT INTO slider_principal VALUES (NULL, '- -', '".$nameSld.".jpg', ".$i.") ";
		$qrySld = mysqli_query($conexion, $strSld);

		saveImageSld($_POST['sec1']['items'][$i]['img'], $nameSld, UPLOAD_DIR_SLIDE_DE);
	}
	// Actualiza switch
	$strSwt = "UPDATE switch_header SET tipo_header = ".$_POST['sec1']['switch'];
	$qrySwt = mysqli_query($conexion, $strSwt);

	// Sección 3
	// se usa el valor de 3 porque sólo hay 3 integrantes en el equipo
	$strClr3 = "SELECT * FROM seccion_equipo ORDER BY id ASC ";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		unlink(UPLOAD_DIR_DE.$rowClr3['img']);
	}
	for ($i=0; $i < 3; $i++) { 
		$name3 = "img_equipo_".$i."_".date("Y-m-d_H-i-s");
		$strSec3 = "UPDATE seccion_equipo SET img = '".$name3.".jpg' WHERE id = ".($i+1);
		$qrySec3 = mysqli_query($conexion, $strSec3);
		saveImage($_POST['sec3']['itemsImg'][$i]['img'], $name3, UPLOAD_DIR_DE);
	}

	// Sección 4
	// limpiar imágenes de tiendas del servidor
	clearServer('seccion_tiendas_img', 'img', UPLOAD_DIR_T_DE);
	// limpiar imágenes de tiendas
	$strClr4_2 = "TRUNCATE TABLE seccion_tiendas_img ";
	$qryClr4_2 = mysqli_query($conexion, $strClr4_2);
	// imágenes tiendas
	$numSec4_2 = sizeof($_POST['sec4']['images']);
	for ($i=0; $i < $numSec4_2; $i++) { 
		$name4 = "img_tiendas_".$i;
		$strImg4 = "INSERT INTO seccion_tiendas_img VALUES (NULL, 'Imagen Bodegas Tianna Negre', '".$name4.".jpg', ".$i.")";
		$qryImg4 = mysqli_query($conexion, $strImg4);
		saveImageT($_POST['sec4']['images'][$i]['img'], $name4, UPLOAD_DIR_T_DE);
	}

	mysqli_close($conexion);

	// ******************************************************************************* { Sección catalán } *******************************************************************************
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

	// Sección 1
	// Borra video anterior
	$strClr0 = "SELECT * FROM video_inicio LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	$rowClr0 = mysqli_fetch_array($qryClr0);
	// Elimina anterior video
	unlink(UPLOAD_DIR_VIDEO_DE.$rowClr0['nombre']);
	// Elimina anterior imagen del video para versión responsive
	unlink(UPLOAD_DIR_VIDEO_DE.$rowClr0['enlace']);
	// Actualiza video nuevo e imagen responsive
	$nombreVideo = "videoHomeBack".date("Y-m-d_H-i-s");
	$nombreImg = "imagenVideo".date("Y-m-d_H-i-s");
	$strVideo = "UPDATE video_inicio SET nombre = '".$nombreVideo.".mp4', enlace = '".$nombreImg.".jpg' ";
	$qryVideo = mysqli_query($conexion, $strVideo);
	saveVideo($_POST['sec1']['video'], $nombreVideo, UPLOAD_DIR_VIDEO_DE);
	saveVideoImg($_POST['sec1']['video_responsive'], $nombreImg, UPLOAD_DIR_VIDEO_DE);
	// limpiar anterior Slider
	$strClr1 = "TRUNCATE TABLE slider_principal";
	$qryClr1 = mysqli_query($conexion, $strClr1);
	// agrega nuevos items
	$numSec1 = sizeof($_POST['sec1']['items']);
	for ($i=0; $i < $numSec1; $i++) { 
		$nameSld = "img_slide_".$i."_".date("Y-m-d_H-i-s");
		$strSld = "INSERT INTO slider_principal VALUES (NULL, '- -', '".$nameSld.".jpg', ".$i.") ";
		$qrySld = mysqli_query($conexion, $strSld);

		saveImageSld($_POST['sec1']['items'][$i]['img'], $nameSld, UPLOAD_DIR_SLIDE_DE);
	}
	// Actualiza switch
	$strSwt = "UPDATE switch_header SET tipo_header = ".$_POST['sec1']['switch'];
	$qrySwt = mysqli_query($conexion, $strSwt);

	// Sección 3
	// se usa el valor de 3 porque sólo hay 3 integrantes en el equipo
	$strClr3 = "SELECT * FROM seccion_equipo ORDER BY id ASC ";
	$qryClr3 = mysqli_query($conexion, $strClr3);
	while ( $rowClr3 = mysqli_fetch_array($qryClr3) ) {
		unlink(UPLOAD_DIR_DE.$rowClr3['img']);
	}
	for ($i=0; $i < 3; $i++) { 
		$name3 = "img_equipo_".$i."_".date("Y-m-d_H-i-s");
		$strSec3 = "UPDATE seccion_equipo SET img = '".$name3.".jpg' WHERE id = ".($i+1);
		$qrySec3 = mysqli_query($conexion, $strSec3);
		saveImage($_POST['sec3']['itemsImg'][$i]['img'], $name3, UPLOAD_DIR_DE);
	}

	// Sección 4
	// limpiar imágenes de tiendas del servidor
	clearServer('seccion_tiendas_img', 'img', UPLOAD_DIR_T_DE);
	// limpiar imágenes de tiendas
	$strClr4_2 = "TRUNCATE TABLE seccion_tiendas_img ";
	$qryClr4_2 = mysqli_query($conexion, $strClr4_2);
	// imágenes tiendas
	$numSec4_2 = sizeof($_POST['sec4']['images']);
	for ($i=0; $i < $numSec4_2; $i++) { 
		$name4 = "img_tiendas_".$i;
		$strImg4 = "INSERT INTO seccion_tiendas_img VALUES (NULL, 'Imagen Bodegas Tianna Negre', '".$name4.".jpg', ".$i.")";
		$qryImg4 = mysqli_query($conexion, $strImg4);
		saveImageT($_POST['sec4']['images'][$i]['img'], $name4, UPLOAD_DIR_T_DE);
	}

	mysqli_close($conexion);

	// ******************************************************************************* { Reconexión a la base de datos en español } *******************************************************************************
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
	// $result['detalles3'] = $_POST['sec4']['images'][0]['img'];
	echo json_encode($result);
} else {
	$result['estatus'] = "fail";
	echo json_encode($result);
}

 ?>