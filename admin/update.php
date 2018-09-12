<?php
include "connect.php";
include "services.php";
include "team.php";
?>

<!DOCTYPE html>l;./
<html lang="en">
<head>
	<title>Bootstrap Case</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
</head>
<body class="container">
	<h3 id="loginHeader" class="text-center text-danger mt-5">Add Services</h3>
	<form method="POST" action="update.php" class="form-group justify-content-center" enctype='multipart/form-data'>
		<label>Service:</label>
		<input class="form-control" name="name" placeholder="Enter service name" />
		<label>Description:</label>
		<input class="form-control" name="description" placeholder="Enter service description" />
		<label>Photo:</label>
		<input type="file" class="form-control" name="myimage" />
		<button class="btn btn-success mt-3" name="submit1">Submit</button>
	</form>

	<h3 id="loginHeader" class="text-center text-danger mt-5">Add Team</h3>
	<form method="POST" action="update.php" id="form1" class="form-group justify-content-center" enctype='multipart/form-data'>
		<label>Name:</label>
		<input class="form-control" name="name" placeholder="Enter name" />
		<label>Position:</label>
		<input class="form-control" name="position" placeholder="Enter position" />
		<label>Photo:</label>
		<input type="file" class="form-control" name="myimage" />
		<button class="btn btn-success mt-3" name="submit2">Submit</button>
	</form>
	
	</body>
</html>
