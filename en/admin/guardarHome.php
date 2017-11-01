<?php 
require_once 'conexion.php';
session_start();

// Cabecera para poder retornar un JSON
header('Content-Type: application/json');

error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
define('UPLOAD_DIR', 'img/Equipo/');
define('UPLOAD_DIR_T', 'img/Tiendas/');
define('UPLOAD_DIR_VIDEO', '../video/');
define('UPLOAD_DIR_SLIDE', 'img/');
// // Guardar imágenes PNG
// function saveImagePNG($base64img, $fileName){
// 	$base64img = str_replace('data:image/png;base64,', '', $base64img);
// 	$data = base64_decode($base64img);
// 	$file = UPLOAD_DIR . $fileName . '.png';
// 	file_put_contents($file, $data);
// }
// Guardar imágenes JPEG SLIDER
function saveImageSld($base64img, $fileName){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = UPLOAD_DIR_SLIDE . $fileName . '.jpg';
	file_put_contents($file, $data);
}
// Guardar imágenes JPEG
function saveImage($base64img, $fileName){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = UPLOAD_DIR . $fileName . '.jpg';
	file_put_contents($file, $data);
}
// TIENDA Guardar imágenes JPEG 
function saveImageT($base64img, $fileName){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = UPLOAD_DIR_T . $fileName . '.jpg';
	file_put_contents($file, $data);
}
// Guardar Video Header 
function saveVideo($base64img, $fileName){
	$base64img = str_replace('data:video/mp4;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = UPLOAD_DIR_VIDEO . $fileName . '.mp4';
	file_put_contents($file, $data);
}
// Guardar Imagen Video
function saveVideoImg($base64img, $fileName){
	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
	$data = base64_decode($base64img);
	$file = UPLOAD_DIR_VIDEO . $fileName . '.jpg';
	file_put_contents($file, $data);
}

$result = array();
$error_flag = 0;

if ( !empty($_POST) ) {
	// Sección 1
	// Borra video anterior
	$strClr0 = "SELECT * FROM video_inicio LIMIT 1";
	$qryClr0 = mysqli_query($conexion, $strClr0);
	$rowClr0 = mysqli_fetch_array($qryClr0);
	// Elimina anterior video
	unlink(UPLOAD_DIR_VIDEO.$rowClr0['nombre']);
	// Elimina anterior imagen del video para versión responsive
	unlink(UPLOAD_DIR_VIDEO.$rowClr0['enlace']);
	// Actualiza video nuevo e imagen responsive
	$nombreVideo = "videoHomeBack".date("Y-m-d_H-i-s");
	$nombreImg = "imagenVideo".date("Y-m-d_H-i-s");
	$strVideo = "UPDATE video_inicio SET nombre = '".$nombreVideo.".mp4', enlace = '".$nombreImg.".jpg' ";
	$qryVideo = mysqli_query($conexion, $strVideo);
	saveVideo($_POST['sec1']['video'], $nombreVideo);
	saveVideoImg($_POST['sec1']['video_responsive'], $nombreImg);
	// limpiar anterior Slider
	$strClr1 = "TRUNCATE TABLE slider_principal";
	$qryClr1 = mysqli_query($conexion, $strClr1);
	// agrega nuevos items
	$numSec1 = sizeof($_POST['sec1']['items']);
	for ($i=0; $i < $numSec1; $i++) { 
		$nameSld = "img_slide_".$i."_".date("Y-m-d_H-i-s");
		$strSld = "INSERT INTO slider_principal VALUES (NULL, '- -', '".$nameSld.".jpg', ".$i.") ";
		$qrySld = mysqli_query($conexion, $strSld);

		saveImageSld($_POST['sec1']['items'][$i]['img'], $nameSld);
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
		unlink(UPLOAD_DIR.$rowClr3['img']);
	}
	for ($i=0; $i < 3; $i++) { 
		$name3 = "img_equipo_".$i."_".date("Y-m-d_H-i-s");
		$strSec3 = "UPDATE seccion_equipo SET nombre = '".$_POST['sec3']['itemsTexto'][$i]['nombre']."', img = '".$name3.".jpg', descripcion = '".$_POST['sec3']['itemsTexto'][$i]['texto']."' WHERE id = ".($i+1);
		$qrySec3 = mysqli_query($conexion, $strSec3);
		saveImage($_POST['sec3']['itemsImg'][$i]['img'], $name3);
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
	// limpiar imágenes de tiendas
	$strClr4_2 = "TRUNCATE TABLE seccion_tiendas_img ";
	$qryClr4_2 = mysqli_query($conexion, $strClr4_2);
	// imágenes tiendas
	$numSec4_2 = sizeof($_POST['sec4']['images']);
	for ($i=0; $i < $numSec4_2; $i++) { 
		$name4 = "img_tiendas_".$i;
		$strImg4 = "INSERT INTO seccion_tiendas_img VALUES (NULL, 'Imagen Bodegas', '".$name4.".jpg', ".$i.")";
		$qryImg4 = mysqli_query($conexion, $strImg4);
		saveImageT($_POST['sec4']['images'][$i]['img'], $name4);
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