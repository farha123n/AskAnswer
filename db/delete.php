<?php 
	
	$question_id = $_GET['question_id'];
	
	require_once('../db_config.php');

	$sql = "DELETE FROM question where question_id='$question_id'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during deletion!<br>";
		echo "<a href='../index.php'>Back</a>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully deleted!<br>";
		header("Location: ../index.php"); 
	}

	$conn->close();

	
	

?>