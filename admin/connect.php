<?php

$host = "localhost";
$db = "nid";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$db) or die("DB not connected");
$query = mysqli_select_db($conn, $db);
