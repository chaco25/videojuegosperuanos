<!doctype html>
<html>
	<head>
		<title>Inciar Sesión</title>
		<link rel="stylesheet" href="estilo/estilo.css"/>
	</head>
	
	
	<body>
		<h1>Iniciar Sesión</h1>
		<nav id="izqre">
		</nav>
		<aside id="dere">
		</aside>
		<section id="registro">
		<form action="procesar_sesion.php" method="post" >
			Correo: <input type="email" name="correo"/>
			<br/>
			<hr/>
			Password:	<input type="password" name="password"/> <br/>
			<br/>
			<hr/>
			<button>Iniciar Sesión</button>
			
			
			<?php if(isset($_GET['error'])) {?>
			<p style="color: red"> USUARIO O CONTRASEÑA INCORRECTA</p>
			<?php }?>
		</form>
		</section>
	</body>

	
</html>