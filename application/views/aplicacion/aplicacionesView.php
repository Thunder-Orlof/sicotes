<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<div>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>FECHA DE APLICACIÓN</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach($aplicaciones->result_array() as $aplicacion){ ?>
					<tr>
					<td><?php print $aplicacion['idAplicacion'] ?></td>
					<td><?php print $aplicacion['fecha'] ?></td>
					</tr>
			<?php } ?>

		</tbody>
	</table>
</div>
<div>
	<form method="POST" action="<?php print base_url();?>index.php/aplicacion/registrar">
		<label>Fecha de aplicación</label>
		<input type="date" class="form-control" widget="choice" />
		<button class="btn btn-danger" type="reset">Cancelar</button>
		<button class="btn btn-success" type="submit">Guardar</button>
	</form>
</div>