<?php 

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

 ?>