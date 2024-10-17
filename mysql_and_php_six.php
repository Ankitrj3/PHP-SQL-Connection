<?php 

	
	$link = mysqli_connect("localhost", "root", "", "Lovely");

	if(!$link)
	{
		die("ERROR : Could not connect. ". mysqli_connect_error());
	}


	// Attempt create database query execution
	$sql = "INSERT INTO personss(RegNo, Name, Departement, CourseCode, School, YearofJoin, BlockNo)
	 							VALUES
	 							(?, ?, ?, ?, ?, ?)";


	if($stmt = mysqli_prepare($link, $sql))
	{
	mysqli_stmt_bind_param($stmt, "sssssss", $Name, $Departement, $CourseCode, $School, $YearofJoin, $BlockNo);

	$Name = "Naruto";
	$Departement = "CSE";
	$CourseCode = "CSE57D";
	$School = "Diploma";
	$YearofJoin = "2020";
	$BlockNo = "55";
	mysqli_stmt_execute($stmt);



	}


	// $sql = "SELECT * FROM personss ORDER BY Id DESC";
	// $sql = "SELECT * FROM personss WHERE Name Like '%Aadarsh%'";
	// $sql = "SELECT * FROM personss LIMIT 3";
	// $sql = "UPDATE personss SET Name = 'Sukuna jjk' WHERE Id = 3";

	// if($result = mysqli_query($link, $sql))
	// {
	// 	if(mysqli_num_rows($result) > 0)
	// 	{
	// 		echo "<table>";
	// 			echo "<tr>";
	// 				echo "<th>Id</th>";
	// 				echo "<th>RegNo</th>";
	// 				echo "<th>Name</th>";
	// 				echo "<th>Departement</th>";
	// 				echo "<th>CourseCode</th>";
	// 				echo "<th>School</th>";
	// 				echo "<th>YearOfJoin</th>";
	// 				echo "<th>BlockNo</th>";
	// 			echo "</tr>";

	// 		while($row = mysqli_fetch_array($result))
	// 		{
	// 			echo "<tr>";
	// 				echo "<td>". $row["Id"]. "</td>";
	// 				echo "<td>". $row["RegNo"]. "</td>";
	// 				echo "<td>". $row["Name"]. "</td>";
	// 				echo "<td>". $row["Departement"]. "</td>";
	// 				echo "<td>". $row["CourseCode"]. "</td>";
	// 				echo "<td>". $row["School"]. "</td>";
	// 				echo "<td>". $row["YearOfJoin"]. "</td>";
	// 				echo "<td>". $row["BlockNo"]. "</td>";
	// 		}
	// 	}
	// }



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




	// 	Id INT(100) PRIMARY KEY,
	// 	RegNo VARCHAR(100) NOT NULL,
	// 	Name VARCHAR(100) NOT NULL,
	// 	Departement VARCHAR(100) NOT NULL,
	// 	CourseCode VARCHAR(70) NOT NULL,
	// 	School VARCHAR(100) NOT NULL,
	// 	YearOfJoin VARCHAR(30) NOT NULL,
	// 	BlockNo VARCHAR(100) NOT NULL,

<!-- 
AUTO_INCREMENT -->