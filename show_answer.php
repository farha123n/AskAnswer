<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Answer</title>
		<link rel="stylesheet" href="css/semantic.min.css">
		<?php 
			require_once('db_config.php'); 
		?>
	</head>
	<body>
		<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}

		
			$query1="SELECT * FROM answer"; 
		?>
			<div class="ui text container" style="padding-top: 50px;background-color: green">
					<h>answer information</h>
					<table class="ui celled table"style="background-color: yellow">
						<thead>
						<tr>
							<th>answer_id</th>							
							<th>answer</th>
							<th>question_id</th>>
						</tr>
						</thead>
						<tbody>
						<?php
						if ($result = $conn->query($query1)) {
							while ($row = $result->fetch_assoc()){
								printf("<tr>");
								printf("<td>%s</td> ,<td>%s</td>,<td>%s</td> ", $row["answer_id"],$row["answer"],$row["question_id"]);
								printf("</tr>");
							}
						}
						?>
						</tbody>
					</table>
				</div>
			</body>