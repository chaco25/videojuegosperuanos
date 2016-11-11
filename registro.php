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
			
				
				<div class="diseño">
				Nombre: 
				</div>
				<div class="juego"><input type="text" name="nombre"/>
				</div>
				<br/>
				<hr/>
				
				<div class="diseño">
				Apellido: 
				</div>
				<div class="juego"><input type="text" name="edad"/>
				</div>
				<br/>
				<hr/>
				
				<div class="diseño">
				Edad: 
				</div>
				<div class="juego"><input type="text" name="edad"/>
				</div>
				<br/>
				<hr/>
				
				<div class="diseño">
				Correo: 
				</div>
				<div class="juego"><input type="email" name="correo"/>
				</div>
				<br/>
				<hr/>
				
				<div class="diseño">
				Password: 
				</div>
				<div class="juego"><input type="password" name="password"/>
				</div>
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