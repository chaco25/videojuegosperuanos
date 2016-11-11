<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<title>Videojuegos Peruanos</title>
		<link rel="stylesheet" href="estilo/estilo.css"/>
	</head>
	
	<body>
		
		<div id="izquierda">
           
        </div>
        <div id="derecha">

		<?php if(isset($_SESSION['nombre'])) {?>
		<p class="texto"> Bienvenido <?php echo $_SESSION['nombre']?> !!</p>
		<?php } else { ?>
		<p class="texto">Bienvenido usuario anónimo!!</p>
		<?php } ?>
        </div>
        <div id="centro">
            <h1>Videojuegos Peruanos</h1>
			<hr/>
        </div>
		<nav id="izq">
		</nav>
		<aside id="barra-lateral">
                <nav>
                    <section>
                        <header>Inicio</header>
                        <ul>
                            
							<?php if(isset($_SESSION['nombre'])) {?>
								<li><a href="cerrar.php" class="uno"> Cerrar sesion </a></li>
								<?php } else { ?>
                            <li><a href="iniciar_sesion.php" class="uno"> Iniciar sesión </a></li>
							<li><a href="registro.php" class="uno">Crear Cuenta</a></li>
                            	<?php } ?>
                        </ul>
                    </section>
                     <section>
                        <header>Menú</header>
                        <ul>
                            <li>aaaaaaaaaaa</li>
                            <li>bbbbbbbbbbb</li>
							<li>cccccccccccc</li>
							<li>ddddddddddd</li>
                            
                        </ul>
                    </section>

                </nav>
				</aside>
				
		<section id="mid">
			<div id="imagen">

			</div>
		</section>	
		<?php include 'plantillas/pie.php' ?>
	</body>
</html>