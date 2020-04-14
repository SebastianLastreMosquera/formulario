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
	<h1>HOLA ESTA ES MI PAGINA</h1>

<div id="listado">
	<?php
	require_once('lista.php');
	?>
</div>
	<div class="contenedor-personas ">
	<form action="guardar.php" method="post" id="formulario" autocomplete="off" class="none">
			<div>
                <h6>REGISTRAR PERSONA</h6>
            </div>
		<label for="nombre">nombre</label>
		<input type="text" name="nombre" id="nombre"> <br>


		<label for="apellido">apellido</label>
		<input type="text" name="apellido" id="apellido"><br>


		<label for="telefono">telefono </label>
		<input type="text" name="telefono" id="telefono">

	</form>
	<button id="btn-guardar"style="display:none">agregar</button>
	<button id="btn-mostrar" value="mostrar">mostrar</button>
	<button id="btn-ocultar" value="ocultar">ocultar</button>	
	</div>
	


	<script>
		const btnGuardar = document.getElementById('btn-guardar');
		const formulario = document.getElementById('formulario');
		const mostrar = document.getElementById('btn-mostrar');
		const ocultar = document.getElementById('btn-ocultar');
		const lista = document.getElementById('listado');
		let nombre = document.getElementById('nombre');
		let apellido = document.getElementById('apellido');
		let telefono = document.getElementById('telefono');

	

		ocultar.addEventListener('click', () => {
			formulario.style.display="none";
			lista.style.display="block";
			btnGuardar.style.display="none"
		})

		mostrar.addEventListener('click', () => {
			formulario.style.display="block";
			lista.style.display="none";
			btnGuardar.style.display="block"
		})


		btnGuardar.addEventListener('click', () => {
			let datos = new FormData(formulario);

			fetch('agregar.php', {
					method: 'POST',
					body: datos
				})
				.then(response => response.json())
				.then(response => {
					console.log(response)
					if (response !== "") {
						alert('Datos agregados');
						formulario.reset();
					}
				})
		})
	</script>
</body>

</html>