<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CSE-222 askanswer</title>
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

			$query = "SELECT * FROM student";
		?>
		<button class="ui primary button">
  Save
</button>
		<table class="ui celled table" style="width: 50%">
			<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>password</th>
				<th>school</th>
			</tr>
			</thead>
			<tbody>
			<?php
			if ($result = $conn->query($query)) {
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>", $row["student_id"], $row["name"], $row["password"], $row["school"]);
					printf("</tr>");
				}
			}
			?>
			</tbody>
		</table>
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
	</body>
</html>