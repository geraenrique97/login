<head>
	<meta charset='UTF-8'>
 	<title>Vista Productos</title>
 	<link rel="stylesheet"  href="/php-login/menu2.css">
 	

</head> 
	
		<nav>
		  <ul id="main">
		    <li><a class="active" href="vistaproductos.php">Productos</a></li>
		    <li><a class="active" href='nuevaventa.php'>Nueva Venta</a></li>  
	    
		    <div id="marker"></div>
		  </ul>
		</nav>
</header>



<body>


	<?php
	session_start();
	if($_SESSION["tipou"]!='quiosco'){
		header("location: /php-login/login.php");
	}
	?>

	<section class="contenido wrapper">
		 <h1> PRODUCTOS </h1>

		 <?php
						include('abrirbaseproductos.php');
						$resultados = mysqli_query($conexion, "SELECT * FROM productos");
						$consulta = mysqli_fetch_array($resultados);
						?>

					<table style="width:80%" id='tablaproductos' >
						  <tr>
						    <th>NOMBRE</th>
						    <th>DETALLE</th> 
						    <th>ID</th>
						    <th>STOCK</th>
						    <th>PRECIO</th>
						    <th>'       '</th>
						  </tr>
						 <?php while ($row = mysqli_fetch_array($resultados)){ ?>
						  <tr>
						  	<td><?php echo $row[0] ?></td>
						    <td><?php echo $row[1] ?></td>
						    <td><?php echo $row[2] ?></td>
						    <td><?php echo $row[3] ?></td>
						    <td><?php echo $row[4] ?></td>
						    <td><a href='nuevaventa.php'><img src="/php-login/compra.png" alt="carrito" height='20px'></a></td>
						  </tr>
						  <?php  } ?>
						  
					</table>
		
		

		<form action='/php-login/login.php' method='post'>
		<input type="submit" value="Cerrar Sesion" name="cerrar"> 
		<?php if (isset($_POST["cerrar"])){
		 		session_destroy();
			 	};
				 ?>
		</form>

	 </section>

	<div>
		<p id='miventana'>Contenido Web</p>
	</div>


</body>

</html>