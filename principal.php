<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gestión de Acceso y Registro de Usuarios</title>
		<link href="../../assets/img/logo.png" rel="icon">
    	<link href="../../assets/img/logo-grande.png" rel="apple-touch-icon">
		<link rel="stylesheet" href="login.css">
		<style>
			body {
				font-family: Arial, sans-serif;
				background-color: #f2f2f2;
				margin: 0;
				padding: 0;
				display: flex;
				justify-content: center;
				align-items: center;
				height: 100vh;
			}
			.pagprincipal {
				background-color: #ffffff;
				padding: 20px;
				border-radius: 10px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
				display: flex;
				flex-direction: column;
				align-items: center;
				max-width: 400px;
				width: 100%;
				margin: 0 auto;
			}
			h1 {
				font-size: 24px;
				text-align: center;
				margin-bottom: 20px;
			}
			form {
				text-align: center;
			}
			input[type="submit"] {
				background-color: #1C94C8;
				color: #ffffff;
				border: none;
				padding: 10px 10px;
				border-radius: 5px;
				cursor: pointer;
				font-size: 16px;
			}
			input[type="submit"]:hover {
				background-color: #136A8A;
			}
		</style>
	</head>
	<body>
		<div class="pagprincipal">
			<?php
			include('conexion.php');
			session_start();

			if(isset($_SESSION['nombredelusuario'])) {
				$usuarioingresado = $_SESSION['nombredelusuario'];
				echo "<h1>Bienvenido: $usuarioingresado</h1>";
			} else {
				header('location: index.html');
			}
			?>
			<form method="POST">
				<input type="submit" value="Cerrar sesión" name="btncerrar" />
			</form>
			<?php 
			if(isset($_POST['btncerrar'])) {
				session_destroy();
				header('location: index.html');
			}
			?>
		</div>
	</body>
</html>