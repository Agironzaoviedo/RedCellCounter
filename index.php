<?php
	include("db.php");
?>


<!DOCTYPE html>
<html>

<head>
	<title>Red Cell Counter</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/estilos.css" type="text/css">
	<script type="text/javascript" src="js/funciones.js"></script>
</head>

<body>

<div id="contenedor">

		<div id="contenedorConteo">
			
            <div>
				<header>
					<img src="images/icono.png" width="170px" height="170px">
					<h1>Red Cell Counter</h1>
				</header>
			</div>
			<div>

		<div class="contenedorLogin" id="cuadrado-Login">
			<div class="encabezadoLogin">

				<img src="images/icono.png" width="190px">
				<h1>Red Cell Counter</h1>

				<aside class="recuadroLogin">

					<div id="controles">
						<fieldset>
							<legend>usuario</legend>
							<input type="text" id="user" />
						</fieldset>
						<fieldset>
							<legend>clave</legend>
							<input type="password" id="pass" />
						</fieldset>
						<input class="button" onclick="iniciarSesion()" type="button" id="btn-entrar" value="INGRESAR" />
					</div>
				</aside>
			</div>

		</div>

	</div>
	
	</div>

	<footer>Todos los derechos reservados | Anderson Gironza - Jose Mestra</footer>

</body>

</html>