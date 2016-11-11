<!doctype html>
<html>
	<head>
		<title>Videojuegos Peruanos</title>
		<link rel="stylesheet" href="estilo/estilo.css"/>
	</head>
	
	<body>
		<nav id="izqre">
		</nav>
		<aside id="dere">
		</aside>
			<h1>Crear Cuenta</h1>
			<section id="registro">
			<form action="procesar_registro.php" method="post">
			
				
				<div class="diseño">Nombre: <input type="text" name="nombre"/></label>
				<br/>
				<hr/>
				</div>
				<div class="diseño">Apellido: <input type="text" name="apellido"/></label>
				<br/>
				<hr/>
				<div class="diseño">Edad: <input type="text" name="edad"/></label>
				<br/>
				<hr/>
				<div class="diseño">Correo: <input type="email" name="correo"/></label>
				<br/>
				<hr/>
				<div class="diseño">Password: <input type="password" name="password"/></label>
				<br/>
				<hr/>
				<button>Registrarse</button>
				<br/>
				<br/>
				<br/>
				<a href="index.php">Volver al inicio</a>
						
			</form>
			</section>
		<?php include 'plantillas/pie.php' ?>
	</body>
</html>