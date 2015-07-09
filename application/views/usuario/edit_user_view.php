<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<form method="POST" action="<?php print base_url();?>index.php/usuario/actualizar">
<table>
	<input type="text" name="idUsuario" value="<?php print $datosUsuario['idusuario']?>" style="display:none;">
	<tr>
		<td><label>Nombre(s):</label></td>
		<td><input class="form-control" type="text" name="nombres" value="<?php print $datosUsuario['nombres']?>" required/></td>
	</tr>
	<tr>
		<td><label>Apellido(s):</label></td>
		<td><input class="form-control" type="text" name="apellidos" value="<?php print $datosUsuario['apellidos']?>" required/></td>
	</tr>
	<tr>
		<td><label>Usuario:</label></td>
		<td><input class="form-control" type="text" name="cveUsuario" value="<?php print $datosUsuario['cveUsuario']?>" required/></td>
	</tr>
	<tr>
		<td><label>Contraseña:</label></td>
		<td><input class="form-control" type="text" name="passwd" value="<?php print $datosUsuario['passwd']?>" required/></td>
	</tr>
	<tr>
		<td><button class="btn btn-danger" type="reset">¡Cancelar!</button></td>
		<td><button class="btn btn-success" type="submit">¡Actualizar!</button></td>
	</tr>
</table>
</form>