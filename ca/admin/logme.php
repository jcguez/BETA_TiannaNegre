<?php 
require 'conexion.php';

$result = "";

if (!empty($_POST)) {
	// TODO: ingresar validación para Inyecciones SQL

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$strUsr = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' AND contrasena = '".$contrasena."' ";
	$qryUsr = mysqli_query($conexion, $strUsr);
	$numUsr = mysqli_num_rows($qryUsr);
	$rowUsr = mysqli_fetch_array($qryUsr);
	if ($numUsr == 1) {
		session_start();
		$_SESSION['id_usr'] = $rowUsr['id'];
		header("Location: index.php");
	} else {
		header("Location: login.php");
	}
} else {
	header("Location: login.php");
}

 ?>