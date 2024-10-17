<?php 

	
	$link = mysqli_connect("localhost", "root", "");

	if(!$link)
	{
		die("ERROR : Could not connect. ". mysqli_connect_error());
	}



	// Attempt create database query execution
	$sql = "CREATE DATABASE Lovely";

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