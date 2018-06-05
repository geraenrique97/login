<?php
include('abrirconexion.php');

//CONTROLAR USUARIO Y CONTRASENA CORRECTO
	if (isset($_POST["btn1"])){
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$resultados = mysqli_query($conexion, "SELECT * FROM usertbl WHERE usuario='$usuario' AND password='$password'");
	$consulta = mysqli_fetch_array($resultados);

	$tipousuario= $consulta['tipou'];
	echo $tipousuario;

	if (empty($consulta)) {
		echo "USUARIO Y CONTRA INCORRECTOS";
	} else{
		session_start();
	$_SESSION["usuario"]=$_POST["usuario"];
	$_SESSION["tipou"]=$tipousuario;
	echo $_SESSION["tipou"] ;
	switch ($_SESSION["tipou"]) {
	 	case 'secretaria': header("location: secretaria/vistasecretaria.php"); break;
	 	case 'quiosco': header("location: quiosco/vistaproductos.php"); break;
	 	case 'administrador': header("location: administrador/vistaadministrador.php"); break;
	 	case 'instructor': header("location: instructor/vistaproductos.php"); break;
	 	case 'gerente': header("location: gerente/vistagerente.php"); 

	 		}
	}
	}


//CONSULTA
	if (isset($_POST["btn2"])){
		$usuario = $_POST['usuario'];

		$resultados = mysqli_query($conexion, "SELECT * FROM usertbl WHERE usuario = '$usuario'");

		while ($consulta = mysqli_fetch_array($resultados)) {
			echo $consulta['email'];
			echo "<br>";
		}
	}
?>


<DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='UTF-8'>
	<title>Login</title>
	<link rel="stylesheet"  href="otros/css/formulario2.css">
</head>

<body>
	<div class='contenedor-form'>

		<img src="eglogo.png" alt="Energym logo">
		
		<div class='formulario'>
			<h1>Sistema Administrativo</h1>
			<h2>Iniciar Sesion</h2>
			<form action='login.php' method='post'>
				<input type='text' name='usuario' placeholder='Usuario' required id='hola'>
				<input type='password' name='password' placeholder='Contrasena' required id='hola'>
				<input type="submit" value="Iniciar Sesion" name="btn1">
			</form>
		</div>

	</div>
</body>

</html>