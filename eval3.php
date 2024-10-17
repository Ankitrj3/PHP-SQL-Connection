<?php 

	
	$link = mysqli_connect("localhost", "root", "", "");

	if(!$link)
	{
		die("ERROR : Could not connect. ". mysqli_connect_error());
	}


	$sqlTwo = "CREATE TABLE EMPLOYEE(
	ID INT(100) AUTO_INCREMENT PRIMARY KEY,
	COMPANYNAME VARCHAR(100) NOT NULL,
	ENAME VARCHAR(100) NOT NULL,
	EID VARCHAR(100) NOT NULL,
	DATEOFJOIN VARCHAR(70) NOT NULL,
	ADDRE VARCHAR(100) NOT NULL,
	PHONENO VARCHAR(30) NOT NULL,
	GSSL VARCHAR(100) NOT NULL,
	DA VARCHAR(100) NOT NULL,
	TSALARY VARCHAR(100) NOT NULL
)";


	
	$sqlOne = "INSERT INTO Customer(COMPANYNAME,ENAME,EID,DATEOFJOIN,ADDRE,PHONENO,GSSL,DA,TSALARY)
	VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

	if($stmt = mysqli_prepare($link, $sql))
	{
	mysqli_stmt_bind_param($stmt, "sssssssss", $COMPANYNAME,$ENAME,$EID,$DATEOFJOIN,$ADDRE,$PHONENO,$GSSL,$DA,$TSALARY);

	$COMPANYNAME= "ANKLTD";
	$ENAME = "ANKIT";
	$EID = "322";
	$DATEOFJOIN = "2013";
	$ADDRE= "INDIA";
	$PHONENO= "0356789000";
	$GSSL = "90000";
	$DA = "20000";
	$TSALARY = "110000";
	mysqli_stmt_execute($stmt);


	$COMPANYNAME= "ANKLTD";
	$ENAME = "RANJAN";
	$EID = "323";
	$DATEOFJOIN = "2022";
	$ADDRE= "INDIA";
	$PHONENO= "0356789008";
	$GSSL = "90000";
	$DA = "40000";
	$TSALARY = "130000";
	mysqli_stmt_execute($stmt);

	$COMPANYNAME= "ANKLTD";
	$ENAME = "ROBIN";
	$EID = "324";
	$DATEOFJOIN = "2016";
	$ADDRE= "INDIA";
	$PHONENO= "0356789001";
	$GSSL = "90000";
	$DA = "50000";
	$TSALARY = "140000";
	mysqli_stmt_execute($stmt);

    $COMPANYNAME= "ANKLTD";
	$ENAME = "SUNDRAM";
	$EID = "325";
	$DATEOFJOIN = "2022";
	$ADDRE= "INDIA";
	$PHONENO= "0356789002";
	$GSSL = "90000";
	$DA = "20000";
	$TSALARY = "110000";
	mysqli_stmt_execute($stmt);

    $COMPANYNAME= "ANKLTD";
	$ENAME = "DEVDUTT";
	$EID = "326";
	$DATEOFJOIN = "2009";
	$ADDRE= "INDIA";
	$PHONENO= "0356789003";
	$GSSL = "90000";
	$DA = "60000";
	$TSALARY = "150000";
	mysqli_stmt_execute($stmt);



	
	$sql = "SELECT * FROM EMPLOYEE WHERE TSALARY <= 30000";
	$sql = "SELECT * FROM EMPLOYEE WHERE DA >= 12000";


	if($result = mysqli_query($link, $sql))
	{
		if(mysqli_num_rows($result) > 0)
		{
			echo "<table>";
				echo "<tr>";
					echo "<th>ID</th>";
					echo "<th>COMPANYNAME</th>";
					echo "<th>ENAME</th>";
					echo "<th>EID</th>";
					echo "<th>DATEOFJOIN</th>";
					echo "<th>ADDRE</th>";
					echo "<th>PHONENO</th>";
					echo "<th>GSSL</th>";
					echo "<th>DA</th>";
					echo "<th>TSALARY</th>";
				echo "</tr>";

			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>". $row["ID"]. "</td>";
					echo "<td>". $row["COMPANYNAME"]. "</td>";
					echo "<td>". $row["ENAME"]. "</td>";
					echo "<td>". $row["EID"]. "</td>";
					echo "<td>". $row["DATEOFJOIN"]. "</td>";
					echo "<td>". $row["ADDRE"]. "</td>";
					echo "<td>". $row["PHONENO"]. "</td>";
					echo "<td>". $row["GSSL"]. "</td>";
					echo "<td>". $row["DA"]. "</td>";
					echo "<td>". $row["TSALARY"]. "</td>";
			}
		}
	}

	if(mysqli_query($link, $sql))
	{
		echo "Record Fetched successfully";
	}
	else
	{
		echo "ERROR : Could not able to execute $sql. ". mysqli_error($link);
	}


	mysqli_close($link);


 ?>