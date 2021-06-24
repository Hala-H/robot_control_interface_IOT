<?php

	require_once "db.php";
	$con = mysqli_connect($host, $user, $pass, $database);
	$error = mysqli_connect_error();

	if($error != null){
		$output="<p> Unable to connect to database</p>".$error;
			exit($output);
	}
		
	// echo "$motor1 - $motor2 - $motor3 - $motor4 - $motor5 - $motor6";
	// database insert SQL code
	$sql = "SELECT motor1, motor2, motor3, motor4, motor5, motor6 
			FROM robot_arm_control WHERE id=(SELECT max(id) FROM robot_arm_control)";
	
	// insert in database 
	$result = mysqli_query($con, $sql);

	while($row = mysqli_fetch_assoc($result))
	{
		echo($row['motor1']);
		echo(", ");
		echo($row['motor2']);
		echo(", ");
		echo($row['motor3']);
		echo(", ");
		echo($row['motor4']);
		echo(", ");
		echo($row['motor5']);
		echo(", ");
		echo($row['motor6']);
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
