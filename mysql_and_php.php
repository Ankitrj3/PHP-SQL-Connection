<?php 

	
	$serverName = "localhost";
	$userName = "root";

	$password = "";

	// Create Connection

	$conn = mysqli_connect($serverName, $userName, $password);

	if(!$conn)
	{
		die("Connection Failed : ". mysqli_connect_error());
	}


	echo "Connected successfully";


 ?>