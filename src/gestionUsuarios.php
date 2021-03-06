<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Evaluator v.1.0 - Control de usuarios</title>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	<link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<div class="container">
        <div class="row" id = "encabezadoControlUsuarios">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
                <h1><span class="tag tag-primary">Control de usuarios</span></h1>
			</div>
			<div class="col-sm-4"></div>
		</div>
        <div class="row filaBotonesGestionUsuarios">
			<div class="col-sm-5 "><button type="button" data-toggle="modal" data-target="#modal_nuevo_usuario" class="btn btn-success btn-block">Añadir usuario</button></div>
			<div class="col-sm-2 "></div>
			<div class="col-sm-5 ">
				<form class="form-inline" method="POST" action="../src/procesadores/ProcesoUsuarios.php">
					<div class="form-group">
						<label for="nombre_buscar_usuario">Nombre:</label>
						<input type="text" class="form-control" name="nombre_buscar_usuario" required>
					</div>
					<button type="submit" class="btn btn-primary">Buscar</button>
				</form>
			</div>
		</div>
		<div class="row filaBotonesGestionUsuarios">
			<div class="col-sm-5 "><a href="listadoUsuarios.php" class="btn btn-success btn-block " role="button" aria-pressed="true">Listar usuarios</a></div>
			<div class="col-sm-2 "></div>
			<div class="col-sm-5 "><button type="button" class="btn btn-success btn-block">Gesti&oacute;n de roles</button></div>
		</div>
		<div class="row filaBotonesGestionUsuarios">
			<div class="col-sm-2 "><a href="../inicioCursos.php" class="btn btn-secondary btn-block " role="button" aria-pressed="true">Volver</a></div>
		</div>
			
		<!--Modal prompt nuevo usuario-->
		<?php require 'modal/modalNuevoUsuario.php' ?> 
		<!--Fin modal prompt nuevo usuario-->
					
	</div>

		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
	</body>
</html>


