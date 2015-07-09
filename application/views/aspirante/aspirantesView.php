<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<table class="table table-striped">
		<thead>
			<tr>
				<td>MATRICULA</td>
				<td>NOMBRE(S)</td>
				<td>APELLIDO 1</td>
				<td>APELLIDO 2</td>
				<td>GENERO</td>
				<td>TELEFONO</td>
				<td>CORREO</td>
				<td>PROVIENE DE</td>
				<td>CARRERA</td>
				<td>SISTEMA</td>
				<td>OPCIONES</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($aspirantes->result_array() as $aspirante){ ?>
				<?php
					$urlEditar = base_url()."index.php/aspirante/editar?idaspirante=".$aspirante['idaspirante'];
				?>
			<tr>
				<td><?php print $aspirante['matricula']; ?> </td>
				<td><?php print $aspirante['nombres']; ?> </td>
				<td><?php print $aspirante['apellido1']; ?> </td>
				<td><?php print $aspirante['apellido2']; ?> </td>
				<td><?php if ($aspirante['sexo']==0){ print 'FEMENINO'; } else { print 'MASCULINO'; } ?> </td>
				<td><?php print $aspirante['telefono']; ?> </td>
				<td><?php print $aspirante['correo']; ?> </td>
				<td><?php print $aspirante['nombreEscuela']; ?> </td>
				<td><?php print $aspirante['nombreLic']; ?> </td>
				<td><?php if ($aspirante['sistema']==0){ print 'ABIERTO'; } else{print 'ESCOLARIZADO';} ?> </td>
				<td><span><a href="<?php print $urlEditar;?>">editar</a></span>
				<span><a href="#"><img src="">eliminar</a></span></td>
			</tr>
			<?php } ?>
		</tbody>
		<tfoot><tr><td><a class="btn btn-success" href="<?php print base_url();?>index.php/aspirante/agregar">Agregar nuevo</a></td></tr></tfoot>
	</table>
</body>
</html>