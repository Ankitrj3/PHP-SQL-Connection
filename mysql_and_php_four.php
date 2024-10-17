<?php 

	
	$link = mysqli_connect("localhost", "root", "", "CUSTOM");

	if(!$link)
	{
		die("ERROR : Could not connect. ". mysqli_connect_error());
	}



	// Attempt create database query execution
	$sql = "INSERT INTO customers(customerId, companyName, contactName, address, city, postalCode, country)
			VALUES
			("One", "boyinfuture", "Aadarsh Raj", "aadarsh11", "Phagwara", "Real", India),
			("Two", "boyinfuture01", "Himanshu Kashyap", "himanshu11", "Phagwara", "Real", India)";



	if(mysqli_query($link, $sql))
	{
		echo "Database Created successfully";
	}
	else
	{
		echo "ERROR : Could not able to execute $sql. ". mysqli_error($link);
	}


	mysqli_close($link);


 ?>