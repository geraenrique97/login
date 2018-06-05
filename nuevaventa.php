<head>
	<meta charset='UTF-8'>
 	<title>Vista Productos</title>
 	<link rel="stylesheet"  href="nuevaventa.css">
 	

</head> 
	
<header>
		<nav>
		  <ul id="main">
		    <li><a class="active" href="vistaproductos.php">Productos</a></li>
		    <li><a class="active">Nueva Venta</a></li>  
	    
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

		<div class='modal'>
			<div class='modal-contenido'>
					<h4>Nueva Venta</h4>

					<div id="linea"></div>

					<form id='nuevoproducto' action='#Nuevoproducto' method='post'>
							<input type="submit" value="Agregar Producto" name="agregarproducto">
							<?php if (isset($_POST["agregarproducto"])){
						 	
							 	};
							?>
					</form>

					<?php
						include('abrirbaseproductos.php');
						$resultados = mysqli_query($conexion, "SELECT * FROM productos");
						$consulta = mysqli_fetch_array($resultados);
						?>

					<table style="width:80%" >
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
						    <td><a href='vistaproductos.php'><img src="/php-login/compra.png" alt="carrito" height='20px'></a></td>
						  </tr>
						  <?php  } ?>
						  
					</table>

					<h5>TOTAL</h5>

					<form action='vistaproductos.php' method='post'>
						<input type='text' name='buscar' placeholder='Buscar' >
						<input type="submit" value="BUSCAR" name="btnbuscar">
							<?php if (isset($_POST["btnbuscar"])){
						 		
							 	};
							?>
						<a id='cancelar' href="vistaproductos.php">CANCELAR</a>
					</form>
			</div>
		</div>

		 <table style="width:80%">
			  <tr>
			    <th>NOMBRE</th>
			    <th>DETALLE</th> 
			    <th>ID</th>
			    <th>STOCK</th>
			    <th>PRECIO</th>
			    <th>'       '</th>
			  </tr>
			  <tr>
			    <td>Agua Minersdasal</td> 
			    <td>Villavicencio</td> 
			    <td>001</td>
			    <td>10</td>
			    <td>$10</td>
			    <td><a href='vistaproductos.php'><img src="compra.png" alt="carrito" height='20px'></a></td>
			  </tr>
			   <tr>
			    <td>Aquarius</td>
			    <td>Aquarius</td> 
			    <td>1 L.</td>
			    <td>002</td>
			    <td>$10</td>
			    <td><a href='vistaproductos.php'><img src="compra.png" alt="carrito" height='20px'></a></td>
			  </tr>
			   <tr>
			    <td>Whey Protein</td>
			    <td>Chocolate</td> 
			    <td>003</td>
			    <td>5</td>
			    <td>$500</td>
			    <td><a href='vistaproductos.php'><img src="compra.png" alt="carrito" height='20px'></a></td>
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