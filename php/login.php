<?php
	include 'db.php';
	session_start();

	//set input
	$username = $_POST['username'];
	$password = $_POST['password'];

	//mysql statement
	$check = mysqli_query($conn,"SELECT * from users where username='$username' and password='$password'");
	
	//check if there is a result
	if (mysqli_num_rows($check)>0)
	{
		// Does not work anymore temporary fix
		// $result = mysqli_query($conn2,"SELECT * from users where username='$username' and password='$password'");
		// $row = mysql_fetch_assoc($result);
		// $admin = $row['admin'];
		// mysqli_close($conn2);
		$admin = 1;

		//set session for validation and give back succesfull login
		$_SESSION['username']=$username;
		$_SESSION['admin']=$admin;
		echo json_encode(array("statusCode"=>200, "admin"=>$admin));
	}
	else{
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>