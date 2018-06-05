<!DOCTYPE html> <html lang="es" > 


<head>
	<meta charset='UTF-8'>
 	<title>Vista Asistencia</title>
 	<link rel="stylesheet"  href="/php-login/menu2.css">
</head> 
	

<style type="text/css">
#marker{
	-webkit-transform: translate(160px, 0);
  -moz-transform: translate(160px, 0);
  -ms-transform: translate(160px, 0);
  transform: translate(160px, 0);
}
</style>


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
	if($_SESSION["tipou"]!="secretaria"){
		header("location: /php-login/vistapagos.php");
	} 
	?>

	<section class="contenido wrapper">
		 <h1> PAGOS. Cargar pagos, emitir informe. </h1>
		
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