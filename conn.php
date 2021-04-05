<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";

$cont= mysqli_connect($servername, $username, $password, $dbname) or
die("Connection failed: " . mysqli_connect_error());
echo ("Connected to Mysql successfully \n");
?>



