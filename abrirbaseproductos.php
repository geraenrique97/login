<?php
	$server='localhost';
	$username = 'nicmalegre';
	$password = '40801010';
	$database = 'userlitdb';

	$conexion = new mysqli($server,$username,$password,$database);

	if ($conexion->connect_errno){
		echo "Nuestro sitio experimenta fallos";
		exit();
	}

