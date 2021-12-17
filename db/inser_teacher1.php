<?php 
	
	
	$name= $_POST['name'];
	$qualification = $_POST['qualification'];
	$school= $_POST['school'];
	$salary=$_POST['salary'];

	require_once('../db_config.php');

	$sql = "Insert into teacher VALUES(NULL, '$name', '$qualification', '$school','salary')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added teacher info. <br>";
	}

	$conn->close();

	echo "<a href='../index.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>