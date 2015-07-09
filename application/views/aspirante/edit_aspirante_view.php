<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<form method="POST" action="<?php print base_url(); ?>index.php/aspirante/actualizar">
	<table>
		<tr>
		<input type="text" name="idAspirante" value="<?php print $datosAspirante['idaspirante']?>" style="display: none;">
			<td><label>MATRICULA</label></td>
			<td><input type="text" class="form-control" name="matricula" value="<?php print $datosAspirante['matricula']?>" required/></td>
		</tr>
		<tr>
			<td><label>NOMBRE(S)</label></td>
			<td><input type="text" class="form-control" name="nombres" value="<?php print $datosAspirante['nombres']?>" required/></td>
		</tr>
		<tr>
			<td><label>APELLIDO 1</label></td>
			<td><input type="text" class="form-control" name="apellido1" value="<?php print $datosAspirante['apellido1']?>" required/></td>
		</tr>
		<tr>
			<td><label>APELLIDO 2</label></td>
			<td><input type="text" class="form-control" name="apellido2" value="<?php print $datosAspirante['apellido2']?>" required/></td>
		</tr>
		<tr>
			<td><label>GENERO</label></td>
			<td>
				<select class="form-control" name="sexo" value="<?php print $datosAspirante['sexo']?>">
					<option value="0">FEMENINO</option>
					<option value="1">MASCULINO</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>TELEFONO</label></td>
			<td><input type="tel" class="form-control" name="telefono" value="<?php print $datosAspirante['telefono']?>" required/></td>
		</tr>
		<tr>
			<td><label>CORREO</label></td>
			<td><input type="email" name="correo" class="form-control" value="<?php print $datosAspirante['correo']?>" required/></td>
		</tr>
		<tr>
			<td><label>PROVIENE DE</label></td>
			<td>
				<select class="form-control" name="procedencia" value="<?php print $datosAspirante['procedencia']?>">
					<?php foreach($escuelas->result_array() as $escuela){?>
						<option value="<?php print $escuela['idEscuela'] ?>"><?php print $escuela['nombreEscuela'] ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>CARRERA</label></td>
			<td>
				<select class="form-control" name="carrera" value="<?php print $datosAspirante['carrera']?>">
					<?php foreach($carreras->result_array() as $carrera){ ?>
						<option value="<?php print $carrera['idLicenciatura'] ?>"><?php print $carrera['nombreLic'] ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td><label>SISTEMA</label></td>
			<td>
				<select class="form-control" name="sistema" value="<?php print $datosAspirante['sistema']?>">
					<option value="0">ABIERTO</option>
					<option value="1">ESCOLARIZADO</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><button type="reset" class="btn btn-danger">CANCELAR</button></td>
			<td><button type="submit" class="btn btn-success">GUARDAR</button></td>
		</tr>
	</table>
</form>