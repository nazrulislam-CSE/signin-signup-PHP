<?php 

	$servername = "localhost";
	$user 		= "root";
	$pass 		= "";
	$db 		= "logindb";

	$conn = new mysqli($servername,$user,$pass,$db);

	/*if ($conn->connect_error) {
		echo "Database not Connected ".$conn->connect_error;
	}else{
		echo "Database Connection is Succesfull";
	}*/

?>