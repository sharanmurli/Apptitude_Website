<?php

	session_start();
	//header('location:login.php');
	$con = mysqli_connect('localhost','root',' ');
	mysqli_select_db($con, 'userregistration');
                                
	$name = $_POST['user'];
	$pass = $_POST['password'];

	$s = " select * from usertable where name = '$name'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);


	if($num == 1){
		echo" Username Already Exists";
	}else{
		$reg = " insert into usertable(name, password) values ('$name' , '$pass')";
		mysqli_query($con, $reg);

		echo '<script>alert("Welcome to Geeks for Geeks")</script>';


		//echo '<script type="text/javascript">

        //  window.onload = function () { alert("Registration Successfully"); }
		//</script>';

		//header('location:login.php');


		//echo"Registration Successful";
	}

?>
