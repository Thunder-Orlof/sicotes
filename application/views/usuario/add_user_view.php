<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<form method="POST" action="<?php print base_url();?>index.php/usuario/registrar">
<table>
	<tr>
		<td><label>Nombre(s):</label></td>
		<td><input class="form-control" type="text" name="nombres" required/></td>
	</tr>
	<tr>
		<td><label>Apellido(s):</label></td>
		<td><input class="form-control" type="text" name="apellidos" required/></td>
	</tr>
	<tr>
		<td><label>Usuario:</label></td>
		<td><input class="form-control" type="text" name="cveUsuario" required/></td>
	</tr>
	<tr>
		<td><label>Contraseña:</label></td>
		<td><input class="form-control" type="password" name="passwd" required/></td>
	</tr>
	<tr>
		<td><button class="btn btn-danger" type="reset">¡Cancelar!</button></td>
		<td><button class="btn btn-success" type="submit">¡Guardar!</button></td>
	</tr>
</table>
</form>