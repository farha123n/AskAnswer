<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Askanswer</title>
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

			$query = "SELECT * FROM question join student using (student_id)";
			$query1="SELECT * FROM answer"; 
		?>
		
		
		<div class="ui  grid">
			<div class="ui  row " style="background:red ; min-height: 10vh;">
				<div style="padding: 20px;">
					<h1>Ask question</h1>
					
				</div>
				<div style="padding: 30px;">
					<a href="add_form.html"><button class="ui fluid button">Add question</button></a>
					<a href="index1.html"><button class="ui fluid button">add student or teacher</button></a>
				</div>
			</div>
			<h>search question giving subject name</h>
			<br>
			<form class="ui form" method="post" action="searchresult.php">
				      <div class="field">
				        <!-- <label>Name</label> -->
				        <input type="text" name="search_query" placeholder="Seach question...">
				      </div>
				      <button class="ui right floated button" type="submit">Search</button>
				    </form>
				</div>

			<div class="ui  twelve wide row "style="background-image: url("desktop/children.jpg");min-height: 80vh;" >


                
			

			</div>
			<div class="ui row" style="background: blue;min-height: 10vh">
				<div style ="padding: 20px;">
					<h1>Give answer<h1>
				<a href="add1_form.html"><button>Add answer</button></a>
				<a href="show_answer.php"><button>show answer</button></a>
				<a href="statistic.php"><button>statistic</button></a>

			<div class="ui  twelve wide row "style="background-image: url("desktop/children.jpg");min-height: 80vh;" >

                
				

			</div>

			</div>
		</div>

		
	    <!-- Rest of the page content -->
	<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
	</body>
</html>