<?php
	include 'db.php';
	session_start();

	$username=$_POST['username'];
	$password=$_POST['password'];
	$check=mysqli_query($conn,"select * from users where username='$username' and password='$password'");
	if (mysqli_num_rows($check)>0)
	{
		$_SESSION['username']=$username;
		echo json_encode(array("statusCode"=>200));
	}
	else{
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>