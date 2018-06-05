<!DOCTYPE html> <html lang="es" > 


<head>
	<meta charset='UTF-8'>
 	<title>Vista Asistencia</title>
 	<link rel="stylesheet"  href="/php-login/menu2.css">
</head> 
	
<header>
		<nav>
		  <ul id="main">
		    <li><a href="vistaasistencia.php">Asistencia</a></li>
		    <li><a class="active" href="vistapagos.php">Pagos</a>
		   		<ul class="drop">
		        	<div>
		        	<li><a>Registrar</a></li>
		        	<li><a>Registrar</a></li>
		        	<li><a>Registrar</a></li>
		        	</div>
		      	</ul>
		    </li> 
		    <li><a href="vistaclientes.php">Clientes</a>
		      <ul class="drop">
		        <div>
		        <li><a href="vistaasistencia.php">Nuevo</a></li>
		        <li><a href="vistaasistencia.php">Modificar</a></li>
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
		 <h1>Aca va a ir el contenido de asistencia </h1>
		
		<form action='/php-login/login.php' method='post'>
		<input type="submit" value="Cerrar Sesion" name="cerrar"> 
		<?php if (isset($_POST["cerrar"])){
		 		session_destroy();
			 	};
				 ?>
		</form>
	 </section>

</body>
</html>
