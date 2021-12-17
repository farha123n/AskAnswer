<?php 
	
	$name =  $_POST['name_entry'];
	$phone = $_POST['phone_entry'];
	$address = $_POST['address_entry'];
	
	require_once('../db_config.php');

	$sql = "Insert into person VALUES(NULL, '$name', '$phone', '$address')";

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