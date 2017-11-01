<?php 
require 'conexion.php';

$result = "";

if (!empty($_POST)) {
	// TODO: ingresar validación para Inyecciones SQL

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$lang = $_POST['lang'];

	if ( $lang == "" ) {
   		$error_flag++;
  	}

	$strUsr = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' AND contrasena = '".$contrasena."' ";
	$qryUsr = mysqli_query($conexion, $strUsr);
	$numUsr = mysqli_num_rows($qryUsr);
	$rowUsr = mysqli_fetch_array($qryUsr);
	if ($numUsr == 1) {
		session_start();
		$_SESSION['id_usr'] = $rowUsr['id'];
		header("location: ../".$lang."/admin/index.php?var=1");
		// var_dump($_POST);
	} else {
		header("Location: login.php");
	}
} else {
	header("Location: login.php");
}

 ?>