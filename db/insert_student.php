<?php 
	
	
	$name= $_POST['name'];
	$password = $_POST['password'];
	$school= $_POST['school'];
	
	require_once('../db_config.php');

	$sql = "Insert into student VALUES(NULL, '$name', '$password', '$school')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added contact info. <br>";
	}

	$conn->close();

	echo "<a href='../index.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>