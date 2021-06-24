<?php

	require_once "db.php";
	$con = mysqli_connect($host, $user, $pass, $database);
	$error = mysqli_connect_error();

	if($error != null){
		$output="<p> Unable to connect to database</p>".$error;
			exit($output);
	}
		
	// database insert SQL code
	$sql = "SELECT * FROM movement";

	// insert in database 
	$result = mysqli_query($con, $sql);

// database select SQL code
	$sql = "SELECT * FROM `movement` WHERE id=(SELECT max(id) FROM movement)";

	// connect with database 
	$result = mysqli_query($con, $sql);

	while($row = mysqli_fetch_assoc($result))
	{
		echo($row['forward']);
		echo(", ");
		echo($row['backward']);
		echo(", ");
		echo($row['left']);
		echo(", ");
		echo($row['right']);
		echo(", ");
		echo($row['stop']);
	}
	
	if($result)
	{
		echo "<br>";
		echo "Values are successfully extracted.";
	}
	
?>
