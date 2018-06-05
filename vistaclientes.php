<!DOCTYPE html> <html lang="es" > 


<head>
	<meta charset='UTF-8'>
 	<title>Vista Asistencia</title>
 	<link rel="stylesheet"  href="/php-login/menu2.css">
</head> 

<style type="text/css">
#marker{
	-webkit-transform: translate(320px, 0);
  -moz-transform: translate(320px, 0);
  -ms-transform: translate(320px, 0);
  transform: translate(320px, 0);
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

	if($_SESSION["tipou"]!='secretaria'){
		header("location: /php-login/login.php");
	}
	?>
	?>

	<section class="contenido wrapper">
		 <h1> CLIENTES </h1>
		 <table style="width:100%">
			  <tr>
			    <th>NOMBRE</th>
			    <th>APELLIDO</th> 
			    <th>EDAD</th>
			    <th>ID</th>
			    <th>RUTINA</th>
			    <th>'       '</th>
			  </tr>
			  <tr>
			    <td>Agua Minersdasal</td>
			    <td>Villavicencio</td> 
			    <td>001</td>
			    <td>10</td>
			    <td>$10</td>
			    <td><img src="C:\Users\nikoa\Documents\UTN FACULTAD - A. NICOLÁS\TERCER AÑO\DISEÑO DE SISTEMAS\Energym\compra.jpg" alt='carrito'></td>
			  </tr>
			   <tr>
			    <td>Aquarius</td>
			    <td>Aquarius</td> 
			    <td>1 L.</td>
			    <td>002</td>
			    <td>$10</td>
			    <td><img src="C:\Users\nikoa\Documents\UTN FACULTAD - A. NICOLÁS\TERCER AÑO\DISEÑO DE SISTEMAS\Energym\compra.jpg" alt='carrito'></td>
			  </tr>
			   <tr>
			    <td>Whey Protein</td>
			    <td>Chocolate</td> 
			    <td>003</td>
			    <td>5</td>
			    <td>$500</td>
			    <td><img src="C:\Users\nikoa\Documents\UTN FACULTAD - A. NICOLÁS\TERCER AÑO\DISEÑO DE SISTEMAS\Energym\compra.jpg" alt='carrito'></td>
			  </tr>
		</table>
		
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