<?php 
	
	$teacher_id =  $_POST['teacher_id'];
	$question_id = $_POST['question_id'];
	$answer = $_POST['answer'];
	
	require_once('../db_config.php');

	$sql = "Insert into answer VALUES(NULL, '$teacher_id', '$question_id', '$answer')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added answer info. <br>";
	}

	$conn->close();

	echo "<a href='../index.php'>Back</a>"
	// php header("Location: ../index.php'"); 

?>