<?php

require_once "db.php";
$con = mysqli_connect($host, $user, $pass, $database);
$error = mysqli_connect_error();

if($error != null){
	$output="<p> Unable to connect to database</p>".$error;
		exit($output);
}

if(isset($_POST["save"])){

	// get post records
	$motor1 = $_POST['motor1'];
	$motor2 = $_POST['motor2'];
	$motor3 = $_POST['motor3'];
	$motor4 = $_POST['motor4'];
	$motor5 = $_POST['motor5'];
	$motor6 = $_POST['motor6'];
	
	// echo "$motor1 - $motor2 - $motor3 - $motor4 - $motor5 - $motor6";
	// database insert SQL code
	$sql = "INSERT INTO `robot_arm_control` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) 
				VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6')";

	// insert in database 
	$result = mysqli_query($con, $sql);

	if($result)
	{
		echo "<script>alert('Motor movements are successfully added.');
					window.location.href='control.html'; </script> ";
	}
}

if(isset($_POST["on"])){
	
	$sql = "INSERT INTO play (play) VALUES (1)";
	
	$result = mysqli_query($con, $sql);
	if($result)
	{
		echo "<script>alert('Robot Arm On!');
				window.location.href='control.html'; </script>";
	}
}

if(isset($_POST["fwd"])){
	// get post records
	$forward = $_POST['fwd'];
	
	// database insert SQL code
	$sql = "INSERT INTO `movement` (`forward`) 
				VALUES ('forward')";

	// insert in database 
	$result = mysqli_query($con, $sql);

	if($result)
	{
		$sql_show = "SELECT forward FROM movement WHERE id = (SELECT max(id) FROM movement)";
		$result_show = mysqli_query($con, $sql_show);
		while($row = mysqli_fetch_assoc($result_show)) {
			echo $row['forward']; // Print a single column data
			//echo print_r($row);       // Print the entire row data
}
	}
}
if(isset($_POST["back"])){
	// get post records
	$backward = $_POST['back'];
	
	// database insert SQL code
	$sql = "INSERT INTO `movement` (`backward`) 
				VALUES ('backward')";

	// insert in database 
	$result = mysqli_query($con, $sql);

	if($result)
	{
		$sql_show = "SELECT backward FROM movement WHERE id = (SELECT max(id) FROM movement)";
		$result_show = mysqli_query($con, $sql_show);
		while($row = mysqli_fetch_assoc($result_show)) {
			echo $row['backward']; // Print a single column data
			//echo print_r($row);       // Print the entire row data
}
	}
}

if(isset($_POST["left"])){
	// get post records
	$left = $_POST['left'];
	
	// database insert SQL code
	$sql = "INSERT INTO `movement` (`left`) 
				VALUES ('left')";

	// insert in database 
	$result = mysqli_query($con, $sql);

	if($result)
	{
		$sql_show = "SELECT `left` FROM movement WHERE id = (SELECT max(id) FROM movement)";
		$result_show = mysqli_query($con, $sql_show);
		while($row = mysqli_fetch_assoc($result_show)) {
			echo $row['left']; // Print a single column data
			//echo print_r($row);       // Print the entire row data
}
	}
}

if(isset($_POST["right"])){
	// get post records
	$right = $_POST['right'];
	
	// database insert SQL code
	$sql = "INSERT INTO `movement` (`right`) 
				VALUES ('right')";

	// insert in database 
	$result = mysqli_query($con, $sql);

	if($result)
	{
		$sql_show = "SELECT `right` FROM movement WHERE id = (SELECT max(id) FROM movement)";
		$result_show = mysqli_query($con, $sql_show);
		while($row = mysqli_fetch_assoc($result_show)) {
			echo $row['right']; // Print a single column data
			//echo print_r($row);       // Print the entire row data
}
	}
}

if(isset($_POST["stop"])){
	// get post records
	$stop = $_POST['stop'];
	
	// database insert SQL code
	$sql = "INSERT INTO `movement` (`stop`) 
				VALUES ('stop')";

	// insert in database 
	$result = mysqli_query($con, $sql);

	if($result)
	{
		$sql_show = "SELECT stop FROM movement WHERE id = (SELECT max(id) FROM movement)";
		$result_show = mysqli_query($con, $sql_show);
		while($row = mysqli_fetch_assoc($result_show)) {
			echo $row['stop']; // Print a single column data
			//echo print_r($row);       // Print the entire row data
}
	}
}
?>
