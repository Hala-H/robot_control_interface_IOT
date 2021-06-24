<?php

	require_once "db.php";
	$con = mysqli_connect($host, $user, $pass, $database);
	$error = mysqli_connect_error();

	if($error != null){
		$output="<p> Unable to connect to database</p>".$error;
			exit($output);
	}
		
	// database insert SQL code
	$sql = "SELECT * FROM play";

	// insert in database 
	$result = mysqli_query($con, $sql);

// database select SQL code
	$sql = "SELECT play FROM `play` WHERE id=(SELECT max(id) FROM play)";

	// connect with database 
	$result = mysqli_query($con, $sql);

	while($row = mysqli_fetch_assoc($result))
	{
		echo($row['play']);
	}
	
	if($result)
	{
		echo "<br>";
		echo "Values are successfully extracted.";
	}
	
?>
</tbody>
</table>
</html>