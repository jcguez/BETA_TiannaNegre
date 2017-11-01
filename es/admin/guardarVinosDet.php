<?php 
require_once 'conexion.php';
session_start();
// Cabecera para poder retornar un JSON
header('Content-Type: application/json');
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
define('UPLOAD_DIR', 'img/Vinos/Detalles/');
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
	// Sección 1 Detalles producto
	// limpiar imágenes del servidor
	$strClr1 = "SELECT * FROM detalles_vino_img WHERE id_prod = ".$_POST['sec1']['prod']." ORDER BY orden ASC";
	$qryClr1 = mysqli_query($conexion, $strClr1);
	while ( $rowClr1 = mysqli_fetch_array($qryClr1) ) {
		unlink(UPLOAD_DIR.$rowClr1['img']);
	}
	// limpiar base de datos
	$strDel = "DELETE FROM detalles_vino_img WHERE id_prod = ".$_POST['sec1']['prod'];
	$qryDel = mysqli_query($conexion, $strDel);
	// agregar imagenes a detalle de los productos
	$numSec1 = sizeof($_POST['sec1']['items']);
	for ($i=0; $i < $numSec1; $i++) { 
		$name1 = "producto_".$i."_".date("Y-m-d_H-i-s");
		$strSec1 = "INSERT INTO detalles_vino_img VALUES (NULL, ".$_POST['sec1']['prod'].", '".$name1.".jpg', ".$i.") ";
		$qrySec1 = mysqli_query($conexion, $strSec1);
		saveImage($_POST['sec1']['items'][$i]['img'], $name1);
	}

	// Sección 2 detalles Producto
	$strClr2 = "DELETE FROM detalles_vino WHERE id_prod = ".$_POST['sec2']['prod'];
	$qryClr2 = mysqli_query($conexion, $strClr2);

	$strSec2 = "INSERT INTO detalles_vino VALUES (NUll, ".$_POST['sec2']['prod'].", ";
	$strSec2 .= " '".$_POST['sec2']['variedades']."',";				// variedades
	$strSec2 .= " '".$_POST['sec2']['vendimia']."',";				// vendimia
	$strSec2 .= " '".$_POST['sec2']['elaboracion']."',";			// elaboracion
	$strSec2 .= " '".$_POST['sec2']['crianza']."',";				// crianza
	$strSec2 .= " '".$_POST['sec2']['nota_cata']."',";				// nota_cata
	$strSec2 .= " '".$_POST['sec2']['produccion']."',";				// produccion
	$strSec2 .= " '".$_POST['sec2']['grado_alcoholico']."',";		// grado_alcoholico
	$strSec2 .= " '".$_POST['sec2']['area_produccion']."',";		// area_produccion
	$strSec2 .= " '".$_POST['sec2']['temperatura']."',";			// temperatura
	$strSec2 .= " '".$_POST['sec2']['nota_maridaje']."',";			// nota_maridaje
	$strSec2 .= " '".$_POST['sec2']['presentaciones']."',";			// presentaciones
	$strSec2 .= " 1) ";			// presentaciones
	$qrySec2 = mysqli_query($conexion, $strSec2);
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