<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>

	<!--<iframe src="<?php print base_url();?>index.php/usuario_add"></iframe>-->

	<section>
		<table class="table table-striped">
			<thead> 
				<tr>
					<td>ID</td>
					<td>NOMBRE(S)</td>
					<td>APELLIDOS</td>
					<td>CLAVE DE USUARIO</td>
					<td>CONTRASEÑA</td>
					<td>OPCIONES</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach( $usuarios->result_array() as $usuario){ ?>
				<?php
					$urlEditar = base_url()."index.php/usuario/editar?idusuario=".$usuario['idusuario'];
				?>
				<tr>
					<td><?php print $usuario['idusuario']; ?></td>
					<td><?php print $usuario['nombres']; ?></td>
					<td><?php print $usuario['apellidos']; ?></td>
					<td><?php print $usuario['cveUsuario']; ?></td>
					<td><?php print $usuario['passwd']; ?></td>
					<td><span><a href="<?php print $urlEditar;?>">editar</a></span>
				</tr>
			<?php } ?>
			</tbody>
			<tfoot><tr><td><a class="btn btn-success" href="<?php print base_url();?>index.php/usuario/agregar">Agregar nuevo</a></td></tr></tfoot>
		</table>
	</section>
	<!--<script type="text/javascript">
		function comprobarEliminacion(nombre){
			if (confirm("Seguro que desea eliminar: "+nombre)){

			}
		}
	</script>-->
</body>
</html>