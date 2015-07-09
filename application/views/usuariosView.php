<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
</head>
<body>
	<section>
		<div>
			<form method="POST" action="<?php print base_url();?>index.php/usuario/put">
			<table>
				<tr>
					<td><label>Nombre(s):</label></td>
					<td><input type="text" name="nombres" required="required"/></td>
				</tr>
				<tr>
					<td><label>Apellido(s):</label></td>
					<td><input type="text" name="apellidos" required="required"/></td>
				</tr>
				<tr>
					<td><label>Usuario:</label></td>
					<td><input type="text" name="cveUsuario" required="required"/></td>
				</tr>
				<tr>
					<td><label>Contraseña:</label></td>
					<td><input type="password" name="password" required="required"/></td>
				</tr>
				<tr>
					<td><label>Tipo de usuario:</label></td>
					<td><input type="number" name="tipoUsuario" /></td>
				</tr>
				<tr>
					<td><button type="reset">¡Cancelar!</button></td>
					<td><button type="submit">¡Guardar!</button></td>
				</tr>
			</table>
			</form>
		</div>
	</section>
	
	<section>
		<table style="border: double blue">
			<thead> 
				<tr>
					<td>ID</td><td>NOMBRE(S)</td><td>APELLIDOS</td><td>CLAVE DE USUARIO</td><td>TIPO DE USUARIO</td><td>OPCIONES</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach( $usuarios->result_array() as $usuario){ ?>
				<tr>
					<td><?php print $usuario['idusuario']; ?></td>
					<td><?php print $usuario['nombres']; ?></td>
					<td><?php print $usuario['apellidos']; ?></td>
					<td><?php print $usuario['cveUsuario']; ?></td>
					<td><?php print $usuario['tipoUsuario']; ?></td>
					<td><span><a href="#">editar</a></span>
					<span><a href="">eliminar</a></span></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</section>
</body>
</html>