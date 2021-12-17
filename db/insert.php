<?php 
	
	
	$student_id= $_POST['student_id'];
	$subject_id = $_POST['subject_id'];
	$question= $_POST['question'];
	
	require_once('../db_config.php');

	$sql = "Insert into question VALUES(NULL, '$student_id', '$subject_id', '$question')";

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