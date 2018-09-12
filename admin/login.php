<?php

include 'connect.php';

if(isset($_POST['login'])){
	$admin_name = mysqli_real_escape_string($conn, $_POST["username"]);
	$password = mysqli_real_escape_string($conn, $_POST["password"]);
	echo"Im here oooooooo!";

	if(!empty($_POST["username"]) && !empty($_POST["password"])){

		$sql1 = "SELECT id FROM admin WHERE user_name='$admin_name' AND pass_word='$password'";
		$query1 = mysqli_query($conn, $sql1);
		$num1 = mysqli_num_rows($query1);
		if($num1 > 0){

			session_start();
			$_SESSION['login_user'] = $username;
			header("Location: update.php");
		}else{
			echo"<b>INCORRECT NAME or PASSWORD!</b>";
		}
	}else{
		echo "<b>EMPTY INPUT FIELDS!</b>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Case</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
</head>
<body class="container">
<h3 id="loginHeader" class="text-center text-danger mt-5">Admin Login Page</h3>
<form method="POST" action="update.php" id="form1" class="form-group justify-content-center">
		<label for="username" class="name text-warning">Username:</label>
		<input class="form-control" id="username" name="username" placeholder="Enter username" />
		<label for="pwd" class="name text-warning">Password:</label>
		<input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" />
	<button class="btn btn-success mt-3" id="but" name="login">Login</button>
</form>
</body>
</html>
