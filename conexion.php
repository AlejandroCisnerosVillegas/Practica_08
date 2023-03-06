<?php
$conn = new mysqli("IP_Address","User","Password","DataBase_Name");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>
