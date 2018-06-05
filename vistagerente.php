<!DOCTYPE html> <html lang="es" > 


<head>
	<meta charset='UTF-8'>
 	<title>Vista Gerente</title>
 	<link rel="stylesheet"  href="/php-login/menu2.css">
</head> 
	
<header>
		<nav>
		  <ul id="main">
		    <li><a href="#">Asistencia</a></li>
		    <li><a href="#">Facturacion</a></li>
		    <li><a href="#">Clientes</a>
		    <li><a href="#">Compras</a>
		    <li><a href="#">Empleados</a>
		    <li><a href="#">Eventos</a>
		 
		    </li>
		    <div id="marker"></div>
		  </ul>
		</nav>
</header>


<body>

	<?php
	session_start();
	if($_SESSION["tipou"]!='gerente'){
		header("location: /php-login/login.php");
	}
	?>

	<section class="contenido wrapper">
		 <h1>"hola <?php echo $_SESSION["usuario"] ?> "</h1>
		
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