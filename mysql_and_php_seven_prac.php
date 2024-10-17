<?php 

	
	$link = mysqli_connect("localhost", "root", "", "Lovely");

	if(!$link)
	{
		die("ERROR : Could not connect. ". mysqli_connect_error());
	}


	// // Attempt create database query execution
	// $sql = "INSERT INTO personss(RegNo, Name, Departement, CourseCode, School, YearofJoin, BlockNo)
	//  							VALUES
	//  							(?, ?, ?, ?, ?, ?, ?)";

	 $sql = "UPDATE personss SET BlockNo WHERE id=4";

	 if($stmt = mysqli_prepare($link, $sql))
	 {
	 	mysqli_stmt_bind_param($stmt, "s", $BlockNo);

	 $BlockNo = "55A";
	 mysqli_stmt_execute();


	// if($stmt = mysqli_prepare($link, $sql))
	// {
	// mysqli_stmt_bind_param($stmt, "sssssss", $RegNo, $Name, $Departement, $CourseCode, $School, $YearofJoin, $BlockNo);

	// $RegNo = "12001227";
	// $Name = "Naruto";
	// $Departement = "Computer Science";
	// $CourseCode = "CSE57D";
	// $School = "Diploma";
	// $YearofJoin = "1998";
	// $BlockNo = "55";
	// mysqli_stmt_execute($stmt);

	// $RegNo = "12001226";
	// $Name = "Sakuna JJK";
	// $Departement = "Computer Science";
	// $CourseCode = "CSE57D";
	// $School = "Diploma";
	// $YearofJoin = "2023";
	// $BlockNo = "55";
	// mysqli_stmt_execute($stmt);


	// $RegNo = "12001256";
	// $Name = "Gojru Satru";
	// $Departement = "Computer Science";
	// $CourseCode = "CSE57D";
	// $School = "Diploma";
	// $YearofJoin = "2020";
	// $BlockNo = "55";
	// mysqli_stmt_execute($stmt);


	// $RegNo = "1200123";
	// $Name = "Sasuke Uchiha";
	// $Departement = "Computer Science";
	// $CourseCode = "CSE57D";
	// $School = "Diploma";
	// $YearofJoin = "1998";
	// $BlockNo = "55";
	// mysqli_stmt_execute($stmt);


	// $RegNo = "12002312";
	// $Name = "Itachii Uchicha";
	// $Departement = "Computer Science";
	// $CourseCode = "CSE57D";
	// $School = "Diploma";
	// $YearofJoin = "1995";
	// $BlockNo = "55";
	// mysqli_stmt_execute($stmt);



	}



	if(mysqli_query($link, $sql))
	{
		echo "Database Created successfully";
	}
	else
	{
		echo "ERROR : Could not able to execute $sql. ". mysqli_error($link);
	}


	mysqli_stmt_close($stmt);

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










