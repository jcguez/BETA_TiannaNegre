<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingresar · Tianna Negre</title>
	<link rel="stylesheet" href="css/styleLogin.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		body{ display: flex; align-items: center; justify-content: center; height: 100vh; }
	</style>
	<!-- Meta viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="row no-margin-right no-margin-left">
		<div class="col-md-4 col-md-offset-4">
			<div class="contenedor-login">
				<img src="img/logo_tn.png" alt="" class="img-responsive">
				<form action="logme.php" method="POST">
					<input type="text" name="usuario" placeholder="Usuario">
					<input type="password" name="contrasena" placeholder="Contraseña">
					<input type="submit" value="Ingresar">
				</form>
			</div>
		</div>
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>