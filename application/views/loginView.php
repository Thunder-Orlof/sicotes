<!DOCTYPE html>
<html lang="es">
<head>
	<meta >
	<title>Inicio de sesión</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php print base_url();?>css/login.css">
</head>
<body>
	<header class="bg-primary">Coordinación de Examenes Generales de Egreso de la Licenciatura</header>
	<section>
		<div id="contenedor" >
		
			<form method="POST" action="<?php print base_url()?>index.php/log/login" id="logueo">
				<label>Usuario:</label>
				<input type="text" class="form-control input-lg" title="Ejemplo: ZS11546789" required/>
				<label>Contraseña:</label>
				<input type="password" class="form-control input-lg" required="required"/>
				<button class="btn btn-success" type="submit" id="iniciar">Iniciar sesión</button>
			</form>
		<!--<img src="http://localhost/sicotes/resources/img/loaders/engineLoader.gif">-->
		</div>
	</section>
	<footer class="bg-primary">&copy; Luis Eduardo Suárez Romero</footer>
</body>
</html>