<?php
/*include "conn.php";
echo "Creating PropertyListings table\n";
$create_query ="CREATE or replace TABLE PropertyListings(
	listid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	type VARCHAR(30) NOT NULL,
	bedrrom INT(3) UNSIGNED NOT NULL
	);";
if (mysqli_query($cont, $create_query)){
	echo "\n Property listings table created successfully\n";}
else{
	echo "Error creating table: ".mysqli_error($cont). "\n";
}
mysqli_close($cont);*/



include "conn.php";
session_start();

if(isset ($_POST['submit2']))
{
	echo="Submitted";
	$eid=$_POST['eid'];
	$ename=$_POST['ename'];
	$deptname=$_POST['deptname'];
}

$insert_queries="INSERT INTO PropertyListings
(type,bedrrom)VALUES ('condo',4)";
//$A=mysqli_query($cont, $insert_queries);


if (mysqli_query($cont, $insert_queries)){
	echo "Inserted row successfully\n";}
else{
	echo "Error inserting table: ".mysqli_error($cont). "\n";
}

mysqli_close($cont);

?>
