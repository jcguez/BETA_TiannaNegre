<?php 
require_once 'conexion.php';
session_start();

// Cabecera para poder retornar un JSON
header('Content-Type: application/json');

// // NUNCA incluir esta línea en con los servidores de españa
// // ini_set('display_errors', 1); // NUNCA incluir esta línea en con los servidores de españa
error_reporting(E_ALL);
date_default_timezone_set('America/Mexico_City');
// // Ruta para guardar los archivos
// define('UPLOAD_DIR', 'img/rejilla/');
// // Guardar imágenes PNG
// function saveImage($base64img, $fileName){
// 	$base64img = str_replace('data:image/png;base64,', '', $base64img);
// 	$data = base64_decode($base64img);
// 	$file = UPLOAD_DIR . $fileName . '.png';
// 	file_put_contents($file, $data);
// }
// // Guardar imágenes JPEG
// function saveImage($base64img, $fileName){
// 	$base64img = str_replace('data:image/jpeg;base64,', '', $base64img);
// 	$data = base64_decode($base64img);
// 	$file = UPLOAD_DIR . $fileName . '.jpg';
// 	file_put_contents($file, $data);
// }

$result = array();
$error_flag = 0;

if ( !empty($_POST) ) {
	if ( !empty($_POST['prod']) ) { 
		$id_prod = $_POST['prod'];
		$strImg = "SELECT * FROM productos WHERE id = ".$id_prod;
		$qryImg = mysqli_query($conexion, $strImg);
		$numImg = mysqli_num_rows($qryImg);
		if ( $numImg == 1 ) {
			$rowImg = mysqli_fetch_array($qryImg);

			$imgE = file_get_contents('img/Vinos/'.$rowImg['img']);
            $imgData = base64_encode($imgE);
            $imgData = str_replace('dataimage/pngbase64', '', $imgData);

            $result['img'] = $imgData;
		} else {
			$error_flag++;
			$result['detalles'] = "Problemas recibir la información.";
		}
	} else {
		$error_flag++;
		$result['detalles'] = "Problemas recibir la información.";
	}

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