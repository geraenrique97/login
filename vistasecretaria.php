<!DOCTYPE html> <html lang="es" > 


<head>
	<meta charset='UTF-8'>
 	<title>Vista Secretaria</title>
 	<link rel="stylesheet"  href="/php-login/menu2.css">
</head> 
	
<header>
		<nav>
		  <ul id="main">
		    <li><a class="active" href="vistaasistencia.php">Asistencia</a></li>
		    <li><a class="active" href="vistapagos.php">Pagos</a>
		   		<ul class="drop">
		        	<div>
		        	<li><a>Registrar</a></li>
		        	<li><a>Consultar Deuda</a></li>
		        	</div>
		      	</ul>
		    </li>  
		    <li><a class="active" href="vistaclientes.php">Clientes</a>
		      	<ul class="drop">
		        	<div>
		        	<li><a href="vistacia.php">Nuevo</a></li>
		        	<li><a href="vistancia.php">Modificar</a></li>
		        	<li>Buscar</li>
		        	<li>Eliminar</li>
		        	<li>Rutina</li>
		       	 	</div>
		      	</ul>
		    </li>

		    <div id="marker"></div>
		  </ul>
		</nav>
</header>

<body>

	<?php
	session_start();
	if($_SESSION["tipou"]!='secretaria'){
		header("location: /php-login/login.php");
	}
	?>

	<section class="contenido wrapper">
		 <h1> HOLA SECRETARIA </h1>

		 
		
		<form action="/php-login/login.php" method='post'>
		<input type="submit" value="Cerrar Sesion" name="cerrar"> 
		<?php if (isset($_POST["cerrar"])){
		 		session_destroy();
			 	};
				 ?>
		</form>
	 </section>

</body>
</html>