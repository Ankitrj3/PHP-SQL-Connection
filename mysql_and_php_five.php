<?php
$sql = "SELECT * FROM customers";

	if($result = mysqli_query($link, $sql))
	{
		if(mysqli_num_rows($result) > 0)
		{
			echo "<table>";
				echo "<tr>";
					echo "<th>firstName</th>";
					echo "<th>lastName</th>";
					echo "<th>gmailId</th>";
				echo "</tr>";

			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
					echo "<td>". $row["firstName"]. "</td>";
					echo "<td>". $row["lastName"]. "</td>";
					echo "<td>". $row["gmailId"]. "</td>";
			}
		}
	}

	
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