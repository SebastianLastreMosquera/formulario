<?php
require_once('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/styles.css">
	<title>Persona</title>


</head>

<body>
	<div class="contenedor">
		<div class="contenedor-personas ">
		<div id="listado" >	
			<table class="tabla">
				<thead class="tabla-thead">
					<tr class="tabla-tr">
						<th class="tabla-th">Nombre</th>
						<th class="tabla-th">Apellidos</th>
						<th class="tabla-th">Telefono</th>			
					</tr class="tabla-tr">
				</thead>
				<tbody id="listar-personas">
					
				</tbody>
			</table>
		</div>

		<form action="guardar.php" method="post" id="formulario" autocomplete="off" class="none">
			<div >
					<h4 class="titulo">REGISTRAR PERSONA</h4>
			</div>
			<div class="grupo-formulario">
				<label for="nombre" class="label-formulario">Nombre</label>
				<input type="text"  class="input-formulario" name="nombre" id="nombre"> <br>
			</div>

			<div class="grupo-formulario">
				<label for="apellido"  class="label-formulario">Apellido</label>
				<input type="text" class="input-formulario" name="apellido" id="apellido"><br>
			</div>

			<div class="grupo-formulario">
				<label for="telefono" class="label-formulario">Telefono </label>
				<input type="text" class="input-formulario" name="telefono" id="telefono">
			</div>
		</form>

		<div class="contenedor-botones">
			<button id="btn-guardar" class="boton boton-azul" style="display:none">Agregar</button>
			<button id="btn-mostrar" class="boton boton-dark" value="mostrar">Mostrar</button>
			<button id="btn-ocultar" class="boton boton-rojo" value="ocultar">Ocultar</button>
		</div>	 

	</div> 
</div>
<script src="js/js.js"></script>
</body>

</html>